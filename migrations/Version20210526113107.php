<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210526113107 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE remboursement (id INT AUTO_INCREMENT NOT NULL, beneficiaire_reglement VARCHAR(255) DEFAULT NULL, montant_remboursement VARCHAR(255) DEFAULT NULL, ref_reglement VARCHAR(255) DEFAULT NULL, is_bloque TINYINT(1) DEFAULT NULL, date_reglement DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE remboursement_detail (id INT AUTO_INCREMENT NOT NULL, beneficiaire_reglement VARCHAR(255) DEFAULT NULL, beneficiaire_soin VARCHAR(255) DEFAULT NULL, complement_cgam VARCHAR(255) DEFAULT NULL, date_acte DATETIME DEFAULT NULL, frais_reel VARCHAR(255) DEFAULT NULL, id_remboursement VARCHAR(255) DEFAULT NULL, montant_remboursement VARCHAR(255) DEFAULT NULL, remboursement_securite_sociale VARCHAR(255) DEFAULT NULL, reste_charge VARCHAR(255) DEFAULT NULL, statut VARCHAR(255) DEFAULT NULL, taux_securite_sociale VARCHAR(255) DEFAULT NULL, type_acte VARCHAR(255) DEFAULT NULL, ref_reglement VARCHAR(255) DEFAULT NULL, autre_mutuelle VARCHAR(255) DEFAULT NULL, decompte_dispo TINYINT(1) DEFAULT NULL, is_bloque TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE remboursement');
        $this->addSql('DROP TABLE remboursement_detail');
        $this->addSql('DROP TABLE user');
    }
}
