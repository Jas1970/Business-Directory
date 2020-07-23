<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$asost = "select *  from dir_aadvts order by dir_id";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
if ($numrows < 1)
	{
		print "<h4> There No Any Record Pending For Authorisation<br>
				</h4>";
		exit;
	}
	else
	{
	$display_block = "<table width= \"100%\">";
	$display_block .= "<tr><td><center><font color=\"#990000\">Authorisation Pending List : $numrows </font></center></td></tr>";
	$display_block .= "<tr><td colspan=\"3\"><hr></td></tr>";
	$rownum = abs(1) ;
	while ($posts_info = mysql_fetch_array($asorcd))
	 {
	 	$dirid	= $posts_info['dir_id'];
		$sldmain = "select * from dir_main where dir_id='$dirid'";
		$rsdmain = mysql_query($sldmain);
		$cname	= mysql_result($rsdmain,0,'dir_cname');		

		$city 	= $posts_info['city'];
		$stat 	= $posts_info['state'];
		$ids 	= $posts_info['dir_id'];
		$city_st = "select citname from city where citid='$city'";
		$city_rcd = mysql_query($city_st,$abc);
		$city_name = mysql_result($city_rcd,0,'citname');
		$state_st = "select stname from state where stid='$stat'";
		$state_rcd = mysql_query($state_st,$abc);
		$state_name = mysql_result($state_rcd,0,'stname');

		$advtsl	= "select  date_format(rgfdate, '%d-%m-%Y') as rgfdate,  date_format(rgtdate, '%d-%m-%Y') as rgtdate from dir_aadvts where dir_id='$ids'";
		$advtsrs =  mysql_query($advtsl,$abc);
		$fdate = mysql_result($advtsrs,0,'rgfdate');
		$tdate = mysql_result($advtsrs,0,'rgtdate');
	
	
		$sldmain = "select * from dir_main where dir_id='$dirid'";
		$rsdmain = mysql_query($sldmain);
		

	     $display_block .= " 
		 <tr>
		 	<td width=\"40%\">$rownum. <font color=\"#990000\" size=\"2\"> $cname - $city_name ($state_name) </font></td>
			 <td width=\"30%\">Regd. From : $fdate  To  $tdate</td> 
			 <td width=\"30 %\">(ID : $ids) </td> 
		</tr>";
	$rownum++;	
   }
	$display_block .= "<tr><td colspan=\"3\"><hr></td></tr>";
	$display_block .= "</table>";  
} 
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
