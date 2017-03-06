<?php

	include("connect.php"); 	
	
	$link=Connection();

	$result=mysql_query("SELECT * FROM `vtsApp` ORDER BY `timestamp` DESC",$link);
?>

<html>
   <head>
      <title>Sensor Data</title>
   </head>
<body>
   <h1>Readings</h1>

   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;Timestamp&nbsp;</td>
			
			<td>&nbsp;Latitude&nbsp;</td>
			<td>&nbsp;Longitude&nbsp;</td>
			<td>&nbsp;Car No.&nbsp;</td>
		</tr>

      <?php 
		  if($result!==FALSE){
		     while($row = mysql_fetch_array($result)) {
		        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
		           $row["timestamp"], $row["latitude"], $row["longitude"],$row["carno"]);
		     }
		     mysql_free_result($result);
		     mysql_close();
		  }
      ?>

   </table>
</body>
</html>
