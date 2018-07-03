<?php 

require "db.php";

$film = R::dispense('films');
$film->name = "Фокстрот 2";
$film->genre = "комедия";
$film->year = "2002";
$film->description = "Мелкий лис наносит ответный удар!";

R::store($film);



 ?>