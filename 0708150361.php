<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';


$sr_id		= $_POST['sr_id'];

$srvs_id=$sr_id;


$sqlCountry="select cntid,cntname from country  order by cntname asc ";
$resCountry=mysql_query($sqlCountry);
$resCountryl=mysql_query($sqlCountry);

$slsubsrvs = "select * from dir_subsrvs where srvs_id='$srvs_id'";
$rssubsrvs = mysql_query($slsubsrvs);

$slservice = "select * from dir_srvs where srvs_id='$sr_id'";
$rdservice = mysql_query($slservice);
$srvs_name = mysql_result($rdservice,0,'srvs_name');

$slcom = "select distinct(srvsid) from srvs_advts where mids='$srvsid'";
$rdcom = mysql_query($slcom);
$scount = mysql_num_rows($rdcom);

$slct = "select distinct(city) from srvs_advts where mids='$srvsid'";
$rdct = mysql_query($slct);
$ccount = mysql_num_rows($rdct);
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
<title>Select Category</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">

function check(form1) 
	{
	if(form1.sub_service_dropdown.value=="-1")
		{
		alert("Please Select Service Name");
		form1.sub_service_dropdown.focus();
		return (false);
		}
		if(form1.country_dropdown.value=="-1")
		{
		alert("please Select Country Name");
		form1.country_dropdown.focus();
		return (false);
		}
	if(form1.state_dropdown.value=="-1")
		{
		alert("please Select Name");
		form1.state_dropdown.focus();
		return (false);
		}

	if(form1.district_dropdown.value=="-1")
		{
		alert("please Select District Name");
		form1.district_dropdown.focus();
		return (false);
		}
	if(form1.city_dropdown.value=="-1")
		{
		alert("please Select City Name");
		form1.city_dropdown.focus();
		return (false);
		}	
		
	if(form1.sub_service_dropdown.value=="-1")
		{
		alert("please Select Service Category Name");
		form1.sub_service_dropdown.focus();
		return (false);
		}
	if(form1.years.value=="-1")
		{
		alert("please Select Service Registration for Year");
		form1.years.focus();
		return (false);
		}
	if (!document.form1.prv.checked)
		{
		alert("please Select Privacy Terms");
		form1.prv.focus();
		return (false);
		}
	if (!document.form1.trm.checked)
		{
		alert("please Select Terms & Condition You are Accepted");
		form1.trm.focus();
		return (false);
		}
	
	}
	

function selectcategory(srvs_id){
	if(srvs_id!="-1"){
		loadData('sub_service',srvs_id);
	}else{
	
		$("#product_dropdown").html("<option value='-1'>Select Sub-service #</option>");		
	}
}

function selectcountry(country_id){
	if(country_id!="-1"){
		loadData('state',country_id);
		$("#city_dropdown").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown").html("<option value='-1'>Select state</option>");
		$("#district_dropdown").html("<option value='-1'>Select district</option>");			
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}

function selectState(state_id){
	if(state_id!="-1"){
		loadData('district',state_id);
	}else{
		$("#district_dropdown").html("<option value='-1'>Select district</option>");			
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}

function selectDistrict(district_id){
	if(district_id!="-1"){
		loadData('city',district_id);
	}else{
		
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}



function loadData(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="image/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "loadData.php",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown").append(result);  
		}
	});
}
	
