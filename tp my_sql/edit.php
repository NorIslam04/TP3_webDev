<?php
$id = $_GET['id'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$point = $_GET['point'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Étudiant</title>
</head>
<body>
    <h1>Modifier Étudiant</h1>
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Nom:</label>
        <input type="text" name="nom" value="<?php echo $nom; ?>" required>
        <br>
        <label>Prénom:</label>
        <input type="text" name="prenom" value="<?php echo $prenom; ?>" required>
        <br>
        <label>Points:</label>
        <input type="number" name="point" value="<?php echo $point; ?>" required>
        <br>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
