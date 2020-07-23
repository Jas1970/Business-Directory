<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';

if($srvsid=="")
	{
	$srvsid = $_REQUEST['ID'];
	}
					$slstm = "select * from srvs_addbook where srvs_id = '$srvsid' order by dir_type";
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
												print "Display Setup Not Define";
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
												print "Display Setup Not Define";
												}		

								
								
								}
							}
						
						print "<br> <center>Go Address and Setup  <br>
									<br><a href=\"0708150350.php?ID=$srvsid&SID=$sid&rand=$adms\"> Click Here</a></center><br>";
							
						}
						else
						{
						print "<br><center> Record Not Found in Address and Setup Table <br>
  							   <br> Addition Records<a href=\"0708150350.php?ID=$srvsid&SID=$sid&rand=$adms\"> Click Here</a></center> ";
						}
						
				?>
