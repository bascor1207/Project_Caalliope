<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220405080530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE authors (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(30) NOT NULL, last_name VARCHAR(30) NOT NULL, nationalite VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE books (id INT AUTO_INCREMENT NOT NULL, id_genre_id INT NOT NULL, id_status_id INT NOT NULL, ibsn VARCHAR(13) NOT NULL, cover VARCHAR(100) DEFAULT NULL, title VARCHAR(60) NOT NULL, parution_date DATE NOT NULL, nb_pages INT NOT NULL, INDEX IDX_4A1B2A92124D3F8A (id_genre_id), INDEX IDX_4A1B2A92EBC2BC9A (id_status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE books_authors (books_id INT NOT NULL, authors_id INT NOT NULL, INDEX IDX_877EACC27DD8AC20 (books_id), INDEX IDX_877EACC26DE2013A (authors_id), PRIMARY KEY(books_id, authors_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE editer (id INT AUTO_INCREMENT NOT NULL, me VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE editer_books (editer_id INT NOT NULL, books_id INT NOT NULL, INDEX IDX_39898DDE2325B4ED (editer_id), INDEX IDX_39898DDE7DD8AC20 (books_id), PRIMARY KEY(editer_id, books_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE format (id INT AUTO_INCREMENT NOT NULL, format VARCHAR(25) NOT NULL, language VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, genre VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publier (id INT AUTO_INCREMENT NOT NULL, prix INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publier_books (publier_id INT NOT NULL, books_id INT NOT NULL, INDEX IDX_A8D7386A573038B9 (publier_id), INDEX IDX_A8D7386A7DD8AC20 (books_id), PRIMARY KEY(publier_id, books_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publier_format (publier_id INT NOT NULL, format_id INT NOT NULL, INDEX IDX_6D3EC4E3573038B9 (publier_id), INDEX IDX_6D3EC4E3D629F605 (format_id), PRIMARY KEY(publier_id, format_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saga (id INT AUTO_INCREMENT NOT NULL, id_books_id INT NOT NULL, name VARCHAR(30) NOT NULL, nb_tome INT NOT NULL, numero_tome INT NOT NULL, INDEX IDX_1D2DDD72D0340B5 (id_books_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE status (id INT AUTO_INCREMENT NOT NULL, book_status VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, id_books_id INT NOT NULL, avatar VARCHAR(100) DEFAULT NULL, first_name VARCHAR(30) NOT NULL, last_name VARCHAR(30) NOT NULL, pseudo VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL, INDEX IDX_1483A5E92D0340B5 (id_books_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        
        $this->addSql('ALTER TABLE books ADD CONSTRAINT FK_4A1B2A92124D3F8A FOREIGN KEY (id_genre_id) REFERENCES genre (id)');
        $this->addSql('ALTER TABLE books ADD CONSTRAINT FK_4A1B2A92EBC2BC9A FOREIGN KEY (id_status_id) REFERENCES status (id)');
        $this->addSql('ALTER TABLE books_authors ADD CONSTRAINT FK_877EACC27DD8AC20 FOREIGN KEY (books_id) REFERENCES books (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE books_authors ADD CONSTRAINT FK_877EACC26DE2013A FOREIGN KEY (authors_id) REFERENCES authors (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE editer_books ADD CONSTRAINT FK_39898DDE2325B4ED FOREIGN KEY (editer_id) REFERENCES editer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE editer_books ADD CONSTRAINT FK_39898DDE7DD8AC20 FOREIGN KEY (books_id) REFERENCES books (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publier_books ADD CONSTRAINT FK_A8D7386A573038B9 FOREIGN KEY (publier_id) REFERENCES publier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publier_books ADD CONSTRAINT FK_A8D7386A7DD8AC20 FOREIGN KEY (books_id) REFERENCES books (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publier_format ADD CONSTRAINT FK_6D3EC4E3573038B9 FOREIGN KEY (publier_id) REFERENCES publier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publier_format ADD CONSTRAINT FK_6D3EC4E3D629F605 FOREIGN KEY (format_id) REFERENCES format (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE saga ADD CONSTRAINT FK_1D2DDD72D0340B5 FOREIGN KEY (id_books_id) REFERENCES books (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E92D0340B5 FOREIGN KEY (id_books_id) REFERENCES books (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE books_authors DROP FOREIGN KEY FK_877EACC26DE2013A');
        $this->addSql('ALTER TABLE books_authors DROP FOREIGN KEY FK_877EACC27DD8AC20');
        $this->addSql('ALTER TABLE editer_books DROP FOREIGN KEY FK_39898DDE7DD8AC20');
        $this->addSql('ALTER TABLE publier_books DROP FOREIGN KEY FK_A8D7386A7DD8AC20');
        $this->addSql('ALTER TABLE saga DROP FOREIGN KEY FK_1D2DDD72D0340B5');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E92D0340B5');
        $this->addSql('ALTER TABLE editer_books DROP FOREIGN KEY FK_39898DDE2325B4ED');
        $this->addSql('ALTER TABLE publier_format DROP FOREIGN KEY FK_6D3EC4E3D629F605');
        $this->addSql('ALTER TABLE books DROP FOREIGN KEY FK_4A1B2A92124D3F8A');
        $this->addSql('ALTER TABLE publier_books DROP FOREIGN KEY FK_A8D7386A573038B9');
        $this->addSql('ALTER TABLE publier_format DROP FOREIGN KEY FK_6D3EC4E3573038B9');
        $this->addSql('ALTER TABLE books DROP FOREIGN KEY FK_4A1B2A92EBC2BC9A');
        
        $this->addSql('DROP TABLE authors');
        $this->addSql('DROP TABLE books');
        $this->addSql('DROP TABLE books_authors');
        $this->addSql('DROP TABLE editer');
        $this->addSql('DROP TABLE editer_books');
        $this->addSql('DROP TABLE format');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE publier');
        $this->addSql('DROP TABLE publier_books');
        $this->addSql('DROP TABLE publier_format');
        $this->addSql('DROP TABLE saga');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE users');
    }
}
