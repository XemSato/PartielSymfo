<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230913082936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, seller_id INT NOT NULL, day VARCHAR(100) NOT NULL, time VARCHAR(100) NOT NULL, subject VARCHAR(255) DEFAULT NULL, comment LONGTEXT DEFAULT NULL, week INT DEFAULT NULL, INDEX IDX_CBE5A33119EB6921 (client_id), INDEX IDX_CBE5A3318DE820D9 (seller_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A33119EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3318DE820D9 FOREIGN KEY (seller_id) REFERENCES seller (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A33119EB6921');
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A3318DE820D9');
        $this->addSql('DROP TABLE book');
    }
}
