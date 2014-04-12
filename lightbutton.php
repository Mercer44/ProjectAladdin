<?php
	
	$state = $_POST['state'];
	$id = $_POST['id'];

require 'connection.php';

  $query = "Update Light_M set state =". $state . " where M_ID=" .$id;

  mysqli_query($link, $query);

?>