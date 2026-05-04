<?php
$host = "localhost";
$dbname = "test";
$user = "root";
$pass = "";

try {
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur connexion: " . $e->getMessage());
}
?>
