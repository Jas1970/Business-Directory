<?php
$srvsid	= $_GET['ID'];
$sid	= $_GET['SID'];
$adms	= $_GET['rand'];
session_start();
$adm		= $_SESSION['Adm'];
$sess		= $_SESSION['Sess'];
$ids		= $_SESSION['IDS'];
if(($sid=="") && ($adms=="")) {
		header("Location: 0708150301.php?ID=$srvsid");
		session_destroy();
		exit;
	}
if(is_null($adms) && ($sid)) {
		header("Location: 0708150301.php?ID=$srvsid");
		session_destroy();
		exit;
	}
if(!($ids==$srvsid) && ($adm==$adms) && ($sess==$sid))
	{
		header("Location: 0708150301.php?ID=$srvsid");
		session_destroy();
		exit;
	}
 ?>