<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc);
$stname = "$_POST[stname]";

$stslt = "select * from state where stname = '$stname'";
$strcd = mysql_query($stslt,$abc);
$st_id = mysql_result($strcd,0,'stid');

$display_block = "<center><strong>State-District-City List</strong></center>";
$display_block .= "<hr> ";
$display_block .= "<table>";
$display_block .= "<tr>
				   		<td> </td>
						<td><font color=\"#660000\"><b>$stname</b></font></td>
				   </tr>";

$distidsl = "select distinct(dstid) from district where stid='$st_id' order by dstname ";
$distidrd = mysql_query($distidsl,$abc);

$rownum = abs(1) ;
while ($infos = mysql_fetch_array($distidrd))
							{
								$disid = $infos['dstid'];								
								$select_rcd = "select dstname from district where dstid='$disid'";
								$result_rcd = mysql_query($select_rcd,$abc);
								$distname = mysql_result($result_rcd,0,'dstname');
			
								$display_block .= "
									<tr>
										<td> </td>
										<td> </td>
										<td><font color=\"#336600\">$rownum . $distname </font></td>
									</tr>";
								$ctselc = "select distinct(citid) from city where dstid='$disid'";
								$ctselr = mysql_query($ctselc,$abc);
								
								$aas = abs(1);	
								while ($infoss = mysql_fetch_array($ctselr))
									{
									$cits = $infoss['citid'];
									$select_crcd = "select citname from city where citid = '$cits'";
									$result_crcd = mysql_query($select_crcd,$abc);
									$cname = mysql_result($result_crcd,0,'citname');
									$display_block .= "
										<tr>
										<td> </td>
										<td> </td>
										<td> </td>
										<td><font color=\"#FF0000\">$aas . $cname </font></td>
										</tr>" ;
										
									$aas++;
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
