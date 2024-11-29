<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez si les données existent dans le formulaire
    if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['number3']) && isset($_POST['number4'])) {
        // Récupérer les valeurs des champs du formulaire
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
        $number4 = $_POST['number4'];

        // Afficher les valeurs
        echo "<h1>Affichage des données</h1>";
        echo "<p>Number 1: $number1</p>";
        echo "<p>Number 2: $number2</p>";
        echo "<p>Number 3: $number3</p>";
        echo "<p>Number 4: $number4</p>";

        // Calculer et afficher la somme des trois nombres
        echo "<p> ((Num1 + Num2) * Num3) / Num4) = " . (($number1 + $number2) * $number3) / $number4 . "</p>";
    } else {
        echo "<p>Aucune donnée envoyée.</p>";
    }
} else {
    echo "<p>Méthode incorrecte, le formulaire doit être soumis en POST.</p>";
}
?>
