<?php
$srvsid = $_GET[SRVSID];
if ($srvsid<>"")
	{
		header("Location: searchsrvs.php?SID=$srvsid");
	}
	else
	{
		header("Location: index.php");
	}
?>