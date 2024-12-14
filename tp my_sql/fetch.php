<?php
$conn = new mysqli("localhost", "root", "islam", "hotel");

if ($conn->connect_error) {
    die(json_encode([]));
}

$result = $conn->query("SELECT * FROM etudiants");
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();
?>
