<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-6.4-PHP</h2>
<section class="container">
<?php
    $temperatures = [30, 32, 34, 30, 35, 34, 31];
    $somme = 0;

    foreach ($temperatures as $temp) {
        $somme += $temp;
    }

    $moyenne = $somme / count($temperatures);
    echo "Température moyenne : " . round($moyenne, 2) . "°C";
?>


</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>