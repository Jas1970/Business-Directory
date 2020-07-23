<?php 
include 'include/functionProcess.php'; 

$db  = new DB();
$db->open();



$sqlCountry="select cntid,cntname from country  order by cntname asc ";
$resCountry=mysql_query($sqlCountry);
$resCountryl=mysql_query($sqlCountry);

$checkCountry=mysql_num_rows($resCountry);

$sqlCategory="select srvs_id,srvs_name from dir_srvs order by srvs_name asc ";
$resCategory=mysql_query($sqlCategory);
$checkCategory=mysql_num_rows($resCategory);



$css="org_02.css";

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
?>
<html>
<head>
<title>Registration (Service Providor)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<script language="javascript">


</script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">

function check(sdata) 
	{
	if(sdata.cname.value=="")
		{
		alert("Please Enter Registration Name");
		sdata.cname.focus();
		return (false);
		}
	if(sdata.cpname.value=="")
		{
		alert("Please enter Contact Person name");
		sdata.cpname.focus();
		return (false);
		}
	if(sdata.mno.value=="")
		{
		alert("Please enter Mobile No.");
		sdata.mno.focus();
		return (false);
		}
	if(sdata.add1.value=="")
		{
		alert("please Enter Valid Address");
		sdata.add1.focus();
		return (false);
		}
	if(sdata.country_dropdown.value=="-1")
		{
		alert("please Select Country Name");
		sdata.country_dropdown.focus();
		return (false);
		}
	if(sdata.state_dropdown.value=="-1")
		{
		alert("please Select Name");
		sdata.state_dropdown.focus();
		return (false);
		}

	if(sdata.district_dropdown.value=="-1")
		{
		alert("please Select District Name");
		sdata.district_dropdown.focus();
		return (false);
		}
	if(sdata.city_dropdown.value=="-1")
		{
		alert("please Select City Name");
		sdata.city_dropdown.focus();
		return (false);
		}
	if(sdata.zip.value=="")
		{
		alert("please enter Zip Code");
		sdata.zip.focus();
		return (false);
		}
		
	if(sdata.tel.value=="")
		{
		alert("please Enter Telphone Number");
		sdata.tel.focus();
		return (false);
		}
		
		
	if(sdata.email.value=="")
		{
		alert("please Enter Confirmed and Operative E-Mail Id");
		sdata.email.focus();
		return (false);
		}
		
		if(sdata.email.value=="")
			{
			alert("please enter your email");
			sdata.email.focus();
			return (false);
			}
		if(sdata.email.value!="")
			{
			pass = sdata.email.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				sdata.email.focus();
				return (false);
				}
			}
		if(sdata.email.value!="")
			{
			pass = sdata.email.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				sdata.email.focus();
				return (false);
				}
			}
	

	if(sdata.aemail.value=="")
		{
		alert("please Enter Alternative E-Mail Id");
		sdata.aemail.focus();
		return (false);
		}
		
		if(sdata.aemail.value=="")
			{
			alert("Please Enter Your Alternative E-mail");
			sdata.aemail.focus();
			return (false);
			}
		if(sdata.aemail.value!="")
			{
			pass = sdata.aemail.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("Not a Valid Email Alternative");
				sdata.aemail.focus();
				return (false);
				}
			}
		if(sdata.aemail.value!="")
			{
			pass = sdata.aemail.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("Not a Valid Alternative E-Mail ID");
				sdata.email.focus();
				return (false);
				}
			}
	if(sdata.category_dropdown.value=="-1")
		{
		alert("please Select Service Category Name");
		sdata.category_dropdown.focus();
		return (false);
		}
	if(sdata.sub_service_dropdown.value=="-1")
		{
		alert("please Select Service Category Name");
		sdata.sub_service_dropdown.focus();
		return (false);
		}
	if(sdata.years.value=="-1")
		{
		alert("please Select Service Registration for Year");
		sdata.years.focus();
		return (false);
		}

	
	
	
	if (!document.sdata.prv.checked)
		{
		alert("please Select Privacy Terms");
		sdata.prv.focus();
		return (false);
		}
	if (!document.sdata.trm.checked)
		{
		alert("please Select Terms & Condition You are Accepted");
		sdata.trm.focus();
		return (false);
		}
	if (sdata.capitacha.value != myNum)
		{
		alert("Incorrect Validation Code Enter, Please Enter Correct!");
		return false;
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
      <td height="109" colspan="2" valign="top"><table class="aas" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="263" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr>
                  <td width="241" height="54" valign="top"><img src="images/img_bst/b2b.gif" width="263" height="57"></td>
                  </tr>
              </table></td>
              <td width="365" height="20">&nbsp;</td>
              <td width="418" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="418" height="20" valign="top" class="bluenote"><div align="right"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> Business 
                                  Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></div></td>
                              </tr>
                              
              </table></td>
            </tr>
            <tr>
              <td height="37">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="52">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
      </table></td>
      <td width="1"></td>
    </tr>
    <tr>
      <td width="300" height="1"></td>
      <td width="100%"></td>
      <td></td>
    </tr>
    <tr>
      <td height="20" colspan="2" valign="top"> <table class="tbbdrcol" width="100%" border="0"cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="110" height="20" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150115.php">Haanzee</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>"; ><div align="center"><a href="0708150116.php">Business 
                Dir. </a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150117.php">Placement 
                Dir. </a></div></td>
            <td width="138" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150118.php">Real 
                Estate Dir.</a> </div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150119.php">Service 
                Dir. </a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150122.php">Help</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150123.php" target="_parent"> 
                Site Map</a></div></td>
          </tr>
      </table></td>
      <td></td>
    </tr>
    <tr>
      <td rowspan="3" valign="top"><?php include 'include/sidebar.php'; ?> </td>
      <td height="8"></td>
      <td></td>
    </tr>
    <tr>
      <td height="822" valign="top">                                                            
       <form name="sdata" id="sdata" method="post" action="0708150146.php" onSubmit="return check(this)">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr> 
              <td height="20" colspan="2" valign="top"><strong>1 - Create a New Registration 
              (Service Provider)</strong></td>
            </tr>
            <tr> 
              <td height="19" colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
            </tr>
            <tr> 
              <td height="57" colspan="2" valign="top"><div align="justify">This page allows you to create 
                  a Haanzee.com registration, and login in your private area. 
                  It takes just a few minutes. A single registration allows you 
              to create and maintain all of your listing(s). </div></td>
            </tr>
            <tr> 
              <td height="38" colspan="2" valign="top"> <strong>Don't you like web forms?</strong><br>
                Please <a href="0708150120.php">contact us</a> and we will send 
              you a fill-in form by e-mail.</td>
            </tr>
            <tr>
              <td width="4" height="22">&nbsp;</td>
              <td width="100%">&nbsp;</td>
            </tr>
            <tr>
              <td height="105">&nbsp;</td>
              <td valign="top"> <fieldset>
                <legend><strong>01. Registration Main Detail </strong></legend>
                <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="131" height="6"></td>
                    <td width="15"></td>
                    <td width="669"></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">Company Name</div></td>
                    <td  width="15" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"><input name="cname" type="text" id="cname" size="65" maxlength="60"></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">Contact Person</div></td>
                    <td  width="15" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"><input name="cpname" type="text" id="cpname" size="45" maxlength="40"></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">Mobile No.</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"><input name="mno" type="text" id="mno" size="25" maxlength="25"></td>
                  </tr>
                  <tr> 
                    <td height="12"></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
              </fieldset></td>
            </tr>
            <tr>
              <td height="21">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="587">&nbsp;</td>
              <td valign="top"> <fieldset>
                <legend><strong>02. Contact Detail </strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="132" height="22" valign="top"><div align="right">Address</div></td>
                    <td width="34" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td width="646" valign="top"> <input name="add1" type="text" id="add1" size="60" maxlength="50"></td>
                    <td width="3"></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"> <input name="add2" type="text" id="add2" size="60" maxlength="50"></td>
                    <td></td>
                  </tr>
					<tr> 
                    <td height="22" valign="top"><div align="right">Country</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top">
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
                    <td></td>
                  </tr>
                  <tr> 
                    <td rowspan="2" valign="top"><div align="right">State</div></td>
                    <td height="3"></td>
                    <td rowspan="2" valign="top">
							<select name="state_dropdown" id="state_dropdown" onChange="selectState(this.options[this.selectedIndex].value)">
								<option value="-1">Select state</option>
							</select>
					<span id="state_loader"></span>						</td>
                        <td></td>
                  </tr>
                  <tr>
                    <td height="19" valign="top"><div align="center"><strong>:</strong></div></td>
                   <td></td>
                  </tr>
                  
                  <tr> 
                    <td height="22" valign="top"><div align="right">District</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top">
							<select name="district_dropdown" id="district_dropdown" onChange="selectDistrict(this.options[this.selectedIndex].value)">
								<option value="-1">Select district</option>
							</select>
					<span id="district_loader"></span>						</td>
                    <td></td>
                  </tr>
                    <tr> 
                    <td height="22" valign="top"><div align="right">City</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                  <td valign="top">
							<select name="city_dropdown" id="city_dropdown">
								<option value="-1">Select city</option>
							</select>
					  <span id="city_loader"></span>						</td>

                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">Zip 
                    Code</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <input name="zip" type="text" id="zip" size="20" maxlength="6"></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">Tel.No.</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <input name="tel" type="text" id="tel" size="45" maxlength="40"></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">Fax. 
                    No.</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <input name="fax" type="text" id="fax" size="45" maxlength="40"></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">E-Mail</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <input name="email" type="text" id="email" size="50" maxlength="45"></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">Alternate E-Mail</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <input name="aemail" type="text" id="aemail" size="50" maxlength="45"></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"> <div align="right">Web 
                    Site</div></td>
                    <td valign="top"> <div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <input name="web" type="text" id="web" size="55" maxlength="45"></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
                 </table>
				</fieldset>	
                 <fieldset>
                <legend><strong>03. Service Diectory Listing Detail </strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="134" height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="37" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="644" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">Service Name</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top">
					  <select name="category_dropdown" id="category_dropdown" onChange="selectcategory(this.options[this.selectedIndex].value)">
								<option value="-1">Select service</option>
								<?php
								while($rowCountry=mysql_fetch_array($resCategory)){
									?>
									<option value="<?php echo $rowCountry['srvs_id']?>"><?php echo $rowCountry['srvs_name']?></option>
									<?php
								}
								?>
				    </select>					</td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right">Sub-Service Name</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top">
							<select name="sub_service_dropdown" id="sub_service_dropdown">
								<option value="-1">Select sub_service *</option>
							</select>
					<span id="sub_service_loader"></span>					</td>
                  </tr>
                   <tr> 
                    <td height="19" valign="top"><div align="right">Registration For</div></td>
                    <td rowspan="2" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td rowspan="2" valign="top">
							<select name="years" id="years">
								<option value="-1">Select Years</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
							</select> 
					 Years												</td>
                  </tr>
                   <tr>
                     <td height="5"></td>
                   </tr>
                  
                  <tr>
                    <td height="19">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                 </table>
				</fieldset>	
                 <fieldset>
                <legend><strong>04. Service Diectory Terms & Conditions </strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                    <tr> 
                    <td width="20" height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="5" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td colspan="4" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="100" colspan="2"  valign="top"><div align="right"> 
                        <input name="prv" type="checkbox" id="prv" value="checkbox">
                    </div></td>
                    <td width="21" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td colspan="3" valign="top" class="bluenote"><p align="justify">The 
                        personal information provided in the above form will be 
                        treated by Haanzee.com in accordance with the provisions 
                        of Indian privacy law, which regulates the protection 
                        of persons and other entities with respect to the processing 
                        of personal data. The act of providing the above-mentioned 
                        personal information is absolutely voluntary and at the 
                        complete discretion of the person concerned. According 
                        to law, I inconditionally accept that my personal data 
                        wil be subject to all handling operations indicated in 
                    Law.</p></td>
                  </tr>
                  <tr>
                    <td height="25" colspan="2"  valign="top"><div align="right"> 
                        <input name="trm" type="checkbox" id="trm" value="checkbox">
                    </div></td>
                    <td  valign="top"><div align="center"><strong>:</strong></div></td>
                    <td colspan="3"  valign="top" class="bluenote">I have read 
                      and accept abc.com 's <a href="#" onClick="MM_openBrWindow('terms.php','terms','scrollbars=yes,resizable=yes,height=300, width=550')">terms 
                    and conditions</a>.</td>
                  </tr>
                  <tr>
                    <td height="19" colspan="4"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="7"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  <td width="450"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" colspan="4"  valign="top"><div align="right">Validation Code</div></td>
                    <td  valign="top">:</td>
                    <td  valign="top"><label><h3><script>

var min = 1000000;
var max= 5000000;
function random_number(min,max) {

    return (Math.round((max-min) * Math.random() + min));
}
var myNum = random_number(min,max);
document.write(myNum);
</script>
                   </h3> </label></td>
                  </tr>
                  <tr>
                    <td height="19" colspan="4"  valign="top"><div align="right">Please Enter validation Code</div></td>
                    <td rowspan="2"  valign="top">: </td>
                    <td rowspan="2"  valign="top"><input name="capitacha" type="text" id="capitacha" size="15" maxlength="15"></td>
                  </tr>
                  <tr>
                    <td height="3"></td>
                    <td></td>
                    <td></td>
                    <td width="312"></td>
                  </tr>
                   <tr>
                    <td height="19" colspan="4"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="7"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  <td width="450"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="24" colspan="6"  valign="top" class="grncel_DRK_tb"><div align="center"> 
                        <input type="reset" name="Reset" value="     Reset     ">
                        <input type="submit" name="Submit2" value="     Submit     ">
                    </div></td>
                  </tr>
                   <tr>
                    <td height="19" colspan="4"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="7"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  <td width="450"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                </table>
              </fieldset></td>
            </tr>
            <tr>
              <td height="38">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
            
            

            <tr><td height="1"><img src="file:///C|/xampp/htdocs/b2b/mm_spacer.gif" alt="" width="4" height="1"></td>
              <td></td>
            </tr>
          </table>
      </form>
      
      <td></td>
    </tr>
    <tr>
      <td height="21">&nbsp;</td>
      <td></td>
    </tr>
    
    
    
    
    
    
    
    
    
    <tr>
      <td height="24" colspan="2" valign="top">          <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td  height="24" valign="top" ><?php include "include/footer.php"; ?></td>
          </tr>
      </table></td>
      <td></td>
    </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <tr><td height="1"><img src="file:///C|/xampp/htdocs/b2b/mm_spacer.gif" alt="" width="300" height="1"></td><td></td>
      <td><img src="file:///C|/xampp/htdocs/b2b/mm_spacer.gif" alt="" width="1" height="1"></td>
    </tr>
</table>
</body>
</html>

