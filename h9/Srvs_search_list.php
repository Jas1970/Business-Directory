<?php require_once('Connections/abc.php'); ?>
<?php

mysql_select_db($database_abc,$abc) or die("unable to Open database");


$cname = "$_POST[cname]";

$cityst = "select * from city where citname ='$_POST[cname]'";
$citrcd = mysql_query($cityst,$abc);
$citid = mysql_result($citrcd,0,'citid');

$asost = "select *  from srvs_main where city = '$citid' order by cname";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
if ($numrows < 1)
	{
		print "<h3> There No Any Record For This City <br>
				<a href= Srvs_city_search.php> Try Another One </a></h3>";
		exit;
	}
	$display_block = "<center><font color=\"#990000\"> <h3>Authorised Service Providors List (<b>$cname</b>)</h3></font></center>";
	$display_block .= "<hr>";
	$display_block .= "<table>";

$rownum = abs(1) ;

	while ($posts_info = mysql_fetch_array($asorcd))
	 {
   		// city code
  		$cname		= $posts_info['cname'];		
		$city 		= $posts_info['city'];
		$stat 		= $posts_info['stat'];
		$srvsid 	= $posts_info['sr_id'];
		$cno		= $posts_info['cno'];

		$city_st = "select citname from city where citid='$city'";
		$city_rcd = mysql_query($city_st,$abc);
		$city_name = mysql_result($city_rcd,0,'citname');
		
	
		//state code
		$state_st = "select stname from state where stid='$stat'";
		$state_rcd = mysql_query($state_st,$abc);
		$state_name = mysql_result($state_rcd,0,'stname');


       //add to display
	     $display_block .= " 
		 <tr>
		 	<td width=\"350\">$rownum. <font color=\"#990000\" size=\"3\"> $cname </font></td> <td width=\"150\">(ID : $srvsid) </td> 
	    	<td> (Company ID : $cno) </td>
		</tr>";
	$rownum++;	
   }
	$display_block .= "</table>";   
	$display_block .= "<hr>";

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
