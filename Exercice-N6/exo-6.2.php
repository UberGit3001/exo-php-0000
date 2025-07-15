<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-6.2-PHP</h2>
<section class="container">
<?php
    $eleves = [
        "Alice"  => 15,
        "Benoît" => 9,
        "Claire" => 18,
        "David"  => 11
    ];

    $compteur = 0;

    foreach ($eleves as $nom => $note) {
        echo "$nom a obtenu $note/20 <br>";
        if ($note >= 10) {
            $compteur++;
        }
    }

    echo "Nombre d'élèves ayant la moyenne : $compteur";
?>


</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
