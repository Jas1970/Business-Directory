<?php require_once('Connections/abc.php'); ?>
<?php
$catid = $_REQUEST['catid'];

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

			$prodid = "select prodid from catprd where catid='$catid'";
			$prodrcd1 = mysql_query($prodid,$abc)or die(mysql_error());
			$rcdcount = mysql_num_rows($prodrcd1);
			$prodnum = abs(1);
		    
			
			while ($postsinfo = mysql_fetch_array($prodrcd1))
						{
						$prodids = $postsinfo['prodid'];
						$slprodname = "select prodnam from prod where prodid='$prodids'";
						$prodrcd = mysql_query($slprodname,$abc);
						$prodname = mysql_result($prodrcd,0,'prodnam');
						
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
			
				   
					 if($rcdcount==0)
						{
						
				$display_block .= "
						<tr>
							<td>
							</td>
							<td width=\"360\"><font color=\"Black\"><b></b></font>
							<font color=\"#660000\">Record Not Found Against Thist Product Category : $catid</font>
							</td>
						</tr>";				
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
