<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error) die($conn->connect_error);