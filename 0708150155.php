<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();

$catid		= $_GET[CATID];
$prodid 	= $_GET[PID];

$slcat = "select catname from catg where catid = '$catid'";
$rdcat = mysql_query($slcat);
$catname = mysql_result($rdcat,0,'catname');

$slcatprd = "select * from prod where catid = '$catid' and prodid = '$prodid'";
$rdcatprd = mysql_query($slcatprd)or die(mysql_error());
$prodname = mysql_result($rdcatprd,0,'prodnam');
$count = mysql_num_rows($rdcatprd);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="0" leftmargin="0">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="263" rowspan="2" valign="top"><img src="images/img_bst/b2b.gif" width="263" height="57"></td>
    <td width="922" height="11"></td>
    <td width="65"></td>
    <td width="14"></td>
  </tr>
  <tr>
    <td height="46"></td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td  height="46" valign="top"><div align="right"><img src="images/img_bst/ani28t.gif" width="40" height="40"></div></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr> 
    <td height="13"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td  height="34" colspan="4" align="center" valign="middle" background="images/img_bst/srbar.jpg"><div align="center">Search For Category  : <?php print $catname; ?> and Product  : <?php print $prodname; ?></div></td>
  </tr>
</table>
</body>
</html>
