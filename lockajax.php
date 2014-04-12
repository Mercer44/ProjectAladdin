<?php

$lockId = $_GET['id'];

require 'connection.php';

  
  $query = "Select * from lock_m where M_ID=" . $lockId;

  $results = mysqli_query($link, $query);

  $ar = mysqli_fetch_array($results);
 
  if($ar['state']) { // if the door close time is not set then the door is unlocked
      echo 'true';
  }
  else {
      echo 'false';
  }

  ?>