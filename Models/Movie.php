<?php

class Movie {
    public $film;
    public $genre;
    public $releaseDate;
    public $director;
    public $distribution;
    public $cast;
    public $averageVote;

    function __construct(string $film, array $genre, string $releaseDate, string $director, string $distribution, Cast $cast, int $averageVote) {

        $this->film = $film;
        $this->genre = $genre;
        $this->releaseDate = $releaseDate;
        $this->director = $director;
        $this->distribution = $distribution;
        $this->cast = $cast;
        $this->averageVote = $averageVote;

    }

    public function getAverageVote() {
        return $this->averageVote / 2;
    }
}