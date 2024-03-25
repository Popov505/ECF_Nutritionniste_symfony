<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConfidentialityController extends AbstractController
{
    #[Route('/confidentiality', name: 'app_confidentiality')]
    public function index(Security $security): Response
    {
        // Current user
        $user = $security->getUser();

        return $this->render('confidentiality/confidentiality_page.html.twig', [
            'controller_name' => 'ConfidentialityController',
            'user' => $user,
        ]);
    }
}
