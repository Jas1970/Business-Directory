<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$dirid = $_POST['dirno'];
$sl_rcd = "select * from dir_main where dir_id ='$dirid'";
$rs_rcd = mysql_query($sl_rcd,$abc);
$count_rcd = mysql_num_rows($rs_rcd);
if ($count_rcd == 0)
	{
	print "<table><tr><td width=\"650\" align=\"center\"><h4>There No Any Record For This ID <br>
		<a href= 0708150224.php> Try Another One </a></h4></td></tr></table>";
		print "</table>";
	exit;
	}
$display_block = "<table>";
$display_block .= "<tr><td width =\"650\"><center><font color=\"#990000\"><strong> Company Status </strong> </font></center></td></tr>";
$display_block .= "<table>";
while ($posts_info = mysql_fetch_array($rs_rcd))
		 {
			$cname = $posts_info['dir_cname'];
			$sladd = "select * from dir_add where dir_id ='$dirid'";
			$rdadd = mysql_query($sladd,$abc);
			$add1 = mysql_result($rdadd,0,'dir_add1');
			$add2 = mysql_result($rdadd,0,'dir_add2');
			$citid = mysql_result($rdadd,0,'dir_city');
			$stid = mysql_result($rdadd,0,'dir_stat');
			$dirtel = mysql_result($rdadd,0,'dir_tel');
			$dirmob = mysql_result($rdadd,0,'dir_mob');
			$dirmail = mysql_result($rdadd,0,'dir_mail');
			$citysl = "select * from city where citid='$citid'";
			$cityrd = mysql_query($citysl,$abc);
			$citname = mysql_result($cityrd,0,'citname');
			$statsl = "select * from state where stid='$stid'";
			$statrd = mysql_query($statsl,$abc);
			$stname = mysql_result($statrd,0,'stname');
			$display_block .= "
				<tr>
					<td width=\"650\" align=\"center\"><strong><font color=\"#0000FF\"> $cname </font>(ID : $dirid )</strong> </td>
				</tr>
				<tr>
					<td align=\"center\"><font size=\"2pt\"> $add1, $add2 </font></td>
				</tr>
				<tr>
					<td align=\"center\"><font size=\"2pt\"> Tel.No. : $dirtel  Mobile No. : $dirmob </font></td>
				<tr>

				</tr>
					<td align=\"center\"><font size=\"2pt\"> Mail : $dirmail</font></td>
				<tr>
					<td align=\"center\"><strong><font size=\"2pt\"> $citname - ($stname) </font></strong></td>
				</tr> 
				<tr>
					<td><hr></td>
				</tr>
				</table>" ;
			$slrcatp = "select distinct(cat_id) from dir_catprd where main_dirid='$dirid'";
			$rdrcatp = mysql_query($slrcatp,$abc);
			$rownum = abs(1) ;
			while($pinfo = mysql_fetch_array($rdrcatp))
					{
					$catid = $pinfo['cat_id'];
					$catsl = "select * from catg where catid='$catid'";
					$catrd = mysql_query($catsl,$abc);
					$catname = mysql_result($catrd,0,'catname');
					$display_block .= "
						<table>
						<tr>
						<td width=\"650\" bgcolor=\"FFFFEE\"><strong><font size=\"3pt\">$rownum. $catname </font></strong></td>
						</tr>
						</table>";
					$prdidsl = "select prd_id, date_format(regtodt, '%d-%m-%Y') as regtodt from dir_catprd where cat_id ='$catid' and main_dirid ='$dirid'";
					$prdidrd = mysql_query($prdidsl,$abc);
					$rownum1 = abs(1) ;
					while($ppinfo = mysql_fetch_array($prdidrd))
						{
							$prdid = $ppinfo['prd_id'];
							$regto = $ppinfo['regtodt'];
							$prdsl = "select * from prod where prodid ='$prdid'";
							$prdrd = mysql_query($prdsl,$abc);
							$prodname = mysql_result($prdrd,0,'prodnam');
							$display_block .= "
									<table>
									<tr>
										<td width =\"100\" bgcolor=\"EEEEFF\"></td>
										<td width =\"300\" bgcolor=\"EEEEFF\"><strong><font color=\"#3300CC\" size=\"2pt\">$rownum1. $prodname </font></strong></td>
										<td width =\"242\" bgcolor=\"EEEEFF\"><strong><font color=\"#3300CC\" size=\"2pt\">$regto</font></strong> </td>
									</tr>
									</table>" ;

							$rownum1++;	
							}
				$rownum++;	
					}
			}	
