<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\FormatRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Entity\Format;

class FormatController extends AbstractController
{
    private $formatRepository;

    public function __construct(FormatRepository $formatRepository)
    {
        $this->formatRepository = $formatRepository;
    }

    #[Route('/format/', name: 'add_format', methods:"POST")]
    public function add(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $format = $data['format'];
        $language = $data['language'];

        if (empty($format) || empty($language)) {
            throw new NotFoundHttpException('Expecting mandatory parameters !');
        }

        $this->formatRepository->saveFormat($format, $language);

        return new JsonResponse(['status' => 'Format created !'], Response::HTTP_CREATED);
    }

    #[Route('/format/{id}', name:'get_one_format', methods:"GET")]
    public function get($id): JsonResponse {
        $format = $this->formatRepository->findOneBy(['id' => $id]);

        $data = [
            'format' => $format->getFormat(),
            'language' => $format->getLanguage(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/format', name:'get_all_format', methods:"GET")]
    public function getAll(): JsonResponse {
        $formats = $this->formatRepository->findAll();

        $data = [];

        foreach ($formats as $format) {
            $data[] = [
                'format' => $format->getFormat(),
                'language' => $format->getLanguage(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    #[Route('/format/{id}', name:'update_format', methods:'PUT')] 
    public function update($id, Request $request): JsonResponse {
        $format = $this->formatRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent, true);

        empty($data['format']) ? true : 
            $format->setFormat($data['format']);
        empty($data['language']) ? true : 
            $format->setLanguage($data['language']);

        $updatedFormat = $this->formatRepository->updateFormat($format);
    
        return new JsonResponse($updatedFormat->toArray(), Response::HTTP_OK);
    }

    #[Route('/format/{id}', name:'delete_format', methods:'DELETE')]
    public function delete($id): JsonResponse {
        $format = $this->formatRepository->findOneBy(['id' => $id]);

        $this->formatRepository->removeFormat($format);

        return new JsonResponse(['status' => 'format deleted'], Response::HTTP_NO_CONTENT);
    }
}
