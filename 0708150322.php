<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';


$cpname 	= $_REQUEST['cpname'];
$add1		= $_REQUEST['add1'];
$add2		= $_REQUEST['add2'];
$city		= $_REQUEST['city'];
$dist		= $_REQUEST['dist'];
$state		= $_REQUEST['state'];
$cont		= $_REQUEST['count'];			
$zip		= $_REQUEST['zip'];
$tel		= $_REQUEST['tel'];
$fax		= $_REQUEST['fax'];
$mob		= $_REQUEST['mob'];
$mail		= $_REQUEST['mail'];
$web		= $_REQUEST['web'];
$limits = 50;
$blimits = abs($limits-$rcdcount);
$slbrch  = "select * from srvs_branch where mids='$srvsid'";
$rdbrch  = mysql_query($slbrch);
$rcdcount = mysql_num_rows($rdbrch);
if($rcdcount>="50")
	{
		$msg = "Record Limit Over can't Insert Data";
		header("Location: 0708150320.php?ID=$srvsid&SID=$sid&rand=$adms&msg=$msg");
	    exit;

	}
	else
	{

	$inssql		= "insert into srvs_branch (mids,cpname,add1,add2,city,dist,stat,cout,pin,tel,fax,mob,mail,web)
				values
				('$srvsid','$cpname','$add1','$add2','$city','$dist','$state','$cont','$zip','$tel',
				'$fax','$mob','$mail','$web')";
	if($rdupadd = mysql_query($inssql))						
		{
		   header("Location: 0708150320.php?ID=$srvsid&SID=$sid&rand=$adms&msg=1");
		   exit;
		}
		 else
		{
			header("Location: 0708150320.php?ID=$srvsid&SID=$sid&rand=$adms&msg=2");
			exit;
		}			   			
	}
?>