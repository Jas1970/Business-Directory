<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$asost = "select distinct(job_comp), job_tag from job_tmain order by job_tag";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
if ($numrows < 1)
	{
		print "<h4> There No Any Record Pending For Authorisation<br>
				</h4>";
		exit;
	}
	
	$display_block = "<table width= \"550\">";
	$display_block .= "<tr><td><center><font color=\"#990000\">Authorisation Pending List </font></center></td></tr>";
	$display_block .= "<tr><td colspan=\"2\"><hr></td></tr>";
$rownum = abs(1) ;
	while ($posts_info = mysql_fetch_array($asorcd))
	 {
 		$cid   = $posts_info['job_comp'];
		$ctype = $posts_info['job_tag'];
		 if($ctype=="1")
		 	{
			$slcomp = "select * from dir_main where dir_id='$cid'";
			$rdcomp = mysql_query($slcomp,$abc);
  			$cname	= mysql_result($rdcomp,0,'dir_cname');		
			$scno = mysql_result($rdcomp,0,'dir_cno');
			$slcompadd = "select * from dir_add where dir_id='$cid'";
			$rdcompadd = mysql_query($slcompadd,$abc);
			$city = mysql_result($rdcompadd,0,'dir_city');
			$stat = mysql_result($rdcompadd,0,'dir_stat');
			$city_st = "select citname from city where citid='$city'";
			$city_rcd = mysql_query($city_st,$abc);
			$city_name = mysql_result($city_rcd,0,'citname');
			$state_st = "select stname from state where stid='$stat'";
			$state_rcd = mysql_query($state_st,$abc);
			$state_name = mysql_result($state_rcd,0,'stname');
			
			$slrcd	= "select * from job_tmain where job_comp='$cid' and job_tag='1'";
			$rdrcd  = mysql_query($slrcd,$abc);
			$numrcd = mysql_num_rows($rdrcd);
			$display_block .= " 
		 	<tr>
		 		<td width=\"550\">$rownum. <font color=\"#990000\" size=\"2\"> $cname - $city_name ($state_name) --(Dir) $scno </font></td> <td width=\"100\">(Records : $numrcd) </td> 
			</tr>";
			}
		else	
			{
			$slcomp = "select * from srvs_main where sr_id='$cid'";
			$rdcomp = mysql_query($slcomp,$abc);
  			$cname	= mysql_result($rdcomp,0,'cname');		
			$scno = mysql_result($rdcomp,0,'cno');
			$city = mysql_result($rdcomp,0,'city');
			$stat = mysql_result($rdcomp,0,'stat');
		
			$city_st = "select citname from city where citid='$city'";
			$city_rcd = mysql_query($city_st,$abc);
			$city_name = mysql_result($city_rcd,0,'citname');
			
			$state_st = "select stname from state where stid='$stat'";
			$state_rcd = mysql_query($state_st,$abc);
			$state_name = mysql_result($state_rcd,0,'stname');
			
			
			
			$slrcd	= "select * from job_tmain where job_comp='$cid' and job_tag='2'";
			$rdrcd  = mysql_query($slrcd,$abc);
			$numrcd = mysql_num_rows($rdrcd);
	       	$display_block .= " 
		 	<tr>
		 		<td width=\"550\">$rownum. <font color=\"#990000\" size=\"2\"> $cname - $city_name ($state_name) --(Srvs) $scno </font></td> <td width=\"100\">(Records : $numrcd) </td> 
			</tr>";
			}	
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
