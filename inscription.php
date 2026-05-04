<?php
require "config.php";

$message = "";

if (isset($_POST['inscrire'])) {

    $nom = trim($_POST['nom_utilisateur']);r
    $pass = $_POST['mot_de_passe'];

    if (!empty($nom) && !empty($pass)) {

        $check = $connexion->prepare("SELECT * FROM users WHERE username=?");
        $check->execute([$nom]);

        if ($check->rowCount() > 0) {
            $message = "❌ Nom déjà utilisé";
        } else {

            $hash = password_hash($pass, PASSWORD_DEFAULT);

            $req = $connexion->prepare("INSERT INTO users(username,password) VALUES(?,?)");
            $req->execute([$nom, $hash]);

            $message = "✅ Compte créé avec succès";
        }
    } else {
        $message = "❌ Remplir tous les champs";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Inscription</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>📝 Inscription</h2>

<p><?php echo htmlspecialchars($message); ?></p>

<form method="POST">

<input type="text" name="nom_utilisateur" placeholder="Nom utilisateur" required><br><br>

<input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br><br>

<button name="inscrire">S'inscrire</button>

</form>

<a href="connexion.php">🔐 Déjà un compte ?</a>

</div>

</body>
</html>