<?php

      $month = date('m');

     function checkifJuly($month){

        if($month == 12){

     echo "It’s not July, so at least we’re not in the peak of the heat.";
        }

        else {
     echo "It's July, so it can get really hot.";
        }}


?>

<h1><? checkifJuly($month) ?></h1>
