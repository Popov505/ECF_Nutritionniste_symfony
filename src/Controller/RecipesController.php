<?php

namespace App\Controller;

use App\Entity\Opinions;
use App\Entity\Recipes;
use App\Entity\Users;
use App\Form\OpinionType;
use App\Repository\AllergensRepository;
use App\Repository\OpinionsRepository;
use App\Repository\RecipesRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

class RecipesController extends AbstractController
{
    #[Route('/recipes', name: 'app_recipes')]
    public function index(SessionInterface $session, AllergensRepository $allergensRepository, RecipesRepository $recipesRepository, Security $security, Request $request): Response
    {   
        // Current user
        $user = $security->getUser();

        // Session
        $session->set('previous_url', $request->getUri());
        
        // Allergens
        $allergens = $allergensRepository->findBy([],['id' => 'ASC']);
        dump($allergens);
        
        $recipes = $recipesRepository->findBy([],['id' => 'ASC']);
        /* Filter function (not working) 
        $allergenId = $request->get('allergenId');
        $recipes = $recipesRepository->findRecipes($allergenId);
        */

        dump($recipes, $user);

        return $this->render('recipes/recipes_page.html.twig', [
            'controller_name' => 'RecipesController',
            'recipes' => $recipes,
            'user' => $user,
            'allergens' => $allergens,
        ]);
    }

    #[Route('/recipes/{id}', name: 'app_show_recipe')]
    public function show_recipe(Recipes $recipe, OpinionsRepository $opinionsRepository, Request $request, EntityManagerInterface $entManInt, Security $security) : Response
    {
        // Average rate : linked to OpinionsRepository.php function getAverageRateByRecipeID
        $averageRate = $opinionsRepository->getAverageRateByRecipeID($recipe->getId());

        // Current user
        $user = $security->getUser();

        // Existing opinions to display
        $opinions = $opinionsRepository->findBy(['opinion_recipes' => $recipe],['id' => 'ASC']);
        
        // Opinion asked to the current user in a form
        $opinion = $opinionsRepository->findOneBy(['opinion_recipes' => $recipe, 'opinion_users' => $user]);
        if (!$opinion) {    // Modification of the opinion if existing opinion for this recipe and this user
            $opinion = new Opinions();
            $opinion->setopinionRecipes($recipe);   // Current recipe
            $opinion->setopinionUsers($user);       // Current user
            $opinion->setOpinionIsValidated(false); // Opinion not validated by default
        }    

        $form = $this->createForm(OpinionType::class, $opinion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entManInt->persist($opinion);
            $entManInt->flush();

            $this->addFlash('success', 'Votre commentaire a bien été envoyé');

        }
        
        return $this->render('recipes/show_recipe_page.html.twig', [
            'controller_name' => 'RecipesController',
            'recipe' => $recipe,
            'opinions' => $opinions,
            'form' => $form,
            'user' => $user,
            'averageRate' => $averageRate,
        ]);
    }
}
