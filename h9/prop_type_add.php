<html>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
<head>

</head>
<body>

</body>
</html>



<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$chedup = "select type_name from prop_type where type_name='$_POST[type_name]'";
$rstchk = mysql_query($chedup,$abc);

$rcd = mysql_num_rows($rstchk);
if ($rcd > 0) 
		{
			print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\" align=\"center\">Record Already Exist, Try Another one</td</tr>";
			print "<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"prop_type.php\"> Click Here </a></td></tr>";
			print "</table >";
	 	    exit;
		}
		else
		{
		$insertSQL = "INSERT INTO prop_type(type_name) VALUES ('$_POST[type_name]')";

			if (mysql_query($insertSQL, $abc)) 
				{
				print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
				print "<tr><td class=\"org_border_t_cell\" align=\"center\">Record Sucessfully Added, add another one</td</tr>";
				print "<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"prop_type.php\"> Click Here </a></td></tr>";
				print "</table>";
	 	    	exit;
			   } 
			else 
				{
				print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
				print "<tr><td class=\"org_border_t_cell\" align=\"center\">something went wrong, Contact Directory Administrator</td</tr>";
				print "<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"prop_type.php\"> Click Here </a></td></tr>";
				print "</table>";
	 	    	exit;
				}
		}
?>
