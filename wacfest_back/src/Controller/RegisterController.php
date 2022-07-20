<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'register', methods: ['POST'])]


    public function register(Request $request, UsersRepository $repo, UserPasswordHasherInterface $passwordHasher) {

        $user = new Users();
        $prenom =  $request->request->get('prenom');
        $nom =  $request->request->get('nom');
        $email = $request->request->get('email');
        $age = intval($request->request->get('age'));
        $password = $request->request->get("password");
        $user->setEmail($email);
        $user->setPrenom($prenom);
        $user->setNom($nom);
        $user->setAge($age);
        $pass = $request->request->get('password');
        $password = $passwordHasher->hashPassword( $user ,$pass);
        $user->setPassword($password);
        // $user->setPassword(PASSWORD_BCRYPT, $password);
        $user->setRoles(['user'=>$user]);
        $repo->add($user, true);


        return $this->redirectToRoute('login', [
           "pseudo" => $user->getEmail(),
           "email" => $user->getEmail(),
            "age" => $user->getAge(),
            "password" => $user->getPassword(),

        ]);

    }

    public function validator() {
        return "";
    }
}
