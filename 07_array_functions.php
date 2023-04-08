
<?php
/* --------- Array Functions -------- */
/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ["apple", "orange", "pear"];

// get length
echo count($fruits); // 3

// search

var_dump(in_array("apple", $fruits)); // bool(true)

// add to array
$fruits[] = "grape";
array_push($fruits, "blueberry", "strawberry"); // push to an end
array_unshift($fruits, "mango"); // to the start

// remove
array_pop($fruits); // delete the last one
array_shift($fruits); // delete the first one
unset($fruits[2]); // delete specific element. Also removes index

// split into 2 chunks
$chunked_array = array_chunk($fruits, 2);
//print_r($chunked_array);

print_r($fruits);

/////////////////////////////////////////////////

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2); // merge together
$arr4 = [...$arr2, 67]; // spread operator
print_r($arr3);
print_r($arr4);

$a = ["green", "red", "yellow"];
$b = ["avocado", "apple", "banana"];
$c = array_combine($a, $b);
print_r($c);

$keys = array_keys($c);
print_r($keys);

$flipped = array_flip($c);
print_r($flipped);

$numbers = range(1,20);
print_r($numbers);


// map
$new_numbers = array_map(function($number){
    return "Number ${number}";
}, $numbers );

print_r($new_numbers);

// filter

$lessThan10 = array_filter($numbers, fn($number) => $number < 10);
print_r($lessThan10);

// reduce

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);

?>