<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Security $security): Response
    {
        // Current user
        $user = $security->getUser();

        return $this->render('home/home_page.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user,
        ]);
    }
}