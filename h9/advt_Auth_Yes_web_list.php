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

$asost = "select *  from dir_add, dir_main where dir_add.dir_city = '$cityid' and dir_main.dir_id=dir_add.dir_id and  dir_main.dir_auth='Y'   order by dir_cname";
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
		
		$dirid = $posts_info['dir_id'];
		
		$slname = "select * from dir_main where dir_id='$dirid'";
		$rdname = mysql_query($slname,$abc);
		$cname  = mysql_result($rdname,0,'dir_cname');
		$hid	= mysql_result($rdname,0,'dir_cno');
		$dirauth	= mysql_result($rdname,0,'dir_auth');

		//$asoid = mysql_result($rdname,0,'dir_asoid');
		

		
		$city = $posts_info['dir_city'];
		$stat = $posts_info['dir_stat'];
			
		
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
		 	<td width=\"400\">$rownum. <font color=\"#990000\" size=\"3\"> $cname  - $city_name ($state_name)</font></td> <td width=\"100\">(ID : $dirid) </td> 
			<td width=\"300\"> (Haanzee ID :  $hid)   (Auth. : $dirauth)</td>
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
