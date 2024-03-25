<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301100443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE opinions (id INT AUTO_INCREMENT NOT NULL, opinion_id INT NOT NULL, opinion_user_id INT NOT NULL, opinion_recipe_id INT NOT NULL, opinion_message LONGTEXT NOT NULL, opinion_rate INT NOT NULL, opinion_is_validated TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE recipes ADD recipe_title VARCHAR(255) NOT NULL, ADD recipe_description VARCHAR(255) NOT NULL, ADD recipe_prep_duration INT DEFAULT NULL, ADD recipe_rest_duration INT DEFAULT NULL, ADD recipe_cook_duration INT DEFAULT NULL, ADD recipe_ingredient LONGTEXT NOT NULL, ADD recipe_step LONGTEXT NOT NULL, ADD recipe_allergen_id INT DEFAULT NULL, ADD recipe_diet_id INT DEFAULT NULL, ADD recipe_is_public TINYINT(1) NOT NULL, ADD recipe_id INT NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE user_allergen_id user_allergen_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE opinions');
        $this->addSql('ALTER TABLE recipes DROP recipe_title, DROP recipe_description, DROP recipe_prep_duration, DROP recipe_rest_duration, DROP recipe_cook_duration, DROP recipe_ingredient, DROP recipe_step, DROP recipe_allergen_id, DROP recipe_diet_id, DROP recipe_is_public, DROP recipe_id');
        $this->addSql('ALTER TABLE users CHANGE user_allergen_id user_allergen_id INT NOT NULL');
    }
}
