<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';

$msgs = "Please Enter Records";
$msgs = $_GET['msgs'];


/*
mysql_select_db($database_abc,$abc) or die("unable to Open database");

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
<script language="javascript">
<!--
function check(frmProp) 
	{

	if(frmProp.ptype.value=="")
		{
		alert("Please Select Property Type");
		frmProp.ptype.focus();
		return (false);
		}

	if(frmProp.prop_wt.value=="")
		{
		alert("Please Select Property Want To Sell, Buy and Rent");
		frmProp.prop_wt.focus();
		return (false);
		}

	if(frmProp.prop_price.value=="")
		{
		alert("Please Enter Property Approx. Value");
		frmProp.prop_price.focus();
		return (false);
		}
	if(frmProp.prop_area_ty.value=="")
		{
		alert("Please Select Property Area Dimension");
		frmProp.prop_area_ty.focus();
		return (false);
		}
	if(frmProp.prop_area.value=="")
		{
		alert("Please Enter Property area Value");
		frmProp.prop_area.focus();
		return (false);
		}
	if(frmProp.prop_owner.value=="")
		{
		alert("Please Select Your Status Regarding Property");
		frmProp.prop_owner.focus();
		return (false);
		}
	if(frmProp.prop_location.value=="")
		{
		alert("Please Enter Property Proper Location Details");
		frmProp.prop_location.focus();
		return (false);
		}
	if(frmProp.prop_add1.value=="")
		{
		alert("Please Enter Property address");
		frmProp.prop_add1.focus();
		return (false);
		}
	if(frmProp.prop_add2.value=="")
		{
		alert("Please Enter Property address");
		frmProp.prop_area.focus();
		return (false);
		}
	if(frmProp.prop_city.value=="")
		{
		alert("Please Select City for your Address");
		frmProp.prop_city.focus();
		return (false);
		}
	if(frmProp.prop_dist.value=="")
		{
		alert("Please Select District for your Address");
		frmProp.prop_dist.focus();
		return (false);
		}
	if(frmProp.prop_state.value=="")
		{
		alert("Please Select State for your Address ..");
		frmProp.prop_state.focus();
		return (false);
		}
	if (!document.frmProp.prv.checked)
		{
		alert("please Select Privacy Terms");
		frmProp.prv.focus();
		return (false);
		}
	if (!document.frmProp.trm.checked)
		{
		alert("please Select Terms & Condition You are Accepted");
		frmProp.trm.focus();
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
      <td height="114" colspan="6" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="503" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="503" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></td>
                              </tr>
                          </table></td>
                          <td width="328">&nbsp;</td>
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
                          <td height="56" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="100%"  height="37" align="center" valign="middle" class="title4"><div align="center"></div>                                  <?php print "$cname"; ?></td>
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
      <td height="20" colspan="6" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="191" rowspan="5" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="11"></td>
            <td ></td>
            <td ></td>
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
                <tr> 
                  <td height="1"></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box bluenote bgimg"><a href="0708150247.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Property 
                    Auth. Status</a></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box bluenote bgimg"><a href="0708150265.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Property 
                    Final Auth.</a></td>
                </tr>


                <tr> 
                  <td height="19" valign="top" class="org_border_box bluenote bgimg"><a href="0708150245.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Del. 
                    Property From Temp.</a></td>
                </tr>
            </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="538"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
      </table></td>
      <td width="14" height="12"></td>
      <td width="36"></td>
      <td width="635"></td>
      <td width="97"></td>
      <td width="74"></td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
      <td></td>
      <td align="center" valign="top"><?php print "$msgs"; ?>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <tr>
      <td height="613">&nbsp;</td>
      <td colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form name="frmProp" action="0708150246.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> " method="post" onSubmit="return check(this)">
            <tr> 
              <td height="22" colspan="4" valign="top" class="org_border_t_cell"><div align="center">Property 
                  Entry</div></td>
              <td ></td>
            </tr>
            <tr> 
              <td height="22" colspan="4" valign="top" class="grncel_DRK"><div align="center"></div></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">Property 
                  Type</div></td>
              <td width="14" valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td  valign="top" class="grncel_DRK"><select name="ptype" id="ptype">
                                 <?php
                                    $ptype_id=0;
		                    $addPropTypeData = ptype($ptype_id);
                                    for($index=0;$index < count($addPropTypeData);$index++)
                                    {
                                    $propTypeClass = $addPropTypeData[$index];
                                    $propTypeId = $propTypeClass->getPropType_id();
                                    $propTypeName = $propTypeClass->getProptype_name();    
                                    
                                    print "<option value=\"$propTypeId\">";
				    print "$propTypeName</option>";
                                  } 
                        	?>

              
                </select></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">Property 
                  Want To</div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><select name="prop_wt" id="prop_wt">
                  <option value="Buy">Buy</option>
                  <option value="Sel">Sel</option>
                  <option value="Rent">Rent</option>
                </select></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Property 
                  Approx. Amt.</div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><input name="prop_price" type="text" id="prop_price"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">Property 
                  Statical</div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><select name="prop_area_ty" id="prop_area_ty">
                  <option value="Sq.Feet">Sq.Feet.</option>
                  <option value="Sq.Yard">Sq.Yard.</option>
                  <option value="Sq.Meter">Sq.Meter</option>
                  <option value="Acre">Acre</option>
                  <option value="Bigha">Bigha</option>
                  <option value="Kanal">Kanal</option>
                  <option value="Biswa">Biswa</option>
                  <option value="Marla">Marla</option>
                  <option value="Biswasi">Biswasi</option>
                 <option value="Flat">Flat</option>
                 <option value="BHK">BHK</option>
                 <option value="Flat">Room</option>
                 </select> <input name="prop_area" type="text" id="prop_area"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">Your 
                  Status</div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><select name="prop_owner" id="prop_owner">
                  <option value="Owner">Owner</option>
                  <option value="Agent">Builder</option>
                  <option value="Property Dealer">Dealer</option>
                </select></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Property 
                  Location</div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><input name="prop_location" type="text" id="prop_location" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Property 
                  Address</div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><input name="prop_add1" type="text" id="prop_add1" size="45" maxlength="40"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><input name="prop_add2" type="text" id="prop_add2" size="45" maxlength="40"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">City</div></td>
              <td valign="top" class="grncel_DRK"><strong>:</strong></td>
              <td valign="top" class="grncel_DRK"><select name="prop_city" id="prop_city">
                   <?php
                                $citid = 0;
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
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">District</div></td>
              <td valign="top" class="grncel_DRK"><strong>:</strong></td>
              <td valign="top" class="grncel_DRK"><select name="prop_dist" id="prop_dist">
              
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
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">State</div></td>
              <td valign="top" class="grncel_DRK"><strong>:</strong></td>
              <td valign="top" class="grncel_DRK"><select name="prop_state" id="prop_state">
              
                                  <?php
                               $stid = 0;
                                $addStateData = dirstate($stid);
                                for($index=0;$index < count($addStateData);$index++)
                                    {
                                    $statclass = $addStateData[$index];
                                    $sitid= $statclass->getSitid();
                                    $stname = $statclass->getStname();
                                    print "<option value=\"$sitid\">";
				   print "$stname</option>";
                                  } 
                      ?>

                </select></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td  width="20" valign="top" class="grncel_DRK"> <input name="prv" type="checkbox" id="prv" value="checkbox"></td>
              <td colspan="3" valign="top" class="grncel_DRK bluenote"> <p align="justify">The 
                  personal information provided in the above form will be treated 
                  by Haanzee.com in accordance with the provisions of Indian privacy 
                  law, which regulates the protection of persons and other entities 
                  with respect to the processing of personal data.</p>
                <p align="justify">
                  The act of providing the above-mentioned personal information 
                  is absolutely voluntary and at the complete discretion of the 
                  person concerned. According to law, I inconditionally accept 
                  that my personal data wil be subject to all handling operations 
                  indicated in Law .<br>
                  <br>
                </p>                </td>
              <td></td>
            </tr>
            <tr> 
              <td height="19" valign="top" class="grncel_DRK bluenote"> <input name="trm" type="checkbox" id="trm" value="checkbox"></td>
              <td colspan="3" valign="top" class="grncel_DRK bluenote">I have 
                read and accept abc.com 's <a href="#" onClick="MM_openBrWindow('terms.php','terms','scrollbars=yes,resizable=yes,height=300, width=550')">terms 
                and conditions</a>.</td>
              <td></td>
            </tr>
            <tr> 
              <td class="grncel_DRK"  height="19" colspan="4" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td class="grncel_DRK" height="24" colspan="4" valign="top"><div align="center"> 
                  <input type="hidden" name="ID" value="<?php print "$rstid"; ?>">
                  <input type="hidden" name="SID" value="<?php print "$sid"; ?>">
                  <input name="Submit" type="submit" value="Submit Page Details">
                  <input type="reset" name="Submit2" value="Reset Page Details">
                </div></td>
              <td></td>
            </tr>
            <tr> 
              <td class="grncel_DRK" height="22"></td>
              <td class="grncel_DRK" width="194"></td>
              <td class="grncel_DRK"></td>
              <td class="grncel_DRK"></td>
              <td></td>
            </tr>
          </form>
      </table>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="41">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    
    
    
    
    
    
    
    
    
    <tr> 
      <td height="19" colspan="6" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" align="center"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>