<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-8.1-PHP</h2>
<section class="container">
<?php
// =====================
// DÉCLARATION DE CONSTANTES
// =====================

// Constante pour les points gagnés lors d'une victoire
const POINTS_VICTOIRE = 3;

// Constante pour les points gagnés lors d'un match nul
const POINTS_MATCH_NUL = 1;

// Constante pour les points gagnés lors d'une défaite
const POINTS_DEFAITE = 0;


// =====================
// TABLEAU ASSOCIATIF DES ÉQUIPES
// =====================

$clubs = [
    "OM" => [
        "points" => 0,
        "matchs_joués" => 0,
        "victoires" => 0,
        "matchs_nuls" => 0,
        "défaites" => 0
    ],
    "PSG" => [
        "points" => 0,
        "matchs_joués" => 0,
        "victoires" => 0,
        "matchs_nuls" => 0,
        "défaites" => 0
    ],
    "OL" => [
        "points" => 0,
        "matchs_joués" => 0,
        "victoires" => 0,
        "matchs_nuls" => 0,
        "défaites" => 0
    ],
    "ASMonaco" => [
        "points" => 0,
        "matchs_joués" => 0,
        "victoires" => 0,
        "matchs_nuls" => 0,
        "défaites" => 0
    ],
    "RCLens" => [
        "points" => 0,
        "matchs_joués" => 0,
        "victoires" => 0,
        "matchs_nuls" => 0,
        "défaites" => 0
    ],
    "LOSC" => [
        "points" => 0,
        "matchs_joués" => 0,
        "victoires" => 0,
        "matchs_nuls" => 0,
        "défaites" => 0
    ],
    "StadeRennais" => [
        "points" => 0,
        "matchs_joués" => 0,
        "victoires" => 0,
        "matchs_nuls" => 0,
        "défaites" => 0
    ],
    "OGCNice" => [
        "points" => 0,
        "matchs_joués" => 0,
        "victoires" => 0,
        "matchs_nuls" => 0,
        "défaites" => 0
    ]
];


// =====================
// AFFICHAGE SIMPLE POUR VÉRIFIER
// =====================

// afficher le tableau pour vérifier la structure
echo "<pre>";
 print_r($clubs); // <pre> pour un affichage lisible en HTML
echo "</pre>";


?>
</section>
<?php 
    include __DIR__ . '/../inc/footer.php';
?>
