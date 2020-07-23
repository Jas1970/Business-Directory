<?php require_once('Connections/abc.php'); ?>
<?php

mysql_select_db($database_abc,$abc);
$select_rcd = "select inds_name from job_inds order by inds_name";
$result_rcd = mysql_query($select_rcd,$abc);
$count_rcd = mysql_num_rows($result_rcd);
$display_block = "<table width=\"430px\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
$display_block .= "<tr><td class=\"org_border_box\" width=\"430px\" colspan=\"2\"><center><font color=\"#990000\"><strong> Industries Name List</strong> </font></center></td></tr>";
$rownum = abs(1) ;
while ($posts_info = mysql_fetch_array($result_rcd))
		 {
			$indsname = $posts_info['inds_name'];

			$display_block .= "
				<tr>
					<td width=\"50px\" class=\"org_border_l_cell\" align=\"center\"><font color=\"#0000FF\"> $rownum</font> </td>
					<td width=\"380px\" class=\"org_border_r_cell\"> <font color=\"#0000FF\">$indsname </font></td>

				</tr> " ;
		$rownum++;	
			}	

$display_block .= "<tr><td class=\"org_border_b_cell\" width=\"430px\" colspan=\"2\">&nbsp;</td></tr> </table>";
$display_block .= "</table>";


?>

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php   print $display_block; ?>
<p>&nbsp;</p></body>
</html>
