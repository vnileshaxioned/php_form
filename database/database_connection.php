<?php

$servername = "localhost";
$username = "phpmyadmin";
$password = "root";
$database_name = "user";

$connection = mysqli_connect($servername, $username, $password, $database_name);

if(!$connection) {
    die ('Database connection failed ' . mysqli_connect_error());
}

?>