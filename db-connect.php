<?php
$host     = 'localhost';
$username = 'u187136132_band';
$password = 'Alliswell17*';
$dbname   ='u187136132_band';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}