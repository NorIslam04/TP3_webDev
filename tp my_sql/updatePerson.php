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

// Récupération des données du formulaire
$id=$_POST['valid'];
$nom = $_POST['valNom'];
$prenom = $_POST['valPrenom'];
$points = $_POST['valPoints'];

// Requête de mise à jour
$sql = "UPDATE personnes SET nom = ?, prenom = ?, point = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $nom, $prenom, $points, $id);

if ($stmt->execute()) {
    // Redirection après mise à jour
    header("Location: PERSONS.php");
} else {
    echo "Erreur lors de la mise à jour : " . $conn->error;
}

// Fermeture de la connexion
$stmt->close();
$conn->close();
?>