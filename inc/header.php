<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercices PHP</title>

  <!-- CDN icônes FontAwesome  -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <!--  Google Font Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- ==== Lien CSS principal - chemin absolu vers projet ==== -->

  <!-- <link rel="stylesheet" href="../style.css"> -->
  <!-- <link rel="stylesheet" href="../styles.css"> -->
  <link rel="stylesheet" href="/exo-php-0000/asset/css/style.css">
  <!-- <link rel="stylesheet" href="/exo-php-0000/asset/css/styles.css"> -->


</head>

<body>

  <!-- ========== NAVIGATION ========== -->
    <header>
      <nav>
        <ul>
          <li>
            <!-- <a href="../index.php"><i class="fa-solid fa-house"></i> accueil</a>        -->
          <a href="/exo-php-0000/" class="active"><i class="fa-solid fa-house"></i>&nbsp;Accueil
          </a>    
          </li>

          <li>
          <a href="#"><i class="fa-solid fa-plus"></i> Exercice N°1</a>
          <ul>
            <li><a href="/exo-php-0000/Exercice-N1/exo-1.1.php">exo-1.1.php</a></li>
            <li><a href="/exo-php-0000/Exercice-N1/exo-1.2.php">exo-1.2.php</a></li>
          </ul>
          </li>

          <li>
          <a href="#"><i class="fas fa-arrow-circle-down"></i> Exercice N°2</a>
          <ul>
            <li><a href="/exo-php-0000/Exercice-N2/me.php">me.php</a></li>
            <li><a href="/exo-php-0000/Exercice-N2/prix.php">prix.php</a></li>
            <li><a href="/exo-php-0000/Exercice-N2/test.php">test.php</a></li>
          </ul>
          </li>

          <li>
          <a href="#"><i class="fas fa-arrow-circle-down"></i> Exercice N°3</a>
          <ul>
            <li><a href="/exo-php-0000/Exercice-N3/exo-3.1.php">➕ exo-3.1</a></li>
            <li><a href="/exo-php-0000/Exercice-N3/exo-3.2.php">➖ exo-3.2</a></li>
            <li><a href="/exo-php-0000/Exercice-N3/exo-3.3.php">✖️ exo-3.3</a></li>
            <li><a href="/exo-php-0000/Exercice-N3/exo-3.4.php">➗ exo-3.4</a></li>
          </ul>
          </li>

          <li>
          <a href="#"><i class="fas fa-arrow-circle-down"></i> Exercice N°4</a>
            <ul>
            <li>
              <a href="/exo-php-0000/Exercice-N4/exo-4.1.php">exo-4.1</a>
              <ul>
                <li><a href="/exo-php-0000/Exercice-N4/exo-4.1/exo-4.1.1.php"><h6>if..elseif..else</h6>exo-4.1.1</a></li>
                <li><a href="/exo-php-0000/Exercice-N4/exo-4.1/exo-4.1.2.php"><h6>switch</h6>exo-4.1.2</a></li>
              </ul>          
            
            </li>
            <li><a href="/exo-php-0000/Exercice-N4/exo-4.2.php">exo-4.2</a></li>
            <li><a href="/exo-php-0000/Exercice-N4/exo-4.3.php">exo-4.3</a></li>
            <li><a href="/exo-php-0000/Exercice-N4/exo-4.4.php">exo-4.4</a></li>
            <li><a href="/exo-php-0000/Exercice-N4/exo-4.5.php">exo-4.5</a></li>
          </ul>
          </li>

          <li>
          <a href="#"><i class="fas fa-arrow-circle-down"></i> Exercice N°5</a>
            <ul>
            <li><a href="/exo-php-0000/Exercice-N5/exo-5.1.php">exo-5.1</a></li>
            <li><a href="/exo-php-0000/Exercice-N5/exo-5.2.php">exo-5.2</a></li>
            <li><a href="/exo-php-0000/Exercice-N5/exo-5.3.php">exo-5.3</a></li>
            <li><a href="/exo-php-0000/Exercice-N5/exo-5.4.php">exo-5.4</a></li>
            <li><a href="/exo-php-0000/Exercice-N5/exo-5.5.php">exo-5.5</a></li>
          </ul>
          </li>
          
          <li>
          <a href="#"><i class="fas fa-arrow-circle-down"></i> Exercice N°6</a>
            <ul>
            <li><a href="/exo-php-0000/Exercice-N6/exo-6.1.php">exo-6.1</a></li>
            <li><a href="/exo-php-0000/Exercice-N6/exo-6.2.php">exo-6.2</a></li>
            <li><a href="/exo-php-0000/Exercice-N6/exo-6.3.php">exo-6.3</a></li>
            <li><a href="/exo-php-0000/Exercice-N6/exo-6.4.php">exo-6.4</a></li>
            <li><a href="/exo-php-0000/Exercice-N6/exo-6.5.php">exo-6.5</a></li>
            <li><a href="/exo-php-0000/Exercice-N6/exo-6.6.php">exo-6.6</a></li>
          </ul>
          </li>

          <li>
          <a href="/exo-php-0000/asset/documents/exo-7.$-php.docx"><i class="fas fa-arrow-circle-down"></i> Exercice N°7</a>
            <ul>
            <li><a href="/exo-php-0000/Exercice-N7/exo-7.1.php">exo-7.1</a></li>
            <li><a href="/exo-php-0000/Exercice-N7/exo-7.2.php">exo-7.2</a></li>
            <li><a href="/exo-php-0000/Exercice-N7/exo-7.3.php">exo-7.3</a></li>
            <li><a href="/exo-php-0000/Exercice-N7/exo-7.4.php">exo-7.4</a></li>
            <li><a href="/exo-php-0000/Exercice-N7/exo-7.5.php">exo-7.5</a></li>
            <li><a href="/exo-php-0000/Exercice-N7/exo-7.6.php">exo-7.6</a></li>
          </ul>
          </li>

          <li>
          <a href="/exo-php-0000/asset/documents/exo-8.$-php.docx"><i class="fas fa-arrow-circle-down"></i> Exercice N°8</a>
            <ul>
            <li><a href="/exo-php-0000/Exercice-N8/exo-8.1.php">exo-8.1</a></li>
            <li><a href="/exo-php-0000/Exercice-N8/exo-8.2.php">exo-8.2</a></li>
            <li><a href="/exo-php-0000/Exercice-N8/exo-8.3.php">exo-8.3</a></li>
            <li><a href="/exo-php-0000/Exercice-N8/exo-8.4.php">exo-8.4</a></li>
              <!--  <li><a href="/exo-php-0000/Exercice-N8/exo-8.5.php">exo-8.5</a></li>
            <li><a href="/exo-php-0000/Exercice-N8/exo-8.6.php">exo-8.6</a></li> -->
          </ul>
          </li>
         
        
      </ul>
    </nav>
  </header>

  <main>
