<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';

/*

$slproduct = "select * from dir_compprod where mdirid= '$rstid'";
$rdproduct = mysql_query($slproduct,$abc)or die(mysql_error());
$rcdcount = mysql_num_rows($rdproduct);
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

	$slcatct = "select distinct(cat_id) from dir_catprd where main_dirid= '$rstid'";
	$rdcatct = mysql_query($slcatct,$abc)or die(mysql_error());
	$catcount = mysql_num_rows($rdcatct);
	
	$slprdct = "select * from dir_catprd where main_dirid= '$rstid'";
	$rdprdct = mysql_query($slprdct,$abc)or die(mysql_error());
	$prdcount = mysql_num_rows($rdprdct);
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
      <td height="106" colspan="4" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="415" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="429">&nbsp;</td>
                          <td width="264" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
                                <td width="1108" height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
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
      <td height="20" colspan="4" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="172" rowspan="5" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="10" height="11"></td>
            <td width="170"></td>
            <td width="14"></td>
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
            <td height="384"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
      </table></td>
      <td height="19" colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td  height="19">&nbsp;</td>
          </tr>
        </table></tr>
    <tr>
      <td width="1"  height="217"></td>
      <td width="873"  valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td colspan= "2" height="22" valign="top"  class="org_border_t_cell"><div align="center"> 
            Business Directory Authorisation Pending</div></td>
          </tr>
          <?php
				$slreg = "select distinct(dir_cat_id) from dir_aadvts where dir_id='$rstid'";
				$rdreg = mysql_query($slreg);
				$advtcount = mysql_num_rows($rdreg);
				
				$numsr = abs(1);
				if($advtcount<>"0")
					{
				
				while ($posts_info = mysql_fetch_array($rdreg))
		 				{
							$catid = $posts_info['dir_cat_id'];

							$cat_st = "select catname from catg where catid='$catid'";
							$catnm = mysql_query($cat_st);
							$cat_name = mysql_result($catnm,0,'catname');

									print "<tr>
									<td width=\"537\" class=\"grncel_DRK\" colspan=\"2\">$numsr. $cat_name </td> ";


							$slpd = "select * from dir_aadvts where dir_cat_id='$catid' and dir_id='$rstid'";
							$rdpd = mysql_query($slpd);											
							$numsrs = abs(1);
							while ($post_info = mysql_fetch_array($rdpd))
								{
							$prdid = $post_info['dir_prod_id'];
							$fyear = $post_info['dir_regfyear'];
							$dtyear = date('d-m-yyyy',$fyear);

							$selprodnm = "select prodnam from prod where prodid='$prdid'";
							$rcdprodnm = mysql_query($selprodnm);
							$prodname = mysql_result($rcdprodnm,0,'prodnam');
							
							
							
						print "<tr>
									<td width=\"237\" class=\"grncel_DRK\">&nbsp;&nbsp;&nbsp;&nbsp;$numsrs. $prodname </td>
									<td width=\"150\" class=\"grncel_DRK\">$fyear Years </td>
							  </tr>";
								$numsrs++;		
							}
					$numsr++;

						}
						}	
							
			?>
          
        </table></td>
      <td width="1"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="241"></td>
      <td valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="9"></td>
            <td width="511"></td>
            <td width="12"></td>
          </tr>
          <tr> 
            <td height="110"></td>
            <td valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="269"></td>
                  <td width="16"></td>
                  <td width="226"></td>
                </tr>
                <tr> 
                  <td colspan="3" valign="top" class="grncel_LIT title2" ><div align="center">Directory 
                      Listing Status &nbsp;</div></td>
                </tr>
                <?php
				$slreg = "select distinct(cat_id) from dir_catprd where main_dirid='$rstid'";
				$rdreg = mysql_query($slreg);
				$advtcount = mysql_num_rows($rdreg);
				
				$numsr = abs(1);
				
				while ($posts_info = mysql_fetch_array($rdreg))
		 				{
							$catid = $posts_info['cat_id'];

							$cat_st = "select catname from catg where catid='$catid'";
							$catnm = mysql_query($cat_st);
							$cat_name = mysql_result($catnm,0,'catname');

									print "<tr>
									<td colspan=\"3\"  class=\"grncel_DRK\">$numsr. $cat_name </td> 
									</tr>";


							$slpd = "select prd_id, date_format(regfrdt,'%d-%m-%Y') as rdt, date_format(regtodt,'%d-%m-%Y') as rtdt  from dir_catprd 
							where cat_id='$catid' and main_dirid='$rstid'";
							$rdpd = mysql_query($slpd)or die(mysql_error());											
							$numsrs = abs(1);
							while ($post_info = mysql_fetch_array($rdpd))
								{
							$prdid = $post_info['prd_id'];
							$fyear = $post_info['rdt'];
							$tyear = $post_info['rtdt'];


							$selprodnm = "select prodnam from prod where prodid='$prdid'";
							$rcdprodnm = mysql_query($selprodnm);
							$prodname = mysql_result($rcdprodnm,0,'prodnam');
							
							
							
						print "<tr>
									<td width=\"337\" class=\"grncel_DRK\">&nbsp;&nbsp;&nbsp;&nbsp;$numsrs. $prodname </td>
									<td width=\"150\" class=\"grncel_DRK\">$fyear</td>
									<td width=\"150\" class=\"grncel_DRK\">$tyear</td>

							  </tr>";
								$numsrs++;		
							}
					$numsr++;

						}			
			?>
                <tr> 
                  <td colspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="72"></td>
                  <td></td>
                  <td></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="122"></td>
            <td></td>
            <td></td>
          </tr>
        </table></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="32"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="19" colspan="4" valign="top"> <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" align="center"><?php include "include/footer.php"; ?></td>
          </tr>
      </table></td>
    </tr>
</table>
</body>
</html>