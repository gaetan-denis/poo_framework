<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("INSERT INTO `courses` (`id`, `name`, `code`) VALUES
(1, 'Base des réseaux', '1351'),
(2, 'Environnement et technologies du web', '1352'),
(3, 'SGBD (Système de gestion de bases de données)', '1353'),
(4, 'Création de sites web statiques', '1354'),
(5, 'Approche Design', '1355'),
(6, 'CMS - niveau 1', '1356'),
(7, 'Initiation à la programmation', '1357'),
(8, 'Activités professionnelles de formation', '1358'),
(9, 'Scripts clients', '1359'),
(10, 'Scripts serveurs', '1360'),
(11, 'Framework et POO côté Serveur', '1361'),
(12, 'Projet Web dynamique', '1362'),
(13, 'Veille technologique', '1363'),
(14, 'Epreuve intégrée', '1364'),
(15, 'Anglais UE1', '1783'),
(16, 'Anglais UE2', '1784'),
(17, 'Initiation aux bases de données', '1440'),
(18, 'Principes algorithmiques et programmation', '1442'),
(19, 'Programmation orientée objet', '1443'),
(20, 'Web : principes de base', '1444'),
(21, 'Techniques de gestion de projet', '1448'),
(22, 'Principes d’analyse informatique', '1449'),
(23, 'Eléments de statistique', '1755'),
(24, 'Structure des ordinateurs', '1808'),
(25, 'Gestion et exploitation de bases de données', '1811'),
(26, 'Mathématiques appliquées à l’informatique', '1807'),
(27, 'Bases des réseaux', '1323'),
(28, 'Projet d’analyse et de conception', '1450'),
(29, 'Information et communication professionnelle', '1754'),
(30, 'Produits logiciels de gestion intégrés', '1438'),
(31, 'Administration, gestion et sécurisation des réseaux', '1439'),
(32, 'Projet de développement SGBD', '1446'),
(33, 'Stage d’intégration professionnelle', '1451'),
(34, 'Projet d’intégration de développement', '1447'),
(35, 'Activités professionnelles de formation', '1452'),
(36, 'Epreuve intégrée de la section', '1453');
");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("TRUNCATE courses ");
    }
};
