<?php

namespace App\Controller;

use App\Repository\RecipesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LegalController extends AbstractController
{
    #[Route('/legal', name: 'app_legal')]
    public function index(Security $security, RecipesRepository $recipesRepository): Response
    {
        $recipes = $recipesRepository->findBy([],['id' => 'ASC']);
        
        // Current user
        $user = $security->getUser();

        return $this->render('legal/legal_page.html.twig', [
            'controller_name' => 'LegalController',
            'recipes' => $recipes,
            'user' => $user,
        ]);
    }
}