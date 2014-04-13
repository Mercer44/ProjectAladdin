<?php

$lightId = $_GET['id'];

require 'connection.php';


  $queryli = "Select * from Light_M where M_ID=" . $lightId;

  $resultsli = mysqli_query($link, $queryli);

  $arli = mysqli_fetch_array($resultsli);
 
  if($arli['State']) {
      echo 'true';
  }
  else {
      echo 'false';
  }

  ?>