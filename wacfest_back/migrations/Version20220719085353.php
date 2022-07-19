<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220719085353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {

        $this->addSql('CREATE TABLE IF NOT EXISTS `user` (
            `id` int NOT NULL AUTO_INCREMENT,
            `pseudo` varchar(255),
            `email` varchar(255) Null,
            `password` varchar(255) ,
            `age` int NOT NULL,
            `user_role` varchar(255),
            PRIMARY KEY (`id`)
          )');

    }

    public function down(Schema $schema): void
    {
$this->addSql('DROP TABLE user');
    }
}
