<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230913082027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE seller (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, duration INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD seller_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498DE820D9 FOREIGN KEY (seller_id) REFERENCES seller (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6498DE820D9 ON user (seller_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498DE820D9');
        $this->addSql('DROP TABLE seller');
        $this->addSql('DROP INDEX UNIQ_8D93D6498DE820D9 ON user');
        $this->addSql('ALTER TABLE user DROP seller_id');
    }
}
