
<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-5.5-PHP</h2>
<section class="container">
    
<?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
}
?>
</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
