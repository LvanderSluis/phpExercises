<?php
	session_start();

	if(isset($_SESSION['ID'])) {
		echo "<div style ='font:18px Arial,tahoma,sans-serif;color:rgba(35, 139, 130, 1);
		margin-bottom:10px; text-align:center; border-radius:5px; width:50vw;
		margin-left:345px; height:40px; line-height:40px; background-color:#fff;'>Gebruiker is ingelogd</div>";
	} else {
		header("Location: ../index.php");
		exit();
	}
?>


<!doctype html>
<html>
<head>
<title>Maak uw profiel</title>
<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../css/registration.css">
</head>

<body>
<div class="container">

		<div class="contact">

				<label><h5 class="h5reg">Maak hier je profiel pagina aan</h5></label>

				<form action="../includes/sendform2.php" method="POST" enctype="multipart/form-data">

				<label>Naam</label>
				<input type="text" name="naam" required>

				<label>Adres</label>
				<input type="text" name="adres" required>

				<label>Postcode</label>
				<input type="text" name="postcode" maxlength="7" required>

				<label>Plaats</label>
				<input type="text" name="plaats" required>

				<label>Email</label>
				<input type="email" name="email"  required>

				<label>Website</label>
				<input type="text" name="website"  required>

				<label>Upload uw logo of foto</label>
           <div class = "file-field input-field">
             <div class = "btn cyan darken-1">
               <span>Upload afbeelding</span>
               <input type="file" name="image" accept="image/*" required >
             </div>

             <div class="file-path-wrapper">
               <input class="file-path validate" type = "text" placeholder = "Upload file" >
             </div>
           </div>


				<label><h5>Vertel hier wat over jezelf:</h5></label>
				<textarea id="textarea" name="textarea" rows="20" cols="50" align="center" ></textarea><br>



				<button type="submit" name ="submit" value="submit">Verzenden</button>

			</form>
		</div>

</div>

<script type="text/javascript" src="../js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
