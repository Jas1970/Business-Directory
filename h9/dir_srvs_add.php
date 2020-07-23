<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$chedup = "select srvs_name from dir_srvs where srvs_name='$_POST[servname]'";
$rstchk = mysql_query($chedup,$abc);

$rcd = mysql_num_rows($rstchk);
if ($rcd > 0) 
		{
		
		 print "<center><h3> Duplicate Record<br>
						<a href=\"dir_srvs.php\"> Try Another One </a> </h3></center>";
				
		//header("Location: cat_dup_recd.php");
   	    exit;
		}
		else
		{
		$insertSQL = "INSERT INTO dir_srvs(srvs_name) VALUES ('$_POST[servname]')";

			if (mysql_query($insertSQL, $abc)) 
				{
			    print "<center> <h3> Record Suessfully Added <br>
						<a href=\"dir_srvs.php\"> Add Another Record </a>";
				//header("Location: cat_save_recd.php");
				} 
			else 
				{
			    echo "something went wrong";
				}
		}
?>
