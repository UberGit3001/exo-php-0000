<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-6.5-PHP</h2>
<section class="container">
<?php
    $commandes = [
        ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
        ["client" => "Bob", "montant_ht" => 75, "statut" => "en attente"],
        ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
        ["client" => "David", "montant_ht" => 50, "statut" => "en attente"]
    ];

    define("TVA", 0.20);

    $totalHT = 0;
    $totalTTC = 0;
    $impayes = 0;

    foreach ($commandes as $commande) {
        $montant_ht = $commande["montant_ht"];
        $montant_ttc = $montant_ht * (1 + TVA);
        echo "Commande de {$commande["client"]} : $montant_ht € HT, " . round($montant_ttc, 2) . " € TTC – " . strtoupper($commande["statut"]) . "<br>";

        $totalHT += $montant_ht;
        $totalTTC += $montant_ttc;

        if ($commande["statut"] === "en attente") {
            $impayes += $montant_ttc;
        }
    }

    echo "<br>Chiffre d’affaires HT : $totalHT €<br>";
    echo "Chiffre d’affaires TTC : " . round($totalTTC, 2) . " €<br>";
    echo "Montant non réglé : " . round($impayes, 2) . " €<br>";
    echo "Pourcentage non réglé : " . round(($impayes / $totalTTC) * 100, 2) . " %<br>";
?>


</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>