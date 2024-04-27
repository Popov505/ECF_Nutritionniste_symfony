<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Form\ContactType;
use App\Repository\ContactsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function show_contact(EntityManagerInterface $entityManagerInterface, Request $request, Security $security, ContactsRepository $contactsRepository): Response
    {
        // User
        $user = $security->getUser();

        // Contact form
        $contact = new Contacts();
        $contactForm = $this->createForm(ContactType::class, $contact);
        $contactForm->handleRequest($request);

        if ($contactForm->isSubmitted() && $contactForm->isValid()) {
            $entityManagerInterface->persist($contact);
            $entityManagerInterface->flush();

            $this->addFlash('success', 'Le formulaire de contact a bien été envoyé');
        }


        return $this->render('contact/show_contact_page.html.twig', [
            'controller_name' => 'ContactController',
            'contactForm' => $contactForm,
            'user' => $user,
        ]);
    }
}
