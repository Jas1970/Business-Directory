<?php require_once('Connections/abc.php'); ?>
<?php
$catid = $_GET['catid'];

$line_num = 7;  
		$max = $line_num;	// configure how many rows of message display per page
		$pg = $_REQUEST['pg'];

		$cur_rows = 0;
		$max_rows = $max;
	if($pg!=1)
		{
		for($i=1;$i<$pg;$i++)
		{
			$cur_rows=$cur_rows+$max;
			$max_rows=$max_rows+$max;
		}
	}
	
$display_block = "<table>";
$display_block .= "<tr><td width=\"650\"><center><font color=\"#990000\"><strong> Product List </strong> </font></center></td></tr>";
$display_block .= "<table>";

			$prodid = "select prodnam from prod order by prodnam";
			$prodrcd = mysql_query($prodid,$abc);
			$rcdcount = mysql_num_rows($prodrcd);
			if($rcdcount==0)
				{
						
				$display_block .= "
						<tr>
							<td>
							</td>
							<td width=\"360\"><font color=\"Black\"><b></b></font>
							<font color=\"#660000\">Record Not Found Against Thist Product Category</font>
							</td>
						</tr>";				
				}
				else
				{
				$prodnum = abs(1);
				while ($postsinfo = mysql_fetch_array($prodrcd))
						{
						$prodname = $postsinfo['prodnam'];
						
	//					$selprodnm = "select prodnam from prod where prodid= '$prdid'";
//						$rcdprodnm = mysql_query($selprodnm,$abc);
	//					$prodname = mysql_result($rcdprodnm,0,'prodnam');

						$display_block .= "
						<tr>
							<td>
							</td>
							<td width=\"360\"><font color=\"Black\"><b>$prodnum. </b></font>
							<font color=\"#660000\">$prodname</font>
							</td>
						</tr>";
						$prodnum++;
						}
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
