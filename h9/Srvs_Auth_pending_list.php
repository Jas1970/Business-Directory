<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$asost = "select *  from tsrvs_advts";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
if ($numrows < 1)
	{
		print "<h4> There No Any Record Pending For Authorisation <br>
				</h4>";
		exit;
	}
	$display_block = "<table width= \"100%\">";
	$display_block .= "<tr><td width= \"50%\"><center><font color=\"#990000\">Authorisation Pending List : $numrows </font></center></td>
						   <td width= \"25%\" ></td>
						   <td width= \"25%\" ></td>	
					   </tr>";
	$display_block .= "<tr><td colspan=\"3\"><hr></td></tr>";
	$rownum = abs(1) ;
	while ($posts_info = mysql_fetch_array($asorcd))
		 {
  		$srvs_id	= $posts_info['mids'];
		$city 		= $posts_info['city'];
		$district 	= $posts_info['district']; 
		$state 		= $posts_info['state'];
		$country	= $posts_info['country'];
		$rfyear		= $posts_info['rfyear'];
		$rgfdate 	= $posts_info['rgfdate'];
		$rgtdate 	= $posts_info['rgtdate'];

		
		$slmain		= "select * from srvs_main where srvs_id='$srvs_id'";
		$rsmain 	= mysql_query($slmain,$abc);
		$cname 		= mysql_result($rsmain,0,'cname');
		$ids = $posts_info['ids'];
		
		
		$city_st = "select citname from city where citid='$city'";
		$city_rcd = mysql_query($city_st,$abc);
		$city_name = mysql_result($city_rcd,0,'citname');
		$state_st = "select stname from state where stid='$state'";
		$state_rcd = mysql_query($state_st,$abc);
		$state_name = mysql_result($state_rcd,0,'stname');
		
		
		
		
	     $display_block .= " 
		 <tr>
		 	<td>$rownum. <font color=\"#990000\" size=\"2\"> $cname - $city_name ($state_name) </font></td>
			<td>$rgtdate</td>
			<td> (ID : $ids)</td> 
		</tr>";
	$rownum++;	
   }
	$display_block .= "<tr><td colspan=\"3\"><hr></td></tr>";
	$display_block .= "</table>";   
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php Print $display_block; ?>
</body>
</html>
