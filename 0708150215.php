<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';

//$rstid 		= $_REQUEST['ID'];
//$sid		= $_REQUEST['SID'];
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


$upmain		= "update dir_main
					set dir_cpname = '$cpname'
						where dir_id='$rstid'";
$rdupmain	= mysql_query($upmain);

$upadd		= "update dir_add
					set dir_add1 = '$add1',
						dir_add2 = '$add2',
						dir_city = '$city',
						dir_dist = '$dist',
						dir_stat = '$state',
						dir_cont = '$cont',
						dir_tel  = '$tel',
						dir_fax  = '$fax',
						dir_mob  = '$mob',
						dir_mail = '$mail',
						dir_amail = '$amail',
						dir_web  = '$web',
						dir_pin  = '$zip'
						where dir_id = '$rstid'";
if($rdupadd = mysql_query($upadd))						
		{
		   header("Location: 0708150231.php?ID=$rstid&SID=$sid&rand=$adms");
		   exit;
		  }
		 else
		{
		header("Location: 0708150214.php?ID=$rstid&SID=$sid&rand=$adms");
		exit;
		}			   			
?>