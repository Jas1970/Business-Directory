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
<title>Update Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">

function check(frmhome) 
	{

	if(frmhome.homepage.value=="")
		{
		alert("Please Enter Home page Details");
		frmhome.homepage.focus();
		return (false);
		}

	if(frmhome.profile.value=="")
		{
		alert("Please Enter Company Profile Details");
		frmhome.profile.focus();
		return (false);
		}

	if(frmhome.mark.value=="")
		{
		alert("Please Enter Text for Scroll Bar");
		frmhome.mark.focus();
		return (false);
		}

	if(frmhome.moto.value=="")
		{
		alert("Please Enter Company Moto");
		frmhome.moto.focus();
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
      <td height="107" colspan="4" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="463" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="463" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></td>
                              </tr>
                          </table></td>
                          <td width="377">&nbsp;</td>
                          <td width="268" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
                                <td width="1005" height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?>
                                <div align="center"></div></td>
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
      <td height="20" colspan="4" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="185" rowspan="3" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="10" height="11"></td>
            <td width="170"></td>
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
            <td height="826"></td>
            <td>&nbsp;</td>
          </tr>
      </table></td>
      <td width="47" height="19">&nbsp;</td>
      <td width="675">&nbsp;</td>
      <td width="140">&nbsp;</td>
    </tr>
    <tr>
      <td height="862">&nbsp;</td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form name="frmhome" action="0708150232.php?ID=<?php print"$rstid";?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> " method="post" onSubmit="return check(this)">
            <tr>
              <td width="74"></td> 
              <td height="22" colspan="5" valign="top" class="org_border_t_cell"><div align="center">Update 
                  Home Page Details</div></td>
              <td width="3"></td>
            </tr>
            <tr>
              <td></td>
              <td width="9" height="26">&nbsp;</td>
              <td width="70">&nbsp;</td>
              <td width="11">&nbsp;</td>
              <td width="344">&nbsp;</td>
              <td width="113">&nbsp;</td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="19">&nbsp;</td>
              <td colspan="3" valign="top" class="bluenote">(Insert Your Company 
                Breif Home Page approx. 250 Words Only) </td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="182"></td>
              <td colspan="3" valign="top"><textarea name="homepage" cols="80" rows="20" id="homepage"><?php print "$chome"; ?> </textarea></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="16"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="19"></td>
              <td colspan="3" valign="top">(Insert Your Company Breif Profile 
                approx. 250 Words Only)</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="200"></td>
              <td colspan="3" valign="top"><textarea name="profile" cols="80" rows="20" id="profile"><?php print "$chome"; ?> </textarea></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="16"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="22"></td>
              <td valign="top">Marquee</td>
              <td valign="top"> <div align="center"><font size="3"><strong>:</strong></font></div></td>
              <td valign="top"><input name="mark" type="text" id="mark" size="70" maxlength="100" value="<?php print "$marqs"; ?>"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="22"></td>
              <td valign="top">Moto</td>
              <td valign="top"><div align="center"><font size="3"><strong>:</strong></font></div></td>
              <td valign="top"><input name="moto" type="text" id="moto" size="70" maxlength="65" value="<?php print "$pdet"; ?>"> </td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="14"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="24"></td>
              <td colspan="3" valign="top"><div align="center"> 
                  <input type="hidden" name="ID" value="<?php print "$rstid"; ?>">
                  <input type="hidden" name="SID" value="<?php print "sid"; ?>">
                  <input name="Submit" type="submit" value="Submit Page Details">
                  <input type="reset" name="Submit2" value="Reset Page Details">
                </div></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td> 
              <td height="16"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </form>
      </table>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="55">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
