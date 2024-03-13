<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "belajar_todolist_php";

$connection = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_error()) {
    echo "Failed to connect to MySQL : " . mysqli_connect_error();
} 
