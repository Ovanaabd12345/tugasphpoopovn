<?php

require_once 'animal.php'; // Import class Animal

// Buat instance Animal
$sheep = new Animal("Shaun");

// Tampilkan informasi Animal
echo "Name: " . $sheep->name . "\n"; echo "<br>";
echo "Legs: " . $sheep->legs . "\n"; echo "<br>";
echo "Cold blooded: " . $sheep->cold_blooded . "\n"; echo "<br>";

// Buat instance Ape dan Frog
require_once('Ape.php');
require_once('Frog.php');

$sungokong = new Ape("Buduk"); echo "<br>";
$kodok = new Frog("Kera Sakti"); echo "<br>";

// Tampilkan informasi Ape dan Frog
echo "\n";
echo "Name: " . $sungokong->name . "\n"; echo "<br>";
echo "Legs: " . $sungokong->legs . "\n"; echo "<br>";
echo "Cold blooded: " . $sungokong->cold_blooded . "\n"; echo "<br>";
echo "Yell: ";
 $sungokong->yell() . "\n"; echo "<br>" . "<br>";

echo "\n";
echo "Name: " . $kodok->name . "\n"; echo "<br>";
echo "Legs: " . $kodok->legs . "\n"; echo "<br>";
echo "Cold blooded: " . $kodok->cold_blooded . "\n"; echo "<br>";
echo "Jump: ";
 $kodok->jump1() . "\n"; echo "<br>";