<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\EditerRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\Editer;

class EditerController extends AbstractController
{
    private $editerRepository;

    public function __construct(EditerRepository $editerRepository)
    {
        $this->editerRepository = $editerRepository;
    }

    #[Route('/editer/', name: 'add_editer', methods:"POST")]
    public function add(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $ME = $data['ME'];
        $id_books = $data['id_books'];

        if (empty($ME) || empty($id_books)) {
            throw new NotFoundHttpException('Expecting mandatory parameters !');
        }

        $this->editerRepository->saveEditer($ME, $id_books);

        return new JsonResponse(['status' => 'Editer created !'], Response::HTTP_CREATED);
    }

    #[Route('/editer/{id}', name:'get_one_editer', methods:"GET")]
    public function get($id): JsonResponse {
        $editer = $this->editerRepository->findOneBy(['id' => $id]);

        $data = [
            'ME' => $editer->getME(),
            'id_books' => $editer->getIdBooks(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/editer', name:'get_all_editer', methods:"GET")]
    public function getAll(): JsonResponse {
        $editers = $this->editerRepository->findAll();

        $data = [];

        foreach ($editers as $editer) {
            $data[] = [
                'ME' => $editer->getME(),
                'id_books' => $editer->getIdBooks(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/editer/{id}', name:'update_editer', methods:'PUT')] 
    public function update($id, Request $request): JsonResponse {
        $editer = $this->editerRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent, true);

        empty($data['ME']) ? true : 
            $editer->setME($data['ME']);
        empty($data['id_books']) ? true : 
            $editer->addIdBook($data['id_books']);

        $updatedEditer = $this->editerRepository->updateEditer($editer);
    
        return new JsonResponse($updatedEditer->toArray(), Response::HTTP_OK);
    }

    #[Route('/editer/{id}', name:'delete_editer', methods:'DELETE')]
    public function delete($id): JsonResponse {
        $editer = $this->editerRepository->findOneBy(['id' => $id]);

        $this->editerRepository->removeEditer($editer);

        return new JsonResponse(['status' => 'editer deleted'], Response::HTTP_NO_CONTENT);
    }
}
