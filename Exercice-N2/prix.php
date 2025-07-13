<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-2.2-PHP</h2>
<section class="container">
<?php
    const TVA = 0.2;           // Déclaration de la constante TVA
    $prix_HT = 20;             // Prix hors taxe
    // $prix_HT = 27.5;        // changer pour test du Prix hors taxe
    $prix_TTC = ($prix_HT * TVA) + $prix_HT;   // Calcul du prix TTC

    echo "Le prix toutes taxes comprises est de " . $prix_TTC . " € TTC";
    ?>
    </section>
    
<?php 
    include __DIR__ . '/../inc/footer.php';
?>
