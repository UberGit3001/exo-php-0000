<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-7.3-PHP</h2>
<section class="container">
    
<?php
function calculImpots($revenu) {
    $impot = 0;

    // Tranche 5 : au-delà de 50 000€ => 35%
    if ($revenu > 50000) {
        $impot += ($revenu - 50000) * 0.35;
        $revenu = 50000;
    }

    // Tranche 4 : de 35 000€ à 49 999€ => 25%
    if ($revenu > 35000) {
        $impot += ($revenu - 35000) * 0.25;
        $revenu = 35000;
    }

    // Tranche 3 : de 20 000€ à 34 999€ => 18%
    if ($revenu > 20000) {
        $impot += ($revenu - 20000) * 0.18;
        $revenu = 20000;
    }

    // Tranche 2 : de 10 000€ à 19 999€ => 10%
    if ($revenu > 10000) {
        $impot += ($revenu - 10000) * 0.10;
        $revenu = 10000;
    }

    // Tranche 1 : de 0€ à 9 999€ => 0% (pas d'impôt)
    // Donc rien à ajouter ici

    return $impot;
}

// Calcul l’impôt si le revenu est de 16 000€
echo calculImpots(16000) . " € d'impôts sur 16000 € de revenus annuel" . "<br />"; // Affiche : 600€

// Calcul l’impôt si le revenu est de 38 000€
echo calculImpots(38000) . " € d'impôts sur 38000 € de revenus annuel" . "<br />"; // Affiche : 4450€

// Calcul l’impôt si le revenu est de 64 000€
echo calculImpots(64000) . " € d'impôts sur 38000 € de revenus annuel" . "<br />"; // Affiche : 12350€


?>

</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
