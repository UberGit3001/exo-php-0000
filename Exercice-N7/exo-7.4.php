<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-7.4-PHP</h2>
<section class="container">

<?php
$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

function calculerMoyenne($eleve) {
    // On additionne les notes
    $somme = $eleve["maths"] + $eleve["francais"] + $eleve["histoire"];
    $moyenne = $somme / 3;
    return $moyenne;
}
// $moyenne = calculerMoyenne(0);
// ============================================================

function estAdmis($moyenne) {
    return $moyenne >= 10;
}
$moyenne = calculerMoyenne(0);

// ======================================

foreach ($classe as $eleve) {
    $prenom = $eleve["prenom"];
    $moyenne = calculerMoyenne($eleve);
    $admission = estAdmis($moyenne) ? "Admis " : "Non admis ";

    echo "Prénom : $prenom<br>";
    echo "Moyenne : " . number_format($moyenne, 2) . "<br>";
    echo "Résultat : $admission<br><br>";
}


?>

</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
