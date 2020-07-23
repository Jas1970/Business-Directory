<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);
$query_Recordset1 = "SELECT city.citid, city.citname FROM city";
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
</head>

<body>

<div id="Layer1" style="position:absolute; left:19px; top:32px; width:456px; height:213px; z-index:1">
  <form name="form1" method="post" action="Srvs_search_list.php">
    <div align="center"></div>
    <div align="center"></div>
    <table width="97%"  border="0" align="center" bgcolor="#CCFFFF">
      <tr> 
        <td colspan="3"><div align="center"><font color="#0000FF"><strong>Service 
            Providors Search</strong></font></div></td>
      </tr>
      <tr> 
        <td width="33%">&nbsp;</td>
        <td width="63%">&nbsp;</td>
        <td width="4%">&nbsp;</td>
      </tr>
      <tr> 
        <td><strong>Select City Name :</strong> </td>
        <td colspan="2"> <label> 
          <select name="cname" id="cname">
            <?php
do {  
?>
            <option value="<?php echo $row_Recordset1['citname']?>"><?php echo $row_Recordset1['citname']?></option>
            <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
          </select>
          </label></td>
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
<?php
mysql_free_result($Recordset1);
?>
