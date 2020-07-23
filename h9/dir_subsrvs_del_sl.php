<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);
$query_catlist = "SELECT dir_srvs.srvs_id, dir_srvs.srvs_name FROM dir_srvs ORDER BY dir_srvs.srvs_name";
$catlist = mysql_query($query_catlist, $abc) or die(mysql_error());
$row_catlist = mysql_fetch_assoc($catlist);
$totalRows_catlist = mysql_num_rows($catlist);
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
	if(form1.srvsname.value=="")
		{
		alert("please Select Service Name");
		form1.srvsname.focus();
		return (false);
		}
	
	}	
</script>

</head>

<body>

<div id="Layer1" style="position:absolute; left:117px; top:19px; width:581px; height:128px; z-index:1; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000;">
  <form name="form1" method="post" action="dir_srvssub_del.php" onsubmit="return check(this)">
    <table width="100%" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
      <tr bgcolor="#CCFFCC"> 
        <td colspan="3">
<div align="center"><font color="#660000"><strong>Select 
            Service Name.</strong></font></div></td>
      </tr>
      <tr> 
        <td width="23%">&nbsp;</td>
        <td width="4%">&nbsp;</td>
        <td width="73%">&nbsp;</td>
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
<select name="srvsname" id="srvsname">
            <?php
do {  
?>
            <option value="<?php echo $row_catlist['srvs_id']?>"<?php if (!(strcmp($row_catlist['srvs_id'], $row_catlist['srvs_id']))) {echo "SELECTED";} ?>><?php echo $row_catlist['srvs_name']?></option>
            <?php
} while ($row_catlist = mysql_fetch_assoc($catlist));
  $rows = mysql_num_rows($catlist);
  if($rows > 0) {
      mysql_data_seek($catlist, 0);
	  $row_catlist = mysql_fetch_assoc($catlist);
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
            <input type="submit" name="Submit" value="Ok">
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
<?php
mysql_free_result($catlist);
?>
