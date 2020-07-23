<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';

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
      <td height="107" colspan="6" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"> <table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="515" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="515" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></td>
                              </tr>
                          </table></td>
                          <td width="329">&nbsp;</td>
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
                                <td width="100%"  height="29" align="center" valign="middle" class="title4"><div align="center"><?php print "$cname"; ?>
                                </div>
                               </td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="top" class="bluenote"><div align="center">(<?php print "$pdet"; ?>)                                </div></td>
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
      <td height="20" colspan="6" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="5" valign="top"><table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="10"  height="13"></td>
            <td width="184"></td>
          </tr>
          <tr>
            <td  height="99"></td>
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
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150222.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Business 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150236.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Job 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150242.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Property 
                    Directory Entry</a></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td  height="479"></td>
            <td>&nbsp;</td>
          </tr>
          
          
          
          
          
          
      </table></td>
      <td width="37" height="19">&nbsp;</td>
      <td colspan="2" valign="top">                                                                                                                                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19">&nbsp;</td>
          </tr>
        </table>
    <td width="64">        
    <td width="92">    
    </tr>
    <tr>
      <td height="239">&nbsp;</td>
      <td width="4"></td>
      <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form>
            <tr> 
              <td height="20" colspan="6" valign="top" class="org_border_box title"><div align="center">Set 
                  Web Site Colour Schem</div></td>
              <td width="118"></td>
            </tr>
            <tr> 
              <td width="154" height="13"></td>
              <td width="23"></td>
              <td width="41"></td>
              <td width="212"></td>
              <td width="107"></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="19">&nbsp;</td>
              <td valign="top" background="images/img_bst/td_grn_20.gif">01.</td>
              <td valign="top" background="images/img_bst/td_grn_20.gif"><input type="radio" name="radiobutton" value="radiobutton"></td>
              <td valign="top"  background="images/img_bst/td_grn_20.gif"><a href="0708150250.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> &Col=1" target="_parent">Set 
                Colour Scheme Green</a></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="19"></td>
              <td valign="top" background="images/img_bst/td_org_20.gif">02.</td>
              <td valign="top" background="images/img_bst/td_org_20.gif"><input type="radio" name="radiobutton" value="radiobutton"></td>
              <td valign="top" background="images/img_bst/td_org_20.gif"><a href="0708150250.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> &Col=2" target="_parent">Set 
                Colour Scheme Orange</a></td>
              <td></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="19"></td>
              <td valign="top" background="images/img_bst/td_blu_20.gif">03.</td>
              <td valign="top" background="images/img_bst/td_blu_20.gif"><input type="radio" name="radiobutton" value="radiobutton"></td>
              <td valign="top"  background="images/img_bst/td_blu_20.gif"><a href="0708150250.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> &Col=3" target="_parent">Set 
                Colour Scheme Blue</a></td>
              <td></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="20"></td>
              <td valign="top" background="images/img_bst/td_red_20.gif">04.</td>
              <td valign="top" background="images/img_bst/td_red_20.gif"><input type="radio" name="radiobutton" value="radiobutton"></td>
              <td valign="top"  background="images/img_bst/td_red_20.gif"><a href="0708150250.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> &Col=4" target="_parent">Set 
                Colour Scheme Red</a></td>
              <td></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="19"></td>
              <td valign="top" background="images/img_bst/td_grey_20.gif">05.</td>
              <td valign="top" background="images/img_bst/td_grey_20.gif"><input type="radio" name="radiobutton" value="radiobutton"></td>
              <td valign="top"  background="images/img_bst/td_grey_20.gif"><a href="0708150250.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> &Col=5" target="_parent">Set 
                Colour Scheme Grey</a></td>
              <td></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="19"></td>
              <td valign="top" background="images/img_bst/td_brown_20.gif">06.</td>
              <td valign="top" background="images/img_bst/td_brown_20.gif"><input type="radio" name="radiobutton" value="radiobutton"></td>
              <td valign="top" background="images/img_bst/td_brown_20.gif"><a href="0708150250.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> &Col=6" target="_parent">Set 
                Colour Scheme Brown</a></td>
              <td></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="20"></td>
              <td valign="top" background="images/img_bst/td_dbrown_20.gif">07.</td>
              <td valign="top" background="images/img_bst/td_dbrown_20.gif"><input type="radio" name="radiobutton" value="radiobutton"></td>
              <td valign="top" background="images/img_bst/td_dbrown_20.gif"><a href="0708150250.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> &Col=7" target="_parent">Set 
                Colour Scheme Natu</a></td>
              <td></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="20"></td>
              <td valign="top" background="images/img_bst/td_yellow_20.gif">08.</td>
              <td valign="top" background="images/img_bst/td_yellow_20.gif"><input type="radio" name="radiobutton" value="radiobutton"></td>
              <td valign="top" background="images/img_bst/td_yellow_20.gif"><a href="0708150250.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> &Col=8" target="_parent">Set 
                Colour Scheme Yellow</a></td>
              <td></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="40"></td>
              <td>&nbsp;</td>
              <td></td>
              <td></td>
              <td></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
          </form>
      </table></td>
      <td></td>
    </tr>
    <tr>
      <td height="14"></td>
      <td></td>
      <td width="656"></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="290">&nbsp;</td>
      <td colspan="3" valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="64" height="37">&nbsp;</td>
            <td width="539">&nbsp;</td>
            <td width="121">&nbsp;</td>
          </tr>
          <tr>
            <td height="211">&nbsp;</td>
            <td valign="top"><table  width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td height="20" valign="top" class="grncel_LIT"><div align="center">Other 
                      Utilities </div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="grncel_DRK"><a href="0708150252.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">01. 
                    Business Address Book</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="grncel_DRK"><a href="0708150251.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> "> 
                    02. Address Book Setup</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="grncel_DRK"><div align="justify"><a href="0708150248.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">03. 
                      Registration Status </a></div></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="92"></td>
                </tr>
            </table></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="42">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
      </table></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="29">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19" colspan="6" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" ><?php include "include/footer.php"; ?></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="10"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
</table>
</body>
</html>
