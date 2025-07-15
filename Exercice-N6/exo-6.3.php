<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-6.3-PHP</h2>
<section class="container">
    <?php
$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
];

// 1. Nombre de casquettes
echo "Stock de casquettes : " . $produits[1]["stock"] . "<br>";

// 2. Ajoute 25 vestes à 40€
$produits[] = ["nom" => "Veste", "prix" => 40, "stock" => 25];

// 3. Affichage dans un tableau HTML
echo "<table border='1' cellpadding='5'>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix (€)</th>
                <th>Stock</th>
                <th>CA potentiel (€)</th>
            </tr>
        </thead>
        <tbody>";

foreach ($produits as $produit) {
    $ca = $produit["prix"] * $produit["stock"];
    echo "<tr>
            <td>{$produit["nom"]}</td>
            <td>{$produit["prix"]}</td>
            <td>{$produit["stock"]}</td>
            <td>$ca</td>
        </tr>";
}

echo "</tbody></table>";
?>

</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>