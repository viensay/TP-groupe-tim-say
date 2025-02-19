<?php
session_start();
$title = "Accueil";
$nav = "index";
$erreur = null;
require "header.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php if (isset($_SESSION['pseudo'])): ?>
        <h1>Content de te revoir <?php echo $_SESSION['pseudo']; ?> !</h1>
    <?php else: ?>
        <h1>Bienvenue sur notre site !</h1>
    <?php endif; ?>
    <iframe width="840" height="472.5" src="https://www.youtube.com/embed/cWoq5znh0vw?si=MA8IkgoSgj8MJCws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</body>

</html>