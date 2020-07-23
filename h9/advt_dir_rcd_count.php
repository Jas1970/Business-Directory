<?php require_once('Connections/abc.php'); ?>
<?php

mysql_select_db($database_abc,$abc) or die("unable to Open database");


$asost = "select distinct(dir_city) from dir_add";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
if ($numrows < 1)
	{
		print "<center><h3> There No Any Record Found <br>
				<a href= advt_city_search.php> Try Another One </a></h3></center>";
		exit;
	}
	$display_block = "<font color=\"#990000\"><strong> <h3>Authorised Advt. List</h3> </strong> </font></center>";
	
	$display_block .= "<table>";
	$display_block .= "<tr><td width=\"250\" colspan=\"2\"><hr> </td></tr>";
$rownum = abs(1) ;

	while ($posts_info = mysql_fetch_array($asorcd))
	 {
   		// city code
		
		$dircity = $posts_info['dir_city'];
		
		$slcityrcd = "select * from dir_add where dir_city='$dircity'";
		$rdcityrcd = mysql_query($slcityrcd,$abc);
		$numrows = mysql_num_rows($rdcityrcd);
		
		
			
		
		$city_st = "select citname from city where citid='$dircity'";
		$city_rcd = mysql_query($city_st,$abc);
		$city_name = mysql_result($city_rcd,0,'citname');
	
		//state code

       //add to display
	     $display_block .= " 
		 <tr>
		 	<td width=\"225\">$rownum. <font color=\"#990000\" size=\"3\"> $city_name </font></td> <td width=\"150\">(Nos. : $numrows) </td> 
		</tr>";
	$rownum++;	
   }
	$display_block .= "<tr><td width=\"250\" colspan=\"2\" ><hr> </td></tr>";
	$display_block .= "</table>";   
?>


<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php Print $display_block; ?>
</body>
</html>
