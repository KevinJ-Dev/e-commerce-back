<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiLoginController extends AbstractController
{
    #[Route('/api/login', name: 'app_api_login')]
    public function index(#[CurrentUser] ?User $user): Response
    {
        return $this->json([
                      'message' => 'missing credentials',
                  ], Response::HTTP_UNAUTHORIZED);
           
        $token = 'dsflmksdflmk';
        return $this->json([
                  'message' => 'Welcome to your new controller!',
                  'path' => 'src/Controller/ApiLoginController.php',
                  'user'  => $user->getUserIdentifier(),
                  'token' => $token,
               ]);
    }
}
    
