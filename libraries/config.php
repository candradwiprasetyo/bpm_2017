<?php
session_start();
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'bpm';


include 'function.php';
$mysqli = new mysqli();
$mysqli->connect($server, $username, $password, $database);
?>