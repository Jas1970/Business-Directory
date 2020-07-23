<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();
$rstid = $_GET['ID'];
$select_rcd = "select *  from dir_main where dir_id='$rstid'";
$result_rcd = mysql_query($select_rcd);
$count_rcd = mysql_num_rows($result_rcd);
$cname = mysql_result($result_rcd,0,'dir_cname');
$dircno = mysql_result($result_rcd,0,'dir_cno');
$slmoto = "select * from dir_home where mdirid = '$rstid'";
$rdmoto = mysql_query($slmoto);
$rdcount = mysql_num_rows($rdmoto);
if($rdcount<>"0")
	{
	$pdet  	= mysql_result($rdmoto,0,'comp_moto');
	$chome 	= mysql_result($rdmoto,0,'comp_home');
	$css   	= mysql_result($rdmoto,0,'comp_css');
	$marqs  = mysql_result($rdmoto,0,'comp_marque');	
	}
$slprofile = "select * from dir_profile where mdirid = '$rstid'";
$rdprofile = mysql_query($slprofile);
$profilecount = mysql_num_rows($rdprofile);
if($profilecount<>"0")
	{
		$profile = mysql_result($rdprofile,0,'prof');
	} 
	else
	{
		$profile = "Company profile Yet Not Define";
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
	$slfho = "select * from dir_fho where dir_id = '$rstid'";
	$rdfho = mysql_query($slfho);
	$count_rcd = mysql_num_rows($rdfho);
	if($count_rcd<>0)
			{
				$fho = mysql_result($rdfho,0,'fho');
			}
			else
			{
				$fho = "Flash Out Yet Not Define";
			}


?>
<html>
<head>
<title>Job Directory Status</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">
function check(frm1) 
	{
	if(frm1.dirprod.value=="")
		{
		alert("Please Enter Web site Reference No. : ");
		frm1.dirprod.focus();
		return (false);
		}
	}	
</script>
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
                          <td width="564" height="22" valign="top"><?php include 'include/hlink.php';  ?></td>
                          <td width="280" >&nbsp;</td>
                          <td width="264" rowspan="2" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                        </tr>
                        <tr> 
                          <td height="35">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="49" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="135"></td> 
                                <td width="100%" height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
                                <td width="112"></td>
                              </tr>
                              <tr>
                                <td></td> 
                                <td height="19" align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>)                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td height="1"></td>
                                <td></td>
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
      <td height="20" colspan="2" valign="top"> <?php include 'include/bsbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="3" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" valign="top" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="23"></td>
            <td width="170">&nbsp;</td>
            <td width="10"></td>
          </tr>
          <tr> 
            <td height="38"></td>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="14" valign="top" class="org_border_t_cell title"><div align="center">Site 
                      Ref.No.</div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_b_cell"><div align="center"><font size="2"><b><?php print "$dircno";?></b></font></div></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="13"></td>
            <td></td>
            <td></td>
          </tr>
          <tr> 
            <td height="96"></td>
            <td align="center" valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="157" height="19" valign="top" class="org_border_t_cell title"><div align="center">Quick 
                      Reference</div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150210.php?ID=<?php print"$rstid"; ?>">Flash 
                      Out </a></div></td>
                </tr>
                <tr> 
                  <td height="18" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150211.php?ID=<?php print"$rstid"; ?>">Job 
                      Placement </a></div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150212.php?ID=<?php print"$rstid"; ?>">Property 
                      Listing </a></div></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="16"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height="65"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="frm1" action="0708150113.php" method="post" onSubmit="return check(frm1)">
                  <tr> 
                    <td width="170" height="19" align="center" valign="top" class="org_border_t_cell title">Product 
                      Site</td>
                  </tr>
                  <tr> 
                    <td height="22" align="center" valign="top" class="org_border_c_cell"> 
                      <input name="dirprod" type="text" size="15" maxlength="15" class="list_border"> 
                    </td>
                  </tr>
                  <tr> 
                    <td height="24" align="center" valign="top" class="org_border_b_cell"><input type="submit" name="Submit" value="Open Site"> 
                    </td>
                  </tr>
                </form>
              </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="308"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td width="569" height="19" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19" valign="top" class="smallLink"><marquee>
              <?php print "$marqs"; ?></marquee></td>
          </tr>
        </table></tr>
    <tr> 
      <td height="503" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="20" colspan="3" align="center" valign="top" class="grncel_LIT title">Job 
              / Vacancy Status In Directory</td>
          </tr>
          <tr> 
            <td width="7" height="4"></td>
            <td width="553"></td>
            <td width="9"></td>
          </tr>
          <tr>
            <td height="463"></td>
            <td valign="top">
			
			<table id="dashed1"  width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td height="14"></td>
				  <td></td>
				  <td></td>
				  </tr>
                <?php 
				
                $sl_rcd = "select * from job_main where job_comp ='$rstid' and job_tag='1'";
				$rs_rcd = mysql_query($sl_rcd);
				$count_rcd = $db->affectedRows($rs_rcd);
				//$db->numRows();
				$rownum = abs(1);
				if($count_rcd<>0)
					{	
				while ($posts_info = mysql_fetch_array($rs_rcd))
				 {
				$jtype 		= $posts_info['job_type'];
				$jgrp 		= $posts_info['job_grp'];
				$jinds		= $posts_info['job_inds'];
				$jqual		= $posts_info['job_qual'];
				$jminage	= $posts_info['job_age'];
				$jsal		= $posts_info['job_sal'];
				$jexp		= $posts_info['job_exp'];
				$jpf		= $posts_info['job_FP'];
				$jno		= $posts_info['job_no'];
				$jmaxage	= $posts_info['job_mage'];
				$jname		= $posts_info['job_nm'];
				$jcity		= $posts_info['job_city'];
	
				$citysl = "select * from city where citid='$jcity'";
				$cityrd = mysql_query($citysl);
				$city_name = mysql_result($cityrd,0,'citname');
				
				$typesl = "select * from job_type where jtype_id='$jtype'";
				$typerd = mysql_query($typesl);
				$type_name = mysql_result($typerd,0,'jtype_name');	

				$qualsl = "select * from job_qual where jqual_id='$jqual'";
				$qualrd = mysql_query($qualsl);
				$qual_name = mysql_result($qualrd,0,'jqual_name');
			
				$grpsl = "select * from job_grp where grp_id='$jgrp'";
				$grprd = mysql_query($grpsl);
				$grp_name = mysql_result($grprd,0,'grp_name');

				$indssl = "select * from job_inds where inds_id='$jinds'";
				$indsrd = mysql_query($indssl);
				$inds_name = mysql_result($indsrd,0,'inds_name');
					print "
						<tr>
							<td class=\"org_border_nr_box\" colspan=\"2\"><font class=\"smallp\"><div align=\"left\">$rownum  $jname ($grp_name)</div></font></td>
							<td class=\"org_border_nl_box\" width=\"250\" align=\"right\"><b>Vacancy : $jno</b></td>
						</tr>
						<tr>
							<td class=\"org_border_l_cell bluenote\" width=\"350px\">&nbsp;&nbsp;&nbsp; Qualification</td>
							<td class=\"org_border_no_cell bluenote\" width=\"15px\">:</td>
							<td class=\"org_border_r_cell bluenote\" width=\"285px\">$qual_name</td>	
						</tr>
						<tr>
							<td class=\"org_border_l_cell bluenote\">&nbsp;&nbsp;&nbsp; Job Experience</td>
							<td class=\"org_border_no_cell bluenote\">:</td>
							<td class=\"org_border_r_cell bluenote\">$jexp Years</td>	
						</tr>
						<tr>
							
							<td class=\"org_border_l_cell bluenote\">&nbsp;&nbsp;&nbsp; Age Limit</td>
							<td class=\"org_border_no_cell bluenote\">:</td>
							<td class=\"org_border_r_cell bluenote\">$jminage-$jmaxage Years</td>	
						</tr>
						<tr>
							
							<td class=\"org_border_l_cell bluenote\">&nbsp;&nbsp;&nbsp; Salary Approx.(Rs.)</td>
							<td class=\"org_border_no_cell bluenote\">:</td>
							<td class=\"org_border_r_cell bluenote\">$jsal/-</td>	
						</tr>
						<tr>
							<td class=\"org_border_b_cell bluenote\" colspan=\"3\"><strong>&nbsp;&nbsp;&nbsp; </td>
						</tr>
						<tr>
							<td colspan=\"3\">&nbsp;</td>
						</tr>";
				$rownum++;	
						}
					}
					else
					{
					print "<tr>
							<td colspan=\"3\" align=\"center\">Record Not Exist in Master Job Table Num = $count_rcd</td>
						</tr>";	
					}
					?>
              </table></td>
          <td></td>
          </tr>
          <tr>
            <td height="16"></td>
            <td></td>
            <td></td>
          </tr>
        </table></td>
      </tr>
    <tr>
      <td height="23">&nbsp;</td>
    </tr>
    <tr> 
      <td height="19" colspan="2" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
