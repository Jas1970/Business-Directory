<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc);
$select_rcd = "select srvs_name from dir_srvs";
$result_rcd = mysql_query($select_rcd,$abc);
$count_rcd = mysql_num_rows($result_rcd);
$display_block = "<center><font color=\"#990000\"><h3><strong> Services List </strong></h3> </font></center>";
$display_block .= "<hr>";
$display_block .= "<table>";
$rownum = abs(1) ;
while ($posts_info = mysql_fetch_array($result_rcd))
		 {
			$sname = $posts_info['srvs_name'];

			$display_block .= "
				<tr>
					<td><font color=\"#0000FF\"> $rownum</font> </td>
					<td> </td>
					<td> <font color=\"#0000FF\">$sname </font></td>
				</tr> " ;
		$rownum++;	

			}	

$display_block .= "</table>";
$display_block .= "<hr>";

?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php   print $display_block; ?>
</body>
</html>
