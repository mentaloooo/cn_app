<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_head.php'; ?>
    <meta description="">
    <title>Accueil - Cartootn Network watch</title>
    <link rel="stylesheet" href="/Cn-app/assets/css/layout.css">
    <link rel="stylesheet" href="/Cn-app/assets/css/accueil.css">
</head>
    <body>

        <?php if (isset($_SESSION["account_email"])) : ?>

            <?php include 'partials/_home.php'; ?>
        
        <?php else : ?>

            <?php include 'partials/_unconnected_user_home.php'; ?>
            
        <?php endif; ?>

    </body>
</html> 