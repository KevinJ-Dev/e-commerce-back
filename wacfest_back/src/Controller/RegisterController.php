<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'register', methods: ['POST'])]


    public function register(Request $request, UserRepository $repo, UserPasswordHasherInterface $passwordHasher): JsonResponse {

        $user = new User();
   

        $pseudo =  $request->request->get('pseudo');
        $email = $request->request->get('email');
        $age = intval($request->request->get('age'));
        $password = "sdsfssdmlfqklmks";
        $user->setEmail($email);
        $user->setPseudo($pseudo);
        $user->setAge($age);
        $pass = $request->request->get('password');
        $password = $passwordHasher->hashPassword( $user ,$pass);
        $user->setPassword($password);
        // $user->setPassword(PASSWORD_BCRYPT, $password);
        $user->setRoles(['user'=>$user]);
        $repo->add($user, true);

        return $response = new JsonResponse(['user' => "email"] 

);


    }
}
