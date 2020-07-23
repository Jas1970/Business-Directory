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

<table width="257" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td height="237" colspan="2" valign="top"><table width="250px" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td class="org_border_t_cell" height="18" valign="top"><a href="Srvs_Auth_pending_list.php" target="mainFrame">Service 
            Auth. Pending List (U)</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell"  width="200" height="18" valign="top"><a href="SrvsAuth_b.php" target="mainFrame">Service 
            Auth. temp (U) W/Login</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell"  width="200" height="18" valign="top"><a href="SrvsAuth.php" target="mainFrame">Service 
            Auth. temp (U) Wo/Login</a></td>
        </tr>


        <tr> 
          <td class="org_border_c_cell" height="17" valign="top"><a href="srvsCompDelTmp.php" target="mainFrame">Service 
            Auth. Del Temp (U)</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell"  width="200" height="18" valign="top"><a href="Srvs_Auth_pending_list_A.php" target="mainFrame">Service 
            Auth. Pending List (A)</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell"  width="200" height="18" valign="top"><a href="SrvsAuth_A.php" target="mainFrame">Service 
            Auth. temp (A)</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="17" valign="top"><a href="srvsCompDelTmp_A.php" target="mainFrame">Service 
            Auth. Del Temp (A)</a></td>
        </tr>


        <tr> 
          <td class="org_border_c_cell" height="17" valign="top"><a href="srvsAdvtSl.php" target="mainFrame">Service 
            Add. To Company</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="17" valign="top"><p><a href="Srvs_srvsAuth_pending_list.php" target="mainFrame">Service 
              Advt. Auth Pending List</a></p></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="17" valign="top"><a href="0708150315.php" target="mainFrame">Service 
            Advt. Auth</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="17" valign="top"><a href="0708150317.php" target="mainFrame">Service 
            Advt Del. (Tmp)</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="17" valign="top"><div align="justify"><a href="Srvs_city_search.php" target="mainFrame">Srvs 
              Regd. List City Wise</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_b_cell" height="18" valign="top"><a href="SrvsadvtSL7.php" target="mainFrame">Srvs 
            Regd. Comp. Status </a></td>
        </tr>
    </table></td>
    <td width="4">&nbsp;</td>
    <td width="4">&nbsp;</td>
    <td width="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="162" colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td class="yel_cell_top" width="200" height="17" valign="top"><a href="dir_srvs.php" target="mainFrame">Enter 
            New Service</a></td>
        </tr>
        <tr> 
          <td class="yel_cell_center" height="17" valign="top"><a href="dir_srvs_list.php" target="mainFrame">Service 
            List</a></td>
        </tr>
                <tr> 
          <td class="yel_cell_center" height="17" valign="top"><a href="dir_srvs_list.php" target="mainFrame">Service 
            Edit</a></td>
        </tr>

        <tr> 
          <td height="17" valign="top" class="yel_cell_center"><a href="dir_srvs_del.php" target="mainFrame">Delete 
            Service</a></td>
        </tr>
        <tr> 
          <td height="17" valign="top" class="yel_cell_center"><a href="srvs_sub.php" target="mainFrame">Enter 
            New Sub Service</a></td>
        </tr>
        <tr> 
          <td height="17" valign="top" class="yel_cell_center"><a href="srvs_sub_list_sl.php" target="mainFrame">Sub-Serivce 
            List</a></td>
        </tr>
        <tr> 
          <td height="17" valign="top" class="yel_cell_center"><a href="srvs_sub_list_sl.php" target="mainFrame">Sub-Serivce 
            Edit</a></td>
        </tr>
        <tr> 
          <td height="17" valign="top" class="yel_cell_center"><a href="dir_subsrvs_del_sl.php" target="mainFrame">Delete 
            Sub-Service</a></td>
        </tr>
        <tr> 
          <td height="20" valign="top" class="yel_cell_center"><a href="srvsAdvtSl3.php" target="mainFrame">Delete 
            Company's Advts </a></td>
        </tr>
        <tr> 
          <td class="yel_cell_bottom" height="17" valign="top"><a href="srvsAdvtSl2.php" target="mainFrame">Delete 
            Company From Dir</a></td>
        </tr>
    </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="80" colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td class="yel_cell_top" width="200" height="17" valign="top"><a href="srvs_Auth_No_search.php" target="mainFrame">Srvs Auth No. Web Select</a></td>
        </tr>
        <tr> 
          <td class="yel_cell_center" height="17" valign="top"><a href="srvsAdvtSl9.php" target="mainFrame">Srvs Auth Web</a></td>
        </tr>
        <tr> 
          <td height="17" valign="top" class="yel_cell_center"><a href="srvs_Auth_Yes_search.php" target="mainFrame">Srvs Auth Yes Web Select</a></td>
        </tr>
        <tr> 
          <td height="17" valign="top" class="yel_cell_bottom"><a href="srvsAdvtSl8.php" target="mainFrame">Srvs De-Auth</a></td>
        </tr>
    </table></td>
    <td></td>
  </tr>
  <tr>
    <td width="4" height="90">&nbsp;</td>
    <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
          <td class="org_border_b_cell" height="15" valign="top" ><a href="../index.php" target="_parent">Home 
            Page</a></td>
        </tr>
    </table></td>
  <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="352">&nbsp;</td>
    <td width="246">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
