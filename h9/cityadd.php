<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$citynam = $_POST['citynam'];
$dstname = $_POST['distname'];

$contid_info = "select * from district where dstid= '$_POST[distname]'";
$contrcd = mysql_query($contid_info,$abc);
$dstid = mysql_result($contrcd,0,'dstid');



$chedup = "select citname from city where citname='$citynam' and dstid='$dstid'";
$rstchk = mysql_query($chedup,$abc);

$rcd = mysql_num_rows($rstchk);
if (mysql_num_rows($rstchk) > 0 ) 
		{

		print "<center><h4> Duplicate Record, Can't Add To Database <br>
		<a href=\"city.php\" > Try Another One </a></h4></center>";
   	    exit;
		}
		else
		{
		$insertSQL = "INSERT INTO city (citname,dstid) VALUES ('$citynam','$dstid')";
			if (mysql_query($insertSQL, $abc)) 
				{
				print "<center><h4> Record Sucessfully Added To Database $citynam, $dstname, $dstid <br>
						<a href=\"city.php\" > Add Another Record </a></h4></center>";
				} 
			else 
				{
			    echo "something went wrong";
				}
		}
?>
