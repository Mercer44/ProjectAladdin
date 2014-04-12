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
<?PHP
	require 'nav.php';
?>
</div>
<div class="container-fluid">
	<div class="row">
    	<div class="col-md-10 col-md-offset-1">
        	<div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-home"> </span> My Home </div>
            	<div class="panel-body">
               	<div class="container-fluid">
				<div class="row">
                <div class="col-md-6">
                <h4>Lights</h4>                
				<table class="table table-hover">
                <thead>
                <tr>
                <th>Room Number</th> <th>Light ID</th><th>ON/OFF</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                	<td>Room 1</td> <td>2</td> <td>OFF</td>
                </tr>
                </tbody>
                
                </table>
           		<?PHP 
				//Ajax Call here
			
				?>
                </div>
                <div class="col-md-6">
                <h4>Temperature</h4>                
				<table class="table table-hover">
                <thead>
                <tr>
                <th>Room Number</th><th>Temperature</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                	<td>Room 1</td> <td>70ºF</td>
                </tr>
                </tbody>
                
                </table>
           		<?PHP 
				//Ajax Call here
			
				?>          
                </div>
                </div>     
            	</div>
                
                <!-- Row Separator -->
                
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
