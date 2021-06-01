<?php
$servername="localhost";
$username="root";
$password="";
$database="simplelove";

$mysqli = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

echo"<pre>";
print_r($_REQUEST);
echo"<pre>";
?>