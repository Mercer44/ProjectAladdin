<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?PHP
	require 'requirejs.php';
	require 'requirecss.php';
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
?>
</div>
<div class="container-fluid">
	<div class="row">
    	<div class="col-md-10 col-md-offset-1">
        <div class="col-md-6">
        	<div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-hdd"> </span> Controller 1 </div>
            	<div class="panel-body">
                <h4>Lights</h4>
                <hr />
                <table class="table">
               		<tr>
                		<td><h5>Light 1</h5></td> 
                    	<td><button type="button" class="btn btn-default active">Off</button> </td>
                    	<td><button type="button" class="btn btn-primary">On</button></td>
                	</tr>
                    <tr>
                		<td><h5>Light 2</h5></td> 
                    	<td><button type="button" class="btn btn-default active">Off</button> </td>
                    	<td><button type="button" class="btn btn-primary">On</button></td>
                	</tr>
                </table>
        		<hr />
        		<h4>Sound</h4>
                <hr />
                <table class="table">
               		<tr>
                		<td><h5>Speaker 1</h5></td> 
                    	<td><button type="button" class="btn btn-default active">Off</button></td>
                    	<td><button type="button" class="btn btn-primary">On</button></td>
                	</tr>
                </table>
       			<hr/>
        		<h4>Motion</h4>
                <hr />
                <table class="table">
               		<tr>
                		<td><h5>Cam1</h5></td> 
                    	<td><button type="button" class="btn btn-default active">Off</button></td>
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
               		<tr>
                    	<td><h5>Front Door</h5></td>
                		<td><button type="button" class="btn btn-default active">Lock</button></td>
                    	<td><button type="button" class="btn btn-primary">Unlock</button></td>
                	</tr>
                </table>
       			<hr />
                </div>
			</div>
            </div>
        <div class="col-md-6">
        	<div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-hdd"> </span> Controller 2 </div>
            	<div class="panel-body">
                <h5>Light</h5> 
        		<hr />
        		<h5>Sound</h5><h4></h4>
       			<hr/>
        		<h5>Motion</h5><h4></h4>
       			<hr />
                </div>
			</div>
            </div>
       	</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="dist/js/jquery-2.0.3.js"> </script>
<script type="text/javascript" src="dist/js/bootstrap.js"> </script>
<script> 
 $(document).ready(function () { $('.dropdown-toggle').dropdown(); }) //Dropdown Menu Functionality Stupid bootstrap...
 </script>
</body>

</html>
