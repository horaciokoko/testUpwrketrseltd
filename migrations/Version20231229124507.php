<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231229124507 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE transactions (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, seller_team_id INT DEFAULT NULL, buyer_team_id INT DEFAULT NULL, amount DOUBLE PRECISION NOT NULL, INDEX IDX_EAA81A4C99E6F5DF (player_id), INDEX IDX_EAA81A4CF26261BF (seller_team_id), INDEX IDX_EAA81A4C89C071D8 (buyer_team_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4C99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4CF26261BF FOREIGN KEY (seller_team_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4C89C071D8 FOREIGN KEY (buyer_team_id) REFERENCES team (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transactions DROP FOREIGN KEY FK_EAA81A4C99E6F5DF');
        $this->addSql('ALTER TABLE transactions DROP FOREIGN KEY FK_EAA81A4CF26261BF');
        $this->addSql('ALTER TABLE transactions DROP FOREIGN KEY FK_EAA81A4C89C071D8');
        $this->addSql('DROP TABLE transactions');
    }
}
