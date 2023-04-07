<?php
// simple arrays
$numbers = [1, 5, 8, 12];
$fruits = array("apple", "orange", "tomato");

print_r($numbers);
var_dump($numbers);

echo $fruits[1]; // orange

// Associative Array
$colors = [
    1 => "red",
    4 => "blue",
    6 => "green"
];

echo $colors[4]; // blue


$hex = [
    "red" => "#f00",
    "blue" => "#0f0",
    "green" => "#00f"
];

echo $hex["blue"];

$person = [
    "first_name" => "Snake",
    "last_name" => "Man 2",
    "weapon" => "snakes"
];

echo $person["first_name"]; // Snake


// multidimensional Array


$robots = [
   [
    "first_name" => "Shadow",
    "last_name" => "Man 3",
    "weapon" => "stars"
   ],
   [
    "first_name" => "Magnet",
    "last_name" => "Man 4",
    "weapon" => "magnets"
   ]
];

echo $robots[1]["weapon"];


var_dump(json_encode($robots));

    ?>