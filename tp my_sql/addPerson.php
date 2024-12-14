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
$nom = $_POST['valNom'];
$prenom = $_POST['valPrenom'];
$points = $_POST['valPoints'];

// Requête d'insertion
$sql = "INSERT INTO personnes (nom, prenom, point) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $nom, $prenom, $points);

if ($stmt->execute()) {
    // Redirection après succès
    header("Location: persons.php");
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermeture de la connexion
$stmt->close();
$conn->close();
?>
