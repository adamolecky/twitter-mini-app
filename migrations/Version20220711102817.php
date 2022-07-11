<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220711102817 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE follow (id INT AUTO_INCREMENT NOT NULL, user_from CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:uuid)\', user_to CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:uuid)\', created_at DATETIME NOT NULL, INDEX IDX_68344470C39BEDB9 (user_from), INDEX IDX_68344470CFD06601 (user_to), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id CHAR(36) NOT NULL COMMENT \'(DC2Type:uuid)\', roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, first_name VARCHAR(1000) DEFAULT NULL, last_name VARCHAR(1000) DEFAULT NULL, nick VARCHAR(1000) DEFAULT NULL, count_followers INT NOT NULL, created_at DATETIME NOT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE follow ADD CONSTRAINT FK_68344470C39BEDB9 FOREIGN KEY (user_from) REFERENCES user (id)');
        $this->addSql('ALTER TABLE follow ADD CONSTRAINT FK_68344470CFD06601 FOREIGN KEY (user_to) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE follow DROP FOREIGN KEY FK_68344470C39BEDB9');
        $this->addSql('ALTER TABLE follow DROP FOREIGN KEY FK_68344470CFD06601');
        $this->addSql('DROP TABLE follow');
        $this->addSql('DROP TABLE user');
    }
}
