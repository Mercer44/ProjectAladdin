<?PHP
function curPageName() 
{
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

/*FIND THE CURRENT ACTIVE PAGE. */

include 'connection.php';

$overviewActive = '';
$roomActive = '';
$floorActive = '';
$dropdown = 0;
$counterRooms = 1;
if (curPageName() == "index.php")
{
	$overviewActive = "class='active'";
}
if (curPageName() == "room.php")
{
	$roomActive = '';
}


?>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">Aladdin</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?PHP echo $overviewActive ?>><a href="/">Overview</a></li>
        <?PHP
		$query = "select * from Floors where ID > 0";
		$results = mysqli_query($link, $query);
		while($floor = mysqli_fetch_assoc($results)){
			if($dropdown == 0 && $floor['ID'] != 0){
				$dropdown = 1;
				$floorNumber = $floor['ID'];
				$floorDesc = $floor['Description'];
				echo "<li class='dropdown' id='floor$floorNumber'>
          			  <a href='#' class='dropdown-toggle' data-toggle='dropdown'>$floorDesc<b class='caret'></b></a>
					  <ul class='dropdown-menu'>";
			
			}
			$floorID = $floor['ID'];
			$queryRooms = "select * from Rooms where Floor_ID = $floorID";
			$roomsResults = mysqli_query($link, $queryRooms);
			while($roomRow = mysqli_fetch_assoc($roomsResults)){
				if ($roomRow != ""){
					$roomDesc = $roomRow['Description'];
					$roomID = $roomRow['ID'];
					if(!empty($_POST['SelectedItem'])){
						if($_POST['SelectedItem'] == $roomID){
							?><script type="text/javascript">
								$('#floor1').addClass('dropdown active');
							</script>
							<?PHP
							$roomActive = " class='active'";
						}
					}
				echo "<li".$roomActive."><a href='#' class='room' onclick='doPost(this.id)' id='$roomID'>$roomDesc</a></li>";
				$counterRooms++;
				$roomActive = "";
								}
			}
			If ($dropdown == 1){
				echo "</ul>
					  </li>";		
			
			}
          }	
		$emptyFloor = mysqli_num_rows($results);
		if ($emptyFloor == 0) {
			echo "<li> <a href='addlocation.php'>New Location <span class='glyphicon glyphicon-plus'> </span></a> </li>";
		}
		
		
		
		?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" onclick="getValue()">Settings</a></li>
      </ul>
      </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
<!-- /.container-fluid --> 
</nav>
<form role="form" id="inserthere" method="POST" action="room.php">
<input type="hidden" id="postItem" name="SelectedItem" value="-1" />
</form>

<script type="text/javascript">
function doPost(clickedID){
var x=clickedID;
console.log(x);
document.getElementById("postItem").value = x;
document.getElementById("inserthere").submit();
}



</script>