<?php
require_once __DIR__ . '/movie.php';
require_once __DIR__ . '/movie_demo.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
           
            <h2 class="title">Titolo: <?php echo $movie1->titolo  ?> </h2>
            <p class="production">Produtore: <?php  echo $movie1->produttore ?></p>
            <p class="genre">Genere: <?php  echo $movie1->genere ?></p>
            <p class="distribution">Distribuito da: <?php echo $movie1->distribuzione  ?></p>
            <p>info: <?php echo $movie1->getMainInfo()  ?></p>
            
        </div>
        <div class="card">
        <h2 class="title">Titolo: <?php echo $movie2->titolo  ?> </h2>
            <p class="production">Produtore: <?php  echo $movie2->produttore ?></p>
            <p class="genre">Genere: <?php  echo $movie2->genere ?></p>
            <p class="distribution">Distribuito da: <?php echo $movie2->distribuzione  ?></p>
            <p>info: <?php echo $movie2->getMainInfo()  ?></p>
        </div>
    </div>
</body>

</html>