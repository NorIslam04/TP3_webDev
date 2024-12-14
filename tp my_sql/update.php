<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$point = $_POST['point'];

$conn = new mysqli("localhost", "root", "islam", "hotel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("UPDATE etudiants SET nom = ?, prenom = ?, point = ? WHERE id = ?");
$stmt->bind_param("ssii", $nom, $prenom, $point, $id);

if ($stmt->execute()) {
    echo "Étudiant mis à jour avec succès.";
    echo "<br><a href='pro.html'>Retour à la liste</a>";
} else {
    echo "Erreur : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
