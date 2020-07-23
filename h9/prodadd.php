<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$chedup = "select prodnam from prod where prodnam='$_POST[prodname]'";
$rstchk = mysql_query($chedup,$abc);
$rcd = mysql_num_rows($rstchk);

if (mysql_num_rows($rstchk) > 0 ) 
		{
		print "<h4> Duplicate Record, Can't Add To Database <br>
		<a href=\"prod.php\" > Try Another One </a></h4>";
		}
		else
		{
		$insertSQL = "INSERT INTO prod (prodnam) VALUES ('$_POST[prodname]')";
			if (mysql_query($insertSQL, $abc)) 
				{
				
				print "<h4>Record Save, Add another One <br>
				<a href=\"prod.php\" > Click Here </a></h4>";
			    
				} 
			else 
				{
			    echo "something went wrong";
				}
		}
?>
