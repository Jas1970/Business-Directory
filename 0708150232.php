<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';

//========================Home Page Authorisation ==========================

$hpage		= $_REQUEST['homepage'];
$profile    = $_REQUEST['profile'];
$mark		= $_REQUEST['mark'];
$moto		= $_REQUEST['moto'];
$slprof  = "select * from dir_profile where mdirid='$rstid'";
$rdprof  = mysql_query($slprof);
$rcount = mysql_num_rows($rdprof);
if($rcount<>"0")
	{
		$upprofile		= "update dir_profile
					set prof = '$profile'
						where mdirid='$rstid'";
		$rdupprofile	= mysql_query($upprofile);
	}
	else
	{
		$insprofile = "insert into dir_profile(mdirid, prof)
						values
						('$rstid','$profile')";
		$rcdprofile = mysql_query($insprofile);
	}						
$uphome		= "update dir_home
					set comp_home  	= '$hpage',
						comp_marque = '$mark',
						comp_moto   = '$moto'
						where mdirid = '$rstid'";
if($rduphome = mysql_query($uphome))						
		{
		   header("Location: 0708150214.php?ID=$rstid&SID=$sid&rand=$adms");
		   exit;
   	   }
		 else
		{
			header("Location: 0708150231.php?ID=$rstid&SID=$sid&rand=$adms");
			exit;
		}			   			
?>