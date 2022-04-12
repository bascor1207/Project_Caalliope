<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\StatusRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\Status;

class StatusController extends AbstractController
{
    private $statusRepository;

    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    #[Route('/status/', name: 'add_status', methods:"POST")]
    public function add(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $book_status = $data['book_status'];
        $books = $data['books'];

        if (empty($book_status) || empty($books)) {
            throw new NotFoundHttpException('Expecting mandatory parameters !');
        }

        $this->sagaRepository->saveSaga($book_status, $books);

        return new JsonResponse(['status' => 'Status created !'], Response::HTTP_CREATED);
    }

    #[Route('/status/{id}', name:'get_one_status', methods:"GET")]
    public function get($id): JsonResponse {
        $status = $this->statusRepository->findOneBy(['id' => $id]);

        $data = [
            'book_status' => $status->getBookStatus(),
            'books' => $status->getBooks(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/status', name:'get_all_status', methods:"GET")]
    public function getAll(): JsonResponse {
        $status = $this->statusRepository->findAll();

        $data = [];

        foreach ($status as $statu) {
            $data[] = [
                'book_status' => $statu->getBookStatus(),
                'books' => $statu->getBooks(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/status/{id}', name:'update_status', methods:'PUT')] 
    public function update($id, Request $request): JsonResponse {
        $status = $this->statusRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent, true);

        empty($data['book_status']) ? true : 
            $status->setBookStatus($data['book_status']);
        empty($data['books']) ? true : 
            $status->addBook($data['books']);

        $updatedStatus = $this->statusRepository->updateStatus($status);
    
        return new JsonResponse($updatedStatus->toArray(), Response::HTTP_OK);
    }

    #[Route('/status/{id}', name:'delete_status', methods:'DELETE')]
    public function delete($id): JsonResponse {
        $status = $this->statusRepository->findOneBy(['id' => $id]);

        $this->statusRepository->removeStatus($status);

        return new JsonResponse(['status' => 'status deleted'], Response::HTTP_NO_CONTENT);
    }
}
