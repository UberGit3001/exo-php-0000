<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"me.php"</title>
</head>
<body>
    <?php 
    $nom = 'Mehdi';
    $ville = 'Marseille';
    $age = 50;
    
    // Je m'appelle [x], j'ai [x] ans et j'habite à [x].
    echo 'je m\'appelle ". $nom .", j\'ai ". $age ." ans et j\'habite à ". $ville ." "."';  
    
    echo "Je m'appelle $nom, j'ai $age ans et j'habite à $ville.";?>
    <?php echo 'Je m\'appelle ' . $nom . ', j\'ai ' . $age . ' ans et j\'habite à ' . $ville . '.';
    
    
    ?>

   
</body>
</html>