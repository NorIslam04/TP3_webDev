    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<p><strong>Nom :</strong> " . htmlspecialchars($_POST['nom']) . "</p>";
        echo "<p><strong>Specialite :</strong> " . htmlspecialchars($_POST['Specialite']) . "</p>";

        if (!empty($_POST['interets'])) {
            echo "<p><strong>Centres d'intérêt :</strong></p><ul>";
            foreach ($_POST['interets'] as $interet) {
                echo "<li>" . htmlspecialchars($interet) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p><strong>Centres d'intérêt :</strong> Aucun</p>";
        }
        echo "<p><strong>Genre :</strong> " . htmlspecialchars($_POST['genre']) . "</p>";

        echo "<p><strong>Message :</strong> " . nl2br(htmlspecialchars($_POST['message'])) . "</p>";
    } else {
        echo "<p>Aucune donnée reçue. Veuillez soumettre le formulaire.</p>";
    }
    ?>