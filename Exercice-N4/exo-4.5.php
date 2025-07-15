<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-4.5-PHP</h2>
<section class="container">
<?php
$size = "M"; // les tailles : "S", "M", "L", "XL"

const TVA = 0.20; // 20% de TVA

// Détermination du prix HT
switch ($size) {
    case "S":
        $prix_HT = 10;
        break;
    case "M":
        $prix_HT = 12;
        break;
    case "L":
        $prix_HT = 14;
        break;
    case "XL":
        $prix_HT = 16;
        break;
    default:
        echo "Taille inconnue.";
        exit();
}

// Calcul du prix TTC
$prix_TTC = $prix_HT + ($prix_HT * TVA);

// Affichage du résultat avec 2 décimales
echo "Le prix du t-shirt taille $size est de " . number_format($prix_TTC, 2, ',', ' ') . " € TTC ($prix_HT € HT + " . (TVA * 100) . "% TVA).";
?>

</section>
<?php 
    include __DIR__ . '/../inc/footer.php';
?>
