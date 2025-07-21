<?php 
    include __DIR__ . '/../inc/header.php';
?>


<h2>exo-6.5-PHP</h2>
<section class="container">

<?php
    $eleves = [
        "Alice" => ["maths" => 15,
                    "francais" => 14,
                    "anglais" => 13],
        "Bob" => ["maths" => 8,
                  "francais" => 10, 
                  "anglais" => 11],
        "Claire" => ["maths" => 18, 
                     "francais" => 17, 
                     "anglais" => 19]
    ];

    // 1. Moyenne individuelle + appréciation
    foreach ($eleves as $nom => $notes) {
        $somme = array_sum($notes);
        $moyenne = $somme / count($notes);
       
        
        if ($moyenne < 10) {
            $appreciation = "Échec";
        } elseif ($moyenne < 12) {
            $appreciation = "Peut mieux faire";
        } elseif ($moyenne <= 15) {
            $appreciation = "Bon travail";
        } else {
            $appreciation = "Excellent";
        }

        echo "$nom : Moyenne = " . round($moyenne, 2) . " - $appreciation<br>";
    }

    // 2. Moyenne par matière
    $matieres = ["maths", "francais", "anglais"];
    foreach ($matieres as $matiere) {
        $somme = 0;
        foreach ($eleves as $notes) {
            $somme += $notes[$matiere];
        }
        $moyenne = $somme / count($eleves);
        echo "Moyenne en $matiere : " . round($moyenne, 2) . "<br>";
    }
?>



</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>