<?php
define("DB_HOST", "localhost");
define("DB_USER", "admin");
define("DB_PASS", "12345");
define("DB_NAME", "php_dev");


// Create connection

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed " . $conn->connect_error);
}
;
