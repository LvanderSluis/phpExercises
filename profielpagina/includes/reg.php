<?php



error_reporting(E_ALL);


// var_dump($_POST);
// exit();

if(isset($_POST['submit'])){
  include_once 'dbconnect.inc.php';

  $gebruikersnaam = mysqli_real_escape_string($con, $_POST ['gebruikersnaam']);
  $email = mysqli_real_escape_string($con, $_POST ['email']);
  $wachtwoord = mysqli_real_escape_string($con, $_POST ['wachtwoord']);

// Velden checken.

if (empty($gebruikersnaam) || empty($email) || empty($wachtwoord)) {
  header("Location: ../pages/login.php?signup=empty");
  exit();
  # code...
}
else if (!preg_match("/^[a-zA-Z]*$/", $gebruikersnaam))  {
    header("Location: ../pages/login.php?signup=invalid");
    exit();

}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // Kijken voor een geldig e-mail adres

    header("Location: ../pages/login.php?signup=email");
    exit();
  }
else {
  $sql = "SELECT * FROM accounts WHERE gebruikersnaam ='$gebruikersnaam'";
  $result = mysqli_query($con, $sql);
  $resultcheck = mysqli_num_rows($result);

  if ($resultcheck > 0){
    header("Location: ../pages/login.php?signup=usertaken");
    exit();
  }
  else {
    //hashed password
    $hashedpassword =  password_hash($wachtwoord, PASSWORD_DEFAULT);
    // Voer hier alles in Dbase
    $sql = "INSERT INTO accounts (gebruikersnaam, email, wachtwoord) VALUES ('$gebruikersnaam','$email','$hashedpassword');";
    mysqli_query($con, $sql) or die(mysqli_error($con));
    header("Location: ../pages/login.php?signup=useradded");
    exit();
  }
}
}

else {
  header("Location: ../pages/registratie.php");
  exit();
}






/*
------------------
include_once 'includes/dbconnect.inc.php';

$gebruikersnaam = mysqli_real_escape_string($con, $_POST['gebruikersnaam']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$wachtwoord = mysqli_real_escape_string($con, $_POST['wachtwoord']);
$confirmwachtwoord = mysqli_real_escape_string($con, $_POST['confirmwachtwoord']);


$sql = "INSERT INTO accounts (gebruikersnaam, email, wachtwoord, confirmwachtwoord)
VALUES ('$gebruikersnaam', '$email', '$wachtwoord', '$confirmwachtwoord')";
if(!mysqli_query($con, $sql))
{
 echo 'Registratie niet voltooid';
}
else {
 echo 'Registratie voltooid';
}


exit();
*/
?>
