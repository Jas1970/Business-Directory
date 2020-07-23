<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);
$query_catlist = "SELECT catg.catid, catg.catname FROM catg ORDER BY catg.catname";
$catlist = mysql_query($query_catlist, $abc) or die(mysql_error());
$row_catlist = mysql_fetch_assoc($catlist);
$totalRows_catlist = mysql_num_rows($catlist);

mysql_select_db($database_abc, $abc);
$query_state = "SELECT stname FROM `state` ORDER BY stname ASC";
$state = mysql_query($query_state, $abc) or die(mysql_error());
$row_state = mysql_fetch_assoc($state);
$totalRows_state = mysql_num_rows($state);
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
	if(form1.stname.value=="")
		{
		alert("please Select State");
		form1.stname.focus();
		return (false);
		}
	
	}	
</script>

</head>

<body>

<div id="Layer1" style="position:absolute; left:114px; top:5px; width:369px; height:212px; z-index:1; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000;">
  <form name="form1" method="post" action="city_list2.php" onsubmit="return check(this)">
    <table width="100%" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
      <tr bgcolor="#CCFFCC"> 
        <td colspan="3"><div align="center"><font color="#660000"><strong>Select 
            State Name.</strong></font></div></td>
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
        <td><strong><font color="#660000">State Name</font></strong></td>
        <td>&nbsp;</td>
        <td><select name="stname" id="stname">
            <?php
do {  
?>
            <option value="<?php echo $row_state['stname']?>"<?php if (!(strcmp($row_state['stname'], $row_state['stname']))) {echo "SELECTED";} ?>><?php echo $row_state['stname']?></option>
            <?php
} while ($row_state = mysql_fetch_assoc($state));
  $rows = mysql_num_rows($state);
  if($rows > 0) {
      mysql_data_seek($state, 0);
	  $row_state = mysql_fetch_assoc($state);
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
            <input type="submit" name="Submit" value="Ok">
            <input type="reset" name="Submit2" value="Reset">
          </div></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
    </table>
  </form>
</div>
<div id="Layer1" style="position:absolute; left:-1px; top:263px; width:550px; height:21px; z-index:5"> 
  <table width="650" border="0" cellpadding="0" cellspacing="4">
    <!--DWLayoutTable-->
    <tr height="4"> 
      <td width="100" height="4" bgcolor="#990000"></td>
      <td width="100" bgcolor="#FF6600"></td>
      <td width="100" bgcolor="#33CC00"></td>
      <td width="100" bgcolor="#00FFCC" ></td>
      <td width="100" bgcolor="#FFFF00"></td>
      <td width="100" bgcolor="#FF9999" ></td>
    </tr>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($catlist);

mysql_free_result($state);
?>
