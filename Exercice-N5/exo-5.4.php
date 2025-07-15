<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-5.4-PHP</h2>
<section class="container">

    
<?php
    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
        $sum += $i;
    }
    echo "La somme des nombres de 1 à 100 est : $sum";
?>

</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
