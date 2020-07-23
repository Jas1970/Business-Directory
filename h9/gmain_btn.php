<?php
session_start();
$sid = session_id();
$userid = $_SESSION['userid'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="219" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="174" height="270" valign="top"><table width="174px" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td class="org_border_t_cell" width="174" height="15" valign="top"><div align="left"><a href="cat.php" target="mainFrame">Category 
              Addition</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="cat_list2.php" target="mainFrame">Category 
              List</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="cat_del.php" target="mainFrame">Category 
              Del.</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="prod.php" target="mainFrame">Product 
              Addition</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="prod_list_slective2.php" target="mainFrame">Product 
          List</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="prod_del.php" target="mainFrame">Product 
          Del.</a></div></td>
        </tr>
		<tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="catprod_add.php" target="mainFrame">Category Product 
          Addition</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="Cat_sl3.php" target="mainFrame">Category Product 
          List</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="Cat_del_sl.php" target="mainFrame">Category Product 
              Del.</a></div></td>
        </tr>
        
        
        
        
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="city.php" target="mainFrame">City 
              Addition</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="State_sl2.php" target="mainFrame">City 
              List</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="State_del_sl.php" target="mainFrame">City 
              Del.</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="district.php" target="mainFrame">District 
              Addition</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="dist_list.php" target="mainFrame">District 
              List</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="district_del.php" target="mainFrame">District 
              Del</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="state.php" target="mainFrame">State 
              Addition</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="state_list.php" target="mainFrame">State 
              List</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="state_del.php" target="mainFrame">State 
              Del</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="country.php" target="mainFrame">Country 
              Addition</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_c_cell" height="15" valign="top"><div align="left"><a href="count_list.php" target="mainFrame">Country 
              List</a></div></td>
        </tr>
        <tr> 
          <td class="org_border_b_cell" height="15" valign="top"><div align="left"><a href="country_del.php" target="mainFrame">Country 
              Del</a></div></td>
        </tr>
      </table></td>
    <td width="1"></td>
    <td width="44"></td>
  </tr>
  <tr>
    <td height="11"></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="79" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
    <td height="349">&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
