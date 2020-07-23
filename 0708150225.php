<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';

	
$op		= $_REQUEST['op'];
		$line_num = 5;  
		$max = $line_num;	// configure how many rows of message display per page
		$pg = $_REQUEST['pg'];
		$cur_rows = 0;
		$max_rows = $max;
	if($pg!=1)
		{
		for($i=1;$i<$pg;$i++)
		{
			$cur_rows=$cur_rows+$max;
			$max_rows=$max_rows+$max;
		}
	}

/*
$select_rcd = "select *  from dir_main where dir_id='$rstid'";
$result_rcd = mysql_query($select_rcd,$abc);
$count_rcd = mysql_num_rows($result_rcd);
$cname = mysql_result($result_rcd,0,'dir_cname');
$slmoto = "select * from dir_home where mdirid = '$rstid'";
$rdmoto = mysql_query($slmoto,$abc);
$rdcount = mysql_num_rows($rdmoto);
if($rdcount<>"0")
	{
	$pdet  = mysql_result($rdmoto,0,'comp_moto');
	$chome = mysql_result($rdmoto,0,'comp_home');
	$css   = mysql_result($rdmoto,0,'comp_css');	
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
	$slmarq = "select * from dir_home where mdirid = '$rstid'";
	$rdmarq = mysql_query($slmarq,$abc);
	$count_rcd = mysql_num_rows($rdmarq);
	if($count_rcd<>0)
			{
				$marqs  = mysql_result($rdmarq,0,'comp_marque');
			}
			$cadd = "select * from dir_add where dir_id='$rstid'";
			$caddrcd = mysql_query($cadd,$abc);
			$diradd1 = mysql_result($caddrcd,0,'dir_add1');
			$diradd2 = mysql_result($caddrcd,0,'dir_add2');
			$dircity = mysql_result($caddrcd,0,'dir_city');
			$dirstat = mysql_result($caddrcd,0,'dir_stat');
			$dircount = mysql_result($caddrcd,0,'dir_cont');
			$dirtel = mysql_result($caddrcd,0,'dir_tel');
			$dirfax = mysql_result($caddrcd,0,'dir_fax');
			$dirmob = mysql_result($caddrcd,0,'dir_mob');
			$dirmail = mysql_result($caddrcd,0,'dir_mail');
			$dirweb = mysql_result($caddrcd,0,'dir_web');
			$dirpin = mysql_result($caddrcd,0,'dir_pin');
			$citysl = "select * from city where citid='$dircity'";
			$cityrd = mysql_query($citysl,$abc);
			$citname = mysql_result($cityrd,0,'citname');
			$statsl = "select * from state where stid='$dirstat'";
			$statrd = mysql_query($statsl,$abc);
			$stname = mysql_result($statrd,0,'stname');
			$ctsl = "select * from country where cntid='$dircount'";
			$ctrd = mysql_query($ctsl,$abc);
			$ctname = mysql_result($ctrd,0,'cntname');
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
      <td height="107" colspan="2" valign="top"> <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas"   width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="433" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="398">&nbsp;</td>
                          <td width="277" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="264" height="57" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr> 
                          <td height="35">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="49" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="1108"  height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>)                                </td>
                              </tr>
                              
                          </table></td>
                        </tr>
                        
                    </table></td>
                  </tr>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    <tr> 
      <td height="20" colspan="2" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="189" rowspan="2" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="7" height="11"></td>
            <td width="170"></td>
            <td width="12"></td>
          </tr>
          <tr>
            <td height="140"></td>
            <td valign="top"><table width="170" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="20" valign="top" class="org_border_box title"><div align="center">Directory 
                      Listing</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150222.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?>">Business 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150228.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?>">Dir 
                    Authrisation Status</a></td>
                </tr>
                <tr> 
                  <td height="21" valign="top" class="org_border_box bluenote bgimg"><a href="0708150225.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?>">Listing 
                    Delete From Temp</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150236.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?>">Job 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150242.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?>">Property 
                    Directory Entry</a></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="380"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table>
      <td width="574" height="19" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="574" height="19" valign="top" class="smallLink"><marquee>
              <?php print "$marqs"; ?></marquee></td>
          </tr>
        </table></tr>
    <tr> 
      <td height="512" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="574" height="20" align="center" valign="top" class="grncel_LIT title"><p>Delete 
                Product From Directory Temp Listing</p>
              </td>
          </tr>
          <tr> 
            <td height="14"></td>
          </tr>
          <tr> 
            <td height="66" align="center" valign="top"> 
              <!--DWLayoutTable-->
              <?php
		      if ($op != "del") 
				{
				$slcomp = "select distinct(dir_cat_id) from dir_aadvts where dir_id='$rstid' order by dir_catprodid";
				$rcdcomp = mysql_query($slcomp);
				$numrows = mysql_num_rows($rcdcomp);
				if ($numrows < 1)
					{
					print "<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">There No Any Record For Deletion</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150222.php?ID=$rstid&SID=$sid&rand=$adms\"> Click Here </a></td></tr>
					</table>";
					exit;
					}
					print "<form method=post action=\"0708150225.php?ID=$rstid&SID=$sid&rand=$adms\">
					
					<table width=\"100%\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
						";
					$rownum = abs(1);
					while ($pinfo = mysql_fetch_array($rcdcomp))
					 	{
				   		$catid	= $pinfo['dir_cat_id'];
						$cat_st = "select catname from catg where catid='$catid'";
						$catnm = mysql_query($cat_st);
						$cat_name = mysql_result($catnm,0,'catname');
						print " 
							<tr>
    		   					<td colspan=\"2\" width=\"100%\" class=\"grncel_DRK\"><font color=\"#OOOO0O\"><strong>$rownum.&nbsp;</font> <font color=\"#990033\">$cat_name</strong></font> </td>
							</tr>";
							
							$slpd = "select * from dir_aadvts where dir_cat_id='$catid' and dir_id='$rstid'";
							$rdpd = mysql_query($slpd);											
							$numsrs = abs(1);
							while ($post_info = mysql_fetch_array($rdpd))
								{
								$prdid = $post_info['dir_prod_id'];
								$fyear = $post_info['dir_regfyear'];
								$cpid  = $post_info['dir_catprodid'];
								$city  = $post_info['city'];
								$district = $post_info['district'];
								$state = $post_info['state'];
								$country = $post_info['country'];
								
			$citysl = "select * from city where citid='$city'";
			$cityrd = mysql_query($citysl);
			$citname = mysql_result($cityrd,0,'citname');
			
			$districtsl = "select * from district where dstid = '$district'";
			$districtrd = mysql_query($districtsl);
			$distname = mysql_result($districtrd,0,'dstname');
			
			$statsl = "select * from state where stid='$state'";
			$statrd = mysql_query($statsl);
			$stname = mysql_result($statrd,0,'stname');
			
			$ctsl = "select * from country where cntid='$country'";
			$ctrd = mysql_query($ctsl);
			$ctname = mysql_result($ctrd,0,'cntname');
								
								
	
								$selprodnm = "select prodnam from prod where prodid='$prdid'";
								$rcdprodnm = mysql_query($selprodnm);
								$prodname = mysql_result($rcdprodnm,0,'prodnam');	
							print "<tr>
									<td width=\"80%\" class=\"grncel_DRK\">&nbsp;&nbsp;&nbsp;&nbsp;$numsrs. $prodname , $citname, $distname, $stname ($ctname)</td>
									<td width=\"20%\" class=\"grncel_DRK small\"><input type=\"checkbox\" value=\"false\" name=\"cbox-$cpid\" ><font face=\"arial\" size=\"1.5\" color=\"navy\">ID : $cpid</font></td>
								  </tr>";
								$numsrs++;
							
							
							
								}
											
				 	  		$rownum++;
		  				}
print  "<input type=hidden name=ID value=$rstid>";
print  "<input type=hidden name=op value=del>";
print  "<tr>
			<td  width=\"100%\" colspan=\"2\"><center><input type=submit name= Delete value=Delete></center></td>
	   </tr>";

print  "</table>";   

print  "</FORM>";
	}
	else if ($op == "del") 
	{
	$result=mysql_query("SELECT dir_catprodid FROM dir_aadvts ORDER BY dir_catprodid") or die("Query failed");
	
	$query = "select * from dir_aadvts where dir_catprodid=";
		$flag=TRUE;
		while($lines = mysql_fetch_array($result, MYSQL_ASSOC))
		{   
			foreach($lines as $gid[0])
			{
				if($_REQUEST["cbox-$gid[0]"]=="false")
					if($flag==TRUE)
					{
						$query=$query.$gid[0];
						$flag=FALSE;
						
					}
					else
					{
						$query=$query." OR srvs_id=".$gid[0];
					}
			}
		}
       $result = mysql_query($query);
	   $rcdcount = mysql_num_rows($result);
	   
	   
	   
	   if($rcdcount==0)
			{
			print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
			<tr><td class=\"org_border_t_cell\" align=\"center\">Please Select any One Record for Deletion</td</tr>
			<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150225.php?ID=$rstid&SID=$sid&rand=$adms\"> Click Here </a></td></tr>
			</table>";
			exit;
			}	
	   
		   $srvsid = mysql_result($result,0,'dir_catprodid');
	   
		 	$delrcd = "delete from dir_aadvts where dir_catprodid= '$srvsid'";
			   
					if($delnum = mysql_query($delrcd))
					{
					print "Record Sucessfully Delete Delete Another one <br> <a href=\"0708150225.php?ID=$rstid&SID=$sid&rand=$adms\">Click here </a>";
					exit;
					}
					else
					{
					print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">You are Not Select Record Or Select More Then One,,</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150225.php?ID=$rstid&SID=$sid&rand=$adms\"> Try Again Please</a></td></tr>
					</table>";
					}			
			}		
		
			   
			   ?>
            </td>
          </tr>
          <tr> 
            <td height="412"></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td height="19" colspan="2" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" ><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
