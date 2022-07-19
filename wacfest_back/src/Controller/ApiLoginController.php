<?php
namespace App\Controller;

 use App\Entity\User;
use App\Security\LoginAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

 class ApiLoginController extends AbstractController
 {



    #[Route('/login', name: 'login')]

    public function index() {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ApiLoginController.php',
           
        ]); 
    }


    #[Route('/login', name: 'login', methods: ['POST'])]


     public function login( LoginAuthenticator $auth) : Response
     {

            $this->auth($auth);
            return $this->json([
            'message' => 'Logged in !',
            'path' => 'src/Controller/ApiLoginController.php',
            'token' => "dslmfkmldfk",
           
        ]);
     }


     private function auth() {

     }
 }
