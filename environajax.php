<?php

$enId = $_GET['id'];

require 'connection.php';


  $query = "Select * from environment_m where M_ID=" . $enId;

  $results = mysqli_query($link, $query);

  $ar = mysqli_fetch_array($results);
 


  echo $ar['Temp']. '|' . $ar['Humidity'];




  ?>