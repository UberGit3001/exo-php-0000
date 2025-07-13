<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo3.3-PHP</h2>
<section class="container">
<?php
    $x = true;
    $y = false;

    echo "x AND y donne " . (($x && $y) ? 'true' : 'false') . "<br>";
    echo "x OR y donne " . (($x || $y) ? 'true' : 'false') . "<br>";
    echo "x XOR y donne " . (($x xor $y) ? 'true' : 'false') . "<br>";
?>
</section>
<?php 
    include __DIR__ . '/../inc/footer.php';
?>

