<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "islam";
$dbname = "hotel";

$conn = new mysqli($host, $user, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupération de l'ID à supprimer
$id = $_POST['valid'];
if (!isset($id) || empty($id)) {
    die("ID invalide ou non spécifié.");
}

// Requête de suppression
$sql = "DELETE FROM personnes WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Erreur lors de la préparation : " . $conn->error);
}

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    // Redirection après suppression
    ob_start();
    header("Location: PERSONS.php");
    ob_end_flush();
    exit;
} else {
    die("Erreur lors de l'exécution : " . $stmt->error);
}

// Fermeture de la connexion
$stmt->close();
$conn->close();
?>
