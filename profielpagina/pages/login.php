<?php
	if (isset($_GET['signup'])) {
		$result = $_GET['signup'];

		switch($result) {

			case "usertaken":
			echo "Kies s.v.p. een andere gebruikersnaam. Deze gebruikersnaam bestaat al";
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
			echo "<div style ='font:18px Arial,tahoma,sans-serif;color:rgba(35, 139, 130, 1);
			margin-bottom:10px; text-align:center; border-radius:5px; width:50vw;
			margin-left:345px; height:40px; line-height:40px; background-color:#fff;'>Succesvol geregistreerd.</div>";
			break;
			exit();
		}
	}
?>

<!doctype html>
<html>
<head>
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
<link rel="stylesheet" href="../css/registration.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>

<body>
			<div class="container">

			    <div class="contact">

				    <div class="login">
					<!-- <h3 class="registreer"> login </h3> -->
					<!-- <form action="reg.php" method="POST"> -->
					<!-- <div class="logo"><img src="../img/logo.svg" height="70"></div> -->
					<form action="../includes/login.inc.php" method="POST">
						<label>Gebruikersnaam</label>
						<input type="text" name="gebruikersnaam" placeholder="gebruikersnaam" required>

						<label>Wachtwoord</label>
						<input type="password" name="wachtwoord" placeholder="wachtwoord" required>

						<button type="submit" id="submit" name="submit" value="submit">Login</button><br>
					</form>
			<a href="../index.php"><p>Terug naar de homepage</p></a>
				</div>
			</div>
		</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
