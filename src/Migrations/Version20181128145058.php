<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181128145058 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE supplier ADD company VARCHAR(255) NOT NULL, ADD address VARCHAR(255) NOT NULL, ADD zipcode VARCHAR(255) NOT NULL, ADD city VARCHAR(255) NOT NULL, ADD phone VARCHAR(20) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD siretNumber VARCHAR(255) NOT NULL, ADD vatNumber VARCHAR(255) NOT NULL, ADD contactFirstName VARCHAR(255) NOT NULL, ADD contactLastName VARCHAR(255) NOT NULL, ADD idProduct INT NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD confirmPassword VARCHAR(255) NOT NULL, ADD logo VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Supplier DROP company, DROP address, DROP zipcode, DROP city, DROP phone, DROP email, DROP siretNumber, DROP vatNumber, DROP contactFirstName, DROP contactLastName, DROP idProduct, DROP password, DROP confirmPassword, DROP logo');
    }
}
