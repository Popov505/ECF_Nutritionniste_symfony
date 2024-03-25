<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306161034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opinions DROP FOREIGN KEY FK_BEAF78D064D5746');
        $this->addSql('ALTER TABLE opinions DROP FOREIGN KEY FK_BEAF78D0803B744F');
        $this->addSql('DROP INDEX IDX_BEAF78D064D5746 ON opinions');
        $this->addSql('DROP INDEX IDX_BEAF78D0803B744F ON opinions');
        $this->addSql('ALTER TABLE opinions ADD opinion_users_id INT DEFAULT NULL, ADD opinion_recipes_id INT DEFAULT NULL, DROP opinion_user_id_id, DROP opinion_recipe_id_id');
        $this->addSql('ALTER TABLE opinions ADD CONSTRAINT FK_BEAF78D09D513894 FOREIGN KEY (opinion_users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE opinions ADD CONSTRAINT FK_BEAF78D0663983B3 FOREIGN KEY (opinion_recipes_id) REFERENCES recipes (id)');
        $this->addSql('CREATE INDEX IDX_BEAF78D09D513894 ON opinions (opinion_users_id)');
        $this->addSql('CREATE INDEX IDX_BEAF78D0663983B3 ON opinions (opinion_recipes_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opinions DROP FOREIGN KEY FK_BEAF78D09D513894');
        $this->addSql('ALTER TABLE opinions DROP FOREIGN KEY FK_BEAF78D0663983B3');
        $this->addSql('DROP INDEX IDX_BEAF78D09D513894 ON opinions');
        $this->addSql('DROP INDEX IDX_BEAF78D0663983B3 ON opinions');
        $this->addSql('ALTER TABLE opinions ADD opinion_user_id_id INT DEFAULT NULL, ADD opinion_recipe_id_id INT DEFAULT NULL, DROP opinion_users_id, DROP opinion_recipes_id');
        $this->addSql('ALTER TABLE opinions ADD CONSTRAINT FK_BEAF78D064D5746 FOREIGN KEY (opinion_user_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE opinions ADD CONSTRAINT FK_BEAF78D0803B744F FOREIGN KEY (opinion_recipe_id_id) REFERENCES recipes (id)');
        $this->addSql('CREATE INDEX IDX_BEAF78D064D5746 ON opinions (opinion_user_id_id)');
        $this->addSql('CREATE INDEX IDX_BEAF78D0803B744F ON opinions (opinion_recipe_id_id)');
    }
}
