<?php

namespace App\Controller\Admin;

use App\Entity\Allergens;
use App\Entity\Contacts;
use App\Entity\Diets;
use App\Entity\Opinions;
use App\Entity\Recipes;
use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Symfony');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Allergènes', 'fa-solid fa-hand-dots', Allergens::class);
        yield MenuItem::linkToCrud('Formulaires de contact', 'fa-solid fa-envelope', Contacts::class);
        yield MenuItem::linkToCrud('Régimes', 'fa-solid fa-carrot', Diets::class);
        yield MenuItem::linkToCrud('Avis', 'fa-solid fa-star-half-stroke', Opinions::class);
        yield MenuItem::linkToCrud('Recettes', 'fa-solid fa-utensils', Recipes::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'fa-solid fa-users', Users::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
