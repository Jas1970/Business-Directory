<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';


$compid = $_GET['cid'];
$comptype = $_GET['cty'];
if($srvsid=="")
	{
	$srvsid = $_REQUEST['ID'];
	}
/*
$cname 		= $_REQUEST['cname'];
$cpname 	= $_REQUEST['cpname'];
$add		= $_REQUEST['add'];
$city		= $_REQUEST['city'];
$dist		= $_REQUEST['dist'];
$state		= $_REQUEST['state'];
$country	= $_REQUEST['country'];
$pin		= $_REQUEST['pin'];	
$tel		= $_REQUEST['tel'];
$fax		= $_REQUEST['fax'];
$mail		= $_REQUEST['mail'];
$web		= $_REQUEST['web'];
$hid		= $_REQUEST['hid'];
$hmail		= $_REQUEST['hmail'];
$hweb		= $_REQUEST['hweb'];
$chk 		= $_REQUEST['chk'];

if($chk<>"")
	{
		$slrcd	= "select * from srvs_addbksetup where dlogin_cno='$srvsid'";
		$rdrcd	= mysql_query($slrcd);
		$rnum	= mysql_num_rows($rdrcd);
			if($rnum<>"")
				{
				$uprcd = "update srvs_addbksetup
								set cname 	= '$cname',
								 cpname	= '$cpname',
								 add1		= '$add',
								 city	= '$city',
								 dist	= '$dist',
								 state	= '$state',
								 country = '$country',
								 pin		= '$pin',
								 tel		= '$tel',
								 fax		= '$fax',
								 mail	= '$mail',
								 web		= '$web',
								 hid		= '$hid',
								 hweb	= '$hweb',
								 hmail	= '$hmail'
								where dlogin_cno = '$srvsid'";
					
						$rduprcd = mysql_query($uprcd)or die(mysql_error());
						$msg = "Record Updated Sucessfully";
						$chk ="";
					}
					else
					{
						$instrcd = "insert into srvs_addbksetup(dlogin_cno, cname, cpname, add1, city,
									dist, state, country, pin, tel, fax, mail, web, hid, hweb, hmail)
									values 
									('$srvsid','$cname','$cpname','$add','$city','$dist','$state','$country',
									'$pin','$tel','$fax','$mail','$web','$hid','$hweb','$hmail')";
						$rdrcd	= mysql_query($instrcd)or die(mysql_error());
						$msg = "Record Insert Sucessfully";
				
						$chk ="";
			
					}
					
					
	}
	else
	{
		$msg = "Please Select Proper Selection";
	}			
	
	

$select_rcd = "select *  from srvs_main where sr_id='$srvsid'";
$result_rcd = mysql_query($select_rcd);
$count_rcd = mysql_num_rows($result_rcd);

			$cname 		= mysql_result($result_rcd,0,'cname');
			$cpname 	= mysql_result($result_rcd,0,'cpname');
			$add1 		= mysql_result($result_rcd,0,'add1');
			$add2 		= mysql_result($result_rcd,0,'add2');
			$city 		= mysql_result($result_rcd,0,'city');
			$dist		= mysql_result($result_rcd,0,'dist');
			$stat 		= mysql_result($result_rcd,0,'stat');
			$count 		= mysql_result($result_rcd,0,'cout');
			$tel 		= mysql_result($result_rcd,0,'tel');
			$fax 		= mysql_result($result_rcd,0,'fax');
			$mob 		= mysql_result($result_rcd,0,'mob');
			$mail 		= mysql_result($result_rcd,0,'mail');
			$web 		= mysql_result($result_rcd,0,'web');
			$pin 		= mysql_result($result_rcd,0,'pin');
			$cno		= mysql_result($result_rcd,0,'cno');

			$citysl = "select * from city where citid='$city'";
			$cityrd = mysql_query($citysl,$abc);
			$citname = mysql_result($cityrd,0,'citname');
			
			$distsl = "select * from district where dstid='$dist'";
			$distrd = mysql_query($distsl,$abc);
			$distname = mysql_result($distrd,0,'dstname');
			
			
			$statsl = "select * from state where stid='$stat'";
			$statrd = mysql_query($statsl,$abc);
			$stname = mysql_result($statrd,0,'stname');
			
			$ctsl = "select * from country where cntid='$count'";
			$ctrd = mysql_query($ctsl,$abc);
			$ctname = mysql_result($ctrd,0,'cntname');


$slmoto = "select * from srvs_home where mdirid = '$srvsid'";
$rdmoto = mysql_query($slmoto,$abc);
$rdcount = mysql_num_rows($rdmoto);
if($rdcount<>"0")
	{
	$pdet  = mysql_result($rdmoto,0,'comp_moto');
	$chome = mysql_result($rdmoto,0,'comp_home');
	$css   = mysql_result($rdmoto,0,'comp_css');
	$marqs  = mysql_result($rdmoto,0,'comp_marque');	
	}
if($css=="grn_01.css")
	{
		$mocol	= "#44A49A";
		$mcol	= "#8CC6C6";
	}	
if($css=="org_02.css")
	{
		$mocol	= "#FFCC00";
		$mcol	= "#FDAD5E";			
	}	
if($css=="blu_03.css")
	{
		$mocol	= "#6464FF";
		$mcol	= "#9797FF";			
	}		
if($css=="red_04.css")
	{
		$mocol	= "#FF4A4A";
		$mcol	= "#FFA4A4";			
	}	
if($css=="brown_05.css")
	{
		$mocol	= "#B5B5B5";
		$mcol	= "#999999";			
	}	
if($css=="lbrn_06.css")
	{
		$mocol	= "#DA591B";
		$mcol	= "#CF8354";			
	}	
if($css=="dbrn_07.css")
	{
		$mocol	= "#AFAF5F";
		$mcol	= "#959A4A";			
	}	
if($css=="yellow_08.css")
	{
		$mocol	= "#AAAA00";
		$mcol	= "#CECE00";			
	}
*/
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tbody>
    <tr> 
      <td height="107" colspan="4" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"> <table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td height="22" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="84">&nbsp;</td>
                          <td colspan="2" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="264" height="57" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr> 
                          <td width="112" height="35">&nbsp;</td>
                          <td width="303">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="49">&nbsp;</td>
                          <td colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
                              </tr>
                              <tr> 
                                <td height="19" align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>) 
                                </td>
                              </tr>
                            </table></td>
                          <td width="122">&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="1"></td>
                          <td></td>
                          <td></td>
                          <td width="142"></td>
                          <td></td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    <tr> 
      <td height="22" colspan="4" valign="top"><?php include 'include/sbar.php';?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="3" valign="top"><table class="tbbgcol" width="194" border="0" cellpadding="1" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="10" height="11"></td>
            <td width="170"></td>
            <td width="14"></td>
          </tr>
          <tr> 
            <td height="99"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="167" height="20" valign="top" class="org_border_box title"><div align="center">Directory 
                      Listing</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150324.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Service 
                    Provider Dir. Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150333.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Job 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150339.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Property 
                    Directory Entry</a></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="11"></td>
            <td></td>
            <td></td>
          </tr>
          <tr> 
            <td height="99"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="20" valign="top" class="org_border_box title"><div align="center">Utilities</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150350.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    Book Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150349.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    Book Setup</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150355.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    List All</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150353.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    List Select One</a></td>
                </tr>
                <tr>
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150351.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    List Delete One</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150323.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Directory 
                    Status </a></td>
                </tr>
                <tr> 
                  <td height="1"></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="299"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      <td width="23" height="13"></td>
      <td width="527"></td>
      <td width="19"></td>
    </tr>
    <tr>
      <td height="202"></td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable">
          <!--DWLayoutTable-->
          <tr> 
            <td  height="202" valign="top"> 
              <?php
			$slstm = "select * from srvs_addbook where srvs_id = '$srvsid' and add_id='$compid' and dir_type='$comptype' order by dir_type";
					$rdstm =  mysql_query($slstm);
					$rdnum = mysql_num_rows($rdstm);
			
					if($rdnum<>"0")
						{
						while ($posts_info = mysql_fetch_array($rdstm))
							{
							 $compid 	=	$posts_info['add_id'];
							 $comptype	= 	$posts_info['dir_type'];
							 if($comptype=="1")
							 		{
							 			
										
										$slcomp  	= "Select * from dir_main where dir_id='$compid'";
										$rdcomp  	= mysql_query($slcomp);
										$cname 	 	= mysql_result($rdcomp,0,'dir_cname');
										$cpname  	= mysql_result($rdcomp,0,'dir_cpname');
										$cno 		= mysql_result($rdcomp,0,'dir_cno');
										
										$cadd1 = "select * from dir_add where dir_id='$compid'";
										$caddrcd = mysql_query($cadd1)or die(mysql_error());
										$cnumr = mysql_num_rows($caddrcd);
										
										$add1 = mysql_result($caddrcd,0,'dir_add1');
										$add2 = mysql_result($caddrcd,0,'dir_add2');
										$city = mysql_result($caddrcd,0,'dir_city');
										$dist = mysql_result($caddrcd,0,'dir_dist');
										$stat = mysql_result($caddrcd,0,'dir_stat');
										$count = mysql_result($caddrcd,0,'dir_cont');
										$tel = mysql_result($caddrcd,0,'dir_tel');
										$fax = mysql_result($caddrcd,0,'dir_fax');
										$mob = mysql_result($caddrcd,0,'dir_mob');
										$mail = mysql_result($caddrcd,0,'dir_mail');
										$web = mysql_result($caddrcd,0,'dir_web');
										$pin = mysql_result($caddrcd,0,'dir_pin');
																														
										$citysl = "select * from city where citid='$city'";
										$cityrd = mysql_query($citysl);
										$citname = mysql_result($cityrd,0,'citname');

										$distsl1 = "select * from district where dstid='$dist'";
										$distrd = mysql_query($distsl1);
										$distname = mysql_result($distrd,0,'dstname');
										
										$statsl = "select * from state where stid='$stat'";
										$statrd = mysql_query($statsl);
										$stname = mysql_result($statrd,0,'stname');

										$ctsl = "select * from country where cntid='$count'";
										$ctrd = mysql_query($ctsl);
										$ctname = mysql_result($ctrd,0,'cntname');
										
										$sladdsetup1 = "Select * from srvs_addbksetup where dlogin_cno ='$srvsid'";
										$rdaddsetup1 = mysql_query($sladdsetup1);
										$setupnum   = mysql_num_rows($rdaddsetup1);
										if($setupnum<>"")
											{
													$pcname 	= mysql_result($rdaddsetup1,0,'cname');
													$pcpname 	= mysql_result($rdaddsetup1,0,'cpname');
													$padd		= mysql_result($rdaddsetup1,0,'add1');
													$pcity		= mysql_result($rdaddsetup1,0,'city');
													$pdist		= mysql_result($rdaddsetup1,0,'dist');
													$pstate		= mysql_result($rdaddsetup1,0,'state');
													$pcountry	= mysql_result($rdaddsetup1,0,'country');
													$ppin		= mysql_result($rdaddsetup1,0,'pin');	
													$ptel		= mysql_result($rdaddsetup1,0,'tel');
													$pmail		= mysql_result($rdaddsetup1,0,'mail');
													$phid		= mysql_result($rdaddsetup1,0,'hid');
													$phmail		= mysql_result($rdaddsetup1,0,'hmail');
													$phweb		= mysql_result($rdaddsetup1,0,'hweb');
													print "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
													if ($pcpname=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">$cpname</td></tr>";
														}
													if ($pcname=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\"><b><font size=\"3\">$cname</font></b></td></tr>";
														}
													if ($padd=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">$add1, $add2</td></tr>";
														}
													if ($pcity=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">$citname, Distt. $distname,</td></tr>";
														}
													if ($pstate=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">State : $stname - $pin ($ctname)</td></tr>";
														}
													if ($ptel=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">Tel.No. : $tel , Fax No. : $fax</td></tr>";
														}
													if ($pmail=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">E-Mail : $mail , Web : $web</td></tr>";
														}
													if ($phid=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">Haanzee ID (Business Directory) : $cno</td></tr>";
														}



														
													print "<tr><td class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">&nbsp;</td></tr>";

													print "</table>";
												
												}
												else
												{
												print "Display Setup Not Define rst";
												}		
										
									}
									else
									{
									$select_rcd = "select *  from srvs_main where sr_id='$compid'";
									$result_rcd = mysql_query($select_rcd);
									$count_rcd = mysql_num_rows($result_rcd);

									$cname 		= mysql_result($result_rcd,0,'cname');
									$cpname 	= mysql_result($result_rcd,0,'cpname');
									$add1 		= mysql_result($result_rcd,0,'add1');
									$add2 		= mysql_result($result_rcd,0,'add2');
									$city 		= mysql_result($result_rcd,0,'city');
									$dist		= mysql_result($result_rcd,0,'dist');
									$stat 		= mysql_result($result_rcd,0,'stat');
									$count 		= mysql_result($result_rcd,0,'cout');
									$tel 		= mysql_result($result_rcd,0,'tel');
									$fax 		= mysql_result($result_rcd,0,'fax');
									$mob 		= mysql_result($result_rcd,0,'mob');
									$mail 		= mysql_result($result_rcd,0,'mail');
									$web 		= mysql_result($result_rcd,0,'web');
									$pin 		= mysql_result($result_rcd,0,'pin');
									$cno		= mysql_result($result_rcd,0,'cno');

									$citysl = "select * from city where citid='$city'";
									$cityrd = mysql_query($citysl);
									$citname = mysql_result($cityrd,0,'citname');
			
									$distsl = "select * from district where dstid='$dist'";
									$distrd = mysql_query($distsl);
									$distname = mysql_result($distrd,0,'dstname');
			
									$statsl = "select * from state where stid='$stat'";
									$statrd = mysql_query($statsl);
									$stname = mysql_result($statrd,0,'stname');
			
									$ctsl = "select * from country where cntid='$count'";
									$ctrd = mysql_query($ctsl);
									$ctname = mysql_result($ctrd,0,'cntname');
									$sladdsetup1 = "Select * from srvs_addbksetup where dlogin_cno ='$srvsid'";
										$rdaddsetup1 = mysql_query($sladdsetup1);
										$setupnum   = mysql_num_rows($rdaddsetup1);
										if($setupnum<>"")
											{
													$pcname 	= mysql_result($rdaddsetup1,0,'cname');
													$pcpname 	= mysql_result($rdaddsetup1,0,'cpname');
													$padd		= mysql_result($rdaddsetup1,0,'add');
													$pcity		= mysql_result($rdaddsetup1,0,'city');
													$pdist		= mysql_result($rdaddsetup1,0,'dist');
													$pstate		= mysql_result($rdaddsetup1,0,'state');
													$pcountry	= mysql_result($rdaddsetup1,0,'country');
													$ppin		= mysql_result($rdaddsetup1,0,'pin');	
													$ptel		= mysql_result($rdaddsetup1,0,'tel');
													$pfax		= mysql_result($rdaddsetup1,0,'fax');
													$pmail		= mysql_result($rdaddsetup1,0,'mail');
													$pweb		= mysql_result($rdaddsetup1,0,'web');
													$phid		= mysql_result($rdaddsetup1,0,'hid');
													$phmail		= mysql_result($rdaddsetup1,0,'hmail');
													$phweb		= mysql_result($rdaddsetup1,0,'hweb');
													print "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
													if ($pcpname=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">$cpname</td></tr>";
														}
													if ($pcname=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\"><font size=\"3\"><b>$cname</b></font></td></tr>";
														}
													if ($padd=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">$add1, $add2</td></tr>";
														}
													if ($pcity=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">$citname, Distt. $distname,</td></tr>";
														}
													if ($pstate=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">State : $stname - $pin ($ctname)</td></tr>";
														}
													
													if ($ptel=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">Tel.No. : $tel , Fax No. : $fax</td></tr>";
														}
													if ($pmail=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">E-Mail : $mail , Web : $web</td></tr>";
														}
													
													if ($phid=="1")
														{
														print "<tr><td width=\"25\" class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">Haanzee ID (Service Directory) : $cno</td></tr>";
														}

													
													
														print "<tr><td class=\"grncel_DRK\">&nbsp;</td><td class=\"grncel_DRK\">&nbsp;</td></tr>";
													print "</table>";
													
													
													
												}
												else
												{
												print "Display Setup Not Define srvs";
												}		

								
								
								}
								print "<center><b><a href=\"0708150356.php?ID=$srvsid&SID=$sid&cid=$compid&cty=$comptype\">Click Here Printable View </a></b></center>";

							}
						}
						else
						{
						print "<br><center> Record Not Found in Address and Setup Table <br>
  							   <br> Addition Records<a href=\"0708150350.php?ID=$srvsid&SID=$sid&rand=$adms\"> Click Here</a></center> ";

						}
						
			?>
              &nbsp;</td>
          </tr>
        </table></td>
      <td></td>
    </tr>
    <tr>
      <td height="361"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="19" colspan="4" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top">&<?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
