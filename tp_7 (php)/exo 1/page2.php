<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page 2</title>
</head>
<body>
    <h1>Page 2 - Informations</h1>
    <?php if (isset($_COOKIE['pseudo'], $_COOKIE['pays'], $_COOKIE['genre'])): ?>
        <p>Pseudo: <?= htmlspecialchars($_COOKIE['pseudo']) ?></p>
        <p>Pays: <?= htmlspecialchars($_COOKIE['pays']) ?></p>
        <p>Genre: <?= htmlspecialchars($_COOKIE['genre']) ?></p>
    <?php else: ?>
        <p>Aucune information enregistrée. Veuillez renseigner vos informations sur <a href="page1.php">Page 1</a>.</p>
    <?php endif; ?>
    <a href="index.php">Retour au menu</a>
</body>
</html>
