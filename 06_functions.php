<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
function functionName($arg1, $arg2, ...) {
// code to be executed
}
- Functions have their own local scope as opposed to global scope
*/

$num = 15;

function registerUser($email)
{
    global $num;
    echo $num;
    echo $email . " registered";
}

registerUser("user@gmail.com");



function sum($n1, $n2)
{
    return $n1 + $n2;
}
$addition = sum(5, 8);
echo $addition;

// arrow function
$subtract = fn($n1, $n2) => $n1 - $n2;
echo $subtract(10, 4);


















?>