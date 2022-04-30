<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306135706 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart ADD order_num_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B721CD831F FOREIGN KEY (order_num_id) REFERENCES `order` (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BA388B721CD831F ON cart (order_num_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B721CD831F');
        $this->addSql('DROP INDEX UNIQ_BA388B721CD831F ON cart');
        $this->addSql('ALTER TABLE cart DROP order_num_id');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE customer_address CHANGE type type VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(40) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress adress VARCHAR(252) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE city city VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE country country VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE media CHANGE type type VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE path path VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE alt alt VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE product CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE available available VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE users CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
