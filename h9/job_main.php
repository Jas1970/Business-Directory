<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);
$query_jobname = "SELECT * FROM job_type ORDER BY jtype_name ASC";
$jobname = mysql_query($query_jobname, $abc) or die(mysql_error());
$row_jobname = mysql_fetch_assoc($jobname);
$totalRows_jobname = mysql_num_rows($jobname);

mysql_select_db($database_abc, $abc);
$query_jobgroup = "SELECT * FROM job_grp ORDER BY grp_name ASC";
$jobgroup = mysql_query($query_jobgroup, $abc) or die(mysql_error());
$row_jobgroup = mysql_fetch_assoc($jobgroup);
$totalRows_jobgroup = mysql_num_rows($jobgroup);

mysql_select_db($database_abc, $abc);
$query_jobinds = "SELECT * FROM job_inds ORDER BY inds_name ASC";
$jobinds = mysql_query($query_jobinds, $abc) or die(mysql_error());
$row_jobinds = mysql_fetch_assoc($jobinds);
$totalRows_jobinds = mysql_num_rows($jobinds);

mysql_select_db($database_abc, $abc);
$query_jobqual = "SELECT * FROM job_qual ORDER BY jqual_name ASC";
$jobqual = mysql_query($query_jobqual, $abc) or die(mysql_error());
$row_jobqual = mysql_fetch_assoc($jobqual);
$totalRows_jobqual = mysql_num_rows($jobqual);

mysql_select_db($database_abc, $abc);
$query_city = "SELECT citname FROM city ORDER BY citname ASC";
$city = mysql_query($query_city, $abc) or die(mysql_error());
$row_city = mysql_fetch_assoc($city);
$totalRows_city = mysql_num_rows($city);
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="form1" method="post" action="job_main_add.php">
  <table width="91%"  border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr> 
      <td colspan="3" class="org_border_box"><div align="center">Job Master Addition</div></td>
    </tr>
    <tr> 
      <td width="44%" class="org_border_l_cell">Job Name</td>
      <td width="0%" class="org_border_no_cell">:</td>
      <td width="56%" class="org_border_r_cell"><input name="jobname" type="text" class="list_border" id="jobname" size="45" maxlength="40"></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Job Name (only Record)</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><select name="jnrcd" class="list_border" id="jnrcd">
          <?php
do {  
?>
          <option value="<?php echo $row_jobname['jtype_name']?>"<?php if (!(strcmp($row_jobname['jtype_name'], $row_jobname['jtype_name']))) {echo "SELECTED";} ?>><?php echo $row_jobname['jtype_name']?></option>
          <?php
} while ($row_jobname = mysql_fetch_assoc($jobname));
  $rows = mysql_num_rows($jobname);
  if($rows > 0) {
      mysql_data_seek($jobname, 0);
	  $row_jobname = mysql_fetch_assoc($jobname);
  }
?>
        </select></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Job Group</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><select name="jobgrp" class="list_border" id="jobgrp" >
          <?php
do {  
?>
          <option value="<?php echo $row_jobgroup['grp_name']?>"<?php if (!(strcmp($row_jobgroup['grp_name'], $row_jobgroup['grp_name']))) {echo "SELECTED";} ?>><?php echo $row_jobgroup['grp_name']?></option>
          <?php
} while ($row_jobgroup = mysql_fetch_assoc($jobgroup));
  $rows = mysql_num_rows($jobgroup);
  if($rows > 0) {
      mysql_data_seek($jobgroup, 0);
	  $row_jobgroup = mysql_fetch_assoc($jobgroup);
  }
?>
        </select></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Job Industries</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><select name="jobinds" class="list_border" id="jobinds">
          <?php
do {  
?>
          <option value="<?php echo $row_jobinds['inds_name']?>"<?php if (!(strcmp($row_jobinds['inds_name'], $row_jobinds['inds_name']))) {echo "SELECTED";} ?>><?php echo $row_jobinds['inds_name']?></option>
          <?php
} while ($row_jobinds = mysql_fetch_assoc($jobinds));
  $rows = mysql_num_rows($jobinds);
  if($rows > 0) {
      mysql_data_seek($jobinds, 0);
	  $row_jobinds = mysql_fetch_assoc($jobinds);
  }
?>
        </select></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Job Min. Qualification</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><select name="jobqual" class="list_border" id="jobqual">
          <?php
do {  
?>
          <option value="<?php echo $row_jobqual['jqual_name']?>"<?php if (!(strcmp($row_jobqual['jqual_name'], $row_jobqual['jqual_name']))) {echo "SELECTED";} ?>><?php echo $row_jobqual['jqual_name']?></option>
          <?php
} while ($row_jobqual = mysql_fetch_assoc($jobqual));
  $rows = mysql_num_rows($jobqual);
  if($rows > 0) {
      mysql_data_seek($jobqual, 0);
	  $row_jobqual = mysql_fetch_assoc($jobqual);
  }
?>
        </select></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Minimum Age</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><input name="minage" type="text" class="list_border" id="minage" size="5" maxlength="2">
        Years </td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Maximum Age</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><input name="maxage" type="text" class="list_border" id="maxage" size="5" maxlength="2">
        Years </td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Job Experience Rqd.</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><input name="jobexp" type="text" class="list_border" id="jobexp" size="5" maxlength="2">
        Years</td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Job Salary Expected</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><input name="jobsal" type="text" class="list_border" id="jobsal" size="20" maxlength="15">
        Amt in Rs.</td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Job Part Time / Full Time</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><select name="jobpf" class="list_border" id="jobpf">
          <option value="2">Full Time</option>
          <option value="1">Part Time</option>
          <option value="3">Both</option>
        </select></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Advertisement for days</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><input name="advtdays" type="text" class="list_border" id="advtdays" size="5" maxlength="3">
        Days </td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">start Date</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><input name="advtstdt" type="text" class="list_border" id="advtstdt" size="15" maxlength="11"></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">ID No. (Product Or Service Comp.Id)</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><input name="compid" type="text" class="list_border" id="compid" size="15" maxlength="10"></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">Company Listing</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><select name="listing" class="list_border" id="listing">
          <option value="Service Providor">Service Providor</option>
          <option value="Product Directory">Product Directory</option>
        </select></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">City Name</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><select name="city_name" class="list_border" id="city_name">
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
    </tr>
    <tr> 
      <td class="org_border_l_cell">Numbre Of Vacancy</td>
      <td class="org_border_no_cell">:</td>
      <td class="org_border_r_cell"><input name="vanc" type="text" class="list_border" id="vanc" size="20" maxlength="10"></td>
    </tr>
    <tr> 
      <td class="org_border_l_cell">&nbsp;</td>
      <td class="org_border_no_cell">&nbsp;</td>
      <td class="org_border_r_cell">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="3" class="org_border_box"><div align="center"> 
          <input type="reset" name="Reset" value="Reset">
          <input type="submit" name="Submit2" value="Submit">
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($jobname);

mysql_free_result($jobgroup);

mysql_free_result($jobinds);

mysql_free_result($jobqual);

mysql_free_result($city);
?>
