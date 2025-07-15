<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-4.1.2-PHP (switch)</h2>
<section class="container">
<?php
    // Déclaration du rôle
    $role = "admin"; 
    // $role = "éditeur"; 
    // $role = "visiteur"; 


    // Affichage avec mise en forme HTML
    echo "<p>";
    switch ($role) {
        case "admin":
            echo "Accès complet autorisé.";
            break;
        case "éditeur":
            echo "Accès limité aux modifications.";
            break;
        case "visiteur":
            echo "Accès lecture seule.";
            break;
        default:
            echo "Rôle inconnu.";
    }
    echo "</p>";
?>
</section>

<?php 
    include __DIR__ . '/../inc/footer.php';
?>
