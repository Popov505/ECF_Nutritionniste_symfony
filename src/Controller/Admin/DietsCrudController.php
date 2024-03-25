<?php

namespace App\Controller\Admin;

use App\Entity\Diets;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DietsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Diets::class;
    }


    /*
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('diet_name', 'nom');
        yield AssociationField::new('diet_users', 'utilisateur');
        yield AssociationField::new('diet_recipes', 'recette');
    }
    */

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
