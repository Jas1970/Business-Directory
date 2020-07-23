<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$chedup = "select cntname from country where cntname='$_POST[contname]'";
$rstchk = mysql_query($chedup,$abc);

$rcd = mysql_num_rows($rstchk);
echo $rcd;
if ($rcd > 0) 
		{
		
		print "<center><h3> Duplicate Record, Can't Add To Database <br>
		<a href=\"country.php\" > Try Another One </a></h3></center>";
		}
		else
		{
		$insertSQL = "INSERT INTO country (cntname) VALUES ('$_POST[contname]')";

			if (mysql_query($insertSQL, $abc)) 
				{

				print "<center><h3> Record Save, Add Another One<br>
				<a href=\"country.php\" > Click here </a></h3></center>";
			    } 
			else 
				{
			    echo "something went wrong";
				}
		}
?>
