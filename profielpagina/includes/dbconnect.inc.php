<?php

$server = "";
$username = "";
$password = "";
$db = "";

// connectie maken
$con = mysqli_connect($server, $username, $password, $db);

// connectie testen

if($con->connect_error){
  die("Kan geen connectie met de databases maken". $con->connect_error);
}

// echo "Verbonden <br /> <br />";

 ?>
