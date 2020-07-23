<?php
include "include/masterdatasrvs.php"; 
include "include/srsess.php";
$db= new DB();
$db->open();

	$srvs_id  	= $_REQUEST['srname'];
	$city		= $_REQUEST['city'];
	$pname		= $_REQUEST['pname'];
	$pdesc  	= $_REQUEST['pdesc'];
	
if($pname<>"")
	{
	

	$slprdt = "select * from srvs_sadvts where mids = '$srvsid' and sname ='$pname' and city='$city'";
	$rdprdt = mysql_query($slprdt);
	$pcount = mysql_num_rows($rdprdt);
	if($pcount<>"")
		{
				$msg = "Duplicate Record can not be Inserted";
		}
		else
		{
		$insprd = "insert into srvs_sadvts(mids, srvsid, city, sname, msg)
				values
				('$srvsid', '$srvs_id', '$city', '$pname', '$pdesc')";
		$rdprd = mysql_query($insprd) or die(mysql_error());
		
		header("Location: 0708150345.php?ID=$srvsid&SID=$sid&rand=$adms");
		exit;
		}
	}
	
	
?>