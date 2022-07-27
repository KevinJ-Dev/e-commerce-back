<?php

namespace App\Controller;

use App\Repository\TicketsRepository;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tickets;


/**
 * @method getDoctrine()
 */
class TicketsController extends AbstractController
{
    #[Route('/tickets', name: 'app_tickets')]

    public function index(TicketsRepository $ticketsRepository, Request $request): Response
    {
        $req = $request->query->get('id');
//        var_dump($req);

        $currentTicket = $ticketsRepository->findAll();
//        print_r($currentTicket);

        $currentStock = $ticketsRepository->findOneBy(array('stock' => $req));
        print_r($currentStock);

        return $this->render('tickets/index.html.twig', [
            'controller_name' => 'TicketsController',
        ]);
    }

}
