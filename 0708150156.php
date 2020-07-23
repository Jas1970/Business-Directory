<?php
$catid = $_GET[CATID];
if ($catid<>"")
	{
		header("Location: search.php?CATID=$catid");
	}
	else
	{
		header("Location: index.php");
	}
?>