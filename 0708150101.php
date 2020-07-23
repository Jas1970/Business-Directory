<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();

$sqlCountry="select cntid,cntname from country  order by cntname asc ";
$resCountry=mysql_query($sqlCountry);
$checkCountry=mysql_num_rows($resCountry);

$sqlCategory="select catid,catname from catg order by catname asc ";
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
<title>Registration (Business Directory)</title>
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
function check(tdata) 
	{
	if(tdata.cname.value=="")
		{
		alert("Please enter Name");
		tdata.cname.focus();
		return (false);
		}
	if(tdata.cpname.value=="")
		{
		alert("Please enter Contact Person name");
		tdata.cpname.focus();
		return (false);
		}
	if(tdata.mno.value=="")
		{
		alert("Please enter Mobile No.");
		tdata.mno.focus();
		return (false);
		}
	if(tdata.add1.value=="")
		{
		alert("please Enter Valid Address");
		tdata.add1.focus();
		return (false);
		}
	if(tdata.country_dropdown.value=="-1")
		{
		alert("please Select Country Name");
		tdata.country_dropdown.focus();
		return (false);
		}
	
	if(tdata.state_dropdown.value=="-1")
		{
		alert("please Select Name");
		tdata.state_dropdown.focus();
		return (false);
		}
	
	
	if(tdata.district_dropdown.value=="-1")
		{
		alert("please Select District Name");
		tdata.district_dropdown.focus();
		return (false);
		}
	
	if(tdata.city_dropdown.value=="-1")
		{
		alert("please Select City Name");
		tdata.city_dropdown.focus();
		return (false);
		}
	
	
	if(tdata.zip.value=="")
		{
		alert("please enter Zip Code");
		tdata.zip.focus();
		return (false);
		}
		
	if(tdata.tel.value=="")
		{
		alert("please Enter Telphone Number");
		tdata.tel.focus();
		return (false);
		}
		
		
	if(tdata.email.value=="")
		{
		alert("please Enter Confirmed and Operative E-Mail Id");
		tdata.email.focus();
		return (false);
		}
		
		if(tdata.email.value=="")
			{
			alert("please enter your email");
			tdata.email.focus();
			return (false);
			}
		if(tdata.email.value!="")
			{
			pass = tdata.email.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				tdata.email.focus();
				return (false);
				}
			}
		if(tdata.email.value!="")
			{
			pass = tdata.email.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				tdata.email.focus();
				return (false);
				}
			}

	if(tdata.aemail.value=="")
		{
		alert("please Enter Confirmed and Alternative E-Mail Id");
		tdata.aemail.focus();
		return (false);
		}
		
		if(tdata.aemail.value=="")
			{
			alert("Please Enter Your Alternate E-Mail");
			tdata.aemail.focus();
			return (false);
			}
		if(tdata.aemail.value!="")
			{
			pass = tdata.aemail.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("Not a Valid Alternate Mail ID");
				tdata.aemail.focus();
				return (false);
				}
			}
		if(tdata.aemail.value!="")
			{
			pass = tdata.aemail.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("Not a Valid Alternate E-Mail ID");
				tdata.aemail.focus();
				return (false);
				}
			}
			
	if(tdata.category_dropdown.value=="-1")
		{
		alert("please Select Category Name");
		tdata.category_dropdown.focus();
		return (false);
		}
	if(tdata.product_dropdown.value=="-1")
		{
		alert("please Select Product Name");
		tdata.product_dropdown.focus();
		return (false);
		}
	if(tdata.years.value=="-1")
		{
		alert("please Select Number of Year Registration");
		tdata.years.focus();
		return (false);
		}
			
			
	if (!document.tdata.prv.checked)
		{
		alert("please Select Privacy Terms");
		tdata.prv.focus();
		return (false);
		}
	if (!document.tdata.trm.checked)
		{
		alert("please Select Terms & Condition You are Accepted");
		tdata.trm.focus();
		return (false);
		}
	if (tdata.capitacha.value != myNum)
		{
		alert("Incorrect Security Number!");
		return false;
		}
	}	

