<?php 
include __DIR__ . '/../inc/header.php';
?>

<h2>Exo 8.3 - Championnat</h2>
<section class="container">

<?php
// Constantes
const VICTORY_POINTS = 3;
const DRAW_POINTS = 1;

// Tableau des clubs
$clubs = [
    "OM" => ["points" => 0, "matchs_joués" => 0, "victoires" => 0, "matchs_nuls" => 0, "défaites" => 0],
    "PSG" => ["points" => 0, "matchs_joués" => 0, "victoires" => 0, "matchs_nuls" => 0, "défaites" => 0],
    "OL" => ["points" => 0, "matchs_joués" => 0, "victoires" => 0, "matchs_nuls" => 0, "défaites" => 0],
    "ASMonaco" => ["points" => 0, "matchs_joués" => 0, "victoires" => 0, "matchs_nuls" => 0, "défaites" => 0],
    "RCLens" => ["points" => 0, "matchs_joués" => 0, "victoires" => 0, "matchs_nuls" => 0, "défaites" => 0],
    "LOSC" => ["points" => 0, "matchs_joués" => 0, "victoires" => 0, "matchs_nuls" => 0, "défaites" => 0],
    "StadeRennais" => ["points" => 0, "matchs_joués" => 0, "victoires" => 0, "matchs_nuls" => 0, "défaites" => 0],
    "OGCNice" => ["points" => 0, "matchs_joués" => 0, "victoires" => 0, "matchs_nuls" => 0, "défaites" => 0]
];

// Fonction pour simuler un match
function playMatch($clubA, $clubB){
    $scoreA = rand(0, 3);
    $scoreB = rand(0, 3);
    return [$scoreA, $scoreB];
}

// Fonction pour mettre à jour les stats
function updateStats(&$clubs, $clubA, $clubB, $scoreA, $scoreB){
    $clubs[$clubA]['matchs_joués']++;
    $clubs[$clubB]['matchs_joués']++;

    if ($scoreA > $scoreB) {
        $clubs[$clubA]['points'] += VICTORY_POINTS;
        $clubs[$clubA]['victoires']++;
        $clubs[$clubB]['défaites']++;
    } elseif ($scoreA < $scoreB) {
        $clubs[$clubB]['points'] += VICTORY_POINTS;
        $clubs[$clubB]['victoires']++;
        $clubs[$clubA]['défaites']++;
    } else {
        $clubs[$clubA]['points'] += DRAW_POINTS;
        $clubs[$clubB]['points'] += DRAW_POINTS;
        $clubs[$clubA]['matchs_nuls']++;
        $clubs[$clubB]['matchs_nuls']++;
    }
}

// Fonction pour afficher le résultat
function printMatchResult($clubA, $clubB, $scoreA, $scoreB)
{
    echo "
    <div class='match-result box'>
        <p>
        <i class='fas fa-futbol'></i> <strong>$clubA</strong> $scoreA - $scoreB <strong>$clubB</strong>
        <span style='margin-left:10px; color:gray;'><i class='fa-solid fa-chart-line'></i></span>
        </p>
    </div";
}

// Faire jouer tous les matchs (round-robin)
$clubNames = array_keys($clubs);
$nbClubs = count($clubNames);

for ($i = 0; $i < $nbClubs; $i++) {
    for ($j = $i + 1; $j < $nbClubs; $j++) {
        $clubA = $clubNames[$i];
        $clubB = $clubNames[$j];

        list($scoreA, $scoreB) = playMatch($clubA, $clubB);
        updateStats($clubs, $clubA, $clubB, $scoreA, $scoreB);
        printMatchResult($clubA, $clubB, $scoreA, $scoreB);
    }
}

// Affichage des stats finales
echo "<h3>Classement final</h3>
        <table class='classement'>
        <thead>
        <tr>
            <th>Club</th>
            <th>Pts</th>
            <th>J</th>
            <th>V</th>
            <th>N</th>
            <th>D</th>
        </tr>
        </thead><tbody>";

foreach ($clubs as $nom => $stats) {
    echo "<tr>
        <td><i class='fas fa-shield-alt'></i> $nom</td>
        <td>{$stats['points']}</td>
        <td>{$stats['matchs_joués']}</td>
        <td>{$stats['victoires']}</td>
        <td>{$stats['matchs_nuls']}</td>
        <td>{$stats['défaites']}</td>
    </tr>";
}
echo "</tbody></table>";
?>

</section>

<?php 
include __DIR__ . '/../inc/footer.php';
?>