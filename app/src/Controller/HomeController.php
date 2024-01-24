<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/inscription', name: 'app_inscription')]
    public function inscription()
    {
        return $this->render('home/inscription.html.twig', [
            'controller_name' => 'HomeController',

        ]);
    }

    #[Route('/viewaccount', name: 'app_view', methods: ['POST'])]
    public function viewaccount()
    {
        return $this->render('home/viewaccount.html.twig', [
            'controller_name' => 'HomeController',

        ]);
    }
}
