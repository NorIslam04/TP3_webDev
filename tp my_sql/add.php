<?php
$data = json_decode(file_get_contents("php://input"), true);

$nom = $data['nom'];
$prenom = $data['prenom'];
$point = (int)$data['point'];

$conn = new mysqli("localhost", "root", "islam", "hotel");

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => $conn->connect_error]));
}

$stmt = $conn->prepare("INSERT INTO etudiants (nom, prenom, point) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $nom, $prenom, $point);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => $stmt->error]);
}

$stmt->close();
$conn->close();
?>
