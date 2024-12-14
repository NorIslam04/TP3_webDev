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

// Récupération des données
$sql = "SELECT * FROM personnes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Personnes</title>
</head>
<body>
    <h1>Liste des Personnes</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Points</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nom'] ?></td>
            <td><?= $row['prenom'] ?></td>
            <td><?= $row['point'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
// Fermeture de la connexion
$conn->close();
?>
