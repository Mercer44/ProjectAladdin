<?php

$enId = $_GET['id'];

require 'connection.php';


  $queryen2 = "Select * from Environment_M where M_ID=" . $enId;

  $resultsen2 = mysqli_query($link, $queryen2);

  $aren2 = mysqli_fetch_array($resultsen2);
 


  echo $aren2['Temp']. '|' . $aren2['Humidity'];




  ?>