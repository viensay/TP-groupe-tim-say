<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = "Accueil";
    $nav = "index";
    $erreur = null;
    require "header.php";
    ?>
</head>

<body>
    <?php if (isset($_SESSION['pseudo'])): ?>
        <h1>Content de te revoir <?php echo $_SESSION['pseudo']; ?> !</h1>
    <?php else: ?>
        <h1>Bienvenue sur notre site !</h1>
    <?php endif; ?>
</body>

</html>