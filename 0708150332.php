<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';


$loginid = $_REQUEST['CID'];
$opwd1	= $_REQUEST['oldpwd'];
$opwd	= base64_encode($opwd1);
$npwd	= $_REQUEST['npwd'];
$rnpwd 	= $_REQUEST['rnpwd'];

	$tmpsl = "select * from srvs_admin where dlogin_id='$loginid'";
		$temprd = mysql_query($tmpsl) or die("Query Failed");
		$rcht	= mysql_num_rows($temprd);
		$rpass = mysql_result($temprd,0,'dlogin_pwd');
		$rmpp = base64_decode($rpass);


$sllgid = "select * from srvs_admin where dlogin_cno='$srvsid'
			and '$opwd1' = '$rmpp'";


$rdlgid = mysql_query($sllgid);
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
						$uppwd = "update srvs_admin 
									set dlogin_pwd='$npassw'
										where dlogin_cno='$srvsid'";
						$rduppwd = mysql_query($uppwd);
						$msg = "Password update successfuly";
					}						
		 }
$sllgid = "select * from srvs_admin where dlogin_cno='$srvsid'";
$rdlgid = mysql_query($sllgid);
$lgid = mysql_result($rdlgid,0,'dlogin_id');

/*
$select_rcd = "select *  from srvs_main where sr_id='$srvsid'";
$result_rcd = mysql_query($select_rcd,$abc);
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
                          <td width="417" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> Business 
                                  Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="415">&nbsp;</td>
                          <td width="276" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
      <td height="20" colspan="4" valign="top"><?php include 'include/sbar.php';?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="5" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" >
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
            <td height="521"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td height="19" colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19">&nbsp;</td>
          </tr>
        </table></tr>
    <tr> 
      <td width="22" height="371"></td>
      <td width="537" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form name="pwdform" action="0708150332.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>" method="post" onSubmit="return check(this)">
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
              <td valign="top" class="org_border_r_cell"><b><?php print "$lgid"; ?></b>&nbsp;</td>
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
                  <input type="hidden" name="ID" value="<?php print "$srvsid"; ?>">
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
      <td width="10"></td>
    </tr>
    <tr> 
      <td height="21"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="135"></td>
      <td valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="537" height="135">&nbsp;</td>
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
      <td height="19" colspan="4" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>


