<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-3.4-php</title>
</head>
<body>
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

</body>
</html>