<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-7.6-PHP</h2>
<section class="container">

  <?php
// Fonction qui affiche la table de multiplication d’un nombre donné
function tableMultiplication($nombre) {
    echo "<h3>Table de $nombre</h3>";
    
    // On boucle de 1 à 10
    for ($i = 1; $i <= 10; $i++) {
        // On affiche la multiplication
        echo "$nombre x $i = " . ($nombre * $i) . "<br />";
    }
}

// Exemple : Afficher la table du 1
tableMultiplication(1);

// Tu peux tester avec d’autres tables aussi, comme :
tableMultiplication(5);
tableMultiplication(9);
?>



</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
