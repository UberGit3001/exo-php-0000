<?php 
    include __DIR__ . '/../inc/header.php';
?>

<h2>exo-4.2-PHP</h2>
<section class="container">
<?php
  $jour = "lundi";

  switch ($jour) {
    case "Lundi":
      echo "jour ouvré";
      break;
    case "Mardi":
      echo "jour ouvré";
      break;
    case "Mercredi":
      echo "jour ouvré";
      break;
    case "Jeudi":
      echo "jour ouvré";
      break;
    case "Vendredi":
      echo "jour ouvré";
      break;
    case "Samedi":
      echo "week-end";
      break;
    case "Dimanche":
      echo "week-end";
      break;

      default:
      echo "la variable jour = ". $jour .", n'existe pas dans la liste !!!! car PHP est sensible a la casse ";
      
    }

?>
</section>
<?php 
    include __DIR__ . '/../inc/footer.php';
?>
