<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';



$catid = $_REQUEST['catid'];

$sqlCountry="select cntid,cntname from country  order by cntname asc ";
$resCountry=mysql_query($sqlCountry);
$checkCountry=mysql_num_rows($resCountry);

$slcat = "select * from catg where catid='$catid'";
$rdcat = mysql_query($slcat)or die(mysql_error());
$catname = mysql_result($rdcat,0,'catname');

$slproduct = "select * from dir_compprod where mdirid= '$rstid'";
$rdproduct = mysql_query($slproduct)or die(mysql_error());
$rcdcount = mysql_num_rows($rdproduct);

if($pname<>"")
	{
	$slprdt = "select * from dir_compprod where mdirid= '$rstid' and comp_prod='$pname'";
	$rdprdt = mysql_query($slprdt);
	$pcount = mysql_num_rows($rdprdt);
	if($pcount<>"")
		{
				$msg = "Duplicate Record can not be Inserted";
		}
		else
		{
		$insprd = "insert into dir_compprod(mdirid, cat_id, comp_prod, prod_um, prod_rt, asd, prd_desc)
				values
				('$rstid','$catid','$pname','$punit','$pprice',now(),'$pdesc')";
	$rdprd = mysql_query($insprd) or die(mysql_error());
	$msg = "Record Successfuly Inserted";
	}
	}
	$pname = "";	
	
	
	
	
	
	$slcatct = "select distinct(cat_id) from dir_catprd where main_dirid= '$rstid'";
	$rdcatct = mysql_query($slcatct)or die(mysql_error());
	$catcount = mysql_num_rows($rdcatct);

	$slprdct = "select * from dir_catprd where main_dirid= '$rstid'";
	$rdprdct = mysql_query($slprdct)or die(mysql_error());
	$prdcount = mysql_num_rows($rdprdct);

	$slcat = "select * from catg where catid='$catid'";
	$rdcat = mysql_query($slcat)or die(mysql_error());
	$catname = mysql_result($rdcat,0,'catname');
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
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
function check(insprod) 
	{
	if(insprod.pid.value=="")
		{
		alert("Please Select Product Name");
		insprod.pid.focus();
		return (false);
		}
	if(insprod.years.value=="")
		{
		alert("Please Select Year for Registration");
		insprod.years.focus();
		return (false);
		}		
	if(insprod.country_dropdown.value=="-1")
		{
		alert("please Select Country Name");
		insprod.country_dropdown.focus();
		return (false);
		}
	
	if(insprod.state_dropdown.value=="-1")
		{
		alert("please Select Name");
		insprod.state_dropdown.focus();
		return (false);
		}
	
	
	if(insprod.district_dropdown.value=="-1")
		{
		alert("please Select District Name");
		insprod.district_dropdown.focus();
		return (false);
		}
	
	if(insprod.city_dropdown.value=="-1")
		{
		alert("please Select City Name");
		insprod.city_dropdown.focus();
		return (false);
		}
	if (!document.insprod.prv.checked)
		{
		alert("please Select Privacy Terms");
		insprod.prv.focus();
		return (false);
		}
	if (!document.insprod.trm.checked)
		{
		alert("please Select Terms & Condition You are Accepted");
		insprod.trm.focus();
		return (false);
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


function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
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
      <td height="20" colspan="4" valign="top"><?php include 'include/bbar.php';  ?></td>
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
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150246.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?>">Property 
                    Directory Entry</a></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="537"></td>
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
      <td width="22" height="387"></td>
      <td  valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="21" colspan="3" valign="top"><div align="center"><font color="#FF0000"><strong><blink><?php print "$msg"; ?></blink></strong></font> 
                &nbsp;</div></td>
          </tr>
          <tr> 
            <td width="20" height="26">&nbsp;</td>
            <td width="507">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr> 
            <td height="321">&nbsp;</td>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="insprod" action="0708150226.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?>" method="post" onSubmit="return check(this)">
                  <tr> 
                    <td height="23" colspan="4" valign="top" class="org_border_t_cell title2"><div align="center">Business 
                        Directory Listing</div></td>
                  </tr>
                  <tr> 
                    <td height="24" colspan="4" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Category 
                        Name</div></td>
                    <td width="11" valign="top" class="grncel_DRK"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td width="391" valign="top" class="grncel_DRK"><strong> 
                      <?php print "$catname"; ?> 
                      <!--DWLayoutEmptyCell-->
                      &nbsp; </strong></td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Product 
                        Name</div></td>
                    <td valign="top" class="grncel_DRK"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="grncel_DRK"><select name="pid" id="pid">
                              <?php
                                
                                $addProdData = dirprod($catid);
                                for($index=0;$index < count($addProdData);$index++)
                                    {
				    				$prodclass = $addProdData[$index];
                                    $prodid = $prodclass->getProdid();
                                    $prodnam = $prodclass->getProdnam(); 
                                    print "<option value=\"$prodid\">";
        			    print "$prodnam</option>";
                                  }
                              
                               
            		?>
                    
                      </select></td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Country</div></td>
                    <td valign="top" class="grncel_DRK"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="grncel_DRK">
							<select name="country_dropdown" id="country_dropdown" onChange="selectcountry(this.options[this.selectedIndex].value)">
								<option value="-1">Select country</option>
								<?php
								while($rowCountry=mysql_fetch_array($resCountry)){
									?>
									<option value="<?php echo $rowCountry['cntid']?>"><?php echo $rowCountry['cntname']?></option>
									<?php
								}
								?>
					</select>						</td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">State 
                      </div></td>
                    <td valign="top" class="grncel_DRK"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="grncel_DRK">
                    
                    <select name="state_dropdown" id="state_dropdown" onChange="selectState(this.options[this.selectedIndex].value)">
								<option value="-1">Select state</option>
							</select>
					<span id="state_loader"></span>	
                    
                    </td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">District</div></td>
                    <td valign="top" class="grncel_DRK"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="grncel_DRK">
                    
                    		<select name="district_dropdown" id="district_dropdown" onChange="selectDistrict(this.options[this.selectedIndex].value)">
								<option value="-1">Select district</option>
							</select>
					<span id="district_loader"></span>	
                    
                    </td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">City</div></td>
                    <td valign="top" class="grncel_DRK"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="grncel_DRK">
                    
                    		<select name="city_dropdown" id="city_dropdown">
								<option value="-1">Select city</option>
							</select>
					  <span id="city_loader"></span>	</td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Listing 
                      </div></td>
                    <td valign="top" class="grncel_DRK"><div align="center"><strong><font size="4">:</font></strong></div></td>
                    <td valign="top" class="grncel_DRK">
                    
                    	<select name="years" id="years">
								<option value="-1">Select Years</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
							</select>
                      Years 
                      
                      </td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right"></div></td>
                    <td valign="top" class="grncel_DRK"><div align="center"><strong></strong></div></td>
                    <td valign="top" class="grncel_DRK"> <div align="left"> 
                      </div></td>
                  </tr>
                  <tr> 
                    <td width="30" height="20" valign="top" class="grncel_DRK"><input name="prv" type="checkbox" id="prv" value="checkbox"></td>
                    <td colspan="3" valign="top" align="justify" class="grncel_DRK bluenote"> 
                      <div align="justify">
                        <p>The personal information provided in the above form 
                          will be treated by Haanzee.com in accordance with the 
                          provisions of Indian privacy law, which regulates the 
                          protection of persons and other entities with respect 
                          to the processing of personal data.</p>
                        <p>
                          The act of providing the above-mentioned personal information 
                          is absolutely voluntary and at the complete discretion 
                          of the person concerned. According to law, I inconditionally 
                          accept that my personal data wil be subject to all handling 
                          operations indicated in Law .</p>
                      </div></td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="grncel_DRK"><input name="trm" type="checkbox" id="trm" value="checkbox"></td>
                    <td colspan="3" valign="top" class="grncel_DRK bluenote">I have 
                      read and accept abc.com 's <a href="#" onClick="MM_openBrWindow('terms.php','terms','scrollbars=yes,resizable=yes,height=300, width=550')">terms 
                      and conditions</a>.</td>
                  </tr>
                  <tr> 
                    <td height="26" colspan="4" valign="top" class="grncel_DRK"><div align="center"> 
                        <input type="hidden" name="catid" value="<?php print "$catid"; ?>">
                        <input type="hidden" name="ID" value="<?php print "$rstid"; ?>">
                        <input type="hidden" name="SID" value="<?php print "$sid"; ?>">
                        <input type="submit" name="Submit" value="Add  Record">
                      </div></td>
                  </tr>
                  <tr> 
                    <td height="18"></td>
                    <td width="75"></td>
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
                  <td colspan="3" valign="top" class="grncel_LIT title2" ><div align="center">Directory 
                      Listing Status &nbsp;</div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="20"></td>
                  <td colspan="3" valign="top" class="grncel_DRK title"><!--DWLayoutEmptyCell-->&nbsp; </td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"> <div align="right">&nbsp;Product 
                      Category Listing</div></td>
                  <td valign="top" class="grncel_DRK title"> <div align="center"><strong><font size="3">:</font></strong></div></td>
                  <td valign="top" class="grncel_DRK title"><div align="left"><b><?php print "$catcount"; ?></b> 
                      &nbsp;</div></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"> <div align="right">&nbsp;Product 
                      Listing </div></td>
                  <td valign="top"class="grncel_DRK title"><div align="center"><strong><font size="3">:</font></strong></div></td>
                  <td valign="top"class="grncel_DRK title"> <div align="left"><b><?php print "$prdcount"; ?></b>&nbsp;</div></td>
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