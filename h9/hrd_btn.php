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
<table width="168" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="159" height="12"></td>
    <td width="9"></td>
  </tr>
  <tr> 
    <td height="191" valign="top"> <table width="159px" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td class="org_border_t_cell" width="159" valign="top"><a href="Job_type.php" target="mainFrame">Job 
            Type Add</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="job_type_list.php" target="mainFrame">Job 
            Type List</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="job_type_del.php" target="mainFrame">Job 
            Type Del</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="Job_grp.php" target="mainFrame">Job 
            Group Add</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="job_grp_list.php" target="mainFrame">Job 
            Group List</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="job_grp_del.php" target="mainFrame">Job 
            Group Del</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="inds.php" target="mainFrame">Job 
            Industries Add</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="inds_list.php" target="mainFrame">Job 
            Industries List</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="inds_del.php" target="mainFrame">Job 
            Industries Del</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="Job_qual.php" target="mainFrame">Job 
            Qualification Add</a></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="16" valign="top"><a href="job_qual_list.php" target="mainFrame">Job 
            Qualification List</a></td>
        </tr>
        <tr> 
          <td class="org_border_b_cell" height="16" valign="top"><a href="job_qual_del.php" target="mainFrame">Job 
            Qualification Del</a></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr> 
    <td height="12"></td>
    <td></td>
  </tr>
  <tr> 
    <td height="81" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td class="org_border_t_cell" width="159" height="15" valign="top"><a href="job_main.php" target="mainFrame">Job 
            Master</a></td>
        </tr>
        <tr> 
          <td height="17" valign="top" class="org_border_c_cell"><a href="srvsAdvtSl4.php" target="mainFrame">Delete 
            From Job (Dir)</a></td>
        </tr>
        <tr> 
          <td height="15" valign="top" class="org_border_c_cell"><a href="srvsAdvtSl5.php" target="mainFrame">Delete 
            From Job (Srvs)</a></td>
        </tr>
        <tr>
          <td height="17" valign="top" class="org_border_c_cell"><a href="job_Auth_pending_list.php" target="mainFrame">Pending 
            Auth. List</a> </td>
        </tr>
        <tr> 
          <td height="17" valign="top" class="org_border_c_cell"><a href="0708150238.php" target="mainFrame">Placement 
            Auth. (Dir)</a></td>
        </tr>
        <tr> 
          <td height="17" valign="top" class="org_border_b_cell"><a href="0708150335.php" target="mainFrame">Placement 
            Auth. (Srvs)</a> </td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr> 
    <td height="34">&nbsp;</td>
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
          <td class="org_border_b_cell" height="15" valign="top" ><a href="../index.php" target="_parent">Home 
            Page</a></td>
        </tr>
      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="12"></td>
    <td></td>
  </tr>
</table>
</body>
</html>
