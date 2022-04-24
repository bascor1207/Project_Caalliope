<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\AuthorsRepository;
use App\Entity\Authors;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AuthorController extends AbstractController
{
    private $authorsRepository;

    public function __construct(AuthorsRepository $authorsRepository)
    {
        $this->authorsRepository = $authorsRepository;
    }

    #[Route('/authors/', name: 'add_author', methods:"POST")]
    public function add(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $nationalite = $data['nationalite'];
        $books = $data['books'];

        if (empty($first_name) || empty($last_name) || empty($nationalite) || empty($books)) {
            throw new NotFoundHttpException('Expecting mandatory parameters !');
        }

        $this->authorsRepository->saveAuthors($first_name, $last_name, $nationalite, $books);

        return new JsonResponse(['status' => 'Author created !'], Response::HTTP_CREATED);
    }

    #[Route('/authors/{id}', name:'get_one_author', methods:"GET")]
    public function get($id): JsonResponse {
        $author = $this->authorsRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $author->getId(),
            'first_name' => $author->getFirstName(),
            'last_name' => $author->getLastName(),
            'nationalite' => $author->getNationalite(),
            'books' => $author->getBooks(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/authors', name:'get_all_author', methods:"GET")]
    public function getAll(): JsonResponse {
        $authors = $this->authorsRepository->findAll();

        $data = [];

        foreach ($authors as $author) {
            $data[] = [
                'id' => $author->getId(),
                'first_name' => $author->getFirstName(),
                'last_name' => $author->getLastName(),
                'nationalite' => $author->getNationalite(),
                'books' => $author->getBooks(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/authors/{id}', name:'update_author', methods:'PUT')] 
    public function update($id, Request $request): JsonResponse {
        $author = $this->authorsRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent, true);

        empty($data['first_name']) ? true : 
            $author->setFirstName($data['first_name']);
        empty($data['last_name']) ? true : 
            $author->setLastName($data['last_name']);
        empty($data['nationalite']) ? true : 
            $author->setNationalite($data['nationalite']);
        empty($data['books']) ? true : 
            $author->addBook($data['books']);

        $updatedAuthor = $this->authorsRepository->updateAuthor($author);
    
        return new JsonResponse($updatedAuthor->toArray(), Response::HTTP_OK);
    }

    #[Route('/authors/{id}', name:'delete_author', methods:'DELETE')]
    public function delete($id): JsonResponse {
        $author = $this->authorsRepository->findOneBy(['id' => $id]);

        $this->authorsRepository->removeAuthor($author);

        return new JsonResponse(['status' => 'Author deleted'], Response::HTTP_NO_CONTENT);
    }
}