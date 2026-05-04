<?php
session_start();
require "config.php";

$erreur = "";

if (isset($_POST['connecter'])) {

    $nom = trim($_POST['nom_utilisateur']);
    $pass = $_POST['mot_de_passe'];

    if (!empty($nom) && !empty($pass)) {

        $req = $connexion->prepare("SELECT * FROM users WHERE username=?");
        $req->execute([$nom]);

        $user = $req->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($pass, $user['password'])) {

            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['username'];

            header("Location: dashboard.php");
            exit();

        } else {
            $erreur = "❌ Login ou mot de passe incorrect";
        }
    } else {
        $erreur = "❌ Remplir tous les champs";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Connexion</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>🔐 Connexion</h2>

<p class="error"><?php echo htmlspecialchars($erreur); ?></p>

<form method="POST">

<input type="text" name="nom_utilisateur" placeholder="Nom utilisateur" required><br><br>

<input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br><br>

<button name="connecter">Se connecter</button>

</form>

<a href="inscription.php">Créer un compte</a>

</div>

</body>
</html>