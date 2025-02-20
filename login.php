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
    <form id="connection" class="form" method="post">
        <div class="form__title">
            <h2>Se connecter</h2>
        </div>

        <?php if ($erreur): ?>
            <p class="erreur"><?= htmlspecialchars($erreur) ?><i class="fa fa-times" aria-hidden="true"></i></p>
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
            <input class="btn" type="submit" value="Connexion">
        </div>

        <div class="form__inscription">
            <p id="inscription2" class="inscription">Pas encore inscrit ? <a onclick="changeForm('inscription')" href="#">Inscris-toi maintenant !</a></p>
        </div>
    </form>
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
            <!-- INSCRIPTION -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <form id="inscription" class="form hidden" method="post">
        <div class="form__title">
            <h2>Inscription</h2>
        </div>

        <?php if ($erreur): ?>
            <p class="erreur"><?= htmlspecialchars($erreur) ?><i class="fa fa-times" aria-hidden="true"></i></p>
        <?php endif; ?>

        <div class="form__input">
            <input class="input" type="text" name="pseudo" placeholder="Pseudo" required><br>
            <input class="input" type="text" name="name" placeholder="Nom" required><br>
            <input class="input" type="text" name="firstname" placeholder="Prénom" required><br>
            <input class="input" type="number" name="age" placeholder="Age" required><br>
            <input class="input" type="password" name="password" placeholder="Mot de passe" required>
            <input class="input" type="password" name="password" placeholder="Confirmer mot de passe" required>
        </div>

        <div class="form__info">
            <div>
                <input type="checkbox" name="remember">
                <label>Se souvenir de moi</label>
            </div>
        </div>

        <div class="form__submit">
            <input class="btn" type="submit" value="Inscription">
        </div>

        <div class="form__inscription">
            <p class="inscription">Déjà inscrit ? <a onclick="changeForm('connection')" href="#">Connecte-toi maintenant !</a></p>
        </div>
    </form>
    <?php require "footer.php"; ?>
    <script src="./login.js"></script>
</body>

</html>