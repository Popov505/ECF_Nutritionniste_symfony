<?php

namespace App\Controller\Admin;

use App\Entity\Opinions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OpinionsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Opinions::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextareaField::new('opinion_message', 'Commentaire');
        yield ChoiceField::new('opinion_rate','Note')->setChoices([
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ])->renderExpanded();
        yield BooleanField::new('opinion_is_validated', 'Avis validé?');

        yield AssociationField::new('opinion_users', 'Utilisateurs');
        yield AssociationField::new('opinion_recipes', 'Recettes');
    }

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
