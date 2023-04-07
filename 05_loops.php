<?php
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
for (initialize; condition; increment) {
// code to be executed
}
*/

for ($x = 5; $x <= 10; $x++) {
    echo "Number " . $x . "<br>";
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
while (condition) {
// code to be executed
}
*/

$y = 1;

while ($y <= 5) {
    echo "While Loop " . $y . "<br/>";
    $y++;
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
do {
// code to be executed
} while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

$z = 101;

do {
    echo "Do while " . $z . "<br>";
    $z++;
} while ($z <= 105);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
foreach ($array as $value) {
// code to be executed
}
*/

// Loop through an array

$blogs = ["First Blog", "Second blog", "Third blog"];

for ($num = 0; $num < count($blogs); $num++) { // length
    echo $blogs[$num];
}
;

foreach ($blogs as $blog) {
    echo $blog;
}


foreach ($blogs as $index => $blog) {
    echo $index . " - " . $blog . '<br>';
}

// Use the keys within the loop for an associative array

$person = [
    'first_name' => 'User',
    'last_name' => 'Name',
    'email' => 'username@gmail.com',
  ];
  
  // Get Keys
  foreach ($person as $key => $val) {
    echo "${key} - ${val} <br>";
  }


















?>