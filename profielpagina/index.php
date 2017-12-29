<?php
include("includes/config.php");
include("includes/dbcmsconnect.inc.php");

/////////////////////////////////////////////////////////
// Get all info from ondernemingen table
/////////////////////////////////////////////////////////
$sql = "SELECT * FROM profiel";
$result = $db->query($sql);

$ID=array();
$name=array();
$adres=array();
$postcode=array();
$plaats=array();
$email=array();
$textarea=array();



/////////////////////////////////////////////////////////
// Put all fetched info into variables
/////////////////////////////////////////////////////////
while ($row = mysqli_fetch_array($result)){
  $ID[] = $row[0];
  $name[] = $row[1];
  $adres[] = $row[2];
  $postcode[] = $row[3];
  $plaats[] = $row[4];
  $email[] = $row[5];
  $textarea[] = $row[6];

}
///////////////////////////////////////
// Summary ends by word breaks //
///////////////////////////////////////
// $s= substr($string, 0, 261);
// $i = substr($s, 0, strrpos($s, ' ')); // Character break
function custom_echo($i, $length)
{
  if(strlen($i)<=$length)
  {
    echo $i;
  }
  else
  {
    // $y=substr($i,0,$length) . " " . '...';
		$s = substr($i, 0, 25);
		$i = substr($s, 0, strrpos($s, ' ')) . " " . '...';
    echo $i;
  }
}



?>






<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="" type="image/png" sizes="16x16">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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


<div class="wrapper3">
<div class="container">
	<div class="row">
<div class="col l12 s12 m6">

				<?php
				for($i = 0; $i < count($name); $i++){
        ?>


								<div class="col l4 s12 m6">
									<div class="card teal darken-2">
										<div class="card-content white-text">
											<span class="card-title"><h5><?php echo $name[$i]; ?></h5></span>
											<p><?php  custom_echo($textarea[$i], ""); ?> </p>
										</div>
										<div class="card-action">
					 <a href="pages/profielpagina.php?profielid=<?php echo $ID[$i]; ?>"><p>Bekijk profiel</p></a>
										</div>
									</div>
								</div>

			<?php
		}
		?>
		</div>
</div>
</div>
</div>
</div>

</body>
</html>
