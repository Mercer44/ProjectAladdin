<script>

var update = function() {
$.get(<?php echo'"environajax.php?id='.$enID.'"'; ?>, function(data) {

	var str = data;

	var i = str.indexOf('|');
	var temp = str.substr(i+1, 3);
	var hum = str.substr(0, i);

	$(<?php echo '"#hum'.$enID.'"'; ?>).html(temp);
	$(<?php echo'"#temp'.$enID.'"'; ?>).html(hum);
});

}

setInterval(update, 1000);

</script>
<?PHP
 $equery = "Select * from environment_m where M_ID =" . $enID;
 $eresults = mysqli_query($link, $equery);
 while($ear = mysqli_fetch_array($eresults)) {
 	echo '<td><h5>Sensor '.$enID.'</h5></td> 
 <td><h4 id ="temp'.$enID.'">'.$ear['Temp'].'</h4></td>
 <td><h4 id="hum'.$enID.'">'.$ear['Humidity'].'</h4></td>';
 }

?>

