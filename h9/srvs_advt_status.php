<?php require_once('Connections/abc.php'); ?>
<?php

mysql_select_db($database_abc,$abc);


$sdirid = $_POST['dirno'];


$sl_rcd = "select * from srvs_main where sr_id ='$sdirid'";
$rs_rcd = mysql_query($sl_rcd,$abc);
$count_rcd = mysql_num_rows($rs_rcd);
if ($count_rcd == 0)
	{
		print "<table><tr><td width=\"650\" align=\"center\"><h3>There No Any Record For This ID <br>
			<a href= SrvsadvtSL7.php> Try Another One </a></h3></td></tr></table>";
		
	print "<br>";
	print "<table width=\"650px\" border=\"0\" cellpadding=\"0\" cellspacing=\"4\">";
	print "<tr><td width=\"100\" height=\"4px\" bgcolor=\"#990000\"></td>";
	print "<td width=\"100\" bgcolor=\"#FF6600\"></td>";
	print "<td width=\"100\" bgcolor=\"#33CC00\"></td>";
	print "<td width=\"100\" bgcolor=\"#00FFCC\"></td>";
	print "<td width=\"100\" bgcolor=\"#FFFF00\"></td>";
	print "<td width=\"100\" bgcolor=\"#FF9999\"></td></tr>";
	print "</table>";
	exit;
	}


$display_block = "
				<table>
					<tr>
						<td width = \"600\"> <center><font color=\"#990000\" size = \"3\"><b> <hr></b> </font></center></td>
					</tr>				
				</table>";
$display_block .= "<table>";

			$result_rcd = mysql_query($sl_rcd,$abc);


			$diradd1 = mysql_result($result_rcd,0,'add1');
			$diradd2 = mysql_result($result_rcd,0,'add2');
			$citid = mysql_result($result_rcd,0,'city');
			$stid = mysql_result($result_rcd,0,'stat');
			$pin = mysql_result($result_rcd,0,'pin');
			$dirtel = mysql_result($result_rcd,0,'tel');
			$dirfax = mysql_result($result_rcd,0,'fax');
			$dirmob = mysql_result($result_rcd,0,'mob');
			$dirmail = mysql_result($result_rcd,0,'mail');
			$dirweb = mysql_result($result_rcd,0,'web');
			$cname = mysql_result($result_rcd,0,'cname');
			$cpname = mysql_result($result_rcd,0,'cpname');

			$citysl = "select * from city where citid='$citid'";
			$cityrd = mysql_query($citysl,$abc);
			$citname = mysql_result($cityrd,0,'citname');

			$statsl = "select * from state where stid='$stid'";
			$statrd = mysql_query($statsl,$abc);
			$stname = mysql_result($statrd,0,'stname');



			$display_block .= " 
				<tr>
				
					<td size=\"15\" width=\"600\"><u><center>$cname (ID : $sdirid)</center> </u> </td>
				</tr>	
				<tr>
					<td width=\"600\"> <font color=\"#800000\" size = \"2\"> <center>$diradd1</center></font></td>
				</tr> 
				<tr>
					<td width=\"600\"> <font color=\"#800000\" size = \"2\"> <center> $diradd2 </center></font></td>
				</tr> 
				<tr>
					<td width=\"600\"> <font color=\"#800000\" size = \"2\"> <center> $citname - $pin ( $stname ) </center></font></td>
				</tr> 
				<tr>
					<td width=\"600\"> <font color=\"#0000FF\" size = \"2\"> <center>  Tel.No. <b>$dirtel  </b>, Fax No. <b>$dirfax   </b>Mobile No. <b>$dirmob </b></center></font></td>
				</tr> 
				<tr>
					<td width=\"600\"> <font color=\"#0000FF\" size = \"2\"> <center>  Mail : <b>$dirmail  </b> Web :<b> $dirweb </b></center></font></td>
				</tr> 
				<tr> 
					<td width=\"650\"><font color=\"#006600\"> <center>Contact Person : <b> $cpname </center></b></font></td>
				</tr>
				</table>
				" ;





