<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';

$hpage		= $_REQUEST['homepage'];
$mark		= $_REQUEST['mark'];
$moto		= $_REQUEST['moto'];
$uphome		= "update srvs_home
					set comp_home  	= '$hpage',
						comp_marque = '$mark',
						comp_moto   = '$moto'
						where mdirid = '$srvsid'";

if($uphome = mysql_query($uphome))						
		{
		   header("Location: 0708150359.php?ID=$srvsid&SID=$sid&rand=$adms");
		   exit;
		  }
		 else
		{
		header("Location: 0708150359.php?ID=$srvsid&SID=$sid&rand=$adms");
		exit;
		}			   			
?>