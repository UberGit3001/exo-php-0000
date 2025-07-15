<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-4.3-PHP</h2>
<section class="container">
<?php
 $status = "en cours"; 
//  $status = "expédiée"; 
//  $status = "livrée"; 
//  $status = "annulée"; 
$message = match ($status) {
    "en cours"   => "Votre commande est en cours de traitement.",
    "expédiée"  => "Votre commande a été expédiée.",
    "livrée" => "Votre commande a été livrée.",
    "annulée"=> "Votre commande a été annulée.",
    default    => "Statut inconnu.",
};
echo $message;
  ?>
</section>


<?php 
    include __DIR__ . '/../inc/footer.php';
?>