while ($posts_info = mysql_fetch_array($rs_rcd))
		 {
//			$sdirid = $posts_info['si_id']; 
			$cname = $posts_info['cname'];
			$add1 = $posts_info['add1'];
			$add2 = $posts_info['add2'];
			$citid =$posts_info['city'];
			$stid = $posts_info['stat'];
			$dirtel = $posts_info['tel'];
			$dirmob = $posts_info['mob'];
			$dirmail = $posts_info['mail'];
			$dirpin = $posts_info['pin'];


			$citysl = "select * from city where citid='$citid'";
			$cityrd = mysql_query($citysl,$abc);
			$citname = mysql_result($cityrd,0,'citname');

			$statsl = "select * from state where stid='$stid'";
			$statrd = mysql_query($statsl,$abc);
			$stname = mysql_result($statrd,0,'stname');
	
			$display_block .= "<table>
						<tr>
							<td width=\"250\" bgcolor=\"DDDDDD\"><b><u><font color=\"#0000FF\" size = \"3\"> Service Name </font></b></u></td>
							<td width=\"100\" bgcolor=\"DDDDDD\"><b><u><font color=\"#0000FF\" size = \"3\"> Reg.For Year </font></b></u></td>
							<td width=\"150\" bgcolor=\"DDDDDD\"><b><u><font color=\"#0000FF\" size = \"3\"> Reg.From Date </font></b></u> </td> 
							<td width=\"150\" bgcolor=\"DDDDDD\"><b><u><font color=\"#0000FF\" size = \"3\"> Reg.To Date </font></b></u> </td> 
				
				</tr>";	
	
			$slrcatp = "select distinct(srvsid) from srvs_advts where mids='$sdirid'";
			$rdrcatp = mysql_query($slrcatp,$abc);
			
			$rownum = abs(1);
			
			while($pinfo = mysql_fetch_array($rdrcatp))
					{
					$srvsid = $pinfo['srvsid'];
		
					$srvsl = "select * from dir_srvs where srvs_id='$srvsid'";
					$srvrd = mysql_query($srvsl,$abc);
					$srvsname = mysql_result($srvrd,0,'srvs_name');
		
					$prdidsl = "select  rfyear, date_format(rgfdate, '%d-%m-%Y') as regfdt,  
								date_format(rgtdate, '%d-%m-%Y') as regtodt  
								from srvs_advts where srvsid ='$srvsid' and mids ='$sdirid'";
					
					$prdidrd = mysql_query($prdidsl,$abc);
					$rcdno  = mysql_num_rows($prdidrd);
					$rfyear = mysql_result($prdidrd,0,'rfyear');
					$regfdt = mysql_result($prdidrd,0,'regfdt');
					$regtdt = mysql_result($prdidrd,0,'regtodt');
					

					$display_block .= "
						<tr>
							<td width=\"250\" bgcolor=\"EEEEEE\"><font color=\"#000000\" size = \"2\"><strong>$rownum $srvsname </strong></font> </td>
							<td width=\"100\" bgcolor=\"EEEEEE\"><font color=\"#000000\" size = \"2\"> $rfyear Year </font> </td>
							<td width=\"150\" bgcolor=\"EEEEEE\"><font color=\"#000000\" size = \"2\"> $regfdt </font></td>
							<td width=\"150\" bgcolor=\"EEEEEE\"><font color=\"#000000\" size = \"2\"> $regtdt </fotn></td>
						</tr>";
					
						$rownum++;	

					}
					
	
			}

$display_block .= "</table> <br>";
$display_block .= "<table>";
$homesl = "select * from srvs_home where mids='$sdirid'";
$homerd = mysql_query($homesl,$abc);
$hnumrows = mysql_num_rows($homerd);
if($hnumrows<>0)
	{
		$display_block .="<table><tr><td Width=\"200\">Home Page Status	</td><td Width=\"50\">=</td><td Width=\"100\">Ok</td><td Width=\"300\"></td></tr>";
	}
	else
	{
		$display_block .="<tr><td>Home Page Status 	</td><td>=</td><td>Pending</td><td></td></tr>";
	}	
	
