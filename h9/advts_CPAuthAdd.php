<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);
$query_catname = "SELECT catg.catname, catg.catid FROM catg ORDER BY catg.catname";
$catname = mysql_query($query_catname, $abc) or die(mysql_error());
$row_catname = mysql_fetch_assoc($catname);
$totalRows_catname = mysql_num_rows($catname);

mysql_select_db($database_abc, $abc);
$query_prodname = "SELECT prod.prodnam, catg.catid FROM prod, catg WHERE catg.catid =prod.catid  ORDER BY prod.prodnam";
$prodname = mysql_query($query_prodname, $abc) or die(mysql_error());
$row_prodname = mysql_fetch_assoc($prodname);
$totalRows_prodname = mysql_num_rows($prodname);


mysql_select_db($database_abc, $abc);


$dirid = $_POST['dirno'];

$slcomp = "select * from dir_main where dir_id = '$dirid'";
$rdcomp = mysql_query($slcomp,$abc);
$cname = mysql_result($rdcomp,0,'dir_cname');


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
  <form name="form1" method="post" action="advts_CPAuthAddSv.php">
    <table width="120%" border="0">
      <tr> 
        <td colspan="3"> <hr></td>
      </tr>
      <tr> 
        <td colspan="3"> <div align="center"><font color="#0000FF"><strong>Registration 
            For Company in Directory</strong></font></div></td>
      </tr>
      <tr> 
        <td colspan="3"> <hr></td>
      </tr>
      <tr> 
        <td width="33%"><strong>Comapny Name</strong></td>
        <td width="2%">&nbsp;</td>
        <td width="65%"><?php print "<b>$cname</b>"; ?> </td>
      </tr>
      <tr> 
        <td><strong>Category Name</strong></td>
        <td>&nbsp;</td>
        <td> <select name="catname" id="catname">
            <?php
do {  
?>
            <option value="<?php echo $row_catname['catname']?>"><?php echo $row_catname['catname']?></option>
            <?php
} while ($row_catname = mysql_fetch_assoc($catname));
  $rows = mysql_num_rows($catname);
  if($rows > 0) {
      mysql_data_seek($catname, 0);
	  $row_catname = mysql_fetch_assoc($catname);
  }
?>
          </select></td>
      </tr>
      <tr>
        <td><strong>Product Name</strong></td>
        <td>&nbsp;</td>
        <td><select name="pname" id="pname">
            <?php
do {  
?>
            <option value="<?php echo $row_prodname['prodnam']?>"<?php if (!(strcmp($row_prodname['prodnam'], $row_catname['catid']))) {echo "SELECTED";} ?>><?php echo $row_prodname['prodnam']?></option>
            <?php
} while ($row_prodname = mysql_fetch_assoc($prodname));
  $rows = mysql_num_rows($prodname);
  if($rows > 0) {
      mysql_data_seek($prodname, 0);
	  $row_prodname = mysql_fetch_assoc($prodname);
  }
?>
          </select></td>
      </tr>
      <tr> 
        <td><strong>Registration For Year</strong></td>
        <td>&nbsp;</td>
        <td> <input name="rfyear" type="text" id="rfyear" size="5" maxlength="2">
          <strong> Years </strong></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td colspan="3"> <hr></td>
      </tr>
      <tr> 
        <td colspan="3"> <div align="center"> 
			<input type="hidden" name="dirid" value="<?php print $_POST[dirno]; ?>">
            <input type="submit" name="Submit" value="Submit">
            <input type="reset" name="Submit2" value="Reset">
          </div></td>
      </tr>
      <tr> 
        <td colspan="3"> <hr></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
<?php
mysql_free_result($catname);

mysql_free_result($prodname);

mysql_free_result($srvs);
?>
