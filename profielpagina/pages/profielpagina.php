
<?php

include("../includes/config.php");
include("../includes/dbcmsconnect.inc.php");


/////////////////////////////////////////////////////////
// Fetch profielid from url
/////////////////////////////////////////////////////////
if(!isset($_GET['profielid'])){
  die("Profiel ID not set, must set in order to view information");
}
$profiel_id = $_GET['profielid'];

/////////////////////////////////////////////////////////
// Get all info from profiel table
/////////////////////////////////////////////////////////
$sql = "SELECT * FROM profiel WHERE ID=$profiel_id";
$result = $db->query($sql);

$ID;
$name;
$adres;
$postcode;
$plaats;
$email;
$textarea;
$website;


/////////////////////////////////////////////////////////
// Put all fetched info into variables
/////////////////////////////////////////////////////////
while ($row = mysqli_fetch_array($result)){
  $ID = $row[0];
  $name = $row[1];
  $adres = $row[2];
  $postcode = $row[3];
  $plaats = $row[4];
  $email = $row[5];
  $textarea = $row[6];
  $website = $row[7];
  break;
}
$i = 0;
?>



<!DOCTYPE html>
<html>
<head>
	<title>Profielpagina van <?php echo $name; ?> </title>
  <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<script src="https://use.fontawesome.com/b46fce0e6e.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>

  <div class="topnav">
	  <a href="http://hushh.000webhostapp.com/ ">Home</a>
		<a href="http://hushh.000webhostapp.com/pages/skills.php">Skills</a>
	  <a href="http://hushh.000webhostapp.com/pages/login.php">Login</a>
	  <a href="http://hushh.000webhostapp.com/pages/registratie.php">Register</a>
    <p class="Registreernu">Om een profiel te maken registreer nu!</p>
	</div>


	<section id="wrapper">

		<div class="template-b z-depth-2">
			<img src="../img/avatar.png" width="200" height="200">
			<p><?php echo $name; ?></p>
			<p><?php echo $adres; ?></p>
			<p><?php echo $postcode ." ". $plaats ?></p>
			<p><?php echo $email; ?></p><br>
      <button class="button-l" id="link" >Bezoek website</button>

      <script type="text/javascript">
      $("#link").click(function(e){
               e.preventDefault();
               window.location = "<?php echo $website; ?>";
      });
      </script>
		</div>
		<div class="template-c z-depth-2"><P STYLE="font-size: 14pt;">Over jezelf:</p><br><p id="whoobagent"><?php echo $textarea; ?></p>

      <div class="wrapper2">
      	  <div class="washingmachine">
      		    <div class="drum"></div>
      				<div class="door"></div>
      				<div class="tray"></div>
      				<div class="dial"></div>
      				<div class="buttons"></div>
      				<div class="pilot"></div>
      		</div>
      </div>

    </div>

</body>
</html>
