<table border="1">
    <?php
    $etudiants = [
        ["nom" => "islam", "moyenne" => 18],
        ["nom" => "younes", "moyenne" => 12],
        ["nom" => "walid", "moyenne" => 7],
        ["nom" => "omar", "moyenne" => 2],
        ["nom" => "salah", "moyenne" => 19]
    ];
    
    $taille = count($etudiants);
    $i = 0;  // Initialisation de $i
    echo "<tr><th>Nom</th><th>Moyenne</th></tr>";
    while ($i < $taille) {
        if ($etudiants[$i]['moyenne'] >= 10) {
            echo "<tr>
                <td>" . $etudiants[$i]['nom'] . "</td>
                <td style='background-color: rgb(61, 195, 61);'>" . $etudiants[$i]['moyenne'] . "</td></tr>";
        } else {
            echo "<tr>
                <td>" . $etudiants[$i]['nom'] . "</td>
                <td style='background-color: rgb(209, 67, 39);'>" . $etudiants[$i]['moyenne'] . "</td></tr>";
        }
        $i++;
    }
    ?>
    </table>
    