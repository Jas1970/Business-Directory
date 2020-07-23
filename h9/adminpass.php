<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc);
$select_rcd = "select * from usr_login";
$result_rcd = mysql_query($select_rcd,$abc);
$count_rcd = mysql_num_rows($result_rcd);
$rownum = abs(1) ;
while ($posts_info = mysql_fetch_array($result_rcd))
		 {
			$usrid = $posts_info['ulogin'];
			$usrpwd = $posts_info['upwd'];
			$upd = base64_decode($usrpwd);	
			$display_block = "<table>
				<tr>
					<td width=\"250\"><font color=\"#0000FF\">$rownum . $usrid   :    $upd</font></td>
				</tr></table>" ;
		$rownum++;	

			}	
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
