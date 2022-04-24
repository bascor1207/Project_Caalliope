<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\BooksRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\Books;

#[Route("/api", nam:"api_")]
class BookController extends AbstractController
{
    private $booksRepository;

    public function __construct(BooksRepository $booksRepository)
    {
        $this->booksRepository = $booksRepository;
    }

    #[Route('/books/', name: 'add_book', methods:"POST")]
    public function add(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $ibsn = $data['ibsn'];
        $cover = $data['cover'];
        $title = $data['title'];
        $parution_date = $data['parution_date'];
        $nb_pages = $data['nb_page'];
        $id_genre = $data['id_genre'];
        $saga = $data['saga'];
        $id_author = $data['id_author'];
        $id_status = $data['id_status'];

        if (empty($ibsn) || empty($cover) || empty($title) || empty($parution_date) ||empty($nb_pages) || empty($id_genre) || empty($saga) || empty($id_author) || empty($id_status)) {
            throw new NotFoundHttpException('Expecting mandatory parameters !');
        }

        $this->booksRepository->saveBooks($ibsn, $cover, $title, $parution_date, $nb_pages, $id_genre, $saga, $id_author, $id_status);

        return new JsonResponse(['status' => 'book created !'], Response::HTTP_CREATED);
    }

    #[Route('/books/{id}', name:'get_one_book', methods:"GET")]
    public function get($id): JsonResponse {
        $book = $this->booksRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $book->getId(),
            'ibsn' => $book->getIbsn(),
            'cover' => $book->getCover(),
            'title' => $book->getTitle(),
            'parution_date' => $book->getParutionDate(),
            'nb_pages' => $book->getNbPages(),
            'id_genre' => $book->getIdGenre(),
            'saga' => $book->getSaga(),
            'id_author' => $book->getIdAuthor(),
            'id_status' => $book->getIdStatus(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/books', name:'get_all_book', methods:"GET")]
    public function getAll(): JsonResponse {
        $books = $this->booksRepository->findAll();

        $data = [];

        foreach ($books as $book) {
            $data[] = [
                'id' => $book->getId(),
                'ibsn' => $book->getIbsn(),
                'cover' => $book->getCover(),
                'title' => $book->getTitle(),
                'parution_date' => $book->getParutionDate(),
                'nb_pages' => $book->getNbPages(),
                'id_genre' => $book->getIdGenre(),
                'saga' => $book->getSaga(),
                'id_author' => $book->getIdAuthor(),
                'id_status' => $book->getIdStatus(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/books/{id}', name:'update_book', methods:'PUT')] 
    public function update($id, Request $request): JsonResponse {
        $book = $this->booksRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent, true);

        empty($data['ibsn']) ? true : 
            $book->setIbsn($data['ibsn']);
        empty($data['cover']) ? true : 
            $book->setCover($data['cover']);
        empty($data['title']) ? true : 
            $book->setTitle($data['title']);
        empty($data['parution_date']) ? true : 
            $book->setParutionDate($data['parution_date']);
        empty($data['nb_pages']) ? true : 
            $book->setNbPages($data['nb_pages']);
        empty($data['id_genre']) ? true : 
            $book->setIdGenre($data['id_genre']);
        empty($data['saga']) ? true : 
            $book->addSaga($data['saga']);
        empty($data['id_author']) ? true : 
            $book->addIdAuthor($data['id_author']);
        empty($data['id_status']) ? true : 
            $book->setIdStatus($data['id_status']);

        $updatedBook = $this->booksRepository->updateBook($book);
    
        return new JsonResponse($updatedBook->toArray(), Response::HTTP_OK);
    }

    #[Route('/books/{id}', name:'delete_book', methods:'DELETE')]
    public function delete($id): JsonResponse {
        $book = $this->booksRepository->findOneBy(['id' => $id]);

        $this->booksRepository->removeBook($book);

        return new JsonResponse(['status' => 'Book deleted'], Response::HTTP_NO_CONTENT);
    }
}
