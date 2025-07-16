<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-7.2-PHP</h2>
<section class="container">


<?php
function afficherEtoile($nbr) {
    // Affiche une ligne contenant $nbr étoiles
    for ($i = 1; $i <= $nbr; $i++) {
        echo "*";
    }
    echo "<br>"; // Retour à la ligne HTML
}

// Génère la pyramide d'étoiles
for ($i = 1; $i <= 5; $i++) {
    afficherEtoile(nbr: $i);
}
?>


</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
