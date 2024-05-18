<?php
require_once("animal.php");
require_once("Ape.php");
require_once("frog.php");

$sheep = new Animal("Shaun");

echo "Name : " . $sheep->hewan . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded . "<br><br>";

$sungokong = new Ape("Kera Sakti");

echo "Name : " . $sungokong->hewan . "<br>";
echo "Legs : " . $sungokong->legs . "<br>";
echo "Cold Blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : " . $sungokong->yell . "<br><br>";

$kodok = new Frog("Buduk");

echo "Name : " . $kodok->hewan . "<br>";
echo "Legs : " . $kodok->legs . "<br>";
echo "Cold Blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : " . $kodok->jump . "<br><br>";
