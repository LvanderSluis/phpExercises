
<!DOCTYPE html>
<html>
<head>
	<title>Skills</title>
  <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/styleskills.css">
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


  <div class="wrapper">

  <div class="a">
    <div id="html" class="a-a"></div>
    <div id="css" class="b-a"></div>
    <div id="js" class="c-a"></div>
    <div id="php" class="d-a"></div>
    <div id="MySQL" class="e-a"></div>
  </div>
  <div class="a2"> &#8593; Skills</div>
  <div class="a3"> &#8594; Acquired Skills over Time</div>
  <div class="a4"> &#8593; 0% &#8594; </div>
  <div class="b"><button onclick="graphSkillsA()" class="white-text light-blue lighten-2">Html</button></div>
  <div class="c"><button onclick="graphSkillsB()" class="white-text light-blue lighten-2">Css</button></div>
  <div class="d"><button onclick="graphSkillsC()" class="white-text light-blue lighten-2">Js</button></div>
  <div class="e"><button onclick="graphSkillsD()" class="white-text light-blue lighten-2">php</button></div>
  <div class="f"><button onclick="graphSkillsE()" class="white-text light-blue lighten-2">MySQL</button></div>
  <div class="g">
    <h5 id="graph-text"></h5>
    <p id="text-p">
      Klik op de buttons voor informatie. Twee kliks voor de staafdiagram.
    </p>
  </div>

</div>
<script type="text/javascript">
function graphSkillsA() {
    var x = document.getElementById("html");
    if (x.style.height === "0px") {
        x.style.height = "300px";
    } else {
        x.style.height = "0px";
    }
    document.getElementById("text-p"). innerHTML = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.";
    document.getElementById("graph-text"). innerHTML = "Html";
}
function graphSkillsB() {
    var x = document.getElementById("css");
    if (x.style.height === "0px") {
        x.style.height = "300px";
    } else {
        x.style.height = "0px";
    }
    document.getElementById("text-p"). innerHTML = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.";
    document.getElementById("graph-text"). innerHTML = "Css";
}
function graphSkillsC() {
    var x = document.getElementById("js");
    if (x.style.height === "0px") {
        x.style.height = "200px";
    } else {
        x.style.height = "0px";
    }
    document.getElementById("text-p"). innerHTML = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.";
    document.getElementById("graph-text"). innerHTML = "Javascript";
}
function graphSkillsD() {
    var x = document.getElementById("php");
    if (x.style.height === "0px") {
        x.style.height = "275px";
    } else {
        x.style.height = "0px";
    }
    document.getElementById("text-p"). innerHTML = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.";
    document.getElementById("graph-text"). innerHTML = "Wordpress";
}
function graphSkillsE() {
    var x = document.getElementById("MySQL");
    if (x.style.height === "0px") {
        x.style.height = "250px";
    } else {
        x.style.height = "0px";
    }
    document.getElementById("text-p"). innerHTML = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.";
    document.getElementById("graph-text"). innerHTML = "PHP";
}
</script>
</body>
</html>
