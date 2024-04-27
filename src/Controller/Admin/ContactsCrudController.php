<?php

namespace App\Controller\Admin;

use App\Entity\Contacts;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ContactsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contacts::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('contact_firstname');
        yield TextField ::new('contact_lastname');
        yield TextField::new('contact_email');
        yield TextField ::new('contact_phone');
        yield TextField ::new('contact_title');
        yield TextareaField ::new('contact_message');
    }

}
