<?php require_once('Connections/abc.php'); ?>
<?php

mysql_select_db($database_abc,$abc) or die("unable to Open database");


$contid 	= $_POST['country_dropdown'];
$stateid	= $_POST['state_dropdown'];
$districtid	= $_POST['district_dropdown'];
$cityid		= $_POST['city_dropdown'];

//$cityst = "select * from city where citname ='$_POST[cname]'";
//$citrcd = mysql_query($cityst,$abc);
//$citid = mysql_result($citrcd,0,'citid');

$asost = "select *  from srvs_main where city = '$cityid' and srvs_auth='N'   order by cname";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
if ($numrows < 1)
	{
		print "<center><h3> There No Any Record For This City <br>
				<a href= advt_city_search.php> Try Another One </a></h3></center>";
		exit;
	}
	$display_block = "<center><font color=\"#990000\"><strong> <h3>Authorised Advt. List</h3> </strong> </font></center>";
	$display_block .= "<hr>";
	$display_block .= "<table>";

$rownum = abs(1) ;

	while ($posts_info = mysql_fetch_array($asorcd))
	 {
   		// city code
		
		$srvsid = $posts_info['sr_id'];
		$cname  = $posts_info['cname'];
		$hid	= $posts_info['cno'];
		//$asoid = mysql_result($rdname,0,'dir_asoid');
		

		
		$city = $posts_info['city'];
		$stat = $posts_info['stat'];
			
		//$aso_st = "select aso_fname, aso_mname, aso_lname from aso_main where aso_id= '$asoid'";
		
		//$add_rcd = mysql_query($aso_st,$abc);
		
		//$asofname = mysql_result($add_rcd,0,'aso_fname');
		//$asomname = mysql_result($add_rcd,0,'aso_mname');
		//$asolname = mysql_result($add_rcd,0,'aso_lname');
		
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
		 	<td width=\"425\">$rownum. <font color=\"#990000\" size=\"3\"> $cname  - $city_name ($state_name)</font></td> <td width=\"150\">(ID : $srvsid) </td> 
			<td width=\"200\"> (Haanzee ID :  $hid)</td>
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
