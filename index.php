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

foreach ($movies as $movie) {
    // var_dump($movie);
    $film = new FullMovie($movie);
    echo "<ul>";
    echo "<li>" . $film->title . "-" . $film->year . "</li>";
    echo "</ul>";
}

/* Metodo col CONSTRUCT... */
// $movie = new Movie("titolo", 1990, "url del poster");
// var_dump($movie);

/* Metodo col SET... */
// $movie->setTitle("Pelicula de prueba");
// $movie->setYear(1990);
// $movie->setPoster("url da inserire");
// var_dump($movie);
