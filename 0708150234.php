<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';


$loginid = $_REQUEST['CID'];
$Old_Login_pwd	= $_REQUEST['oldpwd'];
$npwd	= $_REQUEST['npwd'];
$rnpwd 	= $_REQUEST['rnpwd'];

		$tmpsl = "select * from dir_admin where dlogin_id='$loginid'";
		$temprd = mysql_query($tmpsl) or die("Query Failed");
		$rcht	= mysql_num_rows($temprd);
		$rpass = mysql_result($temprd,0,'dlogin_pwd');
		$rmpp = base64_decode($rpass);




$sllgid = "select * from dir_admin where dlogin_cno='$rstid'
			and '$Old_Login_pwd' = '$rmpp'";

$rdlgid = mysql_query($sllgid);
//$lgpwd = mysql_result($rdlgid,0,'dlogin_pwd');
//$olgpwd=base64_decode($lgpwd);
$count = mysql_num_rows($rdlgid);
if($count<>1)
	{
		$msg = "Old password not Correct";
	}
	else
		{
			if($npwd <> $rnpwd)
				{
					$msg = "New password not matched with Re-Enter Password";
				}
				else
					{
						$npassw= base64_encode($npwd);
						$uppwd = "update dir_admin 
									set dlogin_pwd= '$npassw'
										where dlogin_cno='$rstid'";
						$rduppwd = mysql_query($uppwd);
						$msg = "Password update successfuly count : $count";
					}						
		 }
		 
$sllgid = "select * from dir_admin where dlogin_cno='$rstid'";
$rdlgid = mysql_query($sllgid);
$lgid = mysql_result($rdlgid,0,'dlogin_id');

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
	*/
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">

function check(pwdform) 
	{
	if(pwdform.oldpwd.value=="")
		{
		alert("please enter Old Password");
		pwdform.oldpwd.focus();
		return (false);
		}
		

	if(pwdform.npwd.value=="")
		{
		alert("please enter New Password");
		pwdform.npwd.focus();
		return (false);
		}		

	if(pwdform.rnpwd.value=="")
		{
		alert("please Re-enter New Password");
		pwdform.rnpwd.focus();
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
      <td height="107" colspan="8" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="601" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="121">&nbsp;</td>
                          <td width="386" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
                                <td width="101" height="29"></td> 
                                <td width="1007" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
                              </tr>
                              <tr>
                                <td height="19"></td> 
                                <td align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>)                                </td>
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
      <td height="20" colspan="8" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="172" rowspan="5" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="24" height="11"></td>
            <td width="170"></td>
            <td width="32"></td>
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
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150246.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Property 
                    Directory Entry</a></td>
                </tr>
            </table></td>
          <td></td>
          </tr>
          <tr>
            <td height="521"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          
          
          
          
          
          
          
          
          
          
          
          
          
      </table></td>
      <td width="41" height="19">&nbsp;</td>
      <td colspan="5" valign="top">                                                                   <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19">&nbsp;</td>
          </tr>
        </table>
      
      <td width="149">      
    </tr>
    <tr>
      <td height="414">&nbsp;</td>
      <td width="4">&nbsp;</td>
      <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form name="pwdform" action="0708150234.php?ID=<?php print"$rstid";?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> " method="post" onSubmit="return check(this)">
            <tr> 
              <td width="25" height="19"></td>
              <td colspan="3" valign="top"> <div align="center"><strong><font color="#FF0000" size="3">
			  <blink><?php print "$msg"; ?></blink></font></strong> 
                </div>
                <div align="center">&nbsp;</div></td>
              <td width="48"></td>
            </tr>
            <tr>
              <td height="13"></td>
              <td width="178"></td>
              <td width="14"></td>
              <td width="272"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="21">&nbsp;</td>
              <td colspan="3" valign="top" class="org_border_box title"><div align="center">Update 
                  Login Details</div></td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="22">&nbsp;</td>
              <td colspan="3" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="21">&nbsp;</td>
              <td valign="top" class="org_border_l_cell"><div align="right">Company 
                  ID<strong> :</strong></div></td>
              <td valign="top" class="org_border_no_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top" class="org_border_r_cell"><b><?php print "$loginid"; ?></b>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td valign="top" class="org_border_l_cell"><div align="right">Old 
                  Password <strong>:</strong></div></td>
              <td valign="top" class="org_border_no_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top" class="org_border_r_cell"><input name="oldpwd" type="password" id="oldpwd" size="30" maxlength="25"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td valign="top" class="org_border_l_cell"><div align="right">New 
                  Password <strong>:</strong></div></td>
              <td valign="top" class="org_border_no_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top" class="org_border_r_cell"><input name="npwd" type="password" id="npwd" size="30" maxlength="25"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td valign="top" class="org_border_l_cell"><div align="right">Re-Enter 
                  New Password <strong>:</strong></div></td>
              <td valign="top" class="org_border_no_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top" class="org_border_r_cell"><input name="rnpwd" type="password" id="rnpwd" size="30" maxlength="25"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td colspan="3" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td colspan="3" valign="top" class="org_border_b_cell"><div align="center"> 
                  <input type="hidden" name="CID"	value = "<?php print "$lgid"; ?>">
                  <input type="hidden" name="SID"	value = "<?php print "$sid"; ?>">
                  <input type="hidden" name="ID" value="<?php print "$rstid"; ?>">
                  <input type="submit" name="Submit" value="Upload Your Login Details">
                </div></td>
              <td></td>
            </tr>
            <tr> 
              <td height="71"></td>
              <td>&nbsp;</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="15"></td>
              <td colspan="3" valign="top" class="grncel_LIT"><font size="2">Please 
                Note</font></td>
              <td></td>
            </tr>
            <tr> 
              <td height="15"></td>
              <td colspan="3" valign="top"class="grncel_DRK"><font size="1">01. 
                Password must be mached with old password </font></td>
              <td></td>
            </tr>
            <tr> 
              <td height="17"></td>
              <td colspan="3" valign="top" class="grncel_DRK"><font size="1">02. 
                Password can be alpha and numeric as you required</font></td>
              <td></td>
            </tr>
            <tr> 
              <td height="18"></td>
              <td colspan="3" valign="top" class="grncel_DRK"><font size="1">03. 
                Password lenght must be more then 10 and less then 16 character</font></td>
              <td></td>
            </tr>
            <tr> 
              <td height="16"></td>
              <td colspan="3" valign="top" class="grncel_DRK"><font size="1">04. 
                For more securities it used with alpha-numeric and special character</font></td>
              <td></td>
            </tr>
            <tr> 
              <td height="36"></td>
              <td>&nbsp;</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </form>
      </table></td>
      <td width="3">&nbsp;</td>
      <td width="37">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td width="3">&nbsp;</td>
      <td width="638">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="135">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="537" height="135">&nbsp;</td>
          </tr>
      </table></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="42">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    
    <tr> 
      <td height="19" colspan="8" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>


