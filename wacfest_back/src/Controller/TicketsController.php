<?php

namespace App\Controller;

use App\Repository\TicketsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TicketsController extends AbstractController
{
    #[Route('/tickets', name: 'app_tickets')]



    public function index(TicketsRepository $ticketsRepository): Response
    {

        $ticket = $ticketsRepository->findAll();
        var_dump($ticket);

        return $this->render('tickets/index.html.twig', [
            'controller_name' => 'TicketsController',
        ]);
    }
}
