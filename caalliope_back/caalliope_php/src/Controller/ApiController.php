<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api', name: 'app_api')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('home/index.html.twig', [
            'data' => $callApiService->getApi(),
        ]);
    }
}
