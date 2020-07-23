<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);
$srvscno = $_POST['cno'];

if ($srvscno =="")
	{
	$srvscno = $_GET['cid'];
	}

$slcomp = "select * from srvs_main where sr_id = '$srvscno'";
$rdcomp = mysql_query($slcomp,$abc);
$rcdcount = mysql_num_rows($rdcomp);

$cname = mysql_result($rdcomp,0,'cname');
$cid   = mysql_result($rdcomp,0,'sr_id');			

$query_srvs = "SELECT dir_srvs.srvs_name FROM dir_srvs ORDER BY dir_srvs.srvs_name";
$srvs = mysql_query($query_srvs, $abc) or die(mysql_error());
$row_srvs = mysql_fetch_assoc($srvs);
$totalRows_srvs = mysql_num_rows($srvs);
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

<div id="Layer1" style="position:absolute; left:76px; top:26px; width:487px; height:254px; z-index:1; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000;">
  <form name="form1" method="post" action="srvsAdvtSave.php">
    <table width="120%" border="0">
      <tr> 
        <td colspan="3">
<hr></td>
      </tr>
      <tr> 
        <td colspan="3">
<div align="center"><font color="#0000FF"><strong>Registration 
            For Company in Directory</strong></font></div></td>
      </tr>
      <tr> 
        <td colspan="3">
<hr></td>
      </tr>
      <tr> 
        <td width="33%"><strong>Comapny Name</strong></td>
        <td width="2%">&nbsp;</td>
        <td width="65%"><?php print "<b>$cname</b>"; ?> </td>
      </tr>
      <tr> 
        <td><strong>Service Name</strong></td>
        <td>&nbsp;</td>
        <td>
<select name="sname" id="sname">
            <?php
do {  
?>
            <option value="<?php echo $row_srvs['srvs_name']?>"><?php echo $row_srvs['srvs_name']?></option>
            <?php
} while ($row_srvs = mysql_fetch_assoc($srvs));
  $rows = mysql_num_rows($srvs);
  if($rows > 0) {
      mysql_data_seek($srvs, 0);
	  $row_srvs = mysql_fetch_assoc($srvs);
  }
?>
          </select></td>
      </tr>
      <tr> 
        <td><strong>Registration For Year</strong></td>
        <td>&nbsp;</td>
        <td>
<input name="regfyear" type="text" id="regfyear" size="5" maxlength="2">
          <strong> Years </strong></td>
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
			<input type="hidden" name="cid"	 value="<?php print "$cid"; ?>">	
            <input type="submit" name="Submit" value="Submit">
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
mysql_free_result($srvs);
?>
