<?php

$lightId = $_GET['id'];

require 'connection.php';


  $query = "Select * from light_m where M_ID=" . $lightId;

  $results = mysqli_query($link, $query);

  $ar = mysqli_fetch_array($results);
 
  if($ar['State']) {
      echo 'true';
  }
  else {
      echo 'false';
  }

  ?>