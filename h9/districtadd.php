<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$distname = $_REQUEST['districtnam'];
$count_code	= 	$_REQUEST['stid'];
$chedup = "select dstname from district where dstname='$distname' and stid='$count_code'";
$rstchk = mysql_query($chedup,$abc);
$rcd = mysql_num_rows($rstchk);
if ($rcd<>0 ) 
		{
		print "<h4> Duplicate Record, Can't Add To Database <br>
		<a href=\"district.php\" > Try Another One </a></h4>";
		}
		else
		{
			$insertSQL = "INSERT INTO district (dstname,stid) VALUES ('$_POST[districtnam]','$count_code')";
			if (mysql_query($insertSQL, $abc)) 
				{
				print "<h4>Record Save, Add Another One<br>
				<a href=\"district.php\" > Click Here </a></h4>";
				} 
			else 
				{
			    echo "something went wrong";
				}
		}
?>