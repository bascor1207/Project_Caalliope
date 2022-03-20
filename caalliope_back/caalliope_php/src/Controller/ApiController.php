<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function index(HttpClientInterface $httpClient)
    {
        $response = $httpClient->request(
            'GET',
            'https://www.goodreads.com/book/title.FORMAT'
        );

        return $this->render('api/index.html.twig',[
            'controller_name' => 'ApiController'
        ]);
    }
}
