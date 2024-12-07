<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page 2</title>
</head>
<body>
    <h1>Page 2 - Informations</h1>
    <?php if (isset($_SESSION['pseudo'], $_SESSION['pays'], $_SESSION['genre'])): ?>
        <p>Pseudo: <?= htmlspecialchars($_SESSION['pseudo']) ?></p>
        <p>Pays: <?= htmlspecialchars($_SESSION['pays']) ?></p>
        <p>Genre: <?= htmlspecialchars($_SESSION['genre']) ?></p>
    <?php else: ?>
        <p>Aucune information enregistrée. Veuillez renseigner vos informations sur <a href="page1.php">Page 1</a>.</p>
    <?php endif; ?>
    <a href="page3.php">Aller à Page 3</a> |
    <a href="logout.php">Déconnexion</a>
</body>
</html>
