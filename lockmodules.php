

<script>

var update = function () {
  $.get(<?php echo'"lockajax.php?id='.$lockId.'"'; ?>, function(data) {
    if(data == 'true') {
    
      document.getElementById(<?php echo '"on'.$lockId.'"'; ?>).disabled = false;
      document.getElementById(<?php echo '"off'.$lockId.'"'; ?>).disabled = true;
      
    }
    else {
      document.getElementById(<?php echo '"on'.$lockId.'"'; ?>).disabled = true;
      document.getElementById(<?php echo '"off'.$lockId.'"'; ?>).disabled = false;
        }
});
}

setInterval(update, 1000);

</script>

<script> function changeState<?php echo $lockId; ?>() {
  var x=document.getElementById(<?php echo '"on'.$lockId.'"'; ?>);
  var y = x.disabled;
  if(y) {
    $.post("lockbutton.php", {state: '1', id: <?php echo "'". $lockId. "'"; ?>}); //locked so unlock
    document.getElementById(<?php echo '"on'.$lockId.'"'; ?>).disabled = false;
      document.getElementById(<?php echo '"off'.$lockId.'"'; ?>).disabled = true;
    
  }
  else {
    $.post("lockbutton.php", {state: '0', id: <?php echo "'". $lockId. "'"; ?>});
     document.getElementById(<?php echo '"on'.$lockId.'"'; ?>).disabled = true;
      document.getElementById(<?php echo '"off'.$lockId.'"'; ?>).disabled = false;

    
  }
}  </script>
      
<?php


  $querylock = "Select * from lock_m where M_ID =" . $lockId;

  $resultslock = mysqli_query($link, $querylock);

  $arlock = mysqli_fetch_array($resultslock);
 
  $yesno = $arlock['state'];

  if($yesno) {
    echo '<td><h5>Lock '.$lockId.'</h5></td><td><button type="button" id="on'.$lockId.'" class="btn btn-danger" onclick="changeState'.$lockId.'()">Unlock</button> </td>
  <td><button type="button" id="off'.$lockId.'" class="btn btn-primary" onclick="changeState'.$lockId.'()" disabled>Lock</button></td>';
  }
  else {
    echo '<td><h5>Lock '.$lockId.'</h5></td><td><button type="button" id="on'.$lockId.'" class="btn btn-danger" onclick="changeState'.$lockId.'()" disabled>Unlock</button> </td>
  <td><button type="button" id="off'.$lockId.'" class="btn btn-primary" onclick="changeState'.$lockId.'()"  >Lock</button></td>';
  }

  ?>





