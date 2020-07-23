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

<table width="172" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td height="230" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="172" height="19" valign="top" class="org_border_t_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left"><a href="prop_type.php" target="mainFrame">Property 
              Type Addition</a></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left"><a href="prop_type_list.php" target="mainFrame">Property 
              Type List </a></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left"><a href="prop_type_del.php" target="mainFrame">Property 
              Type Deletion </a></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left">&nbsp;</div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left"><a href="prop_m_add.php" target="mainFrame">Property 
              Main</a></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><a href="prop_Auth_pending_list.php" target="mainFrame">Property 
            Auth. Pending</a></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><a href="0708150244.php" target="mainFrame">Property 
            Auth. (Dir)</a></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><a href="0708150341.php" target="mainFrame">Property 
            Auth. (Srvs)</a></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left"><a href="dirAdvtSl5.php" target="mainFrame">Delete 
              Property Advts DIR</a></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left"><a href="srvsAdvtSl6.php" target="mainFrame">Delete 
              Property Advts</a> <a href="prop_m_add.php" target="mainFrame">Srs</a></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left"><a href="dir_update_sl.php" target="mainFrame">Update 
              Dir Address</a> (Dir)</div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left"><a href="srvs_update_sl.php" target="mainFrame">Update 
              Dir Address (Srvs)</a></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><div align="left"><a href="dir_update_mail.php" target="mainFrame">Update 
              E-Mail (Dir)</a></div></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_b_cell"><div align="left"><a href="srvs_update_mail.php" target="mainFrame">Update 
              E-Mail (srvs)</a></div></td>
        </tr>
        <tr> 
          <td height="1"></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td width="1" height="10"></td>
    <td width="171"></td>
  </tr>
  <tr>
    <td height="90"></td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
  </tr>
  <tr>
    <td height="55"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
