<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();

$catid		= $_GET['CID'];
$prodid 	= $_GET['PID'];

$sqlCountry="select cntid,cntname from country  order by cntname asc ";
$resCountry=mysql_query($sqlCountry);
$checkCountry=mysql_num_rows($resCountry);

$sqlCategory="select catprd.prodid as prodid , prod.prodnam  as prodnam from catprd, prod where catprd.prodid=prod.prodid and catprd.catid ='$catid' order by prodnam asc";
$resCategory=mysql_query($sqlCategory);
$checkCategory=mysql_num_rows($resCategory);

$sqlcat = " Select * from catg where catid='$catid'";
$rdcat = mysql_query($sqlcat);
$catname = mysql_result($rdcat,0,'catname');

?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
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

<body topmargin="0">
<table width="25%" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr> 
    <td width="1301"  height="14"></td>
  </tr>
  <tr>
    <td height="156" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <form name="f1" method="post" action="0708150153.php?CID=<?php print $catid; ?>&pg=1" target="mainFrame" >
          <tr> 
          	
            <td width="100%" colspan="2" height="21" valign="top" class="org_border_box"><div align="center"><strong>Selection Wise Search</strong></div></td>
          </tr>

          <tr> 
            <td align="center" colspan="2" height="15" valign="top" class="org_border_c_cell"><b><?php print $catname; ?></b></td>
          </tr>


          <tr> 
            <td colspan="2" height="15" valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    
          <tr> 
          </tr>
			
            <td colspan="2" height="20" valign="top" class="org_border_c_cell"><div align="center"><b> Product : </b>
                <select name="product_dropdown" id="product_dropdown" >
								<option value="-1">Select Product</option>
								<?php
								while($rowProduct=mysql_fetch_array($resCategory)){
									?>
									<option value="<?php echo $rowProduct['prodid']?>"><?php echo $rowProduct['prodnam']?></option>
									<?php
								}
								?>
					 </select>			
              </div></td>
          </tr>

          <tr> 
            <td colspan="2" height="15" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr> 
          	<td width="33%" class="org_border_l_cell"> Country : </td>
            <td width="66%" height="20" valign="top" class="org_border_c_cell"><div align="left">  
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
              </div></td>
          </tr>
          <tr> 
          	<td class="org_border_l_cell">State :</td>
            <td height="20" valign="top" class="org_border_c_cell"><div align="left">    
               <select name="state_dropdown" id="state_dropdown" onChange="selectState(this.options[this.selectedIndex].value)">
								<option value="-1">Select state</option>
							</select>
					<span id="state_loader"></span>	
              </div></td>
          </tr>
          <tr> 
          	<td class="org_border_l_cell"> District : </td>
            <td height="20" valign="top" class="org_border_c_cell"><div align="left">  
                	<select name="district_dropdown" id="district_dropdown" onChange="selectDistrict(this.options[this.selectedIndex].value)">
								<option value="-1">Select district</option>
							</select>
					<span id="district_loader"></span>	
              </div></td>
          </tr>
          <tr> 
          	<td class="org_border_l_cell"> City </td>
            <td height="20" valign="top" class="org_border_c_cell"><div align="left">
              <select name="city_dropdown" id="city_dropdown">
								<option value="-1">Select city</option>
							</select>
					  <span id="city_loader"></span>
              </div></td>
          </tr>
          
            <td colspan="2" height="15" valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="2"  height="25" valign="top" class="org_border_b_cell"> <div align="center"> 
                <input type="hidden" name="CID" value="<?php print "$catid"; ?>">
                
                <INPUT TYPE=SUBMIT NAME='submitcity' VALUE='Search'>
                &nbsp;</div></td>
          </tr>
        </form>
    </table></td>
  </tr>
  <tr>
    <td height="18"></td>
  </tr>
  
  <tr>
    <td height="96" valign="top">
    
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td height="23" valign="top" class="org_border_box"><div align="center"><strong>Search 
              Product Another Product</strong></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr> 
          <td height="18" valign="top" class="org_border_c_cell"><div align="center"><a href="search.php?CID=<?PHP print "$catid"; ?>&PID=<?php print "$prodid"; ?>" target="_parent"><img src="images/img_bst/Click_here.jpg" width="135" height="33" border="0" ></a></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18"></td>
  </tr>
  
  
  <tr>
    <td height="143" valign="top">
    
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td height="15" valign="top" class="org_border_t_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
         </tr>
        <tr> 
          <td height="17" valign="top" class="org_border_c_cell"><div align="center"><a href="index.php" target="_parent"><img src="imgs/news/08_Home.gif" width="108" height="21" border="0"></a></div></td>
         
        </tr>
        <tr> 
          <td height="17" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150114.php" target="_parent"><img src="imgs/news/10_Directory.gif" width="108" height="21" border="0"></a></div></td>
         
        </tr>
        <tr> 
          <td height="17" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150144.php" target="_parent"><img src="imgs/news/09_Service.gif" width="108" height="21" border="0"></a></div></td>
         
        </tr>
        <tr> 
          <td height="17" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150131.php" target="_parent"><img src="imgs/news/11_Placement.gif" width="108" height="21" border="0"></a></div></td>
         
        </tr>
        <tr> 
          <td height="17" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150137.php" target="_parent"><img src="images/img_bst/09_prop_dir.gif" width="108" height="21" border="0"></a></div></td>
         
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
         
        </tr>
        <tr>
          <td height="8"></td>
         
        </tr>
        </table></td>
  </tr>
  <tr>
    <td height="54">&nbsp;</td>
  </tr>
</table>
</body>
</html>

