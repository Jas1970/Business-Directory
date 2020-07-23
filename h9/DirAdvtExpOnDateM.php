<?php require_once('Connections/abc.php'); ?>
<?php

$ddate = "$_POST[advtdate]";
$DirToDate  = date("$ddate", mktime());
$display_block = "$DirToDate";

mysql_select_db($database_abc,$abc);
$sl_rcd = "select distinct(main_dirid) from dir_catprd where regtodt <='$DirToDate'";
$rs_rcd = mysql_query($sl_rcd,$abc);
$count_rcd = mysql_num_rows($rs_rcd);
if ($count_rcd == 0)
	{
		print "<center><h2> There is Not Any Record Expire On This Date<br>
				<a href=\"DirAdvtExpOnDate.php\"> Try Another Date </a></h2>
		</center>";
		exit;
	}


$display_block .= "<center><font color=\"#990000\"><strong> Company Status </strong> </font></center>";
$display_block .= "<hr>";
$display_block .= "<table>";
while ($posts_info = mysql_fetch_array($rs_rcd))
		 {
		    $dirid = $posts_info['main_dirid'];
			$mainsl = "select * from dir_main where dir_id='$dirid'";
			$mainrd = mysql_query($mainsl,$abc);
			$cname = mysql_result($mainrd,0,'dir_cname');
			
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
					<td><strong><font color=\"#0000FF\"> $cname, $citname-$stname ( Company ID : $dirid )</font></strong> </td>
					<td><strong>  .</strong></td>
				</tr> </table>";
			
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
										<td><strong>$rownum $catname </strong></td>
									</tr> </table>";
		
					$prdidsl = "select cat_id, prd_id,date_format(regfrdt, '%d-%m-%Y') as regfdt, date_format(regtodt, '%d-%m-%Y') as regtodt from dir_catprd where cat_id ='$catid' and main_dirid ='$dirid' and regtodt <= '$DirToDate'";
					$prdidrd = mysql_query($prdidsl,$abc);

					$rownum1 = abs(1) ;
					
					while($ppinfo = mysql_fetch_array($prdidrd))
						{
							$prdid = $ppinfo['prd_id'];
							$regto = $ppinfo['regtodt'];
							$regfr = $ppinfo['regfdt'];
		
							$prdsl = "select * from prod where prodid ='$prdid'";
							$prdrd = mysql_query($prdsl,$abc);
							$prodname = mysql_result($prdrd,0,'prodnam');

							$display_block .= "<table>
									<tr>
										<td width=\"20px\"> 
										</td>
										<td width=\"350px\">$rownum1 $prodname</td>
										<td width=\"150px\">$regfr </td> 
										<td width=\"150px\">$regto </td>
									</tr>
									<tr>
										
									</tr> " ;

							$rownum1++;	
						}
						
				$rownum++;	

					}

				$display_block .= "<tr>
										<td> <hr> </td> <td> <hr> </td> <td> <hr> </td> <td> <hr> </td>
									</tr> " ;

			
			}	

$display_block .= "</table>";
//$display_block .= "<hr>";

?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php   print $display_block; ?>
</body>
</html>
