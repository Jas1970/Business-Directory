<?php
$Scompid = $_GET[ID];
session_start();
$_SESSION[SDIRID]=$Scompid;
if ($Scompid<>"")
	{
		header("Location: 0708150301.php?ID=$Scompid");
	}
?>

