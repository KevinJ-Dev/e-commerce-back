<?php
namespace App\Controller;

 use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

 class ApiLoginController extends AbstractController
 {
    #[Route('/login', name: 'login', methods: ['POST'])]

     public function login(#[CurrentUser] ?User $user): Response
     {
         if (null === $user) {
             return $this->json([
                 'message' => 'missing credentials',
             ], Response::HTTP_UNAUTHORIZED);
         }

         $token =""; // somehow create an API token for $user

         return $this->json([
             'message' => 'Welcome to your new controller!',
             'path' => 'src/Controller/ApiLoginController.php',
             'user'  => $user->getUserIdentifier(),
             'token' => $token,
         ]);
     }
 }
