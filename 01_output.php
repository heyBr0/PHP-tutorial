<h1>Hello PHP</h1>
<?php
echo "Echo closing with angle bracket" ?>
<br/>  

<?php
echo 1, "string", 3;
// Echo outputs strings, numbers, html, etc

// print_r() - print single values and arrays
print_r([1,2,3]);
// var_dump returns more info like type and length
var_dump("Hello");
var_dump(true);
// var_export() - outputs a string representation, like quotes
var_export("Something");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
    <h1><?php echo "Post One" ?></h1>
    <h2><?= "Equals sign shortcut" ?></h2> <!-- needs a setup on server to work -->
</body>
</html>
