<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/auth/register", name="register", methods={"POST})
     */
    public function test()
    {
        return $this->json([
            'message' => 'test',
        ]);
    }
}