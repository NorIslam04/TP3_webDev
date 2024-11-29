<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Vérifiez si les données existent dans l'URL
    if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3'])) { // Vérifier si les données existent dans l'URL
        // Récupérer les valeurs des champs du formulaire
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $number3 = $_GET['number3'];

        // Afficher les valeurs
        echo "<h1>Affichage des données</h1>";
        echo "<p>Number 1: $number1</p>";
        echo "<p>Number 2: $number2</p>";
        echo "<p>Number 3: $number3</p>";
        echo "<p>La somme des trois nombres est: " . ($number1 + $number2 + $number3) . "</p>";
    } else {
        echo "<p>Aucune donnée envoyée.</p>";
    }
} else {
    echo "<p>Méthode incorrecte, le formulaire doit être soumis en GET.</p>";
}
?>