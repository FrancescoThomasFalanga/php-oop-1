<?php

class Movie {
    public $film;
    public $genre;
    public $releaseDate;
    public $director;
    public $distribution;
    public $cast;
    public $averageVote;

    function __construct(string $film, string $genre, string $releaseDate, string $director, string $distribution, string $cast, int $averageVote) {

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

$shazam = new Movie("Shazam! Furia degli Dei", "Azione", "17-03-2023", "David F. Sandberg", "Warner Bros. Pictures", "Zachary Levi, Asher Angel", 7);
$tetris = new Movie("Tetris", "Biografico", "15-03-2023", "Jon S. Baird", "Apple TV+", "Taron Egerton, Toby Jones", 6);
$creed = new Movie("Creed III", "Drammatico", "02-03-2023", "Michael B. Jordan", "Warner Bros. Pictures", "Michael B. Jordan, Tessa Thompson", 10);
$magicMike = new Movie("Magic Mike - The Last Dance", "Commedia", "10-02-2023", "Steven Soderbergh", "Warner Bros. Pictures", "Channing Tatum, Salma Hayek", 9);

$movies = [
    $creed, $tetris, $shazam, $magicMike
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    
    <h1>Movies</h1>

    <div style="max-width:1600px; margin:0 auto;">

        <table class="table">

            <thead>
                <tr>
                    <th>Film</th>
                    <th>Genere</th>
                    <th>Data d'uscita</th>
                    <th>Regista</th>
                    <th>Distribuzione</th>
                    <th>Cast</th>
                    <th>Voto</th>
                </tr>
            </thead>

            <tbody>

                <?php
                    foreach($movies as $singleMovie) {
                        ?>
                        <tr>
                            <td><?php echo $singleMovie->film ?></td>
                            <td><?php echo $singleMovie->genre ?></td>
                            <td><?php echo $singleMovie->releaseDate ?></td>
                            <td><?php echo $singleMovie->director ?></td>
                            <td><?php echo $singleMovie->distribution ?></td>
                            <td><?php echo $singleMovie->cast ?></td>
                            <td><?php echo $singleMovie->getAverageVote() ?>/5</td>
                        </tr>
                        <?php
                    }
                ?>

            </tbody>

        </table>

    </div>

</body>
</html>