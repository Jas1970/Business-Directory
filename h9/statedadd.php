<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$contid_info = "select cntid from country where cntname= '$_POST[contname]'";
$contrcd = mysql_query($contid_info,$abc);
$count_code = mysql_result($contrcd,0,'cntid');

$chedup = "select stname from state where stname='$_POST[statename]' and cntid='$count_code'";
$rstchk = mysql_query($chedup,$abc);

$rcd = mysql_num_rows($rstchk);
if (mysql_num_rows($rstchk) > 0 ) 
		{
		print "<center><h4> Duplicate Record, Can't Add To Database <br>
		<a href=\"state.php\" > Try Another One </a></h4></center>";
   	    exit;
		}
		else
		{
		$insertSQL = "INSERT INTO state (stname,cntid) VALUES ('$_POST[statename]','$count_code')";
			if (mysql_query($insertSQL, $abc)) 
				{
				print "<center><h4> Record Sucessfully Added To Database <br>
				<a href=\"state.php\" > Add Another Record </a></h4></center>";
   	    		exit;
				} 
			else 
				{
			    print "something went wrong";
				}
		}
?>
