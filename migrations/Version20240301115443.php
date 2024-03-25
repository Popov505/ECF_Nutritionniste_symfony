<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301115443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE recipes_allergens (recipes_id INT NOT NULL, allergens_id INT NOT NULL, INDEX IDX_EF93A5DAFDF2B1FA (recipes_id), INDEX IDX_EF93A5DA711662F1 (allergens_id), PRIMARY KEY(recipes_id, allergens_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipes_diets (recipes_id INT NOT NULL, diets_id INT NOT NULL, INDEX IDX_2FC6AAF3FDF2B1FA (recipes_id), INDEX IDX_2FC6AAF39B4CB3A8 (diets_id), PRIMARY KEY(recipes_id, diets_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE recipes_allergens ADD CONSTRAINT FK_EF93A5DAFDF2B1FA FOREIGN KEY (recipes_id) REFERENCES recipes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipes_allergens ADD CONSTRAINT FK_EF93A5DA711662F1 FOREIGN KEY (allergens_id) REFERENCES allergens (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipes_diets ADD CONSTRAINT FK_2FC6AAF3FDF2B1FA FOREIGN KEY (recipes_id) REFERENCES recipes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipes_diets ADD CONSTRAINT FK_2FC6AAF39B4CB3A8 FOREIGN KEY (diets_id) REFERENCES diets (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipes DROP recipe_allergen_id, DROP recipe_diet_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipes_allergens DROP FOREIGN KEY FK_EF93A5DAFDF2B1FA');
        $this->addSql('ALTER TABLE recipes_allergens DROP FOREIGN KEY FK_EF93A5DA711662F1');
        $this->addSql('ALTER TABLE recipes_diets DROP FOREIGN KEY FK_2FC6AAF3FDF2B1FA');
        $this->addSql('ALTER TABLE recipes_diets DROP FOREIGN KEY FK_2FC6AAF39B4CB3A8');
        $this->addSql('DROP TABLE recipes_allergens');
        $this->addSql('DROP TABLE recipes_diets');
        $this->addSql('ALTER TABLE recipes ADD recipe_allergen_id INT DEFAULT NULL, ADD recipe_diet_id INT DEFAULT NULL');
    }
}
