<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);
$query_Recordset1 = "SELECT country.cntname FROM country ORDER BY country.cntname desc";
$Recordset1 = mysql_query($query_Recordset1, $abc) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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
<!--

function check(form1) 
	{
	if(form1.statename.value=="")
		{
		alert("please enter State name");
		form1.statename.focus();
		return (false);
		}
	if(form1.contname.value=="")
		{
		alert("please select Countery name");
		form1.contname.focus();
		return (false);
		}
	
	}	
</script>


</head>


<body>

<div id="Layer1" style="position:absolute; left:38px; top:2px; width:474px; height:296px; z-index:1"> 
  <form action="statedadd.php" name="form1" method="POST" onsubmit="return check(this)">
    <p>&nbsp;</p>
    <table width="96%" border="0" align="center" bgcolor="#FFCCCC">
      <tr>
        <td colspan="3"><div align="center"><font color="#663300" size="4">State 
            Master</font></div></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
      <tr> 
        <td width="26%"><font color="#990000">&nbsp;</font></td>
        <td width="1%">&nbsp;</td>
        <td width="73%">&nbsp;</td>
      </tr>
      <tr> 
        <td><font color="#990000"><strong>State Name</strong></font></td>
        <td>&nbsp;</td>
        <td> <input name="statename" type="text" id="statename" size="45" maxlength="40"></td>
      </tr>
      <tr> 
        <td><font color="#990000"><strong>Country Name</strong></font></td>
        <td>&nbsp;</td>
        <td> <select name="contname" size="1" id="contname">
            <?php
do {  
?>
            <option value="<?php echo $row_Recordset1['cntname']?>"<?php if (!(strcmp($row_Recordset1['cntname'], $row_Recordset1['cntname']))) {echo "SELECTED";} ?>><?php echo $row_Recordset1['cntname']?></option>
            <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
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
        <td colspan="3"><hr></td>
      </tr>
      <tr> 
        <td colspan="3"><div align="center"> 
            <input type="submit" name="Submit" value="Submit">
            &nbsp;&nbsp; 
            <input type="reset" name="Submit2" value="Reset">
          </div></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);

?>
