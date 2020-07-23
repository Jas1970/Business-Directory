<html
<title></title>
<head>
<link href="css/org_02.css" rel="stylesheet" type="text/css">
</head>
<body>
</body>
</html>
<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();	
		$line_num = 15;  
		$pg = 1;
		$max = $line_num;	// configure how many rows of message display per page
        $pg = $_REQUEST['pg'];   
		$cur_rows = 0;
		$max_rows = $max;
		$count=0;
		$srname="";
					$srvsid= $_GET['SID'];
					$ssrvsid= $_GET['SSID'];


	if($country=="")
		{
		$country = "-1";
		}
	if($stat =="")
		{
		$stat	 = "-1";
		}
	if($district=="")
		{
		$district = "-1";
		}
	if($city=="")
		{
		$city	 = "-1";
		}




	if($pg!=1)
	{
		for($i=1;$i<$pg;$i++)
		{
			$cur_rows=$cur_rows+$max;
			$max_rows=$max_rows+$max;
		}
	}
if($srvsid=="")
		{
			$srvsid= $_GET['SID'];
		}

if($ssrvsid=="")
		{
			$srvsid= $_GET['SSID'];
		}
//======================== First Loop	=================================== Selection Service Category wise ==========================
	
	
if($ssrvsid<>"-1")
	{

	$query = "SELECT distinct(srvs_advts.mids) FROM srvs_advts, srvs_main 
			 where srvs_advts.mids=srvs_main.sr_id and
			 srvs_advts.srid = '$ssrvsid' and
			  srvs_advts.srvsid='$srvsid' 
			  order by srvs_advts.sidx";

	$result = mysql_query($query) or die("Query failed b");
	$nre = mysql_num_rows($result);
	if($nre<=0)
		{

			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"yel_cell_top\">&nbsp;</td></tr> ";
			print "<tr><td class=\"yel_cell_center\" align=\"center\"><font class=\"small\">Record Not Found Against This Service and city  (1)</font></td></tr>";
			print "<tr><td class=\"yel_cell_bottom\">&nbsp;</td></tr> ";
			exit;

		}
			
	


		
	print("<table border=0 bgcolor=#cccccc width=100% cellspacing=0>");
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
	{	
		if($listed>=$cur_rows && $listed< $max_rows)
		{
		print "<tr bgcolor=#fcfcfc><td>";
			foreach($line as $guest_rec[$count])
			{
			if($count==0)
				{	 
				 $slhome = "select * from srvs_home where mdirid = '$guest_rec[$count]'";	
				 $rdhome = mysql_query($slhome);
				 $moto = mysql_result($rdhome,0,'comp_moto');
				 $srvsname = "select * from srvs_sadvts where mids = '$guest_rec[$count]' order by sname";
				 $rdsrvs   = mysql_query($srvsname);
				 $rdnum    = $db->numRows($rdsrvs);
				 if($rdnum<>"0")
					{
					while ($posts_info = mysql_fetch_array($rdsrvs))
						{
							$sname = $posts_info['sname'];
							$srname = $srname.''."$sname, ";
						}
					}
					else

					{
					
					}
 						$srvssla = "select * from dir_srvs where srvs_id='$srvsid'";
						$srvsrda = mysql_query($srvssla);
						
						$srvs_name = mysql_result($srvsrda,0,'srvs_name');
						
						$subsrvssla = "select * from dir_subsrvs where sn_id = '$ssrvsid'";
						$subsrvsrda = mysql_query($subsrvssla);
						$subsrvs_name = mysql_result($subsrvsrda,0,'sname');


						$srname = "$srvs_name : " . "($subsrvs_name) 1";

				
					$desc = substr($srname,0,139);
					
                 $srvsData = srvsadd($guest_rec[$count]);
                 for($index=0;$index < count($srvsData);$index++)
                    {
                     $srvsmain = $srvsData[$index];
                                $cid    = $srvsmain->getSrvsid();
                                $cname  = $srvsmain->getCname();
                                $cpname = $srvsmain->getCpname();
                                $add1   = $srvsmain->getAdd1();
                                $add2   = $srvsmain->getAdd2();
                                $mail   = $srvsmain->getMail();
                                $web    = $srvsmain->getWeb();
                                $tel    = $srvsmain->getTel();
                                $fax    = $srvsmain->getFax();
                                $pin    = $srvsmain->getPin();
                                $ctname = $srvsmain->getCity();
                                $state  = $srvsmain->getStat();    
                                $cotname = $srvsmain->getCont();
                                $cno     = $srvsmain->getCno();
								$srvsauth = $srvsmain->getSrvs_auth();
                 		}
						if($srvsauth=='Y') 
							{
						
						print "<fieldset>
							<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"org_DRK_tb bgimg\" colspan=5 align=\"left\">
							<a href=0708150141.php?ID=$guest_rec[$count] target=_parent><b>$cname - ($ctname)</b></a></td>
							<td align=\"center\" class=\"org_DRK_tb bgimg\"><a href=0708150141.php?ID=$guest_rec[$count] target=_parent> Web Site : Yes </a></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($moto)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$add1 $add2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\">$mail </td>
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $ctname, $state - $pin ($cotname)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $web</td>
							
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$tel,  Fax : $fax </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$cno </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
						</tr>
						
						
						
						</table>
					</fieldset>";
					}
					else
					{
				print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"org_DRK_tb bgimg\" colspan=5 align=\"left\">
							<b>$cname - ($ctname)</b></td><td align=\"center\" class=\"org_DRK_tb bgimg\"> Web Site : No </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($moto)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$add1 $add2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\"> </td>
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $ctname, $state - $pin ($cotname)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"></td>
							
					
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">,  Fax :  </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
						</tr>

						
						
						</table>
					</fieldset>";
					}

				}
			}
			$count++;

			$srname ="";
		}
		$listed++;
		$count=0;
		print "</td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#FFCC66><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($nre/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150138.php?SID=$srvsid&SSID=$ssrvsid&country=$country&state=$stat&district=$district&city=$city&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150138.php?SID=$srvsid&SSID=$ssrvsid&country=$country&state=$stat&district=$district&city=$city&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150138.php?SID=$srvsid&SSID=$ssrvsid&country=$country&state=$stat&district=$district&city=$city&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
	else
	{
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"yel_cell_top\">&nbsp;</td></tr> ";
			print "<tr><td class=\"yel_cell_center\" align=\"center\"><font class=\"small\">Please Select Valid Service Name & City name .......Thanks </font></td></tr>";
			print "<tr><td class=\"yel_cell_bottom\">&nbsp;</td></tr> ";
			exit;
	}

?>
