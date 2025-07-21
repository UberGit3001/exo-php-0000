<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-7.5-PHP</h2>
<section class="container">

    <?php
    // Fonction qui affiche les nombres pairs ou impairs entre $debut et $fin
    function afficherNombres($debut, $fin, $type) {
        // On parcourt chaque nombre de $debut jusqu'à $fin
        for ($i = $debut; $i <= $fin; $i++) {
            // Si on veut afficher les nombres pairs
            if ($type === "pair" && $i % 2 === 0) {
                echo $i . " est pair<br />";
            }
            // Si on veut afficher les nombres impairs
            elseif ($type === "impair" && $i % 2 !== 0) {
                echo $i . " est impair<br />";
            }
        }
    }
    echo '<div class="box box1">';        
    // 1. Afficher tous les nombres **pairs** de 7 à 99
    echo "<h3>Nombres pairs de 7 à 99 :</h3>";
    afficherNombres(7, 99, "pair");
    echo '</div>';
  
    echo '<div class="box box2">';
    // 2. Afficher tous les nombres **impairs** de 59 à 169
    echo "<h3>Nombres impairs de 59 à 169 :</h3>";
    afficherNombres(59, 169, "impair");
    echo '</div>';
    ?>
    
   



</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
