<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SagaRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\Saga;

class SagaController extends AbstractController
{
    private $sagaRepository;

    public function __construct(SagaRepository $sagaRepository)
    {
        $this->sagaRepository = $sagaRepository;
    }

    #[Route('/saga/', name: 'add_saga', methods:"POST")]
    public function add(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $name = $data['name'];
        $nb_tome = $data['nb_tome'];
        $numero_tome = $data['numero_tome'];
        $id_books = $data['id_books'];

        if (empty($name) || empty($nb_tome) || empty($numero_tome) || empty($id_books)) {
            throw new NotFoundHttpException('Expecting mandatory parameters !');
        }

        $this->sagaRepository->saveSaga($name, $nb_tome, $numero_tome, $id_books);

        return new JsonResponse(['status' => 'Saga created !'], Response::HTTP_CREATED);
    }

    #[Route('/saga/{id}', name:'get_one_saga', methods:"GET")]
    public function get($id): JsonResponse {
        $saga = $this->sagaRepository->findOneBy(['id' => $id]);

        $data = [
            'name' => $saga->getName(),
            'nb_tome' => $saga->getNbTome(),
            'numero_tome' => $saga->getNumeroTome(),
            'id_books' => $saga->getIdBooks(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/saga', name:'get_all_saga', methods:"GET")]
    public function getAll(): JsonResponse {
        $sagas = $this->sagaRepository->findAll();

        $data = [];

        foreach ($sagas as $saga) {
            $data[] = [
                'name' => $saga->getName(),
                'nb_tome' => $saga->getNbTome(),
                'numero_tome' => $saga->getNumeroTome(),
                'id_books' => $saga->getIdBooks(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/saga/{id}', name:'update_saga', methods:'PUT')] 
    public function update($id, Request $request): JsonResponse {
        $saga = $this->publierRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent, true);

        empty($data['name']) ? true : 
            $saga->setName($data['name']);
        empty($data['nb_tome']) ? true : 
            $saga->setNbTome($data['nb_tome']);
        empty($data['numero_tome']) ? true : 
            $saga->setNumeroTome($data['numero_tome']);
        empty($data['id_books']) ? true : 
            $saga->addIdBook($data['id_books']);

        $updatedSaga = $this->sagaRepository->updateSaga($saga);
    
        return new JsonResponse($updatedSaga->toArray(), Response::HTTP_OK);
    }

    #[Route('/saga/{id}', name:'delete_saga', methods:'DELETE')]
    public function delete($id): JsonResponse {
        $saga = $this->sagaRepository->findOneBy(['id' => $id]);

        $this->sagaRepository->removeSaga($saga);

        return new JsonResponse(['status' => 'saga deleted'], Response::HTTP_NO_CONTENT);
    }
}
