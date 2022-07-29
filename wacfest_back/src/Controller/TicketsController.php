<?php

namespace App\Controller;

use App\Repository\TicketsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tickets;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;


/**
 * @method getEntityManager()
 * @method getDoctrine()
 */
class TicketsController extends AbstractController
{
    /**
     * @method getDoctrine()
     * @method getEntityManager()
     */
    #[Route('/tickets', name: 'app_tickets')]

    public function index(TicketsRepository $ticketsRepository, Request $request, ManagerRegistry $registry): Response
    {
        $id = $request->query->get('id');
        $title = $request->query->get('title');
        $price = $request->query->get('price');
        $stock = $request->query->get('stock');

        $res = $ticketsRepository->findBy(array('id'=> '2'));
//        var_dump($res);

        $ticket =$registry->getManager();
//        var_dump($ticket);

        $ticket1= $ticketsRepository->find(1);
        $ticket2 = $ticketsRepository->find(2);

//        $req = $request->query->get('id');
////        var_dump($req);
//////
//        $currentTicket = $ticketsRepository->findAll();
////        print_r($currentTicket);
////
        $currentStock = $ticketsRepository->findOneBy(array('id' => 'price'));
        print_r($currentStock);

        return $this->render('tickets/index.html.twig', [
            'controller_name' => 'TicketsController',
        ]);
    }
public function getTickets(){

    }
}