// 		Company Status on All Tables
$display_block .= "<br> <table>";
$selhome = "select * from dir_home where mdirid='$dirid'";
$rdshome = mysql_query($selhome,$abc);
$hnumrows = mysql_num_rows($rdshome);
if($hnumrows<>0)
	{
		$display_block .="<tr><td Width=\"200\">Home Page Status	</td><td Width=\"50\">=</td><td Width=\"100\">Ok</td><td Width=\"300\"></td></tr>";
	}
	else
	{
		$display_block .="<tr><td>Home Page Status 	</td><td>=</td><td>Pending</td><td></td></tr>";
	}	
$selprof = "select * from dir_profile where mdirid='$dirid'";
$rdsprof = mysql_query($selprof,$abc);
$prfnumrows = mysql_num_rows($rdsprof);
if($prfnumrows<>0)
	{
		$display_block .="<tr><td Width=\"200\">Profile Page Status </td><td>=</td><td>Ok</td><td></td></tr>";
	}
	else
	{
		$display_block .="<tr><td>Profile Page Status 	</td><td>=</td><td>Pending</td><td></td></tr>";
	}	
$selprd = "select * from dir_compprod where mdirid='$dirid'";
$rdsprd = mysql_query($selprd,$abc);
$prdnumrows = mysql_num_rows($rdsprd);
if($prdnumrows<>0)
	{
		$display_block .="<tr><td Width=\"200\">Product List nos. Page Status </td><td>=</td><td>Ok</td><td>Count = $prdnumrows</td></tr>";
	}
	else
	{
		$display_block .="<tr><td>Product List nos. page Status 	</td><td>=</td><td>Pending</td><td></td></tr>";
	}	
$selfho = "select * from dir_fho where dir_id='$dirid'";
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
$seljob = "select * from job_main where job_comp='$dirid' and job_tag='1'";
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
$selprop = "select * from prop_main where prop_comp_id='$dirid' and prop_comp_type='1'";
$rdsprop = mysql_query($selprop,$abc);
$propnumrows = mysql_num_rows($rdsprop);
if($propnumrows<>0)
	{
		$display_block .="<tr><td Width=\"200\">Real Estate Page Status </td><td>=</td><td>Ok</td><td>Count = $propnumrows</td></tr>";
	}
	else
	{
		$display_block .="<tr><td Width=\"200\">Real Estate page Status</td><td>=</td><td>Pending</td><td></td></tr></table>";
	}	
$sllg	 	= "select * from dir_admin where dlogin_cno='$dirid'";
$rdlogin 	= mysql_query($sllg, $abc)or die (mysql_error()) ;
$rcdcount 	= mysql_num_rows($rdlogin);
$login_id 	= mysql_result($rdlogin,0,'dlogin_id');
$login_pwd 	= mysql_result($rdlogin,0,'dlogin_pwd');
$pwds  		= base64_decode($login_pwd);
$display_block .="<tr><td Width=\"200\">Login ID</td><td>=</td><td>$login_id </td><td></td></tr>";
$display_block .="<tr><td Width=\"200\">Login Password</td><td>=</td><td>$pwds </td><td></td></tr>";
$display_block .= "</table>";
$display_block .= "<br>";
$display_block .= "<table width=\"650px\" border=\"0\" cellpadding=\"0\" cellspacing=\"4\">";
$display_block .= "<tr><td width=\"100\" height=\"4px\" bgcolor=\"#990000\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#FF6600\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#33CC00\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#00FFCC\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#FFFF00\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#FF9999\"></td> </tr>";
$display_block .= "</table>";
$display_block .= "<br>";
$display_block .= "<table>";
$display_block .= "<tr><td width=\"650\"><center><h4><a href=\"0708150224.php\">Search Another One </a></h4></center></td></tr>";
$display_block .= "<tr><td></td></tr> </table>";
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
<?php
mysql_free_result($rs_rcd);
mysql_free_result($catrd);
mysql_free_result($prdidrd);
mysql_free_result($prdrd);
mysql_free_result($rdadd);
mysql_free_result($cityrd);
mysql_free_result($statrd);
mysql_free_result($rdsprop);
mysql_free_result($rdsjob);
mysql_free_result($rdsfho);
mysql_free_result($rdsprd);
//mysql_free_result($rdsdno);
mysql_free_result($rdsprof);
mysql_free_result($rdshome);
?>