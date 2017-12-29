<?php



include_once 'dbconnect.inc.php';

$naam = mysqli_real_escape_string($con, $_POST['naam']);
$adres = mysqli_real_escape_string($con, $_POST['adres']);
$postcode = mysqli_real_escape_string($con, $_POST['postcode']);
$plaats = mysqli_real_escape_string($con, $_POST['plaats']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$textarea = mysqli_real_escape_string($con, $_POST['textarea']);
$website = mysqli_real_escape_string($con, $_POST['website']);



$last_id;
$sql = "INSERT INTO profiel (naam, adres, postcode, plaats, email, textarea, website)
VALUES ('$naam', '$adres', '$postcode', '$plaats', '$email', '$textarea', '$website')";
if(!mysqli_query($con, $sql))
{
  // echo 'Formulier niet doorgevoerd';
}
else {
  // echo 'Formulier verzonden <br />';
  $last_id = mysqli_insert_id($con);

}


if(isset($_POST["submit"])) {
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image or not

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        // echo "";
        $uploadOk = 1;
    } else {
        // echo "Dit bestand is geen afbeelding.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "<br />Deze afbeelding bestaat al.<br />";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["image"]["size"] > 200000) {
        // echo "Sorry, bestandsgrootte mag maximaal 200KB zijn.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        // echo "Sorry, alleen JPG, JPEG, PNG & GIF afbeeldingen toegestaan.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "Uw bestand is niet ge-upload. Neem contact op met de website beheerder.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // echo "<br />De afbeelding ". basename( $_FILES["image"]["name"]). " is met succes ge-upload";
        } else {
            // echo "Er is iets fout gegaan met het uploaden van het bestand. Neem contact op met de website beheerder.";
        }
    }
}

header( "location:../pages/profielpagina.php?profielid=$last_id", true, 303);


?>
