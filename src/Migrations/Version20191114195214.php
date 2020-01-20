<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191114195214 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE productos');
        $this->addSql('ALTER TABLE oferta CHANGE producto_id producto_id INT DEFAULT NULL, CHANGE nombre nombre VARCHAR(255) DEFAULT NULL, CHANGE precio precio INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE ingredientes CHANGE ingrediente ingrediente VARCHAR(255) DEFAULT NULL, CHANGE gramaje gramaje INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pedido CHANGE remitente_id remitente_id INT DEFAULT NULL, CHANGE producto_id producto_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE consulta CHANGE remitente_id remitente_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE producto CHANGE nombre nombre VARCHAR(255) DEFAULT NULL, CHANGE ingredientes ingredientes JSON NOT NULL, CHANGE precio precio INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE productos (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, descripcion VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, tamaño INT NOT NULL, ingredientes VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, precio INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE consulta CHANGE remitente_id remitente_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ingredientes CHANGE ingrediente ingrediente VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE gramaje gramaje INT DEFAULT NULL');
        $this->addSql('ALTER TABLE oferta CHANGE producto_id producto_id INT DEFAULT NULL, CHANGE nombre nombre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE precio precio INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pedido CHANGE remitente_id remitente_id INT DEFAULT NULL, CHANGE producto_id producto_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE producto CHANGE nombre nombre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE ingredientes ingredientes LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE precio precio INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
