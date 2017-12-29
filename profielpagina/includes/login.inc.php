<?php
session_start();

if (isset($_POST['submit'] )) {

  // if(isset($_SESSION['ID'])) {
  //   // toon admin pagina
  // } else {
  //   // geeft foutmelding niet ingelogd
  // }




  include 'dbconnect.inc.php';
  $uid = mysqli_real_escape_string($con, $_POST['gebruikersnaam']);
  $password = mysqli_real_escape_string($con, $_POST['wachtwoord']);

  //Error handlers
  if (empty($uid) || empty($password)) {
    header("Location: ../pages/login.php?login=empty");
    exit();
  }
  else {
    $sql = "SELECT * FROM accounts WHERE gebruikersnaam ='$uid'OR email='$uid'";
    $result = mysqli_query($con, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck < 1) {
      header("Location: ../pages/login.php?login=error1");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        //de-hashing the password
        $hashedpasswordcheck = password_verify($password, $row['wachtwoord']);

        if (!$hashedpasswordcheck) {
          header("Location: ../pages/login.php?login=error2");
          exit();
        } else {
            $_SESSION['ID'] = $row['ID'];
            // variabele verwijderen: unset($_SESSION['ID']);
            $_SESSION['gebruikersnaam'] = $row['gebruikersnaam'];
            $_SESSION['wachtwoord'] = $row['wachtwoord'];
            $_SESSION['email'] = $row['email'];
            header("Location: ../pages/makeprofile.php?login=succes");
            exit();

        }
      }
    }  # code...
  }
}
  else {
    header("Location: ../index.php");
    exit();
  }
