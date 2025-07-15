<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-6.1-PHP</h2>
<section class="container">
    
<?php
$villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];

// 1. Affiche “Marseille”
echo $villes[4] . "<br>";

// 2. Modifie “Monaco” par “Nice”
$villes[0] = "Nice";

// 3. Ajoute “Reims”
$villes[] = "Reims";

// 4. Affiche le nombre de villes
echo "Nombre de villes : " . count($villes) . "<br>";

// 5. Affiche toutes les villes avec foreach
foreach ($villes as $ville) {
    echo $ville . "<br>";
}
?>

</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
