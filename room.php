<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?PHP
	require 'requirejs.php';
	require 'requirecss.php';
    require 'connection.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Project Aladdin</title>
</head>

<body>
<style type="text/css">
.table>tbody>tr>th, .table>tbody>tr>td {
    border-top: none;
	width: 170px;
}
</style>
<?PHP
	require 'nav.php';
    $roomid = $_GET['id'];
?>
</div>
<div class="container-fluid">
	
<?PHP
$query = "Select * from RaspPi where Room_ID=". $roomid;
$results = mysqli_query($link, $query);



function query2($link, $ar) {
    $query2 = "Select ID from Module where Pi_ID =".$ar['ID'];
                $results2 = mysqli_query($link, $query2);
                while($ar2 = mysqli_fetch_array($results2)) {

                    $query3 = "Select * from Light_M where M_ID =".$ar2['ID'];
                    $results3 = mysqli_query($link, $query3);
                    while($ar3 = mysqli_fetch_array($results3)) {

                    echo '<tr>';
                        $lightId = $ar3['M_ID'];
                        include 'lightmodules.php';
                    echo'</tr>';
                    }
                }
}


    $counter = 0;
    $complete = false;
while ($ar = mysqli_fetch_array($results)) {

    if($counter==0) {
    echo '<div class="row">
        <div class="col-md-10 col-md-offset-1">';
        $complete = false;
    }

    echo '<div class="col-md-6">
            <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-hdd"> </span> Controller '.$ar['ID'].' </div>
                <div class="panel-body">
                <h4>Lights</h4>
                <hr />
                <table class="table">';

                query2($link, $ar);
                
                echo '</table>
                <hr />
                <h4>Sound</h4>
                <hr />
                <table class="table">
                    <tr>
                        <td><h5>Speaker 1</h5></td> 
                        <td><button type="button" class="btn btn-danger disabled">Off</button></td>
                        <td><button type="button" class="btn btn-primary">On</button></td>
                    </tr>
                </table>
                <hr/>
                <h4>Motion</h4>
                <hr />
                <table class="table">
                    <tr>
                        <td><h5>Cam1</h5></td> 
                        <td><button type="button" class="btn btn-danger disabled">Off</button></td>
                        <td><button type="button" class="btn btn-primary">On</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        <input type="text" class="input-medium form-control" placeholder="Set Time Interval"></td>
                        <td><button type="button" class="btn btn-primary">Update</button></td>
                    </tr>
                </table>
                <hr />
                <h4>Temperature</h4>
                <hr />
                <table class="table">
                    <tr>
                        <td><h5>Sensor 1</h5></td> 
                        <td><h4>70ºF</h4></td>
                        <td><h4>30%</h4></td>
                    </tr>
                </table>
                <hr />
                <h4>Door Lock</h4>
                <hr />
                <table class="table">
                    <tr>';
                       $lockQuery = 'Select Module.ID, Lock_M.M_ID, Lock_M.Time_Closed from Module, Lock_M where Module.Pi_ID='.$ar['ID'].' and Lock_M.M_ID=Module.ID';
                       $lockResults = mysqli_query($link, $lockQuery);
                       while($arLock = mysqli_fetch_array($lockResults)) {

                    echo '<tr>';
                        $lockId = $arLock['M_ID'];
                        include 'lockmodules.php';
                    echo'</tr>';
                    }


                   echo'</tr>
                </table>
                <hr />
                </div>
            </div>
            </div>';
            if($counter==1) {
              echo '    
            </div>
            </div>  
            </div>
            '; 
            $counter = 0;
            $complete = true;
            }
            else {
            $counter++;
            }
}

    if(!$complete) {
        echo '</div></div></div>';
    }

?>
        
       
 

<script type="text/javascript" src="dist/js/jquery-2.0.3.js"> </script>
<script type="text/javascript" src="dist/js/bootstrap.js"> </script>
<script> 
 $(document).ready(function () { $('.dropdown-toggle').dropdown(); }) //Dropdown Menu Functionality Stupid bootstrap...
 </script>
</body>

</html>
