<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc);
$srvsid = "$_POST[srvsname]";
$catsl = "select * from dir_subsrvs where srvs_id='$srvsid'";
$catrd = mysql_query($catsl,$abc);

$display_block = "<table>";
$display_block .= "<tr><td width=\"750\"><center><font color=\"#990000\"><strong> Service List Sub-Group Wise </strong> </font></center></td></tr>";
$display_block .= "<table>";
$rownum = abs(1);
while ($posts_info = mysql_fetch_array($catrd))
		 {
			$srvsname = $posts_info['sname'];

			$display_block .= "<tr>
								<td width=\"750\">
									<font color=\"#0000FF\"><strong>$rownum  </strong></font>
									<font color=\"#0000FF\"><strong> $srvsname </strong></font>
								</td> 
							</tr>";
				$rownum++;	

		}

$display_block .= "</table>";
$display_block .= "<br>";
$display_block .= "<table width=\"650px\" border=\"0\" cellpadding=\"0\" cellspacing=\"4\">";
$display_block .= "<tr><td width=\"100\" height=\"4px\" bgcolor=\"#990000\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#FF6600\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#33CC00\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#00FFCC\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#FFFF00\"></td>";
$display_block .= "<td width=\"100\" bgcolor=\"#FF9999\"></td></tr>";
$display_block .= "</table>";
?>

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body>
<?php   print $display_block; ?>
</body>
</html>
