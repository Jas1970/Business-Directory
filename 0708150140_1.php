<?php

if (ISSET($_POST['submit']))
		{
			$pg = $_REQUEST['pg'];
			$country = $_REQUEST['country_dropdown'];
			$state	 = $_REQUEST['state_dropdown'];
			$district = $_REQUEST['district_dropdown'];
			$city	 = $_REQUEST['city_dropdown'];
			$ssrvsid = $_REQUEST['srvssub_dropdown'];
		}
		else
		{
			$srvsid= $_GET['SID'];
			$ssrvsid= $_GET['SSID'];
		}


$srname = "select srvs_name from dir_srvs where srvs_id= '$srvsid'";
$rdsrname = mysql_query($srname);
$sname = mysql_result($rdsrname,0,'srvs_name');

$slsrsub = "select * from dir_subsrvs where srvs_id= '$srvsid' and sn_id = '$ssrvsid'";
$rdsrsub = mysql_query($slsrsub)or die(mysql_error());
$subsrvs = mysql_result($rdsrsub,0,'sname');

$srvssubsl = "select * from dir_subsrvs where srvs_id= '$srvsid'";
$srvssubrs = mysql_query($srvssubsl)or die(mysql_error());

$sqlCountry="select cntid,cntname from country  order by cntname asc ";
$resCountry=mysql_query($sqlCountry);
$checkCountry=mysql_num_rows($resCountry);


?>
  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Search Main</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
function check(tdata) 
	{
	if(tdata.country_dropdown.value=="-1")
		{
		alert("please Select Country Name");
		tdata.country_dropdown.focus();
		return (false);
		}
	
	if(tdata.state_dropdown.value=="-1")
		{
		alert("please Select State Name");
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
<body leftmargin="0" topmargin="0" >
<table border="0" cellpadding="0" cellspacing="0" >
  <!--DWLayoutTable-->
<!-- action="0708150138.php?id=1&pg=1" 
  -->
  <tr>
    <td height="173">&nbsp;</td>
      <td  valign="top"> <form name="tdate" method="post" action="search_1.php" >
        <table width="100%"  align="left" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
             
            <td colspan="2" height="21" valign="top" class="org_border_t_cell" ><div align="center"> 
                <font color="#0066CC"><strong>Service Group </strong></font></div></td>
          </tr>
          <tr>
             
            <td colspan="2" height="21" valign="top" class="org_border_c_cell" ><div align="center"> 
               <div align="center"><?php echo $sname;?>
                  <input name="sname" id="sname" value="<?php print "$srvsid"; ?>" type="hidden">              
               </div></td>
          </tr>
          <tr>
            
            <td colspan="2" height="18" valign="top" class="org_border_c_cell"><div align="center"><strong><font color="#0066CC"> 
                Service Name :</font></strong></div></td>
          </tr>
          <tr>
             <td colspan="2" height="30" valign="top" class="org_border_c_cell"> <div align="center">
               <select name="srvssub_dropdown" id="srvssub_dropdown">
                 <<option value="-1">Select Sub-Service</option>
								<?php
								while($rowSubsrvs=mysql_fetch_array($srvssubrs)){
									?>
									<option value="<?php echo $rowSubsrvs['sn_id']?>"><?php echo $rowSubsrvs['sname']?></option>
									<?php
								}
								?>
                          </select>
            </div></td>
          </tr>
         <tr> 
          	<td class="org_border_l_cell"> <div align="right">Country : </div></td>
            <td height="20" valign="top" class="org_border_c_cell"><div align="left">  
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
          	<td class="org_border_l_cell"><div align="right">State :</div></td>
            <td height="20" valign="top" class="org_border_c_cell"><div align="left">    
               <select name="state_dropdown" id="state_dropdown" onChange="selectState(this.options[this.selectedIndex].value)">
								<option value="-1">Select state</option>
							</select>
					<span id="state_loader"></span>	
              </div></td>
          </tr>
          <tr> 
          	<td class="org_border_l_cell"> <div align="right">District : </div></td>
            <td height="20" valign="top" class="org_border_c_cell"><div align="left">  
                	<select name="district_dropdown" id="district_dropdown" onChange="selectDistrict(this.options[this.selectedIndex].value)">
								<option value="-1">Select district</option>
				</select>
					<span id="district_loader"></span>	
              </div></td>
          </tr>
          <tr> 
          	<td class="org_border_l_cell"> <div align="right">City : </div></td>
            <td height="20" valign="top" class="org_border_c_cell"><div align="left">
              <select name="city_dropdown" id="city_dropdown">
								<option value="-1">Select city</option>
				</select>
					  <span id="city_loader"></span>
              </div></td>
          </tr>
          
          <tr> 
            <td colspan="2" height="15" valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr bgcolor="#0066CC">
            <td colspan="2" height="21" valign="top" class="org_border_b_cell"><div align="center"> 
                 <input type="hidden" name="SID" value="<?php print "$srvsid"; ?>">
                 
                <input type="submit" name="Submit" value="Search">
                <input type="reset" name="Submit2" value="Reset">
              </div></td>
          </tr>
        </table>
    </form></td>
     </tr>
  <tr>
  	<td colspan="5">&nbsp; </td>
  </tr>
  <tr>
    <td height="147">&nbsp;</td>
    <td colspan="3" valign="top">
    
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td height="21" valign="top" class="org_border_t_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="index.php" target="_parent"><img src="imgs/news/08_Home.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150114.php" target="_parent"><img src="imgs/news/10_Directory.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150144.php" target="_parent"><img src="imgs/news/09_Service.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150131.php" target="_parent"><img src="imgs/news/11_Placement.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150137.php" target="_parent"><img src="images/img_bst/09_prop_dir.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
    </table></td>
     </tr>
  
</table>
  
  

</body>
</html>
