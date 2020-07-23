<?php require_once('Connections/abc.php'); ?>
<?php
$Scompid = $_REQUEST['srvsid'];
mysql_select_db($database_abc,$abc) or die("unable to Open database");
if($Scompid<>"")
	{
		$sl_Srcd = "select * from srvs_main where cno='$Scompid'";
		$rd_Srcd = mysql_query($sl_Srcd,$abc);
		$rd_Snum = mysql_num_rows($rd_Srcd);
		if($rd_Snum<>"1")
			{
	  		header("Location: 0708150144.php?num=$Scompid");
			}
			else
			{
			$compid  = mysql_result($rd_Srcd,0,'sr_id');
			header("Location:  0708150301.php?ID=$compid");
			}
	}		
else
	{
		header("Location:  search.php");
	}
?>
