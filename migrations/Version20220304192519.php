<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220304192519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart ADD user_id INT DEFAULT NULL, ADD users_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B767B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_BA388B7A76ED395 ON cart (user_id)');
        $this->addSql('CREATE INDEX IDX_BA388B767B3B43D ON cart (users_id)');
        $this->addSql('ALTER TABLE customer_address ADD users_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE customer_address ADD CONSTRAINT FK_1193CB3F67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_1193CB3F67B3B43D ON customer_address (users_id)');
        $this->addSql('ALTER TABLE `order` ADD user_id INT DEFAULT NULL, ADD users_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F529939867B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_F5299398A76ED395 ON `order` (user_id)');
        $this->addSql('CREATE INDEX IDX_F529939867B3B43D ON `order` (users_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B7A76ED395');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B767B3B43D');
        $this->addSql('DROP INDEX IDX_BA388B7A76ED395 ON cart');
        $this->addSql('DROP INDEX IDX_BA388B767B3B43D ON cart');
        $this->addSql('ALTER TABLE cart DROP user_id, DROP users_id');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE customer_address DROP FOREIGN KEY FK_1193CB3F67B3B43D');
        $this->addSql('DROP INDEX IDX_1193CB3F67B3B43D ON customer_address');
        $this->addSql('ALTER TABLE customer_address DROP users_id, CHANGE type type VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(40) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress adress VARCHAR(252) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE city city VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE country country VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE media CHANGE type type VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE path path VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE alt alt VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398A76ED395');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F529939867B3B43D');
        $this->addSql('DROP INDEX IDX_F5299398A76ED395 ON `order`');
        $this->addSql('DROP INDEX IDX_F529939867B3B43D ON `order`');
        $this->addSql('ALTER TABLE `order` DROP user_id, DROP users_id');
        $this->addSql('ALTER TABLE product CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE available available VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(200) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE users CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
