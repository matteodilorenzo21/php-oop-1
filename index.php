<?php

// Definiamo la classe Movie
class Movie
{
    // Definiamo le variabili di istanza
    public $title;
    public $genre;
    public $year;
    public $time;
    public $direction;

    // Costruttore
    public function __construct($title, $genre, $year, $time, $direction)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->time = $time;
        $this->direction = $direction;
    }

    // Metodo dell'istanza che torna le variabili: title, genre e year
    public function getInfo()
    {
        return "Titolo: {$this->title}, Genere: {$this->genre}, Anno: {$this->year}, Durata: {$this->time} minuti, Regia di: {$this->direction}";
    }
}

// Creazione di due istanze della classe Movie
$movie1 = new Movie("Il Signore degli Anelli - La Compagnia Dell'Anello", "Fantasy", 2001, 178, "Peter Jackson");
$movie2 = new Movie("Inception", "Science Fiction", 2010, 148, "Christopher Nolan");

// Stampa a schermo i valori delle relative proprietà delle istanze create
echo $movie1->getInfo() . ".<br><br>";
echo $movie2->getInfo() . ".<br><br>";
