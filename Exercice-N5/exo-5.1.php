<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-5.1-PHP</h2>
<section class="container">

    
<?php
    $i = 1;
    while ($i <= 20) {
        echo $i;
        if ($i < 20) {
            echo " / ";
        }
        $i++;
    }
?>

</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
