<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\GenreRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\Genre;

class FormatController extends AbstractController
{
    private $genreRepository;

    public function __construct(GenreRepository $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }

    #[Route('/genre/', name: 'add_genre', methods:"POST")]
    public function add(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $genre = $data['genre'];
        $id_books = $data['id_books'];

        if (empty($genre) || empty($id_books)) {
            throw new NotFoundHttpException('Expecting mandatory parameters !');
        }

        $this->genreRepository->saveGenre($genre, $id_books);

        return new JsonResponse(['status' => 'Genre created !'], Response::HTTP_CREATED);
    }

    #[Route('/genre/{id}', name:'get_one_genre', methods:"GET")]
    public function get($id): JsonResponse {
        $genre = $this->genreRepository->findOneBy(['id' => $id]);

        $data = [
            'genre' => $genre->getGenre(),
            'id_books' => $genre->getIdBooks(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/genre', name:'get_all_genre', methods:"GET")]
    public function getAll(): JsonResponse {
        $genres = $this->genreRepository->findAll();

        $data = [];

        foreach ($genres as $genre) {
            $data[] = [
                'genre' => $genre->getGenre(),
                'id_books' => $genre->getIdBooks(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/genre/{id}', name:'update_genre', methods:'PUT')] 
    public function update($id, Request $request): JsonResponse {
        $genre = $this->genreRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent, true);

        empty($data['genre']) ? true : 
            $genre->setGenre($data['genre']);
        empty($data['id_books']) ? true : 
            $format->addIdBook($data['id_books']);

        $updatedGenre = $this->genreRepository->updateGenre($genre);
    
        return new JsonResponse($updatedGenre->toArray(), Response::HTTP_OK);
    }

    #[Route('/genre/{id}', name:'delete_genre', methods:'DELETE')]
    public function delete($id): JsonResponse {
        $genre = $this->genreRepository->findOneBy(['id' => $id]);

        $this->genreRepository->removeGenre($genre);

        return new JsonResponse(['status' => 'genre deleted'], Response::HTTP_NO_CONTENT);
    }
}
