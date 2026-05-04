<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: connexion.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>👋 Bienvenue <?php echo htmlspecialchars($_SESSION['nom']); ?></h1>

<p>Vous êtes connecté avec succès 🎉</p>

<a class="btn" href="deconnexion.php">🚪 Se déconnecter</a>

</div>

</body>
</html>