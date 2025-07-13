<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo3.2-PHP</h2>
<section class="container">
<?php
$a = 5;
$b = 10;

echo "a == b donne " . (($a == $b) ? 'true' : 'false') . "<br>";
echo "a != b donne " . (($a != $b) ? 'true' : 'false') . "<br>";
echo "a > b donne " . (($a > $b) ? 'true' : 'false') . "<br>";
echo "a < b donne " . (($a < $b) ? 'true' : 'false') . "<br>";
echo "a >= b donne " . (($a >= $b) ? 'true' : 'false') . "<br>";
echo "a <= b donne " . (($a <= $b) ? 'true' : 'false') . "<br>";
?>
</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>

