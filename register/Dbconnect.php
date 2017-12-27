<?php

$server = "localhost";
$username = "root";
$password = "root";
$db = "dbtest";

// connectie maken
$conn = mysqli_connect($server, $username, $password, $db);

// connectie testen

if($con->connect_error){
  die("Kan geen connectie met de databases maken". $con->connect_error);
}

echo "Verbonden <br /> <br />";

 ?>
