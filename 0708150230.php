<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';




///========================================================== Page Authorisation

$fho		= $_REQUEST['fho'];
$slfho  = "select * from dir_fho where dir_id='$rstid'";
$rdfho  = mysql_query($slfho);
$rcount = mysql_num_rows($rdfho);
if($rcount<>"0")
	{
		$upfhodet	= "update dir_fho
						set fho = '$fho'
						where dir_id='$rstid'";
		if($rdupfho    = mysql_query($upfhodet))
					{
					 header("Location: 0708150229.php?ID=$rstid&SID=$sid&rand=$adms;");
					 exit;
					 }
					 else
					{
					header("Location: 0708150229.php?ID=$rstid&SID=$sid&rand=$adms;");
					exit;
					}			   			
	}
	else
	{
		$insfho = "insert into dir_fho(dir_id, fho, rfd, rtd)
						values
						('$rstid','$fho', now(), now())";
		if($rcdprofile = mysql_query($insfho))
					{
				   header("Location: 0708150229.php?ID=$rstid&SID=$sid&rand=$adms;");
				   exit;
				  }
				 else
		   			{
					header("Location: 0708150229.php?ID=$rstid&SID=$sid&rand=$adms;");
					exit;
					}			   			
	}						
?>