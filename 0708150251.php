<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';


if($rstid=="")
	{
	$rstid = $_REQUEST['ID'];
	}
$chk 		= $_REQUEST['chk'];
if($chk<>"")
	{

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

		$slrcd	= "select * from dir_addbksetup where dir_id='$rstid'";
		$rdrcd	= mysql_query($slrcd);
		$rnum	= mysql_num_rows($rdrcd);
			if($rnum<>"")
				{
				$uprcd = "update dir_addbksetup
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
								where dir_id = '$rstid'";
					
						$rduprcd = mysql_query($uprcd)or die(mysql_error());
						$msg = "Record Updated Sucessfully";
						$chk ="";
					}
					else
					{
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
					
						$instrcd = "insert into dir_addbksetup(dir_id, cname, cpname, add1, city,
									dist, state, country, pin, tel, fax, mail, web, hid, hweb, hmail)
									values 
									('$rstid','$cname','$cpname','$add','$city','$dist','$state','$country',
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
                          <td width="552" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="552" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></td>
                              </tr>
                          </table></td>
                          <td width="279">&nbsp;</td>
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
      <td height="20" colspan="4" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="3" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="10" height="12"></td>
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
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150222.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> ">Business 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150236.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> ">Job 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150246.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> ">Property 
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
            <td height="100"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="20" valign="top" class="org_border_box title"><div align="center">Utilities</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150252.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> ">Address 
                    Book Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150251.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> ">Address 
                    Book Setup</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150257.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> ">Address 
                    List All</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150255.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> ">Address 
                    List Select One</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150253.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> ">Address 
                    List Delete One</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150248.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> ">Directory 
                    Status </a></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="302"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      <td width="16" height="20">&nbsp;</td>
      <td width="540">&nbsp;</td>
      <td width="13">&nbsp;</td>
    </tr>
    <tr>
      <td height="414">&nbsp;</td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable">
          <!--DWLayoutTable-->
          <tr> 
            <td width="61" height="20"></td>
            <td width="427" valign="top" align="center"><blink><font color="#FF0000" size="3"><strong><?php print "$msg"; ?></strong></font></blink></td>
            <td width="52"></td>
          </tr>
          <tr> 
            <td height="18"></td>
            <td></td>
            <td></td>
          </tr>
          <tr> 
            <td height="321"></td>
            <td valign="top"> <table id="dashed" width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="frmAdd" action="0708150251.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms";?> " method="post">
                  <tr> 
                    <td height="18" colspan="3" valign="top" class="grncel_LIT"><div align="center">Setup 
                        Display Address Book</div></td>
                  </tr>
                  <tr> 
                    <td height="19" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td width="189" height="20" valign="top" class="grncel_DRK"><div align="right">Contact 
                        Person </div></td>
                    <td width="13" valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
                    <td width="225" valign="top" class="grncel_DRK"><input name="cpname" type="checkbox" id="cpname" value="1"></td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="grncel_DRK"><div align="right">Company 
                        Name</div></td>
                    <td valign="top" class="grncel_DRK" ><div align="center"><strong>:</strong></div></td>
                    <td valign="top" class="grncel_DRK"><input name="cname" type="checkbox" id="cname" value="1"></td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="grncel_DRK"><div align="right">Address</div></td>
                    <td valign="top" class="grncel_DRK" ><div align="center"><strong>:</strong></div></td>
                    <td valign="top" class="grncel_DRK"><input name="add" type="checkbox" id="add" value="1"></td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="grncel_DRK"><div align="right">City, 
                        District</div></td>
                    <td valign="top" class="grncel_DRK" ><div align="center"><strong>:</strong></div></td>
                    <td valign="top" class="grncel_DRK"><input name="city" type="checkbox" id="city" value="1"></td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="grncel_DRK"><div align="right">State, 
                        Country, Pin Code</div></td>
                    <td valign="top" class="grncel_DRK" ><div align="center"><strong>:</strong></div></td>
                    <td valign="top" class="grncel_DRK"><input name="state" type="checkbox" id="state" value="1"></td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="grncel_DRK"><div align="right">Telephone 
                        No., Fax No.</div></td>
                    <td valign="top" class="grncel_DRK" ><div align="center"><strong>:</strong></div></td>
                    <td valign="top" class="grncel_DRK"><input name="tel" type="checkbox" id="tel" value="1"></td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="grncel_DRK"><div align="right">E-Mail, 
                        Web Site</div></td>
                    <td valign="top" class="grncel_DRK" ><div align="center"><strong>:</strong></div></td>
                    <td valign="top" class="grncel_DRK"><input name="mail" type="checkbox" id="mail" value="1"></td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="grncel_DRK"><div align="right">Haanzee 
                        ID</div></td>
                    <td valign="top" class="grncel_DRK" ><div align="center"><strong>:</strong></div></td>
                    <td valign="top" class="grncel_DRK"><input name="hid" type="checkbox" id="hid" value="1"></td>
                  </tr>
                  <tr> 
                    <td height="21" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="3" valign="top" class="grncel_DRK"><div align="center"> 
                        <input type="hidden" name="chk" value="OK">
                        <input type="hidden" name="ID" value="<?php print "$rstid"; ?>">
                        <input type="hidden" name="SID" value="<?php print "$sid"; ?>">
                        <input type="reset" name="Reset" value="  Reset  ">
                        <input type="submit" name="Submit2" value="  Update  ">
                      </div></td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="23" colspan="3" valign="top" class="grncel_DRK"><div align="center"><font size="2">( 
                        Please Tick for Yes want to Display Un-Tick for No Display)</font></div></td>
                  </tr>
                  <tr> 
                    <td height="34"></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="1"></td>
                    <td></td>
                    <td></td>
                  </tr>
                </form>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="55"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="90">&nbsp;</td>
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
