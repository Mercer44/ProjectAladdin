

<script>

<?php



?>



var update = function () {
	$.get(<?php echo'"getit.php?id='.$lightId.'"'; ?>, function(data) {
		if(data == 'true') {
			document.getElementById(<?php echo '"on'.$lightId.'"'; ?>).disabled = false;
      document.getElementById(<?php echo '"off'.$lightId.'"'; ?>).disabled = true;
  		
  	}
  	else {
        

      document.getElementById(<?php echo '"on'.$lightId.'"'; ?>).disabled = true;
      document.getElementById(<?php echo '"off'.$lightId.'"'; ?>).disabled = false;
  	  	}
});
}

setInterval(update, 1000);

</script>

<script> function changeState<?php echo $lightId; ?>() {
	var x=document.getElementById(<?php echo '"on'.$lightId.'"'; ?>);
	var y = x.disabled;
	if(y) {
		$.post("lightbutton.php", {state: '1', id: <?php echo "'". $lightId. "'"; ?>});
    document.getElementById(<?php echo '"on'.$lightId.'"'; ?>).disabled = false;
      document.getElementById(<?php echo '"off'.$lightId.'"'; ?>).disabled = true;
		
	}
	else {
		$.post("lightbutton.php", {state: '0', id: <?php echo "'". $lightId. "'"; ?>});
     document.getElementById(<?php echo '"on'.$lightId.'"'; ?>).disabled = true;
      document.getElementById(<?php echo '"off'.$lightId.'"'; ?>).disabled = false;

		
	}
}  </script>
			
<?php


  $query = "Select * from light_m where M_ID =" . $lightId;

  $results = mysqli_query($link, $query);

  $ar = mysqli_fetch_array($results);
 
  $yesno = $ar['State'];

  if($yesno) {
  	echo '<td><h5>Light '.$lightId.'</h5></td><td><button type="button" id="on'.$lightId.'" class="btn btn-danger" onclick="changeState'.$lightId.'()">Off</button> </td>
  <td><button type="button"id="off'.$lightId.'" class="btn btn-primary" onclick="changeState'.$lightId.'()" disabled>On</button></td>';
  }
  else {
  	echo '<td><button type="button" id="on'.$lightId.'" class="btn btn-danger" onclick="changeState'.$lightId.'()" disabled>Off</button> </td>
  <td><button type="button"id="off'.$lightId.'" class="btn btn-primary" onclick="changeState'.$lightId.'()"  >On</button></td>';
  }

  ?>


</body></html>



