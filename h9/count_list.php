<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc);
$select_rcd = "select cntname from country order by cntname";
$result_rcd = mysql_query($select_rcd,$abc);
$count_rcd = mysql_num_rows($result_rcd);
$display_block = "<strong> Country List</strong>";
$display_block .= "<table width=\"250\">";
$display_block .= "<tr><td width=\"250\"> <hr> </td></tr>";
$rownum = abs(1) ;
while ($posts_info = mysql_fetch_array($result_rcd))
		 {
			$contname = $posts_info['cntname'];
			$display_block .= "
				<tr>
					<td width=\"250\"><font color=\"#0000FF\">$rownum . $contname</font></td>
				</tr>" ;
		$rownum++;	

			}	
$display_block .= "<tr> <td> <hr> </td></tr>";
$display_block .= "</table>";


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
