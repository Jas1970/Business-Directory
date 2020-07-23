<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';

////$srvsid 	= $_REQUEST['ID'];
//$sid		= $_GET['SID'];
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
$amail		= $_REQUEST['amail'];
$web		= $_REQUEST['web'];

$upadd		= "update srvs_main
					set cpname = '$cpname',
						add1 = '$add1',
						add2 = '$add2',
						city = '$city',
						dist = '$dist',
						stat = '$state',
						cout = '$cont',
						tel  = '$tel',
						fax  = '$fax',
						mob  = '$mob',
						mail = '$mail',
						web  = '$web',
						pin  = '$zip',
						amail = '$amail'
						where sr_id = '$srvsid'";
if($rdupadd = mysql_query($upadd))						
		{
		   header("Location: 0708150318.php?ID=$srvsid&SID=$sid&rand=$adms");
		   exit;
		  }
		 else
		{
		header("Location: 0708150318.php?ID=$srvsid&SID=$sid&rand=$adms");
		exit;
		}			   			
?>