$brchsl = "select * from srvs_branch where mids='$sdirid'";
$brchrd = mysql_query($brchsl,$abc);
$brnumrows = mysql_num_rows($brchrd);
if($brnumrows<>0)
	{
		$display_block .="<tr><td Width=\"200\">Branch List Status	</td><td Width=\"50\">=</td><td Width=\"100\">Ok</td><td Width=\"300\">Count = $brnumrows</td></tr>";
	}
	else
	{
		$display_block .="<tr><td>Branch List Status 	</td><td>=</td><td>Pending</td><td></td></tr>";
	}	

$selfho = "select * from srvs_fho where sr_id='$sdirid'";
$rdsfho = mysql_query($selfho,$abc);
$fhonumrows = mysql_num_rows($rdsfho);
if($fhonumrows<>0)
	{
		$display_block .="<tr><td Width=\"200\">Flash Out Page Status </td><td>=</td><td>Ok</td><td></td></tr>";

	}
	else
	{
		$display_block .="<tr><td>Flash Out page Status	</td><td>=</td><td>Pending</td><td></td></tr>";

	}
	
$seljob = "select * from job_main where job_comp='$sdirid' and job_tag='2'";
$rdsjob = mysql_query($seljob,$abc);
$jobnumrows = mysql_num_rows($rdsjob);
if($jobnumrows<>0)
	{
		$display_block .="<tr><td Width=\"200\">Job Placement Page Status </td><td>=</td><td>Ok</td><td>Count = $jobnumrows</td></tr>";
	}
	else
	{
		$display_block .="<tr><td>Job Placement page Status	</td><td>=</td><td>Pending</td><td></td></tr>";

	}	
$selprop = "select * from prop_main where prop_comp_id='$sdirid' and prop_comp_type='2'";
$rdsprop = mysql_query($selprop,$abc);
$propnumrows = mysql_num_rows($rdsprop);
if($propnumrows<>0)
	{
		$display_block .="<tr><td Width=\"200\">Real Estate Page Status </td><td>=</td><td>Ok</td><td>Count = $propnumrows</td></tr>";
	}
	else
	{
		$display_block .="<tr><td Width=\"200\">Real Estate page Status</td><td>=</td><td>Pending</td><td></td></tr>";
	}	

$selprop = "select * from srvs_admin where dlogin_cno='$sdirid'";
$rdsprop = mysql_query($selprop,$abc);
$lgid 	 = mysql_result($rdsprop,0,'dlogin_id');
$lgpwd	 = mysql_result($rdsprop,0,'dlogin_pwd');
$dpwd 	= base64_decode($lgpwd);

$propnumrows = mysql_num_rows($rdsprop);
if($propnumrows<>0)
	{
		$display_block .="<tr><td Width=\"200\">Login ID </td><td>=</td><td>$lgid</td><td></td></tr>";
		$display_block .="<tr><td Width=\"200\">Password </td><td>=</td><td>$dpwd</td><td></td></tr>";
	}
	else
	{
		$display_block .="<tr><td Width=\"200\"></td><td>=</td><td></td><td></td></tr></table>";
	}	
$display_block .= "<table width=\"650px\" border=\"0\" cellpadding=\"0\" cellspacing=\"4\">";
$display_block .= "<tr><td width=\"100\" height=\"4px\" bgcolor=\"#990000\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#FF6600\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#33CC00\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#00FFCC\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#FFFF00\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#FF9999\"></td></tr>";
$display_block .= "</table>";
$display_block .= "<table>";
$display_block .= "<tr><td width=\"650\" align=\"center\"><a href=\"SrvsadvtSL7.php\"> Search Another One </a></td></tr></table>";



?>

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php   print $display_block; ?>
</body>
</html>
