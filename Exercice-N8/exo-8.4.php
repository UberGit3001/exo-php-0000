<?php 
include __DIR__ . '/../inc/header.php';
?>

<h2>Exo 8.4 - Championnat</h2>
<section class="container">

<?php
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
// Fonction pour faire jouer un match entre deux équipes
function playMatch(&$clubs, $team1, $team2) {
    // Scores aléatoires
    $score1 = rand(0, 5);
    $score2 = rand(0, 5);

    // Mise à jour des matchs joués
    $clubs[$team1]['matchs_joués']++;
    $clubs[$team2]['matchs_joués']++;

    if ($score1 > $score2) {
        // Victoire équipe 1
        $clubs[$team1]['points'] += 3;
        $clubs[$team1]['victoires']++;
        $clubs[$team2]['défaites']++;
    } elseif ($score2 > $score1) {
        // Victoire équipe 2
        $clubs[$team2]['points'] += 3;
        $clubs[$team2]['victoires']++;
        $clubs[$team1]['défaites']++;
    } else {
        // Match nul
        $clubs[$team1]['points'] += 1;
        $clubs[$team2]['points'] += 1;
        $clubs[$team1]['matchs_nuls']++;
        $clubs[$team2]['matchs_nuls']++;
    }

    printMatchResult($team1, $score1, $team2, $score2);
}

// Affiche le résultat d'un match
function printMatchResult($team1, $score1, $team2, $score2) {
    echo "<p><i class='fas fa-futbol'></i> $team1 $score1 - $score2 $team2</p>";
}

// Fonction de départage : points > victoires > nom alphabétique
function sortByPoints($a, $b) {
    if ($a['points'] !== $b['points']) {
        return $b['points'] - $a['points'];
    }
    if ($a['victoires'] !== $b['victoires']) {
        return $b['victoires'] - $a['victoires'];
    }
    return 0;
}

// Fonction de reset
function resetTournament(&$clubs) {
    foreach ($clubs as &$club) {
        $club['points'] = 0;
        $club['matchs_joués'] = 0;
        $club['victoires'] = 0;
        $club['matchs_nuls'] = 0;
        $club['défaites'] = 0;
    }
}

// Lancer les matchs entre toutes les équipes (round robin)
$clubNames = array_keys($clubs);
$total = count($clubNames);
for ($i = 0; $i < $total; $i++) {
    for ($j = $i + 1; $j < $total; $j++) {
        playMatch($clubs, $clubNames[$i], $clubNames[$j]);
    }
}

// Trie les clubs par score
uasort($clubs, 'sortByPoints');

// Affiche le tableau final
echo "<h2><i class='fas fa-trophy'></i> Classement final</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<thead><tr>
        <th>Rang</th>
        <th>Équipe</th>
        <th>Points</th>
        <th>Victoires</th>
        <th>Nuls</th>
        <th>Défaites</th>
        <th>Matchs joués</th>
    </tr></thead><tbody>";

$rank = 1;
$first = true;
foreach ($clubs as $club => $stats) {
    echo "<tr>";
    echo "<td>$rank</td>";
    echo "<td>$club";
    if ($first) {
        echo " <i class='fas fa-crown'></i>&nbsp;<i class='fas fa-trophy'></i>";
        $first = false;
    }
    echo "</td>";
    echo "<td>{$stats['points']}</td>";
    echo "<td>{$stats['victoires']}</td>";
    echo "<td>{$stats['matchs_nuls']}</td>";
    echo "<td>{$stats['défaites']}</td>";
    echo "<td>{$stats['matchs_joués']}</td>";
    echo "</tr>";
    $rank++;
}
echo "</tbody></table>";
?>

</section>

<?php 
include __DIR__ . '/../inc/footer.php';
?>