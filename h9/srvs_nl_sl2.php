<?php require_once('Connections/abc.php'); 
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$sqlService="select srvs_id, srvs_name from dir_srvs order by srvs_name asc ";
$resService=mysql_query($sqlService,$abc);
//$checkCategory=mysql_num_rows($resService);

?>


<html>
<head>
<title></title>
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


<script language="javascript">
function check(form1) 
	{
	if(form1.dirno.value=="")
		{
		alert("please enter Company ID");
		form1.dirno.focus();
		return (false);
		}
	
	}	
</script>

</head>

<body>

<div id="Layer1" style="position:absolute; left:117px; top:19px; width:600px; height:128px; z-index:1; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000;">
  <form name="form1" method="post" action="NLetter_02.php" onSubmit="return check(this)">
    <table width="100%" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
      <tr bgcolor="#CCFFCC"> 
        <td colspan="3">
<div align="center"><font color="#660000"><strong>Select 
            Service Name.</strong></font></div></td>
      </tr>
      <tr> 
        <td width="38%">&nbsp;</td>
        <td width="5%">&nbsp;</td>
        <td width="57%">&nbsp;</td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td><strong><font color="#660000">Service Name</font></strong></td>
        <td>&nbsp;</td>
        <td>
			<select name="service_dropdown" id="service_dropdown">
								<option value="-1">Select Service</option>
								<?php
								while($rowCountry=mysql_fetch_array($resService)){
									?>
									<option value="<?php echo $rowCountry['srvs_id']?>"><?php echo $rowCountry['srvs_name']?></option>
									<?php
								}
								?>
					 </select></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td colspan="3">
<hr></td>
      </tr>
      <tr> 
        <td colspan="3">
<div align="center"> 
            <input type="submit" name="Submit" value="    Ok    ">
            <input type="reset" name="Submit2" value="Reset">
          </div></td>
      </tr>
      <tr> 
        <td colspan="3">
<hr></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>