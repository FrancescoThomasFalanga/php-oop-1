<?php

$shazam = new Movie("Shazam! Furia degli Dei", ["Azione", "Fantascienza", "Avventura"], "17-03-2023", "David F. Sandberg", "Warner Bros. Pictures", new Cast("Zachary Levi", "Asher Angel"), 7);
$tetris = new Movie("Tetris", ["Biografico", "Drammatico", "Storico", "Thriller"], "15-03-2023", "Jon S. Baird", "Apple TV+", new Cast("Taron Egerton", "Toby Jones"), 6);
$creed = new Movie("Creed III", ["Azione", "Drammatico", "Sportivo"], "02-03-2023", "Michael B. Jordan", "Warner Bros. Pictures", new Cast("Michael B. Jordan", "Tessa Thompson"), 10);
$magicMike = new Movie("Magic Mike - The Last Dance", ["Drammatico", "Commedia"], "10-02-2023", "Steven Soderbergh", "Warner Bros. Pictures", new Cast("Channing Tatum", "Salma Hayek"), 9);
$esorcista = new Movie("L'esorcista del papa", ["Orrore", "Thriller", "Giallo"], "13-04-2023", "Julius Avery", "Warner Bros. Pictures", new Cast("Russell Crowe", "Daniel Zovatto"), 4);
$murderMistery = new Movie("Murder Mystery 2", ["Azione", "Poliziesco"], "31-03-2023", "Jeremy Garelick", "Netflix", new Cast("Adam Sandler", "Jennifer Aniston"), 5);
$avatar = new Movie("Avatar - La via dell'acqua", ["Fantascienza", "Azione", "Avventura"], "14-12-2022", "James Cameron", "20th Century Studios", new Cast("Sam Worthington", "Zoe Saldana"), 8);

$movies = [
    $creed, $tetris, $shazam, $magicMike, $esorcista, $murderMistery, $avatar
];