<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['pays'] = $_POST['pays'];
    $_SESSION['genre'] = $_POST['genre'];
    header("Location: page2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page 1</title>
</head>
<body>
    <h1>Page 1 - Saisie des informations</h1>
    <form method="POST">
        <label for="pseudo">Pseudo:</label>
        <input type="text" id="pseudo" name="pseudo" required><br>

        <label for="pays">Pays:</label>
        <input type="text" id="pays" name="pays" required><br>

        <label for="genre">Genre:</label>
        <select id="genre" name="genre" required>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Autre">Autre</option>
        </select><br>

        <button type="submit">Soumettre</button>
    </form>
    <a href="logout.php">Déconnexion</a>
</body>
</html>
