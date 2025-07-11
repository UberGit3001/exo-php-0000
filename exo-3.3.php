<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-3.3-php</title>
</head>
<body>
    <?php
$x = true;
$y = false;

echo "x AND y donne " . (($x && $y) ? 'true' : 'false') . "<br>";
echo "x OR y donne " . (($x || $y) ? 'true' : 'false') . "<br>";
echo "x XOR y donne " . (($x xor $y) ? 'true' : 'false') . "<br>";
?>

</body>
</html>