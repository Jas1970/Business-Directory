<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);

$dirid = $_POST[dirno];

$slcomp = "select * from srvs_main where sr_id='$dirid'";
$rdcomp = mysql_query($slcomp,$abc);

$rdcount = mysql_num_rows($rdcomp);

if($rdcount<>0)
	{
	$cname = mysql_result($rdcomp,0,'cname');
	}
	else
	{
		header ("Location: srvs_update_sl.php");
		exit;
	}



mysql_select_db($database_abc, $abc);
$query_rcd_city = "SELECT citid, citname FROM city ORDER BY citname ASC";
$rcd_city = mysql_query($query_rcd_city, $abc) or die(mysql_error());
$row_rcd_city = mysql_fetch_assoc($rcd_city);
$totalRows_rcd_city = mysql_num_rows($rcd_city);

mysql_select_db($database_abc, $abc);
$query_rcd_dist = "SELECT dstid, dstname FROM district ORDER BY dstname ASC";
$rcd_dist = mysql_query($query_rcd_dist, $abc) or die(mysql_error());
$row_rcd_dist = mysql_fetch_assoc($rcd_dist);
$totalRows_rcd_dist = mysql_num_rows($rcd_dist);

mysql_select_db($database_abc, $abc);
$query_rcd_state = "SELECT stid, stname FROM `state` ORDER BY stname ASC";
$rcd_state = mysql_query($query_rcd_state, $abc) or die(mysql_error());
$row_rcd_state = mysql_fetch_assoc($rcd_state);
$totalRows_rcd_state = mysql_num_rows($rcd_state);

mysql_select_db($database_abc, $abc);
$query_rcd_cont = "SELECT cntid, cntname FROM country ORDER BY cntname ASC";
$rcd_cont = mysql_query($query_rcd_cont, $abc) or die(mysql_error());
$row_rcd_cont = mysql_fetch_assoc($rcd_cont);
$totalRows_rcd_cont = mysql_num_rows($rcd_cont);
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


<script language="javascript">

function check(form1) 
	{
	if(form1.cnpname.value=="")
		{
		alert("please enter Contact Person name");
		form1.cnpname.focus();
		return (false);
		}
	if(form1.add1.value=="")
		{
		alert("please enter Address");
		form1.add1.focus();
		return (false);
		}
	if(form1.city.value=="")
		{
		alert("please Select City name");
		form1.city.focus();
		return (false);
		}
	if(form1.dist.value=="")
		{
		alert("please Select District name");
		form1.dist.focus();
		return (false);
		}
	if(form1.stat.value=="")
		{
		alert("please Select State Name");
		form1.Stat.focus();
		return (false);
		}
	if(form1.count.value=="")
		{
		alert("please Select Country name");
		form1.count.focus();
		return (false);
		}
	if(form1.pin.value=="")
		{
		alert("please Enter Pin Code Number");
		form1.pin.focus();
		return (false);
		}
	if(form1.tel.value=="")
		{
		alert("please Enter Telephone Number");
		form1.tel.focus();
		return (false);
		}
	if(form1.mob.value=="")
		{
		alert("please Enter Mobile Number");
		form1.mob.focus();
		return (false);
		}
	if(form1.mail.value=="")
		{
		alert("Please Enter Vaild Mail Address");
		form1.fname.focus();
		return (false);
		}

	}	
</script>

</head>

<body>
<div id="Layer10" style="position:absolute; left:13px; top:7px; width:643px; height:636px; z-index:1"> 
  <form name="form1" method="post" action="srvs_update_save.php" onsubmit="return check(this)">

    <table width="89%"  border="0.5" align="left" bordercolor="#0000FF">
      <tr bordercolor="#FF0000"> 
        <td colspan="5"><div align="center"><font color="#000099" size="4"><em><strong>Update 
            Address For Service Providors Directory</strong></em></font></div></td>
      </tr>
      <tr bordercolor="#FF0000"> 
        <td colspan="5"><hr align="right"></td>
      </tr>
      <tr bordercolor="#FF0000"> 
        <td width="28%"><font color="#0000FF"><strong>Company Name</strong></font></td>
        <td width="2%">&nbsp;</td>
        <td width="70%" colspan="3"><?php print $cname; ?></td>
      </tr>
      <tr bordercolor="#FF0000"> 
        <td><font color="#0000FF"><strong>Contact Person</strong></font></td>
        <td>&nbsp;</td>
        <td colspan="3"><input name="cnpname" type="text" id="cnpname" size="65" maxlength="60"></td>
      </tr>
      <tr> 
        <td valign="top"><strong><font color="#0000FF" size="3">Address</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"> <p> 
            <input name="add1" type="text" id="add1" size="45" maxlength="40">
            <br>
            <input name="add2" type="text" id="add2" size="45" maxlength="40">
          </p></td>
      </tr>
      <tr> 
        <td><strong><font color="#0000FF" size="3">City</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"> <select name="city" size="1" id="city">
            <?php
