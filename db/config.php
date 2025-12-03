<?php
// db/config.php
// Modification future si besoin de $username et $password avec WAMP et phpmyadmin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodhub_db";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // utile pour fetch assoc
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // en dev on affiche l'erreur ; en prod on logge
    die("Erreur de connexion à la BDD : " . $e->getMessage());
}
?>
