<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simplelove";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_errno) {
    echo ("Failed to connect to MySQL: " . $mysqli->connect_error);
    exit();
}
