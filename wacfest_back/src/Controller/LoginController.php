<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/LoginController.php',
        ]);
    }
 
    public function login() {

        return $this->json([
            'message' => 'You are log in',
            'path' => 'src/Controller/LoginController.php',
        ]);
    }


}
