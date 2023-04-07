<!--  --------- PHP Data Types ---------

- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value

- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource

--------- Variable Rules --------- 

- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
 -->

 <?php

 $name = "Mega man";
 $age = 33;
 $has_brother = true;
 $cash_on_hand = 25.50;

 echo $age;
 echo $has_brother; // 1
 var_dump($has_brother); // true
 var_dump( $cash_on_hand); // float(25.5)

 echo $name . ' is ' . $age . ' years old.'; // single quotes

 echo "${name} is ${age} years old"; // double quotes


 // const
 define("HOST", "localhost");
 define("DB_NAME", "dev_db");

 echo HOST;