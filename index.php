<?php

require_once "./Models/Movie.php";

require_once "./Models/db.php";

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

    <?php
    require_once "./partials/header.php";
    ?>
    
    <h1>Movies</h1>

    <div style="max-width:1600px; margin:200px auto;">

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
                            <td><?php foreach ($singleMovie->genre as $genr) { echo $genr, ", ";} ?></td>
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

    <?php
    require_once "./partials/footer.php";
    ?>

</body>
</html>