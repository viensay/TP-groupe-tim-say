<?php
session_start();
$title = "Login";
$nav = "login";
$erreur = null;
require "header.php";

if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
    if ($_POST['pseudo'] === "titi" && $_POST['password'] === "0000") {
        $_SESSION['connected'] = true;
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header("Location: profil.php");
        exit();
    } else {
        $erreur = "Identifiants incorrects !";
    }
}

if (isset($_SESSION['connected']) && $_SESSION['connected']) {
    header("Location: profil.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/login.css">
    <title>Login</title>
</head>

<body>
    <form class="form" method="post">
        <div class="form__title">
            <h2>Se connecter</h2>
        </div>

        <?php if ($erreur): ?>
            <p style="color: white; text-align: center; background-color: red; width: 50%; margin: 0 auto; border-radius: 0.5rem; padding: 0.5rem; font-size: 1.5rem; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><?= htmlspecialchars($erreur) ?></p>
        <?php endif; ?>

        <div class="form__input">
            <input class="input" type="text" name="pseudo" placeholder="Pseudo" required><br>
            <input class="input" type="password" name="password" placeholder="Mot de passe" required>
        </div>

        <div class="form__info">
            <div>
                <input type="checkbox" name="remember">
                <label>Se souvenir de moi</label>
            </div>
            <a href="#">Mot de passe oublié</a>
        </div>

        <div class="form__submit">
            <input class="btn" type="submit" value="Se connecter">
        </div>

        <div class="form__inscription">
            <p class="inscription">Pas encore inscrit ? <a href="#">Inscris-toi maintenant !</a></p>
        </div>
    </form>
    

    <?php require "footer.php"; ?>
</body>

</html>