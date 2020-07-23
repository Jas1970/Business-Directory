<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$chedup = "select catname from catg where catname='$_POST[catname]'";
$rstchk = mysql_query($chedup,$abc);

$rcd = mysql_num_rows($rstchk);
if ($rcd > 0) 
		{
		print "<center> Duplicate record </center>";
		print "<center><a href=\"cat.php\">Try Another one </a></center>";
   	    exit;
		}
		else
		{
		$insertSQL = "INSERT INTO catg (catname) VALUES ('$_POST[catname]')";

			if (mysql_query($insertSQL, $abc)) 
				{
				print "<center> Record Saved To Database</center>";
				print "<center><a href=\"cat.php\">Enter Another one </a></center>";
				} 
			else 
				{
			    echo "something went wrong";
				}
		}
?>
