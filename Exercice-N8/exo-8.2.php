<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-8.2-PHP</h2>
<section class="container" >
<?php 
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

// Fonction 1 : joue un match entre deux clubs
function playMatch($team1, $team2) {
    $score1 = rand(0, 5);
    $score2 = rand(0, 5);
    return ['team1_score' => $score1, 'team2_score' => $score2];
}

// Fonction 2 : met à jour les stats
function updateStats(&$clubs, $team1, $team2, $score1, $score2) {
    $clubs[$team1]['matchs_joués']++;
    $clubs[$team2]['matchs_joués']++;

    if ($score1 > $score2) {
        $clubs[$team1]['victoires']++;
        $clubs[$team1]['points'] += 3;
        $clubs[$team2]['défaites']++;
    } elseif ($score1 < $score2) {
        $clubs[$team2]['victoires']++;
        $clubs[$team2]['points'] += 3;
        $clubs[$team1]['défaites']++;
    } else {
        $clubs[$team1]['matchs_nuls']++;
        $clubs[$team2]['matchs_nuls']++;
        $clubs[$team1]['points'] += 1;
        $clubs[$team2]['points'] += 1;
    }
}

// Fonction 3 : affiche le résultat du match
function printMatchResult($team1, $team2, $score1, $score2) {
    echo "<p>⚽ <strong>$team1</strong> $score1 - $score2 <strong>$team2</strong></p>";
}

// Simule tous les matchs
$allClubs = array_keys($clubs);
for ($i = 0; $i < count($allClubs); $i++) {
    for ($j = $i + 1; $j < count($allClubs); $j++) {
        $team1 = $allClubs[$i];
        $team2 = $allClubs[$j];
        $match = playMatch($team1, $team2);
        printMatchResult($team1, $team2, $match['team1_score'], $match['team2_score']);
        updateStats($clubs, $team1, $team2, $match['team1_score'], $match['team2_score']);
    }
}
?>

<!-- Affichage du tableau -->
<h3>Classement final</h3>
<table style="border-collapse: collapse; width: 100%; text-align: center;">
    <thead>
        <tr style="background-color: #222; color: #fff;">
            <th>Club</th>
            <th style="background:#f0f0f0;">MJ</th>
            <th style="background:#d4edda;">V</th>
            <th style="background:#ffeeba;">N</th>
            <th style="background:#f8d7da;">D</th>
            <th style="background:#cce5ff;">Pts</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Tri du classement
        uasort($clubs, function($a, $b) {
            return $b['points'] <=> $a['points'];
        });

        foreach ($clubs as $club => $stats) {
            echo "<tr>";
            echo "<td style='font-weight:bold;'>$club</td>";
            echo "<td style='background:#f0f0f0;'>{$stats['matchs_joués']}</td>";
            echo "<td style='background:#d4edda;'>{$stats['victoires']}</td>";
            echo "<td style='background:#ffeeba;'>{$stats['matchs_nuls']}</td>";
            echo "<td style='background:#f8d7da;'>{$stats['défaites']}</td>";
            echo "<td style='background:#cce5ff; font-weight:bold;'>{$stats['points']}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
