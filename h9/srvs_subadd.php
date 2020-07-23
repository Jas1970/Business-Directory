<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$chedup = "select sname from dir_subsrvs where sname='$_POST[subsname]' and srvs_id='$_POST[srvsname]'";
$rstchk = mysql_query($chedup,$abc);
$rcd = mysql_num_rows($rstchk);
echo $rcd;
if (mysql_num_rows($rstchk) > 0 ) 
		{
		print "<h4> Duplicate Record, Can't Add To Database <br>
		<a href=\"srvs_sub.php\" > Try Another One </a></h4>";
		}
		else
		{
		$insertSQL = "INSERT INTO dir_subsrvs (srvs_id, sname) VALUES ('$_POST[srvsname]','$_POST[subsname]')";
			if (mysql_query($insertSQL, $abc)) 
				{
				
				print "<h4>Record Save, Add another One <br>
				<a href=\"srvs_sub.php\" > Click Here </a></h4>";
			    
				} 
			else 
				{
			    echo "something went wrong";
				}
		}
?>
