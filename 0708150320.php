<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';

$msg	= $_GET['msg'];

if($msg=="1")
	{
	$msg	= "Record Sucessfully Updated";
	}
if($msg=="2")
	{
	$msg	= "Record Not Entered, Please Contact Site Admin.";
	}

$limits = 50;

$slbrch  = "select * from srvs_branch where mids='$srvsid'";
$rdbrch  = mysql_query($slbrch);
$rcdcount = mysql_num_rows($rdbrch);
$blimits = abs($limits-$rcdcount);

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
$slbranch = "select * from srvs_branch where mids = '$srvsid'";
$rdbranch = mysql_query($slbranch);
$rcdcount = mysql_num_rows($rdbranch);

?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">

<script language="javascript">
<!--
function check(frmbasic) 
	{
	if(frmbasic.cpname.value=="")
		{
		alert("Please Enter Contact Person Name");
		frmbasic.cpname.focus();
		return (false);
		}
		
	if(frmbasic.add1.value=="")
		{
		alert("Please Enter Vaild Mailing Address");
		frmbasic.add1.focus();
		return (false);
		}		

	if(frmbasic.add2.value=="")
		{
		alert("Please Enter Vaild Mailing Address");
		frmbasic.add2.focus();
		return (false);
		}		

	if(frmbasic.city.value=="")
		{
		alert("Please Select Your City");
		frmbasic.city.focus();
		return (false);
		}

	if(frmbasic.dist.value=="")
		{
		alert("Please Select Your District");
		frmbasic.dist.focus();
		return (false);
		}

	if(frmbasic.state.value=="")
		{
		alert("Please Select Your State");
		frmbasic.state.focus();
		return (false);
		}
	if(frmbasic.count.value=="")
		{
		alert("Please Select Your Country Name");
		frmbasic.country.focus();
		return (false);
		}

	if(frmbasic.zip.value=="")
		{
		alert("Please Enter Your Pin Code");
		frmbasic.zip.focus();
		return (false);
		}
	if(frmbasic.tel.value=="")
		{
		alert("Please Enter Your Telephone Number");
		frmbasic.tel.focus();
		return (false);
		}
		
	if(frmbasic.mob.value=="")
		{
		alert("Please Enter Your Mobile Number");
		frmbasic.mob.focus();
		return (false);
		}
		
	if(frmbasic.mail.value=="")
		{
		alert("please Enter Confirmed and Operative E-Mail Id");
		frmbasic.mail.focus();
		return (false);
		}
		
	if(frmbasic.mail.value=="")
			{
			alert("please enter your email");
			frmbasic.mail.focus();
			return (false);
			}
	if(frmbasic.mail.value!="")
			{
			pass = frmbasic.mail.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmbasic.mail.focus();
				return (false);
				}
			}
	if(frmbasic.mail.value!="")
			{
			pass = frmbasic.mail.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmbasic.mail.focus();
				return (false);
				}
			}
	
		if (!document.frmbasic.trm.checked)
		{
		alert("please Select Terms & Condition You are Accepted");
		frmbasic.trm.focus();
		return (false);
		}
	}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>	

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
                    <td width="100%" height="106" valign="top"> <table align="center" class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="415" height="22" valign="top"> <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
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
                          <td width="264" rowspan="2" valign="top"> <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
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
      <td height="20" colspan="6" valign="top"><?php include 'include/sbar.php';?></td>
    </tr>
    <tr> 
      <td width="210" rowspan="7" valign="top"><table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="10" height="11"></td>
            <td width="170"></td>
            <td width="6"></td>
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
            <td height="11"></td>
            <td></td>
            <td></td>
          </tr>
          <tr> 
            <td height="79"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="20" valign="top" class="org_border_box title"><div align="center">Utilities</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150320.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Add 
                    Branch Address</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150321.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Delete 
                    Branch Address</a></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="23"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          <tr> 
            <td height="119"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td height="20" colspan="2" valign="top" class="org_border_box title"><div align="center">Branch 
                      Data</div></td>
                </tr>
                <tr> 
                  <td height="10" colspan="2" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg">Branch 
                    Add</td>
                  <td valign="top" class="org_border_box bluenote bgimg"><?php print"$rcdcount"; ?> 
                    &nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg">Branch 
                    Bal. </td>
                  <td valign="top" class="org_border_box bluenote bgimg"><?php print"$blimits"; ?>&nbsp;</td>
                </tr>
                <tr> 
                  <td width="86" height="20" valign="top" class="org_border_box bluenote bgimg">Branch 
                    Limit </td>
                  <td width="84" valign="top" class="org_border_box bluenote bgimg"><?php print"$limits"; ?> 
                    &nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" colspan="2" valign="top" class="org_border_box bluenote bgimg"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="377"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
      </table></td>
      <td width="87" height="19">&nbsp;</td>
      <td width="4">&nbsp;</td>
      <td width="570">&nbsp;</td>
      <td width="18">      
      <td width="158">      
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td colspan="3" valign="top"> <div align="center"><font color="#FF0000"><blink><?php print "$msg"; ?></blink></font> 
      </div>
      
      <td>    
    </tr>
    <tr>
      <td height="19">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>      
      <td>    
    </tr>
    
    <tr>
      <td height="480">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form name="frmbasic" action="0708150322.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>" method="post" onSubmit="return check(this)">
            <tr> 
              <td height="21" colspan="7" valign="top" class="org_border_box title"> 
                <div align="center">Update Branch Details</div></td>
            </tr>
            <tr> 
              <td width="11" height="23">&nbsp;</td>
              <td width="39">&nbsp;</td>
              <td width="106">&nbsp;</td>
              <td width="10">&nbsp;</td>
              <td width="223">&nbsp;</td>
              <td width="138">&nbsp;</td>
              <td width="20">&nbsp;</td>
            </tr>
            <tr> 
              <td height="19"></td>
              <td colspan="2" valign="top"> <div align="right">Name<strong> :</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top" class="title1"><?php print "$cname"; ?> 
                &nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td colspan="2" valign="top"><div align="right">Contact Person<strong> 
                  :</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><input name="cpname" type="text" id="cpname" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="6"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="1"></td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="2" rowspan="2" valign="top"><input name="add1" type="text" id="add1" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="21"></td>
              <td colspan="2" rowspan="2" valign="top"><div align="right">Address 
                  <strong>:</strong></div></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="1"></td>
              <td></td>
              <td colspan="2" rowspan="2" valign="top"><input name="add2" type="text" id="add2" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="21"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="14"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td colspan="2" valign="top"><div align="right">City <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><select name="city" id="city">
                <?php
								$citid=0;
		                        $addCityData = dircity($citid);
                                for($index=0;$index < count($addCityData);$index++)
                                    {
                                    $cityclass = $addCityData[$index];
                                    $citid = $cityclass->getCitid();
                                    $citname = $cityclass->getCitname();
                                    $dstname = $cityclass->getDistid();
                                    
                                    print "<option value=\"$citid\">";
								    print "$citname</option>";
                                  } 
                        	?>
                </select></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td colspan="2" valign="top"><div align="right">District <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><select name="dist" id="dist">
              		<?php
					
								$distid=0;	
                               	$addDistData = dirdist($distid);
                                for($index=0;$index < count($addDistData);$index++)
                                    {
                                    $distclass = $addDistData[$index];
                                    $distid = $distclass->getDistid();
                                    $dstname = $distclass->getDistname();
                                    $stid   = $distclass->getStid();
                                    print "<option value=\"$distid\">";
				    				print "$dstname</option>";
                                  } 
  				?>
                </select></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td colspan="2" valign="top"><div align="right">State <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><select name="state" id="state">
              		<?php
                               	$stid=0;
                                $addStateData = dirstate($stid);
                                for($index=0;$index < count($addStateData);$index++)
                                    {
                                    $statclass = $addStateData[$index];
                                    $stid= $statclass->getSitid();
                                    $stname = $statclass->getStname();
                                    print "<option value=\"$stid\">";
								    print "$stname</option>";
                                  } 
                      ?>
              
                </select></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td colspan="2" valign="top"><div align="right">Country <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><select name="count" id="count">
              			<?php
	    
									$cntid=0;
		                            $countryData = country($cntid);
    	                            for($index=0;$index < count($countryData);$index++)
                                    {
                                    $countclass = $countryData[$index];
                                    $cntid = $countclass->getCntid();
                                    $contname = $countclass->getCntname();

                                    print "<option value=\"$cntid\">";
				    				print "$contname</option>";
                                  } 
                      ?>
              
                </select></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td colspan="2" valign="top"><div align="right">Zip Code <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><input name="zip" type="text" id="zip" size="10" maxlength="6"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="15"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td colspan="2" valign="top"><div align="right">Telephone No. <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><input name="tel" type="text" id="tel" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td colspan="2" valign="top"><div align="right">Fax No. <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><input name="fax" type="text" id="fax" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td colspan="2" valign="top"><div align="right">Mobile No. <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><input name="mob" type="text" id="mob" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="16"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td colspan="2" valign="top"><div align="right">E-Mail <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><input name="mail" type="text" id="mail" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td colspan="2" valign="top"><div align="right">Web Site <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td colspan="2" valign="top"><input name="web" type="text" id="web" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="13"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td valign="top"><input name="trm" type="checkbox" id="trm" value="checkbox"></td>
              <td colspan="4" valign="top">I have read and accept haanzee.com 's <a href="#" onClick="MM_openBrWindow('terms.php','terms','scrollbars=yes,resizable=yes,height=300,width=550')">terms 
                and conditions</a>.</td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td></td>
              <td colspan="3" valign="top"><div align="center"> 
                  <input type="hidden" name="ID" value="<?php print "$srvsid"; ?>">
                  <input type="submit" name="Submit" value="   Upload  Your Branch Details">
                </div></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="11"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </form>
        </table>
      
      <td>    
    </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    
    <tr>
      <td height="51">&nbsp;</td>
      <td colspan="3" valign="top">              &nbsp; 
      
      <td>            </tr>
    <tr>
      <td height="104">&nbsp;</td>
      <td colspan="2" valign="top">       <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="9"></td>
            <td width="511"></td>
            <td width="12"></td>
          </tr>
          <tr> 
            <td height="75"></td>
            <td valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="11" height="8"></td>
                  <td width="484"></td>
                  <td width="16"></td>
                </tr>
                <tr> 
                  <td height="28"></td>
                  <td valign="top" class="grncel_LIT title2" ><div align="center">Branch 
                      Record Status</div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title">Total Number of Branches 
                    Added =<b> <?php print "$rcdcount"; ?></b></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="16"></td>
                  <td></td>
                  <td></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="20"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table>
      
      <td>      
      <td>      
    </tr>
    <tr>
      <td height="22">&nbsp;</td>
      <td colspan="3" valign="top">              &nbsp; 
      
      <td>          </tr>
    <tr> 
      <td height="19" colspan="6" valign="top"> <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"  align="center"><?php include "include/footer.php"; ?> </td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>