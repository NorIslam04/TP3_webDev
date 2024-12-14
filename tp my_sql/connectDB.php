<?php
// Informations de connexion
$host = 'localhost'; // Adresse du serveur MySQL
$dbname = 'hotel'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur MySQL
$password = 'islam'; // Mot de passe MySQL

try {
    // Création d'une instance PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer la liste des tables
    $query = $pdo->query("SHOW TABLES");

    // Afficher les tables
    echo "Tables dans la base de données '$dbname':<br>";
    while ($row = $query->fetch(PDO::FETCH_NUM)) {
        echo $row[0] . "<br>";
    }
} catch (PDOException $e) {
    // Gestion des erreurs
    echo "Erreur : " . $e->getMessage();
}
?>
