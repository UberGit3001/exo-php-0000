<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-4.1.1-PHP (if...elseif...else)</h2>
<section class="container">
<?php
    // Avec if...elseif...else
    // $role = "admin"; 
    $role = "éditeur";
     // $role = "visiteur"; 
     echo "<p>";

    if ($role === "admin") {
        echo "Accès complet autorisé";
    } elseif ($role === "éditeur") {
        echo "Accès limité aux modifications";
    } elseif ($role === "visiteur") {
        echo "Accès lecture seule";
    } else {
        echo "Rôle inconnu";
    }
    echo "</p>";  
?>
</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
