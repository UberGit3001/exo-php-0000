<?php 
include __DIR__ . '/../inc/header.php';
?>

<h2>Exo 9.1 - Championnat</h2>
<section class="container">
<?php

// Commandes de potions
// Chaque potion a un coût de production différent
$commandes = [
['id' => 1,'client' => 'Harry', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
['id' => 2,'client' => 'Hermione','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
['id' => 3,'client' => 'Ron', 'potion' => 'Courage','prix' => 29.99, 'etat' => 'préparation'],
['id' => 4,'client' => 'Drago', 'potion' => 'Puissance','prix' => 59.00, 'etat' => 'payé'],
['id' => 5,'client' => 'Luna','potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
['id' => 6,'client' => 'Neville', 'potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
['id' => 7,'client' => 'Ginny', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'préparation'],
['id' => 8,'client' => 'Sirius','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
['id' => 9,'client' => 'Remus', 'potion' => 'Loup-Garou', 'prix' => 70.00,'etat' => 'impayé'],
['id' => 10, 'client' => 'Tonks', 'potion' => 'Caméléon', 'prix' => 56.20, 'etat' => 'préparation'],
['id' => 11, 'client' => 'Fred','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
['id' => 12, 'client' => 'George','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
['id' => 13, 'client' => 'Dumbledore','potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'payé'],
['id' => 14, 'client' => 'Hagrid','potion' => 'Puissance','prix' => 59.00, 'etat' => 'préparation'],
['id' => 15, 'client' => 'McGonagall','potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
['id' => 16, 'client' => 'Cho', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'impayé'],
['id' => 17, 'client' => 'Seamus','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
['id' => 18, 'client' => 'Dean','potion' => 'Courage','prix' => 29.99, 'etat' => 'payé'],
['id' => 19, 'client' => 'Firenze', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
['id' => 20, 'client' => 'Krum','potion' => 'Courage','prix' => 29.99, 'etat' => 'impayé'],
['id' => 21, 'client' => 'Fleur', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'payé'],
['id' => 22, 'client' => 'Bill','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
['id' => 23, 'client' => 'Molly', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'préparation'],
['id' => 24, 'client' => 'Arthur','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
['id' => 25, 'client' => 'Percy', 'potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
['id' => 26, 'client' => 'Lavande', 'potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
['id' => 27, 'client' => 'Trelawney', 'potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'préparation'],
['id' => 28, 'client' => 'Kingsley','potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
['id' => 29, 'client' => 'Barty', 'potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'impayé'],
['id' => 30, 'client' => 'Dolores', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
];

// Coûts de production des potions

$coutsProduction = [
    'Invisibilité'   => 15.00,
    'Explosion'      => 10.00,
    'Mémoire'        => 14.00,
    'Courage'        => 12.00,
    'Puissance'      => 18.00,
    'Rêves'          => 13.00,
    'Charme'         => 11.00,
    'Métamorphose'   => 20.00,
    'Loup-Garou'     => 22.00,
    'Caméléon'       => 16.00,
    'Sérénité'       => 25.00,
    'Concentration'  => 17.00,
];


//Nombre total de commandes
$totalCommandes = count($commandes);

echo "<p>Nombre total de commandes : <strong>$totalCommandes</strong></p>&nbsp;";

//  Nombre de commandes impayées
$commandesImpayees = array_filter($commandes, function($commande) {
    return $commande['etat'] === 'impayé';
});

echo "<p>&nbsp;Nombre de commandes impayées : <strong>" . count($commandesImpayees) . "</strong></p>&nbsp;";

//  Nombre de commandes en préparation
$commandesPreparation = array_filter($commandes, function($commande) {
    return $commande['etat'] === 'préparation';
});
echo "<p>&nbsp;Nombre de commandes en préparation : <strong>" . count($commandesPreparation) . "</strong></p>&nbsp;";

//  Nombre de clients différents
$clients = array_sum(array_map(function($commande){
    return $commande['id'];

}, $commandes));
echo "<p>&nbsp;Nombre de clients différents : <strong>" . count(array_unique(array_column($commandes, 'id'))) . "</strong></p>&nbsp;";

// Chiffre d'affaires (CA) total (commandes payées uniquement)
$caTotal = array_reduce($commandes, function($carry, $commande) {
    return $carry + ($commande['etat'] === 'payé' ? $commande['prix'] : 0);
}, 0);
echo "<p>&nbsp;Chiffre d'affaires total : <strong>" . number_format($caTotal, 2, ',', ' ') . " €</strong></p>&nbsp;";

// On initialise les totaux à 0
$caTotal = 0;       // Chiffre d'affaires total
$caImpayé = 0;      // Montant total des commandes non payées

$caPréparation = 0; // Montant total des commandes en préparation
$caPayé = 0;        // Montant total des commandes payées

// On parcourt chaque commande du tableau
foreach ($commandes as $commande) {
    // On ajoute le prix de chaque commande au chiffre d'affaires total
    $caTotal += $commande['prix'];

    // Si la commande n'est pas payée, on ajoute son prix au total des impayés
    if ($commande['etat'] !== 'payé') {
        $caImpayé += $commande['prix'];
    }
}

// Calcul du pourcentage des impayés
// Si $caTotal > 0, on calcule normalement, sinon on évite la division par zéro
$pourcentageImpayé = $caTotal > 0 ? ($caImpayé / $caTotal) * 100 : 0;


// AFFICHAGE DES RÉSULTATS
echo "&nbsp;<p><strong>Chiffre d'affaires total :</strong>&nbsp;" . number_format($caTotal, 2, ',', ' ') . " €</p>&nbsp;";
echo "&nbsp;<p><strong>Montant impayé :</strong>&nbsp;" . number_format($caImpayé, 2, ',', ' ') . " €</p>&nbsp;";
echo "&nbsp;<p><strong>Pourcentage impayé :</strong>&nbsp;" . number_format($pourcentageImpayé, 2, ',', ' ') . " %</p>&nbsp;";


// Montant et pourcentage du CA en préparation

// Initialisation des totaux
$caTotal = 0;           // Chiffre d'affaires total
$caImpayé = 0;          // Montant total des commandes non payées
$caPreparation = 0;     // Montant total des commandes en préparation

foreach ($commandes as $commande) {
    if ($commande['etat'] === 'préparation') {
        $caPreparation += $commande['prix'];
    }
}
// Parcours du tableau
foreach ($commandes as $commande) {
    // Ajout au CA total
    $caTotal += $commande['prix'];

    // Si non payé
    if ($commande['etat'] === 'non payé') {
        $caImpayé += $commande['prix'];
    }

    // Si en préparation
    if ($commande['etat'] === 'en préparation') {
        $caPreparation += $commande['prix'];
    }
}

// Calculs des pourcentages
$pourcentageImpayé = $caTotal > 0 ? ($caImpayé / $caTotal) * 100 : 0;
$pourcentagePreparation = $caTotal > 0 ? ($caPreparation / $caTotal) * 100 : 0;

// AFFICHAGE
echo "<p><strong>Chiffre d'affaires total :</strong> " . number_format($caTotal, 2, ',', ' ') . " €</p>";
echo "<p><strong>Montant impayé :</strong> " . number_format($caImpayé, 2, ',', ' ') . " €</p>";
echo "<p><strong>Pourcentage impayé :</strong> " . number_format($pourcentageImpayé, 2, ',', ' ') . " %</p>";
echo "<p><strong>Montant en préparation :</strong> " . number_format($caPreparation, 2, ',', ' ') . " €</p>";
echo "<p><strong>Pourcentage en préparation :</strong> " . number_format($pourcentagePreparation, 2, ',', ' ') . " %</p>";


?>



</section>

<?php 
include __DIR__ . '/../inc/footer.php';
?>