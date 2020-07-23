<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();


$srvsid = $_GET['SID'];
$ssrvsid = $_GET['SSID'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#F7F7F7">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td  height="8"></td>
  </tr>
  <tr>
    <td height="81" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td  height="23" valign="top" class="org_border_t_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr> 
          <td height="26" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150144.php?SID=<?PHP print "$srvsid"; ?>&SSID=<?php print "$ssrvsid"; ?>"" target="_parent"><img src="images/img_bst/btn_srch_city.jpg" width="135" height="33" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="25" valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="9"></td>
  </tr>
  
  
  
  
  
  
  <tr>
    <td height="149" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td  height="21" valign="top" class="org_border_t_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="index.php" target="_parent"><img src="imgs/news/08_Home.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150114.php" target="_parent"><img src="imgs/news/10_Directory.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150144.php" target="_parent"><img src="imgs/news/09_Service.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150131.php" target="_parent"><img src="imgs/news/11_Placement.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_c_cell"><div align="center"><a href="0708150137.php" target="_parent"><img src="images/img_bst/09_prop_dir.gif" width="108" height="21" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>

        <tr> 
          <td height="2"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="101">&nbsp;</td>
  </tr>
</table>

</body>
</html>
