<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Opdracht 1 - Fix Errors - Leonardus</title>
  </head>

  <body>
    <div id="text">
      <p> Gemiddelde leeftijd</p>  </div>
    <div id="gemiddelde">

      <?php
        $ages = array(10,50,39,40,67,99,7,2,10,88);


        function getAverageAge($ages) {
                  $sum = 0;
          for($i=1; $i<count($ages); $i++) {
            $sum += $ages[$i];
          }

          return $sum / 10;
        }

        echo getAverageAge($ages);
        ?>

    </div>
      <style>
    body, html{
        margin:0;
        padding:0;
width:100%;
height:100%;
      }
      #gemiddelde {
          height: 200px;
          width: 400px;
          position: fixed;
          top: 50%;
          left: 50%;
          margin-top: -100px;
          margin-left: -200px;
          font-size:200px;
          text-align:center;
      }
      #text {
          height: 100px;
          width: 100%;
          position: fixed;
          background-color:black;
      }
      p{
        color:white;
        font-size:50px;
        text-align:center;
        line-height:1px;
      }
      </style>
  </body>
</html>
