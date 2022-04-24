<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PublierRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\Publier;

class PublierController extends AbstractController
{
    private $publierRepository;

    public function __construct(PublierRepository $publierRepository)
    {
        $this->publierRepository = $publierRepository;
    }

    #[Route('/publier/', name: 'add_publier', methods:"POST")]
    public function add(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $prix = $data['prix'];
        $id_books = $data['id_books'];
        $id_format = $data['id_format'];

        if (empty($prix) || empty($id_books) || empty($id_format)) {
            throw new NotFoundHttpException('Expecting mandatory parameters !');
        }

        $this->publierRepository->savePublier($prix, $id_books, $id_format);

        return new JsonResponse(['status' => 'Publier created !'], Response::HTTP_CREATED);
    }

    #[Route('/publier/{id}', name:'get_one_publier', methods:"GET")]
    public function get($id): JsonResponse {
        $publier = $this->publierRepository->findOneBy(['id' => $id]);

        $data = [
            'prix' => $publier->getPrix(),
            'id_books' => $publier->getIdBooks(),
            'id_format' => $publier->getIdFormat(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/publier', name:'get_all_publier', methods:"GET")]
    public function getAll(): JsonResponse {
        $publiers = $this->publierRepository->findAll();

        $data = [];

        foreach ($publiers as $publier) {
            $data[] = [
                'prix' => $publier->getPrix(),
                'id_books' => $publier->getIdBooks(),
                'id_format' => $publier->getIdFormat(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/publier/{id}', name:'update_publier', methods:'PUT')] 
    public function update($id, Request $request): JsonResponse {
        $publier = $this->publierRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent, true);

        empty($data['prix']) ? true : 
            $publier->setPrix($data['prix']);
        empty($data['id_books']) ? true : 
            $publier->addIdBook($data['id_books']);
        empty($data['id_format']) ? true : 
            $publier->addIdFormat($data['id_format']);

        $updatedPublier = $this->publierRepository->updatePublier($publier);
    
        return new JsonResponse($updatedPublier->toArray(), Response::HTTP_OK);
    }

    #[Route('/publier/{id}', name:'delete_publier', methods:'DELETE')]
    public function delete($id): JsonResponse {
        $publier = $this->publierRepository->findOneBy(['id' => $id]);

        $this->publierRepository->removePublier($publier);

        return new JsonResponse(['status' => 'publier deleted'], Response::HTTP_NO_CONTENT);
    }
}
