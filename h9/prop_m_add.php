<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);
$query_city = "SELECT citname FROM city ORDER BY citname ASC";
$city = mysql_query($query_city, $abc) or die(mysql_error());
$row_city = mysql_fetch_assoc($city);
$totalRows_city = mysql_num_rows($city);

mysql_select_db($database_abc, $abc);
$query_dist = "SELECT dstname FROM district ORDER BY dstname ASC";
$dist = mysql_query($query_dist, $abc) or die(mysql_error());
$row_dist = mysql_fetch_assoc($dist);
$totalRows_dist = mysql_num_rows($dist);

mysql_select_db($database_abc, $abc);
$query_state = "SELECT stname FROM `state` ORDER BY stname ASC";
$state = mysql_query($query_state, $abc) or die(mysql_error());
$row_state = mysql_fetch_assoc($state);
$totalRows_state = mysql_num_rows($state);

mysql_select_db($database_abc, $abc);
$query_type = "SELECT type_name FROM prop_type ORDER BY type_name ASC";
$type = mysql_query($query_type, $abc) or die(mysql_error());
$row_type = mysql_fetch_assoc($type);
$totalRows_type = mysql_num_rows($type);
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="622" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="593" height="17"></td>
    <td width="29"></td>
  </tr>
  <tr> 
    <td height="317" valign="top"> <form name="form1" method="post" action="prop_main_r_add.php">
        <table width="593" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td height="20" colspan="3" class="org_border_box" >&nbsp;</td>
            <td width="11" >&nbsp;</td>
          </tr>
          <tr> 
            <td width="204" height="19" valign="top" class="org_border_l_cell">Property 
              Type</td>
            <td width="24" valign="top" class="org_border_no_cell">:</td>
            <td width="354" valign="top" class="org_border_r_cell"><select name="prop_type" id="prop_type">
                <?php
do {  
?>
                <option value="<?php echo $row_type['type_name']?>"<?php if (!(strcmp($row_type['type_name'], $row_type['type_name']))) {echo "SELECTED";} ?>><?php echo $row_type['type_name']?></option>
                <?php
} while ($row_type = mysql_fetch_assoc($type));
  $rows = mysql_num_rows($type);
  if($rows > 0) {
      mysql_data_seek($type, 0);
	  $row_type = mysql_fetch_assoc($type);
  }
?>
              </select></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">Property Want 
              To</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><select name="prop_wt" id="prop_wt">
                <option value="Buy">Buy</option>
                <option value="Sel">Sel</option>
                <option value="Rent">Rent</option>
              </select></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">Property Approx 
              Amount</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><input name="prop_price" type="text" id="prop_price"></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">Property Area</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><input name="prop_area" type="text" id="prop_area"> 
              <select name="prop_area_type" id="prop_area_type">
                <option value="Sq.Ft.">Sq.Ft.</option>
                <option value="Sq.Yd.">Sq.Yd.</option>
                <option value="Acre">Acre</option>
                <option value="Bedroom">Bedroom</option>
                <option value="Marla">Marla</option>
                <option value="Kanal">Kanal</option>
                <option value="Sq.Mt.">Sq.Mt.</option>
              </select></td>
            <td></td>
          </tr>
          <tr>
            <td height="19" valign="top" class="org_border_l_cell">Property Relate 
              you Are </td>
            <td valign="top" class="org_border_no_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td valign="top" class="org_border_r_cell"><select name="prop_owner" id="prop_owner">
                <option value="Owner">Owner</option>
                <option value="Agent">Agent</option>
                <option value="Property Dealer">Property Dealer</option>
              </select></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">Property Location</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><input name="prop_location" type="text" id="prop_location" size="50" maxlength="45"></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">Property Address</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><input name="prop_add1" type="text" id="prop_add1" size="40" maxlength="35"></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><input name="prop_add2" type="text" id="prop_add2" size="40" maxlength="35"></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">City</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><select name="prop_city" id="prop_city">
                <?php
do {  
?>
                <option value="<?php echo $row_city['citname']?>"<?php if (!(strcmp($row_city['citname'], $row_city['citname']))) {echo "SELECTED";} ?>><?php echo $row_city['citname']?></option>
                <?php
} while ($row_city = mysql_fetch_assoc($city));
  $rows = mysql_num_rows($city);
  if($rows > 0) {
      mysql_data_seek($city, 0);
	  $row_city = mysql_fetch_assoc($city);
  }
?>
              </select></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">District</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><select name="prop_dist" id="prop_dist">
                <?php
do {  
?>
                <option value="<?php echo $row_dist['dstname']?>"<?php if (!(strcmp($row_dist['dstname'], $row_dist['dstname']))) {echo "SELECTED";} ?>><?php echo $row_dist['dstname']?></option>
                <?php
} while ($row_dist = mysql_fetch_assoc($dist));
  $rows = mysql_num_rows($dist);
  if($rows > 0) {
      mysql_data_seek($dist, 0);
	  $row_dist = mysql_fetch_assoc($dist);
  }
?>
              </select></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">State</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><select name="prop_state" id="prop_state">
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
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td valign="top" class="org_border_no_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">Company Type</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><select name="prop_comp_type" id="prop_comp_type">
                <option value="Business Directory">Business Directory</option>
                <option value="Service Providor">Service Providor</option>
              </select></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">Company ID</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><input name="prop_comp_id" type="text" id="prop_comp_id"></td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">Advt. Days</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><input name="prop_advt_days" type="text" id="prop_advt_days" size="5" maxlength="3">
              Days</td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" valign="top" class="org_border_l_cell">From Date</td>
            <td valign="top" class="org_border_no_cell">:</td>
            <td valign="top" class="org_border_r_cell"><input name="prop_fr_dt" type="text" id="prop_fr_dt">
              (yyyy/mm/dd)</td>
            <td></td>
          </tr>
          <tr> 
            <td height="19" colspan="3" valign="top" class="org_border_box"><div align="center"> 
                <input type="reset" name="Reset" value="Reset">
                <input type="submit" name="Submit2" value="Submit">
              </div></td>
            <td></td>
          </tr>
          <tr> 
            <td height="14"></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </form></td>
    <td></td>
  </tr>
  <tr> 
    <td height="2"></td>
    <td></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($city);

mysql_free_result($dist);

mysql_free_result($state);

mysql_free_result($type);
?>
