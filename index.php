<?php 

require "db.php";

// $film = R::dispense('films');
// $film->name = "Фокстрот 2";
// $film->genre = "комедия";
// $film->year = "2002";
// $film->description = "Мелкий лис наносит ответный удар!";

// R::store($film);

// $films = R::find('films');

// foreach ($films as $film) {
// 	print_r($film);
// 	echo "Название: " . $film->name . "<br>";
// 	echo "Жанр: " . $film->genre . "<br>";
// 	echo "Год: " . $film->year . "<br>";
// 	echo "Описание: " . $film->description . "<br>";
// }

// $film = R::load('films', 39);
// $film->name = "Фокстрот 3";
// $film->genre = "боевик";
// $film->year = "2010";
// R::store($film);

$film = R::load('films', 39);
R::trash($film);

 ?>