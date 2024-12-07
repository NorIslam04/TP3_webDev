<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Stocker les informations dans des cookies
    setcookie('pseudo', $_POST['pseudo'], time() + 3600, '/');
    setcookie('pays', $_POST['pays'], time() + 3600, '/');
    setcookie('genre', $_POST['genre'], time() + 3600, '/');
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
    <a href="index.php">Retour au menu</a>
</body>
</html>
