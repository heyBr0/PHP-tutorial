<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Identical to
!= Not equal to
!== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
// code to be executed if condition is true
}
*/

$age = 20;

if ($age >= 18) {
    echo "Old enough to vote";
} else {
    echo "Sorry, not old enough to vote";
}

$currentTime = date("F j h m"); // month, day, hour, minute

echo $currentTime;

$time = 12;

if ($time < 12) {
    echo "Good morning";
} elseif ($time < 17) {
    echo "Good afternoon";
} else {
    echo "Good evening";
}


$posts = ["First post"];

if (empty($posts)) {
    echo "No posts yet";
} else {
    echo $posts[0];
}

/* continue at 48:24 */




?>