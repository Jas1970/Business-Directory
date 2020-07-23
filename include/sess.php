<?php
$rstid	= $_GET['ID'];
$sid	= $_GET['SID'];
$adms	= $_GET['rand'];
session_start();
$adm		= $_SESSION['Adm'];
$sess		= $_SESSION['Sess'];
$ids		= $_SESSION['IDS'];
if(($sid=="") && ($adms=="")) {
		header("Location: 0708150201.php?ID=$rstid");
		session_destroy();
		exit;
	}
if(is_null($adms) && ($sid)) {
		header("Location: 0708150201.php?ID=$rstid");
		session_destroy();
		exit;
	}
if(!($ids==$rstid) && ($adm==$adms) && ($sess==$sid))
	{
		echo "Curssor Comes here";
		header("Location: 0708150201.php?ID=$rstid");
		session_destroy();
		exit;
	}
 ?>