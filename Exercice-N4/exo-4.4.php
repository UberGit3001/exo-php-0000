<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-4.4-PHP</h2>
<section class="container">
<?php
// $temperature = 25;
// $temperature = 19;
// $temperature = -1;


$temperature = 33;

echo ($temperature < 0) 
    ? "Glacial" 
    : (($temperature < 10) 
        ? "Froid" 
        : (($temperature <= 20) 
            ? "Doux" 
            : (($temperature <= 30) 
                ? "Chaud" 
                : "Très chaud")));



?> 
 
</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
