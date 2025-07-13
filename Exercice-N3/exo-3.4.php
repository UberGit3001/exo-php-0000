<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo3.4-PHP</h2>
<section class="container">
<?php
    $a = 5;
    $b = 10;
    $c = 3;

    // Ajoute $a à $b
    $b += $a;
    echo "Après addition : b = $b<br>";

    // Multiplie $b par $c
    $b *= $c;
    echo "Après multiplication : b = $b<br>";

    // Divise $b par $a
    $b /= $a;
    echo "Après division : b = $b<br>";

    // Soustrait $c de $b
    $b -= $c;
    echo "Après soustraction : b = $b<br>";

    // Reste de $b divisé par $c
    $b %= $c;
    echo "Après modulo : b = $b<br>";
?>
</section>
<?php 
    include __DIR__ . '/../inc/footer.php';
?>