do {  
?>
            <option value="<?php echo $row_rcd_city['citid']?>"<?php if (!(strcmp($row_rcd_city['citid'], $row_rcd_city['citid']))) {echo "SELECTED";} ?>><?php echo $row_rcd_city['citname']?></option>
            <?php
} while ($row_rcd_city = mysql_fetch_assoc($rcd_city));
  $rows = mysql_num_rows($rcd_city);
  if($rows > 0) {
      mysql_data_seek($rcd_city, 0);
	  $row_rcd_city = mysql_fetch_assoc($rcd_city);
  }
?>
          </select></td>
      </tr>
      <tr> 
        <td><strong><font color="#0000FF" size="3">District</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"> <select name="dist" size="1" id="dist">
            <?php
do {  
?>
            <option value="<?php echo $row_rcd_dist['dstid']?>"<?php if (!(strcmp($row_rcd_dist['dstid'], $row_rcd_dist['dstid']))) {echo "SELECTED";} ?>><?php echo $row_rcd_dist['dstname']?></option>
            <?php
} while ($row_rcd_dist = mysql_fetch_assoc($rcd_dist));
  $rows = mysql_num_rows($rcd_dist);
  if($rows > 0) {
      mysql_data_seek($rcd_dist, 0);
	  $row_rcd_dist = mysql_fetch_assoc($rcd_dist);
  }
?>
          </select></td>
      </tr>
      <tr> 
        <td><strong><font color="#0000FF" size="3">State</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"> <select name="stat" size="1" id="stat">
            <?php
do {  
?>
            <option value="<?php echo $row_rcd_state['stid']?>"<?php if (!(strcmp($row_rcd_state['stid'], $row_rcd_state['stid']))) {echo "SELECTED";} ?>><?php echo $row_rcd_state['stname']?></option>
            <?php
} while ($row_rcd_state = mysql_fetch_assoc($rcd_state));
  $rows = mysql_num_rows($rcd_state);
  if($rows > 0) {
      mysql_data_seek($rcd_state, 0);
	  $row_rcd_state = mysql_fetch_assoc($rcd_state);
  }
?>
          </select></td>
      </tr>
      <tr> 
        <td><strong><font color="#0000FF" size="3">Country</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"> <select name="count" size="1" id="count">
            <?php
do {  
?>
            <option value="<?php echo $row_rcd_cont['cntid']?>"<?php if (!(strcmp($row_rcd_cont['cntid'], $row_rcd_cont['cntid']))) {echo "SELECTED";} ?>><?php echo $row_rcd_cont['cntname']?></option>
            <?php
} while ($row_rcd_cont = mysql_fetch_assoc($rcd_cont));
  $rows = mysql_num_rows($rcd_cont);
  if($rows > 0) {
      mysql_data_seek($rcd_cont, 0);
	  $row_rcd_cont = mysql_fetch_assoc($rcd_cont);
  }
?>
          </select></td>
      </tr>
      <tr>
        <td><strong><font color="#0000FF">Pin Code</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"><input name="pin" type="text" id="pin" size="10" maxlength="10"></td>
      </tr>
      <tr> 
        <td><strong><font color="#0000FF" size="3">Telephone No.</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"> <input name="tel" type="text" id="tel" size="40" maxlength="40"> </td>
      </tr>
      <tr> 
        <td><font color="#0000FF"><strong>Fax No.</strong></font></td>
        <td>&nbsp;</td>
        <td colspan="3"><input name="fax" type="text" id="fax" size="40" maxlength="40"></td>
      </tr>
      <tr> 
        <td><strong><font color="#0000FF" size="3">Mobile No.</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"> <input name="mob" type="text" id="mob" size="40" maxlength="35"></td>
      </tr>
      <tr> 
        <td><strong><font color="#0000FF" size="3">E-Mail</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"><input name="mail" type="text" id="mail" size="40" maxlength="35"></td>
      </tr>

      <tr> 
        <td><strong><font color="#0000FF" size="3">Web Site</font></strong></td>
        <td>&nbsp;</td>
        <td colspan="3"><input name="web" type="text" id="web" size="40" maxlength="35"></td>
      </tr>

      <tr> 
        <td colspan="5">&nbsp;</td>
      </tr>
      <tr> 
        <td colspan="5"><div align="center"> 
			<input type="hidden" name="dirid" value="<?php print "$dirid"; ?>">
            <input type="submit" name="Submit" value="Submit">
            <input type="reset" name="Submit2" value="Reset">
          </div></td>
      </tr>
      <tr> 
        <td colspan="5"><hr></td>
      </tr>
      <tr> 
        <td colspan="5">&nbsp;</td>
      </tr>
    </table>
    
    <p align="left">&nbsp; </p>
      </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php
mysql_free_result($rcd_city);

mysql_free_result($rcd_dist);

mysql_free_result($rcd_state);

mysql_free_result($rcd_cont);
?>
