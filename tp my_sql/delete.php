<?php
$data = json_decode(file_get_contents("php://input"), true);
$ids = $data['ids'];

$conn = new mysqli("localhost", "root", "islam", "hotel");

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => $conn->connect_error]));
}

$idPlaceholders = implode(",", array_fill(0, count($ids), "?"));
$stmt = $conn->prepare("DELETE FROM etudiants WHERE id IN ($idPlaceholders)");

$stmt->bind_param(str_repeat("i", count($ids)), ...$ids);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => $stmt->error]);
}

$stmt->close();
$conn->close();
?>
