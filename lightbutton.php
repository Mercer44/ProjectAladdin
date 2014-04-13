<?php
	
	$state = $_POST['state'];
	$id = $_POST['id'];

require 'connection.php';

  $querylit = "Update Light_M set State =". $state . " where M_ID=" .$id;

  mysqli_query($link, $querylit);

?>