<?php
$servername = 'localhost';
$username = 'root';
$password = ""; // Added missing semicolon here
//On essaie de se connecter

try {
    $conn = new PDO("mysql:host=$servername;dbname=store", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<script>console.log("Connexion réussie")</script>';
} catch (PDOException $e) {
    //echo 'Erreur : ' . $e->getMessage();
}

?>