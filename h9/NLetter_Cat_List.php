<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$catid = $_REQUEST['category_dropdown'];
$display_block = "<table width=\"100%\">";
$display_block .= "<tr>
						<td width=\"5%\"><center><font color=\"#990000\"></td>
						<td width=\"30%\"><center><font color=\"#990000\"></td>
						<td width=\"30%\"><center><font color=\"#990000\"></td>
						<td width=\"35%\"><center><font color=\"#990000\"></td>
				   </tr>";
//$display_block .= "<table>";

			$prodid = "select dir_main.dir_id, dir_main.dir_cname, dir_nletter.dir_id, catg.catid, catg.catname, dir_nletter.cat_id ,
						dir_add.dir_id, dir_add.dir_mail
			from dir_nletter, dir_main, catg, dir_add where 
			catg.catid='$catid' and
			dir_add.dir_id = dir_nletter.dir_id and
			catg.catid=dir_nletter.cat_id and
			dir_nletter.dir_id=dir_main.dir_id";
			$prodrcd1 = mysql_query($prodid,$abc)or die(mysql_error());
			$rcdcount = mysql_num_rows($prodrcd1);
			$prodnum = abs(1);
		    
			
			while ($postsinfo = mysql_fetch_array($prodrcd1))
						{
						$cname = $postsinfo['dir_cname'];
						$cat_name = $postsinfo['catname'];
						$dir_mail	= $postsinfo['dir_mail'];
						
						
						$display_block .= "
						<tr>
							<tr>
								<td width=\"5%\"><center><font color=\"#990000\">$prodnum</td>
								<td width=\"30%\"><font color=\"#990000\"><b>$cname </b></td>
								<td width=\"30%\"><font color=\"#990000\">$cat_name</td>
								<td width=\"35%\"><font color=\"#990000\">$dir_mail</td>
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
							<font color=\"#660000\">Record Not Found Against Thist Product Category : $catid</font>
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
