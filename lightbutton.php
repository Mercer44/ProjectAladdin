<?php
	
	$state = $_POST['state'];
	$id = $_POST['id'];

require 'connection.php';

  $querylit = "Update Light_M set State =". $state . " where M_ID=" .$id;

  mysqli_query($link, $querylit);

  $piquery = "Select Pi_ID from Module where ID =" .$id;

  $piresults = mysqli_query($link, $piquery);

  $x = mysqli_fetch_array($link, $piresults);

//  $ipquery = "Select INET_NTOA(IP) as ip from RaspPi where ID =" $x['Pi_ID'];

 // $ipresults = mysqli_query($link, $ipquery);

//  $y = mysqli_fetch_array($link, $ipresults);





//$link2 = mysqli_connect($y['ip'].":3306", 'root', 'bsu'); DIDNT FINISH D:
 // if (!$link)
 // {
 //   die('Not connected : ' . mysql_error());
 // }
//
//  $db = mysqli_select_db($link2, 'AladdinDB');
//if (!$db)
 // {
//    die ('Cannot find database : ' . mysql_error());
//  }


 // $actionQuery = "Insert into Action values(0, 'master', 1, null, null)";

//  mysqli_query($link2, $actionQuery);

//  mysqli_close($link2);


?>