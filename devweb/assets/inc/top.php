<?php
session_start();
define("ROOT", "/devweb/");
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ouky - Accueil</title>
        <meta name="description" content="Ouky - Streaming des meilleures créations du moment">
        <meta name="author" content="Ouky entertaintement">
        <link rel="shortcut icon" href="<?= ROOT ?>assets/images/tv.png">
        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= ROOT ?>assets/css/style.css">
        <link rel="stylesheet" href="<?= ROOT ?>assets/css/mobile.css">
    </head>
    <body>
        <header>
            <section>
                <img src="<?= ROOT ?>assets/images/align-justify.png" alt="dérouler le menu" id="boutton">  <!--id pour le js-->
                <a href="<?= ROOT ?>index.php"><h1>Ouky</h1></a>
            </section>
            <form action="<?= ROOT ?>assets/pages/recherche.php" method="get">
                <input type="search" name="search" placeholder="Rechercher film ou série...">
                <input type="submit" value="Rechercher">
            </form>
            <p>
                <a href="<?= ROOT ?>assets/pages/connexion/connexion.php">Se connecter</a>
                <a href="<?= ROOT ?>assets/pages/inscription/inscription.php">S'inscrire</a>
            </p>
        </header>
        <nav id="">
            <!--Pour tous-->
            <section>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">Films</a>
                </article>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">Séries</a>
                </article>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">Pour vous</a>
                </article>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">Derniers ajouts</a>
                </article>
            </section>

            <!--User connecté-->
            <section>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">Profil</a>
                </article>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">Suggérer</a>
                </article>
            </section>

            <!--Pour tous-->
            <section>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">Annonces</a>
                </article>
            </section>

            <section>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">À propos</a>
                </article>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">Mentions légales</a>
                </article>
                <article>
                    <img src="<?= ROOT ?>assets/images/clapperboard.png" alt="voir tous les films">
                    <a href="<?= ROOT ?>assets/pages/connexion.php">Confidentialité</a>
                </article>
            </section>
        </nav>
