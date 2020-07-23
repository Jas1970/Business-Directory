<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$asost = "select distinct(mids) from tsrvs_advts order by sidx";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
if ($numrows < 1)
	{
		print "<h4> There No Any Record Pending For Authorisation 01<br>
				</h4>";
		exit;
	}
	
	$display_block = "<table width= \"550\">";
	$display_block .= "<tr><td><center><font color=\"#990000\">Authorisation Pending List </font></center></td></tr>";
	$display_block .= "<tr><td colspan=\"2\"><hr></td></tr>";
$rownum = abs(1) ;
	while ($posts_info = mysql_fetch_array($asorcd))
	 {
  		
  		$cid   = $posts_info['mids'];
		
		$slcomp = "select * from srvs_main where sr_id='$cid'";
		$rdcomp = mysql_query($slcomp,$abc);
  		$cname	= mysql_result($rdcomp,0,'cname');		
		$city = mysql_result($rdcomp,0,'city');
		$stat = mysql_result($rdcomp,0,'stat');
		$scno = mysql_result($rdcomp,0,'cno');

		$city_st = "select citname from city where citid='$city'";
		$city_rcd = mysql_query($city_st,$abc);
		$city_name = mysql_result($city_rcd,0,'citname');
	

		$state_st = "select stname from state where stid='$stat'";
		$state_rcd = mysql_query($state_st,$abc);
		$state_name = mysql_result($state_rcd,0,'stname');
	
		$slcount = "select * from tsrvs_advts where mids='$cid'";
		$rdcount = mysql_query($slcount,$abc);
		$numrcd  = mysql_num_rows($rdcount);
	
	     $display_block .= " 
		 <tr>
		 	<td width=\"550\">$rownum. <font color=\"#990000\" size=\"2\"> $cname - $city_name ($state_name) -- $scno ($cid) </font></td> <td width=\"100\">(Records : $numrcd) </td> 
		</tr>";
	$rownum++;	
   }
	$display_block .= "<tr><td colspan=\"2\"><hr></td></tr>";
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
