<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exo php N°0000</title>
</head>
<body>
    <section class="exo1">
        <div class="bonjours">    
            <h1><?php echo"Hello World Aurélien"; ?></h1>
            <h2><?php echo"Hello World Aurélien"; ?></h2>
            <h3><?php echo"Hello World Aurélien"; ?></h3>
            <h4><?php echo"Hello World Aurélien"; ?></h4>
            <h5><?php echo"Hello World Aurélien"; ?></h5>
            <h6><?php echo"Hello World Aurélien"; ?></h6>    
        </div>
    </section>
    <section class="exo2">
        <?php
            $prenom = "Alice";
            $age = 25;
            // echo "This string spans\nmultiple lines. The newlines will be\noutput as well.";
            echo "This string spans
            multiple lines. The newlines will be
            output as well";
        ?>
    </section>
</body>
</html>
