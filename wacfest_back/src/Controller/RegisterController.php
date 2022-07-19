<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'register', methods: ['POST'])]


    public function register(Request $request, UserRepository $repo): JsonResponse {

$user = new User();
$user->setEmail($request->request->get('email'));


echo $user->getEmail();

$repo->add($user);






return $response = new JsonResponse(['data' => 123]);


    }
}
