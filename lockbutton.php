<?php
	
	$state = $_POST['state'];
	$id = $_POST['id'];

require 'connection.php';

	if($state){

  $query = "Update Lock_M set State =". $state . " where M_ID=" .$id;

	}
	else {
		 $query = "Update Lock_M set State =". $state . ", Time_Closed=CURRENT_TIMESTAMP where M_ID=" .$id;
	}

  mysqli_query($link, $query);

?>