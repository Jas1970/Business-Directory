<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$catid	= $_POST['catid'];
$prodid	= $_POST['prod'];

echo "catid is : $catid";
echo "prodid is : $prodid";

$chedup = "select * from catprd where catid='$catid' and prodid = '$prodid'";
$rstchk = mysql_query($chedup,$abc)or die(mysql_error());
$rcd = mysql_num_rows($rstchk);
echo  "Record Count : $rcd";
if ($rcd > 0 ) 
		{
		print "<h4> Duplicate Record, Can't Add To Database <br>
		<a href=\"catprod_add.php\" > Try Another One </a></h4>";
		}
		else
		{
		$insertSQL = "INSERT INTO catprd (catid, prodid ) VALUES ('$catid','$prodid')";
			if (mysql_query($insertSQL, $abc)) 
				{
				
				print "<h4>Record Save, Add another One <br>
				<a href=\"catprod_add.php\" > Click Here </a></h4>";
			    
				} 
			else 
				{
			    echo "something went wrong";
				}
		}
?>
