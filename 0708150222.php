<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';

	$slcatct = "select distinct(cat_id) from dir_catprd where main_dirid= '$rstid'";
	$rdcatct = mysql_query($slcatct)or die(mysql_error());
	$catcount = mysql_num_rows($rdcatct);
	
	$slprdct = "select * from dir_catprd where main_dirid= '$rstid'";
	$rdprdct = mysql_query($slprdct)or die(mysql_error());
	$prdcount = mysql_num_rows($rdprdct);

$msg = $_GET['msg'];

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
      <td height="107" colspan="7" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
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
                                <td height="20" align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>)                                </td>
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
      <td height="20" colspan="7" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="7" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" >
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
            <td height="504"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td height="19" colspan="6" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19">&nbsp;</td>
          </tr>
        </table></tr>
    <tr> 
      <td width="9" height="18"></td>
      <td width="13"></td>
      <td width="11"></td>
      <td width="513" valign="top"><div align="center"> <blink><font color="#FF0000"><strong><font size="3"><?php print "$msg"; ?></font></strong></font></blink><font size="3"><strong> 
          </strong></font></div></td>
      <td width="13"></td>
      <td width="10"></td>
    </tr>
    <tr> 
      <td height="2"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="199"></td>
      <td colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="22" colspan="3" valign="top" class="org_border_t_cell"><div align="center">Add 
                Product To Business Directory</div></td>
          </tr>
          <tr> 
            <td width="57" height="25">&nbsp;</td>
            <td width="442">&nbsp;</td>
            <td width="38">&nbsp;</td>
          </tr>
          <tr> 
            <td height="117">&nbsp;</td>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="form1" method="post" action="0708150227.php?ID=<?php print"$rstid";?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?>">
                  <tr> 
                    <td height="23" colspan="3" valign="top" class="org_border_box title"><div align="center">Select 
                        Product Category</div></td>
                  </tr>
                  <tr> 
                    <td height="24" colspan="3" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td width="145" height="22" valign="top" class="org_border_l_cell"><div align="right">Category 
                        Name </div></td>
                    <td width="20" valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td width="277" valign="top" class="org_border_r_cell"><select name="catid" id="catid">
                    
                    <?php
							    $addCatData = dircat($catid);
                                for($index=0;$index < count($addCatData);$index++)
                                    {
                                    $catclass = $addCatData[$index];
                                    $catid= $catclass->getcatid();
                                    $catname = $catclass->getcatname();
                                    print "<option value=\"$catid\">";
								    print "&nbsp;&nbsp;&nbsp;$catname</option>";
                                  } 
	
						
						?>
                                       
                    
                    
                      </select></td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="3" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="26" colspan="3" valign="top" class="org_border_b_cell"><div align="center"> 
                        <input type="hidden" name="ID" value="<?php print "$rstid"; ?>">
                        <input type="hidden" name="SID" value="<?php print "$sid"; ?>">
                        <input type="submit" name="Submit" value="Select">
                      </div></td>
                  </tr>
                </form>
              </table></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="35">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="60"></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="200"></td>
      <td></td>
      <td colspan="3" valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="9"></td>
            <td width="511"></td>
            <td width="12"></td>
          </tr>
          <tr> 
            <td height="160"></td>
            <td valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="11" height="6"></td>
                  <td width="258"></td>
                  <td width="16"></td>
                  <td width="210"></td>
                  <td width="16"></td>
                </tr>
                <tr> 
                  <td height="28"></td>
                  <td colspan="3" valign="top" class="grncel_LIT title2" ><div align="center">Directory 
                      Listing Status &nbsp;</div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="20"></td>
                  <td colspan="3" valign="top" class="grncel_DRK title">&nbsp; </td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"> <div align="right">&nbsp;Product 
                      Category Listing</div></td>
                  <td valign="top" class="grncel_DRK title"> <div align="center"><strong><font size="3">:</font></strong></div></td>
                  <td valign="top" class="grncel_DRK title"> <div align="left"><b><?php print "$catcount"; ?></b>&nbsp;</div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"> <div align="right">&nbsp;Product 
                      Listing </div></td>
                  <td valign="top"class="grncel_DRK title"><div align="center"><strong><font size="3">:</font></strong></div></td>
                  <td valign="top"class="grncel_DRK title"><div align="left"><b><?php print "$prdcount"; ?></b></div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="21"></td>
                  <td colspan="3" valign="top" class="grncel_DRK title">&nbsp; </td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="19"></td>
                  <td colspan="3" valign="top" class="grncel_DRK title" >&nbsp; </td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="20"></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="15"></td>
            <td></td>
            <td></td>
          </tr>
        </table></td>
      <td></td>
    </tr>
    <tr> 
      <td height="157"></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="19" colspan="7" valign="top"> <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" align="center"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>