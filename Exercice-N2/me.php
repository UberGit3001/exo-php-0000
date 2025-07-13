<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-2.1-PHP</h2>
<section class="container">
<?php 
    $nom = 'Mehdi';
    $ville = 'Marseille';
    $age = 50;

    // Affichage avec double quotes : interpolation automatique
    echo "Je m'appelle $nom, j'ai $age ans et j'habite à $ville.<br>";

    // Affichage avec simple quotes + concaténation
    echo 'Je m\'appelle ' . $nom . ', j\'ai ' . $age . ' ans et j\'habite à ' . $ville . '.<br>';
?>
</section>
<?php
    include __DIR__ . '/../inc/footer.php';
?>