</script>
</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tbody>
    <tr> 
      <td height="107" colspan="5" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="492" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="492" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> Business 
                                  Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></td>
                              </tr>
                          </table></td>
                          <td width="352">&nbsp;</td>
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
                                <td width="100%" height="29" align="center" valign="middle" class="title4"><div align="center">
                                <?php print "$cname"; ?></div></td>
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
      <td height="20" colspan="5" valign="top"><?php include 'include/sbar.php';?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="6" valign="top"><table class="tbbgcol" width="194" border="0" cellpadding="0" cellspacing="0" >
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
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150324.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Service 
                    Provider Dir. Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150327.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Service 
                    Authrisation Status</a></td>
                </tr>
                <tr> 
                  <td height="21" valign="top" class="org_border_box bluenote bgimg"><a href="0708150325.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Listing 
                    Delete From Temp</a></td>
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
            <td height="461"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td height="19" colspan="4" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19">&nbsp;</td>
          </tr>
        </table></tr>
    <tr> 
      <td width="9" height="18"></td>
      <td width="24"></td>
      <td width="513" valign="top"><div align="center"> <blink><font color="#FF0000"><strong><font size="3"><?php print "$msg"; ?></font></strong></font></blink><font size="3"><strong> 
          </strong></font></div></td>
      <td width="23"></td>
    </tr>
    <tr> 
      <td height="2"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="408"></td>
      <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="57" height="14" ></td>
            <td width="442" ></td>
            <td width="38" ></td>
          </tr>
          <tr> 
            <td height="376" ></td>
            <td valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="form1" method="post" action="0708150326.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>" onSubmit="return check(this)">
                  <tr> 
                    <td height="23" colspan="4" valign="top" class="org_border_box title"><div align="center">Select 
                        Service &amp; City</div></td>
                  </tr>
                  <tr> 
                    <td height="24" colspan="4" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="22" colspan="2" valign="top" class="org_border_l_cell"><div align="right">Main 
                        Service </div></td>
                    <td valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="org_border_r_cell"> <?php print "$srvs_name"; ?>&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="2" valign="top" class="org_border_l_cell"><div align="right">Service 
                        Name </div></td>
                    <td width="20" valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td width="277" valign="top" class="org_border_r_cell">
                    <select name="sub_service_dropdown" id="sub_service_dropdown" >
								<option value="-1">Select Subservice</option>
								<?php
								while($rowSubsrvs=mysql_fetch_array($rssubsrvs)){
									?>
									<option value="<?php echo $rowSubsrvs['sn_id']?>"><?php echo $rowSubsrvs['sname']?></option>
									<?php
								}
								?>
					</select>			</td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="2" valign="top" class="org_border_l_cell"><div align="right">Country 
                        Name </div></td>
                    <td valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="org_border_r_cell">
                     <select name="country_dropdown" id="country_dropdown" onChange="selectcountry(this.options[this.selectedIndex].value)">
								<option value="-1">Select country</option>
								<?php
								while($rowCountry=mysql_fetch_array($resCountry)){
									?>
									<option value="<?php echo $rowCountry['cntid']?>"><?php echo $rowCountry['cntname']?></option>
									<?php
								}
								?>
					</select>		
					  
					  </td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="2" valign="top" class="org_border_l_cell"><div align="right">State                        Name </div></td>
                    <td valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="org_border_r_cell">
                    <select name="state_dropdown" id="state_dropdown" onChange="selectState(this.options[this.selectedIndex].value)">
								<option value="-1">Select state</option>
							</select>
					<span id="state_loader"></span>				  </td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="2" valign="top" class="org_border_l_cell"><div align="right">District 
                        Name </div></td>
                    <td valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="org_border_r_cell">
                  <select name="district_dropdown" id="district_dropdown" onChange="selectDistrict(this.options[this.selectedIndex].value)">
								<option value="-1">Select district</option>
							</select>
					<span id="district_loader"></span>						  </td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="2" valign="top" class="org_border_l_cell"><div align="right">City 
                        Name </div></td>
                    <td valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="org_border_r_cell">	
                    <select name="city_dropdown" id="city_dropdown">
								<option value="-1">Select city</option>
							</select>
					  <span id="city_loader"></span>				  
					  </td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="2" valign="top" class="org_border_l_cell"><div align="right">Registration 
                        For </div></td>
                    <td valign="top" class="org_border_no_cell"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="org_border_r_cell">
                    <select name="years" id="years">
								<option value="-1">Select Years</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
							</select> 
					 Year(s)					</td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="4" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="org_border_l_cell"><input name="prv" type="checkbox" id="prv" value="checkbox"></td>
                    <td colspan="3" valign="top" class="org_border_r_cell bluenote"><div align="justify"> 
                        <p align="justify">The personal information provided in 
                          the above form will be treated by Haanzee.com in accordance 
                          with the provisions of Indian privacy law, which regulates 
                          the protection of persons and other entities with respect 
                          to the processing of personal data.</p>
                        <p align="justify"> The act of providing the above-mentioned 
                          personal information is absolutely voluntary and at 
                          the complete discretion of the person concerned. According 
                          to law, I inconditionally accept that my personal data 
                          wil be subject to all handling operations indicated 
                          in Law .</p>
                      </div></td>
                  </tr>
                  <tr> 
                    <td width="39" height="20" valign="top" class="org_border_l_cell "><input name="trm" type="checkbox" id="trm" value="checkbox"></td>
                    <td colspan="3" valign="top" class="org_border_r_cell bluenote">I 
                      have read and accept abc.com 's <a href="#" onClick="MM_openBrWindow('terms.php','terms','scrollbars=yes,resizable=yes,height=300,width=550')">terms 
                      and conditions</a>.</td>
                  </tr>
                  <tr> 
                    <td height="26" colspan="4" valign="top" class="org_border_b_cell"><div align="center"> 

                        <input type="hidden" name="SID" value="<?php print "$sr_id"; ?>">
                        <input type="hidden" name="ID" value="<?php print "$srvsid"; ?>">
                        <input type="submit" name="Submit" value=" Submit Record">
                      </div></td>
                  </tr>
                  <tr> 
                    <td height="1"></td>
                    <td width="106"></td>
                    <td></td>
                    <td></td>
                  </tr>
                </form>
              </table></td>
            <td ></td>
          </tr>
          <tr> 
            <td height="18" ></td>
            <td ></td>
            <td ></td>
          </tr>
        </table></td>
      <td></td>
    </tr>
    <tr> 
      <td height="146"></td>
      <td colspan="2" valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
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
                  <td valign="top" class="grncel_DRK title"> <div align="right">&nbsp;Service 
                      Listing In Directory</div></td>
                  <td valign="top" class="grncel_DRK title"> <div align="center"><strong><font size="3">:</font></strong></div></td>
                  <td valign="top" class="grncel_DRK title"> <div align="left"><b><?php print "$scount"; ?></b>&nbsp;</div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"> <div align="right">City 
                      Listing In Directory</div></td>
                  <td valign="top"class="grncel_DRK title"><div align="center"><strong><font size="3">:</font></strong></div></td>
                  <td valign="top"class="grncel_DRK title"><div align="left"><b><?php print "$ccount"; ?></b></div></td>
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
            <td height="14"></td>
            <td></td>
            <td></td>
          </tr>
        </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="19"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="19" colspan="5" valign="top"> <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" align="center"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>