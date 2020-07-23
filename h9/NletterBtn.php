<?php
session_start();
$sid = session_id();
$userid = $_SESSION['userid'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="300" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="300" height="141" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td height="20" valign="top" class="yel_cell_top"><a href="Dir_Auth_pending_list.php" target="mainFrame">News Letter (Directory)</a></td>
        </tr>
        <tr> 
          <td  height="20" valign="top" class="yel_cell_center"><a href="Cat_sl4.php" target="mainFrame">Subscriber List</a></td>
        </tr>
        <tr> 
          <td  height="20" valign="top" class="yel_cell_center"><a href="Cat_sl5.php" target="mainFrame">News Letter One Party</a></td>
        </tr>


        <tr> 
          <td height="20" valign="top" class="yel_cell_center"><a href="Cat_sl6.php" target="mainFrame">News Letter One Group</a></td>
        </tr>
        <tr> 
          <td  height="20" valign="top" class="yel_cell_center"><a href="../Dir_Auth_pending_list_A.php" target="mainFrame">News Letter Status One Party</a></td>
        </tr>

        <tr> 
          <td  height="20" valign="top" class="yel_cell_center"><a href="../Dir_Auth_pending_list_A.php" target="mainFrame">News Letter Status One Group</a></td>
        </tr>
        <tr> 
          <td height="20" valign="top" class="yel_cell_center"><a href="../Dir_Auth_pending_list_A.php" target="mainFrame">Un-Subscribe New Letter</a></td>
        </tr>
        <tr> 
          <td height="21" valign="top" class="yel_cell_bottom"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
      </table></td>
    <td width="46"></td>
  </tr>
  <tr> 
    <td height="11"></td>
    <td></td>
  </tr>
  <tr> 
    <td height="125" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td  height="22" valign="top" class="yel_cell_top"><a href="../Dir_Auth_pending_list.php" target="mainFrame">News Letter (Service)</a><a href="../advt_Auth_No_search.php" target="mainFrame"></a></td>
        </tr>
        <tr> 
          <td height="22" valign="top" class="yel_cell_center"><a href="srvs_nl_sl.php" target="mainFrame">Subscriber List</a></td>
        </tr>
        <tr> 
          <td height="22" valign="top" class="yel_cell_center"><a href="srvs_nl_sl1.php" target="mainFrame">News Letter One Party</a></td>
        </tr>
        <tr> 
          <td height="22" valign="top" class="yel_cell_center"><a href="srvs_nl_sl2.php" target="mainFrame">News Letter One Group</a></td>
        </tr>
        <tr> 
          <td height="22" valign="top" class="yel_cell_center"><a href="../Dir_Auth_pending_list_A.php" target="mainFrame">News Letter Status One Party</a></td>
        </tr>
        <tr> 
          <td height="22" valign="top" class="yel_cell_center"><a href="../Dir_Auth_pending_list_A.php" target="mainFrame">News Letter Status One Group</a></td>
        </tr>
<tr> 
          <td height="22" valign="top" class="yel_cell_bottom"><a href="../Dir_Auth_pending_list_A.php" target="mainFrame">Un-Subscribe New Letter</a></td>
        </tr>
        
      </table></td>
    <td></td>
  </tr>
  <tr> 
    <td height="12"></td>
    <td></td>
  </tr>
  <tr> 
    <td height="90" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="159" height="15" valign="top" class="org_border_t_cell"><a href="smain.php?sid=<?php print "$sid"; ?>&userid=<?php print "$userid"; ?>" target="_parent">Admin 
            Service</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><a href="prop_main.php?sid=<?php print "$sid"; ?>&userid=<?php print "$userid"; ?>" target="_parent">Admin 
            Property</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><a href="hrdmain.php?sid=<?php print "$sid"; ?>&userid=<?php print "$userid"; ?>" target="_parent">Admin 
            Placement</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><a href="dmain.php?sid=<?php print "$sid"; ?>&userid=<?php print "$userid"; ?>" target="_parent">Admin 
            Directory</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><a href="gmain.php?sid=<?php print "$sid"; ?>&userid=<?php print "$userid"; ?>" target="_parent">Admin 
            General</a></td>
        </tr>
        <tr> 
          <td class="org_border_b_cell" height="15" valign="top" ><a href="file:///C|/xampp/htdocs/index.php" target="_parent">Home 
            Page</a></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
</table>
</body>
</html>
