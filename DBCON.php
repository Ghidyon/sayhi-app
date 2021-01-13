<?php

// Create connection

$conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);

// Check connection 

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error); // When there is an error, run this!
}
// echo 'Connected successfully';
// var_dump($conn);
return $conn;
?>