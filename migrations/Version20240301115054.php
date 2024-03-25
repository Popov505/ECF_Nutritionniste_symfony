<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301115054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users_allergens (users_id INT NOT NULL, allergens_id INT NOT NULL, INDEX IDX_18AE55567B3B43D (users_id), INDEX IDX_18AE555711662F1 (allergens_id), PRIMARY KEY(users_id, allergens_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users_diets (users_id INT NOT NULL, diets_id INT NOT NULL, INDEX IDX_C78AAFEF67B3B43D (users_id), INDEX IDX_C78AAFEF9B4CB3A8 (diets_id), PRIMARY KEY(users_id, diets_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users_allergens ADD CONSTRAINT FK_18AE55567B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_allergens ADD CONSTRAINT FK_18AE555711662F1 FOREIGN KEY (allergens_id) REFERENCES allergens (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_diets ADD CONSTRAINT FK_C78AAFEF67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_diets ADD CONSTRAINT FK_C78AAFEF9B4CB3A8 FOREIGN KEY (diets_id) REFERENCES diets (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE opinions ADD opinion_user_id_id INT DEFAULT NULL, ADD opinion_recipe_id_id INT DEFAULT NULL, DROP opinion_user_id, DROP opinion_recipe_id');
        $this->addSql('ALTER TABLE opinions ADD CONSTRAINT FK_BEAF78D064D5746 FOREIGN KEY (opinion_user_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE opinions ADD CONSTRAINT FK_BEAF78D0803B744F FOREIGN KEY (opinion_recipe_id_id) REFERENCES recipes (id)');
        $this->addSql('CREATE INDEX IDX_BEAF78D064D5746 ON opinions (opinion_user_id_id)');
        $this->addSql('CREATE INDEX IDX_BEAF78D0803B744F ON opinions (opinion_recipe_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users_allergens DROP FOREIGN KEY FK_18AE55567B3B43D');
        $this->addSql('ALTER TABLE users_allergens DROP FOREIGN KEY FK_18AE555711662F1');
        $this->addSql('ALTER TABLE users_diets DROP FOREIGN KEY FK_C78AAFEF67B3B43D');
        $this->addSql('ALTER TABLE users_diets DROP FOREIGN KEY FK_C78AAFEF9B4CB3A8');
        $this->addSql('DROP TABLE users_allergens');
        $this->addSql('DROP TABLE users_diets');
        $this->addSql('ALTER TABLE opinions DROP FOREIGN KEY FK_BEAF78D064D5746');
        $this->addSql('ALTER TABLE opinions DROP FOREIGN KEY FK_BEAF78D0803B744F');
        $this->addSql('DROP INDEX IDX_BEAF78D064D5746 ON opinions');
        $this->addSql('DROP INDEX IDX_BEAF78D0803B744F ON opinions');
        $this->addSql('ALTER TABLE opinions ADD opinion_user_id INT NOT NULL, ADD opinion_recipe_id INT NOT NULL, DROP opinion_user_id_id, DROP opinion_recipe_id_id');
    }
}
