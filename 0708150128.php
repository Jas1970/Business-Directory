<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();

$query_jbname = "SELECT * FROM job_type ORDER BY jtype_name ASC";
$jbname = mysql_query($query_jbname) or die(mysql_error());
$row_jbname = mysql_fetch_assoc($jbname);
$totalRows_jbname = mysql_num_rows($jbname);


$query_jbgrp = "SELECT * FROM job_grp ORDER BY grp_name ASC";
$jbgrp = mysql_query($query_jbgrp) or die(mysql_error());
$row_jbgrp = mysql_fetch_assoc($jbgrp);
$totalRows_jbgrp = mysql_num_rows($jbgrp);


$query_city = "SELECT citid, citname FROM city ORDER BY citname ASC";
$city = mysql_query($query_city) or die(mysql_error());
$row_city = mysql_fetch_assoc($city);
$totalRows_city = mysql_num_rows($city);


$query_jinds = "SELECT * FROM job_inds ORDER BY inds_name ASC";
$jinds = mysql_query($query_jinds) or die(mysql_error());
$row_jinds = mysql_fetch_assoc($jinds);
$totalRows_jinds = mysql_num_rows($jinds);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="225" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="225" height="213" valign="top"> 
	<form name="form1" method="post" action="0708150126.php" target="mainFrame">
        <table width="225px" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="225" height="21" class="org_border_t_cell" align="center">Job 
              Name</div></td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="org_border_c_cell" align="center"> 
              <select name="jname" id="jname" class="list_border small">
                <?php
do {  
?>
                <option value="<?php echo $row_jbname['jtype_id']?>"<?php if (!(strcmp($row_jbname['jtype_id'], $row_jbname['jtype_name']))) {echo "SELECTED";} ?>><?php echo $row_jbname['jtype_name']?></option>
                <?php
} while ($row_jbname = mysql_fetch_assoc($jbname));
  $rows = mysql_num_rows($jbname);
  if($rows > 0) {
      mysql_data_seek($jbname, 0);
	  $row_jbname = mysql_fetch_assoc($jbname);
  }
?>
              </select> </td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="org_border_c_cell"> <div align="center">Industries 
                Selection</div></td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="org_border_c_cell"> <div align="center"> 
                <select name="inds" class="list_border small" id="inds">
                  <?php
do {  
?>
                  <option value="<?php echo $row_jinds['inds_id']?>"<?php if (!(strcmp($row_jinds['inds_id'], $row_jinds['inds_name']))) {echo "SELECTED";} ?>><?php echo $row_jinds['inds_name']?></option>
                  <?php
} while ($row_jinds = mysql_fetch_assoc($jinds));
  $rows = mysql_num_rows($jinds);
  if($rows > 0) {
      mysql_data_seek($jinds, 0);
	  $row_jinds = mysql_fetch_assoc($jinds);
  }
?>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="org_border_c_cell"> <div align="center">City 
                Selection</div></td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="org_border_c_cell"> <div align="center"> 
                <select name="city" class="list_border small" id="city">
                   <?php
							
							$slstate = "select * from state order by stname";
							$rdslstate = mysql_query($slstate);
							while($posts_info = mysql_fetch_array($rdslstate))
								{
									$stid = $posts_info['stid'];				
									$stname = $posts_info['stname'];				
						 			
									$slcity = "select * from city, district 
												where district.stid='$stid' and
													  city.dstid = district.dstid order by city.citname";
									$rdslcity = mysql_query($slcity);
										$stcount = abs(1);
										while($pinfo = mysql_fetch_array($rdslcity))
											{

												$ctid = $pinfo['citid'];				
												$citname = $pinfo['citname'];
												

												//if($stcount<="1")
												//	{
													 
						 						//print "<option value=\"$ctid\" class=\"redtitle\">";
												//print "$stname</option>";

						 						print "<option value=\"$ctid\">";
												print "&nbsp;&nbsp;&nbsp;$citname </option>";
		 										//	}
												//	else
												//	{
																		
												
																	 
						 					//	print "<option value=\"$ctid\">";
											//	print "&nbsp;&nbsp;&nbsp;$citname </option>";
											//	
											//		}										
												$stcount++;	
											}				
										}	

				?>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="org_border_c_cell"> <div align="center">Job 
                Type</div></td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="org_border_c_cell" align="center"> 
              <select name="jtype" id="jtype" class="list_border small" >
                <option value="1">Full Time</option>
                <option value="2">Part Time</option>
                <option value="3">Both</option>
              </select> </td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="org_border_c_cell"> <div align="center"> 
                <input type="submit" name="Submit" value="Search">
              </div></td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
        </table>
      </form></td>
  </tr>
  <tr> 
    <td height="147" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="175" height="21" valign="top" class="org_border_t_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
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
      </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($jbname);

mysql_free_result($jbgrp);

mysql_free_result($city);

mysql_free_result($jinds);
?>
