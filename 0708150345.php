<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';



$slproduct = "select * from srvs_sadvts where mids ='$srvsid'";
$rdproduct = mysql_query($slproduct);
$rcdcount = mysql_num_rows($rdproduct);
if($rcdcount>25)
	{
		$msg = "Record Limit Over can't Insert Data";
		
	}
	else
	{

	$limits = 25;
	$blimits = abs($limits-$rcdcount);
	}
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
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">
function check(insprod) 
	{
	if(insprod.pname.value=="")
		{
		alert("Please Enter Product Name");
		insprod.pname.focus();
		return (false);
		}
	if(insprod.punit.value=="")
		{
		alert("Please Enter Product Unit Of Measurement");
		insprod.punit.focus();
		return (false);
		}		
	if(insprod.pprice.value=="")
		{
		alert("Please Enter Product Approximate Value");
		insprod.pprice.focus();
		return (false);
		}
	if(insprod.pdesc.value=="")
		{
		alert("Please Enter Product Description");
		insprod.pdec.focus();
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
                          <td width="413" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> Business 
                                  Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="428">&nbsp;</td>
                          <td width="267" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
      <td width="194" rowspan="5" valign="top"><table class="tbbgcol" width="194" border="0" cellpadding="0" cellspacing="0" >
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
            <td height="11"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height="79"></td>
            <td valign="top"><table width="170" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="20" valign="top" class="org_border_box title"><div align="center">Admin 
                      Entry</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150345.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Add 
                    Service</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150346.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Delete 
                    Service</a> </td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="447"></td>
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
      <td  height="387"></td>
      <td  valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="21" colspan="3" valign="top"><div align="center"><font color="#FF0000"><strong><blink><?php print "$msg"; ?></blink></strong></font> 
                &nbsp;</div></td>
          </tr>
          <tr> 
            <td  height="26">&nbsp;</td>
            <td>&nbsp;</td>
            <td >&nbsp;</td>
          </tr>
          <tr> 
            <td height="321">&nbsp;</td>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="insprod" action="0708150366.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>" method="post" onSubmit="return check(this)">
                  <tr> 
                    <td height="23" colspan="3" valign="top" class="org_border_box title"><div align="center">Enter 
                        Your Product Details</div></td>
                  </tr>
                  <tr> 
                    <td height="24" colspan="3" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td width="129" height="24" valign="top" class="org_border_l_cell"><div align="right">Service Category </div></td>
                    <td width="5" valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td width="373" valign="top" class="org_border_r_cell"><select name="srname" id="srname">
        			<?php
                                $addSrvsTypeData = srvstype($srvs_id);
                                        
                                for($index=0;$index < count($addSrvsTypeData);$index++)
                                    {
                                    $srvsClass = $addSrvsTypeData[$index];
                                    $srvs_id = $srvsClass->getSrvs_id();
                                    $srvs_name = $srvsClass->getSrvs_name();
                                    
                                    print "<option value=\"$srvs_id\">";
				    print "&nbsp;&nbsp;&nbsp;$srvs_name</option>";
                                  } 
                        	?>                    
        
        				            
                      </select></td>
                  </tr>
                  <tr> 
                    <td height="24" valign="top" class="org_border_l_cell"><div align="right">City</div></td>
                    <td valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="org_border_r_cell"><select name="city" id="city">
									<?php

		                        $addCityData = dircity($citname);
                                for($index=0;$index < count($addCityData);$index++)
                                    {
                                    $cityclass = $addCityData[$index];
                                    $ctid = $cityclass->getCitid();
                                    $citname = $cityclass->getCitname();
                                    $dstname = $cityclass->getDistid();
                                    
                                    print "<option value=\"$ctid\">";
				    print "&nbsp;&nbsp;&nbsp;$citname</option>";
                                  } 
                        	?>                    
                            </select></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top" class="org_border_l_cell"><div align="right"> 
                        Service Name</div></td>
                    <td valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="org_border_r_cell"><input name="pname" type="text" id="pname" size="60" maxlength="60"></td>
                  </tr>
                  <tr> 
                    <td height="38" valign="top" class="org_border_l_cell"><div align="right">Service 
                        Desc. </div></td>
                    <td valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td rowspan="2" valign="top" class="org_border_r_cell"><textarea name="pdesc" cols="40" rows="4" id="pdesc"></textarea></td>
                  </tr>
                  <tr> 
                    <td height="64" colspan="2" valign="top" class="org_border_l_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="3" valign="top" class="org_border_c_cell bluenote"> 
                      <div align="center">(Only 50 Words Description Allowded)</div></td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="3" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="26" colspan="3" valign="top" class="org_border_b_cell"><div align="center"> 
                        <input type="hidden" name="ID" value="<?php print "$srvsid"; ?>">
                        <input type="submit" name="Submit" value="Add  Record">
                      </div></td>
                  </tr>
                  <tr> 
                    <td height="18"></td>
                    <td></td>
                    <td></td>
                  </tr>
                </form>
              </table></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="19">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      <td width="10"></td>
    </tr>
    <tr> 
      <td height="17"></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="147"></td>
      <td valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="9"></td>
            <td width="511"></td>
            <td width="12"></td>
          </tr>
          <tr> 
            <td height="123"></td>
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
                  <td colspan="3" valign="top" class="grncel_LIT title2" ><div align="center">Product 
                      Catalogue Status &nbsp;</div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="20"></td>
                  <td colspan="3" valign="top" class="grncel_DRK title"><!--DWLayoutEmptyCell-->&nbsp; </td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"> <div align="right">&nbsp;Service 
                      Enter To Database</div></td>
                  <td valign="top" class="grncel_DRK title"> <div align="center"><strong><font size="3">:</font></strong></div></td>
                  <td valign="top" class="grncel_DRK title"><div align="left"><b><?php print "$rcdcount"; ?></b> 
                      &nbsp;</div></td>
                  <td></td>
                </tr>
                <tr>
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"><div align="right">&nbsp;Service 
                      Balance </div></td>
                  <td valign="top"class="grncel_DRK title"><div align="center"><strong><font size="3">:</font></strong></div></td>
                  <td valign="top"class="grncel_DRK title"><div align="left"><b><?php print "$blimits"; ?> </b> 
                      &nbsp;</div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"> <div align="right">Total 
                      Limit</div></td>
                  <td valign="top"class="grncel_DRK title"><div align="center"><strong>:</strong></div></td>
                  <td valign="top"class="grncel_DRK title"><div align="left"><b><?php print "$limits"; ?></b> 
                      &nbsp;</div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="21"></td>
                  <td colspan="3" valign="top" class="grncel_DRK title">&nbsp; </td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="2"></td>
                  <td colspan="3" valign="top" class="grncel_DRK title" > </td>
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
      <td height="24"></td>
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