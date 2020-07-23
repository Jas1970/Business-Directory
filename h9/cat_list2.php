<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc);
$select_rcd = "select * from catg order by catname";
$result_rcd = mysql_query($select_rcd,$abc);
$count_rcd = mysql_num_rows($result_rcd);

$display_block = "<table>";
$display_block .= "<tr><td width=\"620\"><center><font color=\"#990000\"><strong> Category List </strong> </font></center></td></tr>";
$display_block .= "<table>";
$rownum = abs(1) ;
while ($posts_info = mysql_fetch_array($result_rcd))
		 {
			$cname = $posts_info['catname'];

			$display_block .= "
				<tr>
					<td  width=\"620\" bgcolor=\"EEEEEE\"> <font color=\"#0000FF\">$rownum. $cname </font></td>
				</tr> " ;
		$rownum++;	

			}	

$display_block .= "</table>";
$display_block .= "<br>";
$display_block .= "Record count =$count_rcd";
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
<p>&nbsp;</p></body>
</html>
