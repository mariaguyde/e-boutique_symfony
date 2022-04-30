<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220304193210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart_line ADD cart_id INT DEFAULT NULL, ADD product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cart_line ADD CONSTRAINT FK_3EF1B4CF1AD5CDBF FOREIGN KEY (cart_id) REFERENCES cart (id)');
        $this->addSql('ALTER TABLE cart_line ADD CONSTRAINT FK_3EF1B4CF4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_3EF1B4CF1AD5CDBF ON cart_line (cart_id)');
        $this->addSql('CREATE INDEX IDX_3EF1B4CF4584665A ON cart_line (product_id)');
        $this->addSql('ALTER TABLE command_line ADD product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE command_line ADD CONSTRAINT FK_70BE1A7B4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_70BE1A7B4584665A ON command_line (product_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart_line DROP FOREIGN KEY FK_3EF1B4CF1AD5CDBF');
        $this->addSql('ALTER TABLE cart_line DROP FOREIGN KEY FK_3EF1B4CF4584665A');
        $this->addSql('DROP INDEX IDX_3EF1B4CF1AD5CDBF ON cart_line');
        $this->addSql('DROP INDEX IDX_3EF1B4CF4584665A ON cart_line');
        $this->addSql('ALTER TABLE cart_line DROP cart_id, DROP product_id');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE command_line DROP FOREIGN KEY FK_70BE1A7B4584665A');
        $this->addSql('DROP INDEX IDX_70BE1A7B4584665A ON command_line');
        $this->addSql('ALTER TABLE command_line DROP product_id');
        $this->addSql('ALTER TABLE customer_address CHANGE type type VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(40) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress adress VARCHAR(252) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE city city VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE country country VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE media CHANGE type type VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE path path VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE alt alt VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE product CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE available available VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE users CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
