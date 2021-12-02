<?php

/**
 * Prova con dati inseriti da me
 */
// require_once __DIR__ .  "/classi/movie.php";

/**
 * Prova con l'array in data.php ($movies)
 */
require_once "classi/fullMovie.php";
require_once "data/data.php";

// foreach ($movies as $movie) {
//     // var_dump($movie);
//     $film = new FullMovie($movie);
//     // echo "<ul>";
//     // echo "<li>" . $film->title . "-" . $film->year . "</li>";
//     // echo "</ul>";
//     echo "<div'>
//             <img src='$film->poster' style='width:100px'>
//             <p>$film->title</p>
//             <p>$film->year</p>
//         </div>";
// }

/* Metodo col CONSTRUCT... */
// $movie = new Movie("titolo", 1990, "url del poster");
// var_dump($movie);

/* Metodo col SET... */
// $movie->setTitle("Pelicula de prueba");
// $movie->setYear(1990);
// $movie->setPoster("url da inserire");
// var_dump($movie);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="container bg-dark">

    <div class=" d-flex justify-content-center flex-wrap text-white">
        <?php
        foreach ($movies as $movie) {
            $film = new FullMovie($movie);
            echo
            "<div class='card bg-dark text-white align-items-center' style='width: 18rem;'>
            <img src='$film->poster' class='card-img-top w-50' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$film->title</h5>
                <p class='card-text'>$film->year</p>
            </div>
        </div>";
        }
        ?>



    </div>

</body>

</html>