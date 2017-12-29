<?php
	if (isset($_GET['signup'])) {
		$result = $_GET['signup'];

		switch($result) {

			case "usertaken":
			echo "Kies s.v.p. een andere gebruikersnaam";
			break;
			case "empty":
		  echo "Velden zijn leeg";
		  break;
		  case "invalid":
			echo "Foutieve invoer";
			break;
			case "email":
			echo "E-mail adres bestaat al";
			break;
			case "useradded":
			echo "<div style ='font:18px Arial,tahoma,sans-serif;color:#ff0000'>Gebruiker toegevoegd</div>";
			break;
			exit();
		}
	}
?>

<!doctype html>
<html>
<head>
<title>Registreren</title>
<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
<link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="../css/registration.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>

<body>
<div class="container">

		<div class="contact">
			<h5 class="h5reg"> Registreer hier uw account</h5>
			<form action="../includes/reg.php" method="POST">

				<label>Gebruikersnaam</label>
				<input type="text" name="gebruikersnaam" required>

				<label>Wachtwoord</label>
				<input type="password" id="wachtwoord1" name="wachtwoord" required>

				<label>Herhaal wachtwoord</label>
				<input type="password" id="wachtwoord2" name="confirmwachtwoord" required>

					<label>Email</label>
					<input type="email" name="email" required>




				<button type="submit" id="submit" name="submit" value="submit" onclick="validateForm();">Registreer</button>
			</form>
			<a href="../index.php"><p class="homepage">Terug naar de homepage</p></a>
		</div>
	</div>
</div>

<!-- <script>
function validateForm(){
    var pass1 = document.getElementsByName("wachtwoord")[0].value;
    var pass2 = document.getElementsByName("confirmwachtwoord")[0].value;
    if (pass1 === pass2) {

    } else {
        alert("Passwords Do Not Match");
    }
}</script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
</html>
