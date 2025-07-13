<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo3.1-PHP</h2>
<section class="container">
<?php
    $a = 5;
    $b = 10;

    $som = $a + $b;
    $diff = $a - $b;
    $prod = $a * $b;
    $quot = $a / $b;
    $rest = $a % $b;

    echo "La somme de a et b est $som.<br>";
    echo "La différence de a et b est $diff.<br>";
    echo "Le produit de a et b est $prod.<br>";
    echo "Le quotient de a et b est $quot.<br>";
    echo "Le reste de a et b est $rest.<br>";
?>
</section>
<?php 
    include __DIR__ . '/../inc/footer.php';
?>
