<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();
$query_city = "SELECT citid, citname FROM city ORDER BY citname ASC";
$city = mysql_query($query_city) or die(mysql_error());
$row_city = mysql_fetch_assoc($city);
$totalRows_city = mysql_num_rows($city);


$query_type = "SELECT * FROM prop_type ORDER BY type_name ASC";
$type = mysql_query($query_type) or die(mysql_error());
$row_type = mysql_fetch_assoc($type);
$totalRows_type = mysql_num_rows($type);
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
    <td width="225" height="191"  valign="bottom"> <form name="form1" method="post" action="0708150132.php" target="mainFrame">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td height="19" valign="bottom" class="org_border_t_cell"><div align="center">For</div></td>
          </tr>
          <tr>
            <td height="19" valign="bottom" class="org_border_c_cell"><div align="center">
                <select name="pfor" id="pfor" class="list_border small">
                  <option value="1">Buy</option>
                  <option value="2">Sel</option>
                  <option value="3" selected>Rent</option>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td height="19" valign="bottom" class="org_border_c_cell"><div align="center">Property 
                Type</div></td>
          </tr>
          <tr> 
            <td height="19" valign="bottom" class="org_border_c_cell"><div align="center"> 
                <select name="ptype" id="ptype" class="list_border small">
                  <?php
do {  
?>
                  <option value="<?php echo $row_type['type_id']?>"<?php if (!(strcmp($row_type['type_id'], $row_type['type_id']))) {echo "SELECTED";} ?>><?php echo $row_type['type_name']?></option>
                  <?php
} while ($row_type = mysql_fetch_assoc($type));
  $rows = mysql_num_rows($type);
  if($rows > 0) {
      mysql_data_seek($type, 0);
	  $row_type = mysql_fetch_assoc($type);
  }
?>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td height="19" valign="bottom" class="org_border_c_cell"><div align="center">In 
                City</div></td>
          </tr>
          <tr> 
            <td height="19" valign="bottom" class="org_border_c_cell"><div align="center"> 
                <select name="pcity" id="pcity" class="list_border small">
                 
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
												

		//										if($stcount<="1")
			//										{
			//										 
			//			 						print "<option value=\"$ctid\" class=\"redtitle\">";
			//									print "$stname</option>";

						 						print "<option value=\"$ctid\">";
												print "&nbsp;&nbsp;&nbsp;$citname </option>";
		 	//										}
			//										else
			//										{
			//															
												
			//														 
			//			 						print "<option value=\"$ctid\">";
			//									print "&nbsp;&nbsp;&nbsp;$citname </option>";
			//									
			///										}										
												$stcount++;	
											}				
										}	

				?>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td height="19" valign="bottom" class="org_border_c_cell"><div align="center">In 
                Budget</div></td>
          </tr>
          <tr> 
            <td height="19" valign="bottom" class="org_border_c_cell"><div align="center"> 
                <select name="pbudget" id="pbudget" class="list_border small">
                  <option value="1">Below 5 Lacs</option>
                  <option value="2">5 Lacs To 10 Lacs</option>
                  <option value="3">10 Lacs To 20 Lacs</option>
                  <option value="4">20 Lacs To 40 Lacs</option>
                  <option value="5">40 Lacs To 80 Lacs </option>
                  <option value="6">80 Lacs To 100 Lacs</option>
                  <option value="7">1 To 1.5 Crores</option>
                  <option value="8">1.5 To 2.0 Crores</option>
                  <option value="9">2.0 To 2.5 Crores</option>
                  <option value="10">2.5 To Above</option>
                  <option value="11">Negotiable</option>
                </select>
              </div></td>
          </tr>
          <tr> 
            <td height="10" class="org_border_c_cell">&nbsp;</td>
          </tr>
          <tr> 
            <td height="25" valign="bottom" class="org_border_c_cell"><div align="center"> 
                <input type="reset" name="Reset" value="Reset">
                <input type="submit" name="Submit2" value="Search">
              </div></td>
          </tr>
          <tr> 
            <td height="10" class="org_border_b_cell">&nbsp;</td>
          </tr>
        </table>
      </form></td>
  </tr>
  <tr> 
    <td height="14"></td>
  </tr>
  <tr>
    <td height="126" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
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
  <tr>
    <td height="5"></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($city);

mysql_free_result($type);
?>
