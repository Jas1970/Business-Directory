<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc);
$select_rcd = "select distinct(cntid) from state";
$result_rcd = mysql_query($select_rcd,$abc);
$count_rcd = mysql_num_rows($result_rcd);
$display_block = "<center><strong> Country - State List </strong></center>";
$display_block .= "<hr> ";

$display_block .= "<table>";
$rownum = abs(1) ;
while ($posts_info = mysql_fetch_array($result_rcd))
		 {
			$countid = $posts_info['cntid'];
			$contst = "select * from country where cntid = '$countid'";
			$contrcd = mysql_query($contst,$abc);
			$contname = mysql_result($contrcd,0,'cntname');
			$stslt = "select distinct(stid) from state where cntid = '$countid'";
			$strcd = mysql_query($stslt,$abc);
				$display_block .= "
							<tr>
									<td><font color=\"#0000FF\"> $rownum . $contname </font></td>
							</tr>";
					$rnum = abs(1) ;
				
				while ($pinfo = mysql_fetch_array($strcd))
						{
						
						$st_id = $pinfo['stid'];
						
						$slst = "select stname from state where stid='$st_id' order by stname";
						$slrcd = mysql_query($slst,$abc);
			
					
						while ($ppinfo = mysql_fetch_array($slrcd))
							{
							$stname = $ppinfo['stname'];
						
							$display_block .= "
							<tr>
								<td> </td>
								<td><font color=\"#660000\">$rnum . $stname </font></td>
							</tr>";
							}
						$rnum++;

						}	
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