function selectcategory(catid){
	if(catid!="-1"){
		loadData('product',catid);
	}else{
	
		$("#product_dropdown").html("<option value='-1'>Select product</option>");		
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
      <td height="107" colspan="3" valign="top"> <table  class= "aas"  width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="264" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="264" height="57" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                              </tr>
                          </table></td>
                          <td width="366" height="22">&nbsp;</td>
                          <td width="417" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="417" height="22" valign="top" class="bluenote"><div align="right"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> Business 
                                    Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                      Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></div></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="35">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td height="49">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        
                        
                        
                        
                        
                        
      </table></td>
    </tr>
    <tr> 
      <td width="249" height="1"></td>
      <td width="33"></td>
      <td width="646"></td>
    </tr>
    <tr>
      <td height="20" colspan="3" valign="top"> <table class="tbbdrcol" width="100%" border="0"cellpadding="0" cellspacing="0">
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
    </tr>
    
    <tr>
      <td height="808" valign="top"><?php include 'include/sidebar.php'; ?> </td>
      <td>&nbsp;</td>
      <td valign="top"> 

         <form name="tdata" id="tdata" method="post" action="0708150102.php" onSubmit="return check(this)">

          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr> 
              <td width="640" height="20" valign="top"><strong>1 - Create a New Registration 
                (Business Directory)</strong></td>
              <td width="6">&nbsp;</td>
            </tr>
            <tr> 
              <td height="19" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="57" valign="top"><div align="justify">This page allows you to create 
                  a Haanzee.com registration, and login in your private area. 
                  It takes just a few minutes. A single registration allows you 
                  to create and maintain all of your listing(s). </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="38" valign="top"> <strong>Don't you like web forms?</strong><br>
                Please <a href="0708150120.php">contact us</a> and we will send 
                you a fill-in form by e-mail.</td>
              <td></td>
            </tr>
            <tr> 
              <td height="105" valign="top"> <fieldset>
                <legend><strong>01. Registration Main Detail </strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="131" height="6"></td>
                    <td width="15"></td>
                    <td width="391"></td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><div align="right">Company Name</div></td>
                    <td height="21" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td height="21" valign="top"><input name="cname" type="text" id="cname" size="50" maxlength="40"></td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><div align="right">Contact Person</div></td>
                    <td height="21" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td height="21" valign="top"><input name="cpname" type="text" id="cpname" size="45" maxlength="40"></td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><div align="right">Mobile No.</div></td>
                    <td height="21" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td height="21" valign="top"><input name="mno" type="text" id="mno" size="25" maxlength="25"></td>
                  </tr>
                  <tr> 
                    <td height="12"></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
                </fieldset></td>
              <td></td>
            </tr>
            <tr> 
              <td height="1"></td>
              <td></td>
            </tr>
            <tr>
              <td height="511" valign="top"> <fieldset>
                <legend><strong>02. Contact Detail </strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="206" height="22" valign="top"><div align="right">Address</div></td>
                    <td width="32" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td width="591" valign="top"> <input name="add1" type="text" id="add1" size="60" maxlength="50"></td>
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
                    <td height="22" valign="top"><div align="right">Alternate E-Mail </div></td>
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
                  </table>
                  </fieldset>
                  <fieldset>
                <legend><strong>03. Business Diectory Listing Detail</strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="205" height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="40" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="597" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                   <tr> 
                    <td height="25" valign="top"><div align="right">Business Category Name</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top">
							<select name="category_dropdown" id="category_dropdown" onChange="selectcategory(this.options[this.selectedIndex].value)">
								<option value="-1">Select category</option>
								<?php
								while($rowCountry=mysql_fetch_array($resCategory)){
									?>
									<option value="<?php echo $rowCountry['catid']?>"><?php echo $rowCountry['catname']?></option>
									<?php
								}
								?>
					 </select>						</td>
                  </tr>
                  <tr> 
                    <td height="25" valign="top"><div align="right">Products Name</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top">
							<select name="product_dropdown" id="product_dropdown">
								<option value="-1">Select product</option>
							</select>
					<span id="product_loader"></span>						</td>
                  </tr>
                   <tr> 
                    <td height="25" valign="top"><div align="right">Registration For</div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top">
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
                  </table>
                </fieldset>
                  <fieldset>
                <legend><strong>04.Business Diectory Terms & Conditions </strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                 <tr> 
                    <td width="22" height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="5" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td colspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="12">&nbsp;</td>
                  </tr>
                  
                  
                  <tr> 
                    <td height="95"  valign="top">
                      <input name="prv" type="checkbox" id="prv" value="checkbox">                    </td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td colspan="3" align="justify" valign="top" class="bluenote">The 
                        personal information provided in the above form will be 
                        treated by Haanzee.com in accordance with the provisions 
                        of Indian privacy law, which regulates the protection 
                        of persons and other entities with respect to the processing 
                        of personal data. The act of providing the above-mentioned 
                        personal information is absolutely voluntary and at the 
                        complete discretion of the person concerned. According 
                        to law, I inconditionally accept that my personal data 
                        wil be subject to all handling operations indicated in 
                    Law.</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="20" valign="top"><div align="right"> 
                        <input name="trm" type="checkbox" id="trm" value="checkbox">
                    </div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td colspan="3" valign="top" class="bluenote">I have read 
                      and accept abc.com 's <a href="#" onClick="MM_openBrWindow('terms.php','terms','scrollbars=yes,resizable=yes,height=300,width=550')">terms 
                    and conditions</a>.</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="21" colspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="51" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="531" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  	
                    <td>&nbsp;</td>
                  <tr> 
                    <td height="24" colspan="3" valign="top"><div align="right">Validation Code</div></td>
                    <td valign="top">:</td>
                    <td  valign="top"><label><h3><script>

var min = 1000000;
var max= 5000000;
function random_number(min,max) {

    return (Math.round((max-min) * Math.random() + min));
}
var myNum = random_number(min,max);
document.write(myNum);
</script></h3></label></td>
                  	
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="26" colspan="3" valign="top"><div align="right">Please Enter validation Code</div></td>
                    <td valign="top">: </td>
                    <td valign="top"><input name="capitacha" type="text" id="capitacha" size="15" maxlength="15"></td>
                  	
                  <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" colspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  	
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="24" colspan="5"  valign="top" class="grncel_DRK_tb"><div align="center"> 
                        <input type="reset" name="Reset" value="     Reset     ">
                        <input type="submit" name="Submit2" value="     Submit     ">
                    </div></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="1"></td>
                    <td></td>
                    <td width="221"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
              </fieldset></td>
              <td></td>
            </tr>
            <tr>
              <td height="14"></td>
              <td></td>
            </tr>
          </table>
    </form>    </tr>
    <tr>
      <td height="57" colspan="3" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="19" valign="top" ><?php include "include/footer.php"; ?></td>
          </tr>
      </table></td>
    </tr>
</table>
</body>
</html>
<?php
$db->close();
?>
