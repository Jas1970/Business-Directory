<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$srvs_id = $_REQUEST['service_dropdown'];
/*$pg=0;
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
	*/
$display_block = "<table width=\"100%\">";
$display_block .= "<tr>
						<td width=\"5%\"><center><font color=\"#990000\"></td>
						<td width=\"30%\"><center><font color=\"#990000\"></td>
						<td width=\"30%\"><center><font color=\"#990000\"></td>
						<td width=\"35%\"><center><font color=\"#990000\"></td>
				   </tr>";
//$display_block .= "<table>";

			$prodid = "select srvs_main.sr_id, srvs_main.cname, srvs_main.mail, srvs_NLetter.sr_id, srvs_NLetter.srvs_id, dir_srvs.srvs_id, dir_srvs.srvs_name
			from srvs_main, srvs_NLetter, dir_srvs where 
			dir_srvs.srvs_id='$srvs_id' and
			srvs_main.sr_id=srvs_NLetter.sr_id and
			dir_srvs.srvs_id=srvs_NLetter.srvs_id ";
			$prodrcd1 = mysql_query($prodid,$abc)or die(mysql_error());
			$rcdcount = mysql_num_rows($prodrcd1);
			$prodnum = abs(1);
		    
			
			while ($postsinfo = mysql_fetch_array($prodrcd1))
						{
						$cname = $postsinfo['cname'];
						$srvs_name = $postsinfo['srvs_name'];
						$srvs_mail	= $postsinfo['mail'];
						
						
						$display_block .= "
						<tr>
							<tr>
								<td width=\"5%\"><center><font color=\"#990000\">$prodnum</td>
								<td width=\"30%\"><font color=\"#990000\"><b>$cname </b></td>
								<td width=\"30%\"><font color=\"#990000\">$srvs_name</td>
								<td width=\"35%\"><font color=\"#990000\">$srvs_mail</td>
				   			</tr>";
						$prodnum++;
						}
			
				   
					 if($rcdcount==0)
						{
						
				$display_block .= "
						<tr>
							<td>
							</td>
							<td ><font color=\"Black\"><b></b></font>
							<font color=\"#660000\">Record Not Found Against Thist Product Category : $srvs_id</font>
							</td>
						</tr>";				
				}
	
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
