<?php require_once('Connections/abc.php'); ?>
<?php

mysql_select_db($database_abc,$abc) or die("unable to Open database");

$sqlCountry="select cntid,cntname from country  order by cntname asc ";
$resCountry=mysql_query($sqlCountry, $abc);
$checkCountry=mysql_num_rows($resCountry);



?>



<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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

<body>

<div id="Layer1" style="position:absolute; left:19px; top:32px; width:456px; height:213px; z-index:1">
  <form name="form1" method="post" action="srvs_Auth_Yes_web_list.php">
    <div align="center"></div>
    <div align="center"></div>
    <table width="97%"  border="0" align="center" bgcolor="#CCFFFF">
      <tr> 
        <td colspan="3"><div align="center"><font color="#0000FF"><strong>Advt. 
            City Search</strong></font></div></td>
      </tr>
      <tr> 
        <td width="63%">&nbsp;</td>
        <td width="33%">&nbsp;</td>
        <td width="4%">&nbsp;</td>
      </tr>

	<tr> 
        <td><strong>Select Country Name :</strong> </td>
        
        
        <td colspan="2"> <label> 
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
          </label></td>
      </tr>

	<tr> 
        <td><strong>Select State Name :</strong> </td>
        
        
        <td colspan="2"> <label> 
<select name="state_dropdown" id="state_dropdown" onChange="selectState(this.options[this.selectedIndex].value)">
								<option value="-1">Select state</option>
							</select>
					<span id="state_loader"></span>          </label></td>
      </tr>


		<tr> 
        <td><strong>Select District Name :</strong> </td>
        
        
        <td colspan="2"> <label> 
       <select name="district_dropdown" id="district_dropdown" onChange="selectDistrict(this.options[this.selectedIndex].value)">
								<option value="-1">Select district</option>
							</select>
					<span id="district_loader"></span>	   </label></td>
      </tr>


      <tr> 
        <td><strong>Select City Name :</strong> </td>
        
        
        <td colspan="2"> <label> 
							<select name="city_dropdown" id="city_dropdown">
								<option value="-1">Select city</option>
							</select>
					  <span id="city_loader"></span>          </label></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
      <tr> 
        <td height="36" colspan="3"> <div align="center"> 
            <label> 
            <input type="submit" name="Submit" value="Search">
            <input type="reset" name="Submit2" value="Reset">
            </label>
          </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</div>
</body>
</html>