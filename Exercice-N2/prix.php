<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prix.php</title>
</head>
<body>

 <?php
const TVA = 0.2;           // Déclaration de la constante TVA
$prix_HT = 20;             // Prix hors taxe
// $prix_HT = 27.5;        // changer pour test du Prix hors taxe
$prix_TTC = ($prix_HT * TVA) + $prix_HT;   // Calcul du prix TTC

echo "Le prix toutes taxes comprises est de " . $prix_TTC . " € TTC";
?>

    
</body>
</html>