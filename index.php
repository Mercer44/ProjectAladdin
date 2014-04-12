<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?PHP
	require 'requirejs.php';
	require 'requirecss.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
.page-header {
	margin-top: 20px;
}
span .glyphicon glyphicon-hdd{
display:table;
margin:0 auto;
width: 50%;
text-align: center;
}
th,td {
	text-align: center;
}
</style>
<title>Project Aladdin</title>
</head>

<body>
<?PHP
	require 'nav.php';
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="page-header">
        <?PHP 
				//Ajax Request
			?>
        <h1><span class="glyphicon glyphicon-home"> </span> My Home <br />
          <small>Overview</small></h1>
	  </div>
      <table class="table">
      	<thead>
        <tr>
        	<th><h4><strong>Modules</strong></h4></th>
            <th><h4><strong>Devices</strong></h4></th>
            <th><span class="glyphicon glyphicon-hdd" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='IP: 172.22.205.45'></span><h5>(Kitchen)</h5></th>
            <th><span class="glyphicon glyphicon-hdd" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='IP: 172.22.205.46'></span><h5>(Living Room)</h5></th>
            <th><span class="glyphicon glyphicon-hdd" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='IP: 172.22.205.47'></span><h5>(Living Room)</h5></th>
        </tr>
        </thead>
        <tr>
          <td><h4>Lights</h4></td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
        	<td></td>
            <td><h4>Light 1</h4></td>
            <td><h4><span class="glyphicon glyphicon-ok" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Running'></span></h4></td>
            <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
            <td><h4><span class="glyphicon glyphicon-ok" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Running'></span></h4></td>
        </tr>
         <tr>
        	<td></td>
            <td><h4>Light 2</h4></td>
            <td><h4><span class="glyphicon glyphicon-ok" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Running'></span></h4></td>
            <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
            <td><h4><span class="glyphicon glyphicon-ok" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Running'> </span></h4></td>
        </tr>
        <tr>
          <td><h4>Music</h4></td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td><h4></h4></td>
          <td><h4>Pandora</h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-ok" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Running'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-remove" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Disabled'></span></h4></td>
        </tr>
        <tr>
          <td><h4>Cameras</h4></td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td></td>
          <td><h4>Cam1</h4></td>
          <td><h4><span class="glyphicon glyphicon-ok" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Running'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-ok" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Running'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
        </tr>
        <tr>
          <td></td>
          <td><h4>Cam2</h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-ok" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Running'></span></h4></td>
        </tr>
        <tr>
          <td><h4>Locks</h4></td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td></td>
          <td><h4>Front Door</h4></td>
          <td><h4><i class="icon-large icon-unlock" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Unlocked'></i></h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
        </tr>
        <tr>
          <td></td>
          <td><h4>Back Door</h4></td>
          <td><h4><span class="icon-large icon-lock " id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='Locked!'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
        </tr>
        <tr>
          <td></td>
          <td><h4>Temperature</h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
          <td><h4><strong>70ºF</strong></h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
        </tr>
         <tr>
          <td></td>
          <td><h4>Humidity</h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
          <td><h4><strong>30%</strong></h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
        </tr>
         <tr>
          <td></td>
          <td><h4>Brightness</h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
          <td><h4><span class="glyphicon glyphicon-ban-circle" id='ActiveToolTip' data-toggle='tooltip' data-placement='right' title='N/A'></span></h4></td>
          <td><h4><strong>94%</strong></h4></td>
        </tr>
      </table>
    </div>
  </div>
</div>


<!-- Row Separator -->
<script type="text/javascript" src="dist/js/jquery-2.0.3.js"> </script> 
<script type="text/javascript" src="dist/js/bootstrap.js"> </script> 
<script type="text/javascript"> 
 $(document).ready(function () { $('.dropdown-toggle').dropdown(); }) //Dropdown Menu Functionality Stupid bootstrap...
 $('span').tooltip() //Running Tooltip triggering
 $('i').tooltip() //Secondary Tooltip triggering
 </script>
</body>
</html>
