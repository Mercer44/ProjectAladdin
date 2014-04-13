<?php

$lockId = $_GET['id'];

require 'connection.php';

  
  $query = "Select * from Lock_M where M_ID=" . $lockId;

  $results = mysqli_query($link, $query);

  $arlocka = mysqli_fetch_array($results);
 
  if($arlocka['State']) { // if the door close time is not set then the door is unlocked
      echo 'true';
  }
  else {
      echo 'false';
  }

  ?>