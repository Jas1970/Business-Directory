<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';

$srvsid 		= $_REQUEST['ID'];
$sid		= $_GET['SID'];
$fho		= $_REQUEST['fho'];
$slfho  = "select * from srvs_fho where sr_id='$srvsid'";
$rdfho  = mysql_query($slfho);
$rcount = mysql_num_rows($rdfho);
if($rcount<>"0")
	{
		$upfhodet	= "update srvs_fho
					set fho = '$fho'
						where sr_id='$srvsid'";
		if($rdupfho    = mysql_query($upfhodet))
					{
					 header("Location: 0708150328.php?ID=$srvsid&SID=$sid&rand=$adms");
					 exit;
					 }
					 else
					{
					header("Location: 0708150328.php?ID=$srvsid&SID=$sid&rand=$adms");
					exit;
					}			   			
	}
	else
	{
		$insfho = "insert into srvs_fho(sr_id, fho, rfd, rtd)
						values
						('$srvsid','$fho', now(), now())";
		if($rcdprofile = mysql_query($insfho))
					{
				   header("Location: srvs_Adm_ufho.php?ID=$srvsid&SID=$sid&rand=$adms");
				   exit;
				  }
				 else
		   			{
					header("Location: srvs_Adm_ubasic.php?ID=$srvsid&SID=$sid&rand=$adms");
					exit;
					}			   			
	}						
?>