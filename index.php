<?php

class Movie {

    public $title;
    public $year;
    public $vote;
    public $language;

    function __construct($title, $year, $vote, $language) {
        $this->title = $title;
        $this->year = $year;
        $this->vote = $vote;
        $this->language = $language;
    }

};

$catalogueMovies = [
    $it = new Movie("It", 1999, 7.5, "inglese"),
    $jurassicPark = new Movie("Jurassic Park", 1993, 9, "inglese"),
    $mazeRunner = new Movie("Maze Runner", 2014, 7, "inglese"),
    $jumanji = new Movie("Jumanji", 1995, 10, "inglese")
];

foreach($catalogueMovies as $_movie) {
    echo '<h1> Titolo del film: ' . $_movie->title . '</h1>';
    echo '<p> Anno di uscita: ' . $_movie->year . '</p>';
    echo '<p> Voto della critica:  ' . $_movie->vote . '</p>';
    echo '<p> Lingua di uscita originale:  ' . $_movie->language . '</p>';
}

?>