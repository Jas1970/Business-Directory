<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();
$Scompid = $_REQUEST['dirprod'];
if($Scompid<>"")
	{
	$sl_Srcd = "select * from sitemgr where sadd='$Scompid'";
		$rd_Srcd = mysql_query($sl_Srcd);
		$rd_Snum = mysql_num_rows($rd_Srcd);
		if($rd_Snum<>"1")
			{
	  		header("Location: search.php");
			}
			else
			{
				$cadd	 = mysql_result($rd_Srcd,0,'sadd');
				$compid  = mysql_result($rd_Srcd,0,'num');
				$ctype   = mysql_result($rd_Srcd,0,'type');
				if($ctype=="SRVS")
					{	
						$slsite = "select * from srvs_main where cno='$cadd'";
						$rdsite = mysql_query($slsite);
						$ids 	= mysql_result($rdsite,0,'sr_id');
						header("Location:  0708150301.php?ID=$ids");
					}
					else
					{
						header("Location:  0708150201.php?ID=$compid");
					}
					
			}
	}
else
	{
	header("Location:  search.php");
	}
	
	$db->close();
?>

