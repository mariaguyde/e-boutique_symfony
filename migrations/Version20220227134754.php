<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220227134754 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE customer_address CHANGE type type VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(40) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress adress VARCHAR(252) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE city city VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE country country VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE media CHANGE type type VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE path path VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE alt alt VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE product CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE available available VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
