<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';

$colid = $_GET['Col'];
if($colid=="1")
	{
	$css = "grn_01.css";	
	$sqlup  = "update  srvs_home set comp_css='$css' where mdirid='$srvsid'";
	if($sqlrd = mysql_query($sqlup))
		{
			header("Location: 0708150347.php?ID=$srvsid&SID=$sid&rand=$adms");
			exit;
		}
		else
		{
		print "some thing wrong in Style sheet update, please contact Administrator";
		}
	}

if($colid=="2")
	{
	$css = "org_02.css";	
	$sqlup  = "update srvs_home set comp_css='$css' where mdirid='$srvsid'";
	if($sqlrd = mysql_query($sqlup))
		{
			header("Location: 0708150347.php?ID=$srvsid&SID=$sid&rand=$adms");
			exit;
		}
		else
		{
		print "some thing wrong in Style sheet update, please contact Administrator";
		}
	}

if($colid=="3")
	{
	$css = "blu_03.css";	
	$sqlup  = "update  srvs_home set comp_css='$css' where mdirid='$srvsid'";
	if($sqlrd = mysql_query($sqlup))
		{
			header("Location: 0708150347.php?ID=$srvsid&SID=$sid&rand=$adms");
			exit;
		}
		else
		{
		print "some thing wrong in Style sheet update, please contact Administrator";
		}
	}

if($colid=="4")
	{
	$css = "red_04.css";	
	$sqlup  = "update  srvs_home set comp_css='$css' where mdirid='$srvsid'";
	if($sqlrd = mysql_query($sqlup))
		{
			header("Location: 0708150347.php?ID=$srvsid&SID=$sid&rand=$adms");
			exit;
		}
		else
		{
		print "some thing wrong in Style sheet update, please contact Administrator";
		}
	}

if($colid=="5")
	{
	$css = "brown_05.css";	
	$sqlup  = "update  srvs_home set comp_css='$css' where mdirid='$srvsid'";
	if($sqlrd = mysql_query($sqlup))
		{
			header("Location: 0708150347.php?ID=$srvsid&SID=$sid&rand=$adms");
			exit;
		}
		else
		{
		print "some thing wrong in Style sheet update, please contact Administrator";
		}
	}
if($colid=="6")
	{
	$css = "lbrn_06.css";	
	$sqlup  = "update  srvs_home set comp_css='$css' where mdirid='$srvsid'";
	if($sqlrd = mysql_query($sqlup))
		{
			header("Location: 0708150347.php?ID=$srvsid&SID=$sid&rand=$adms");
			exit;
		}
		else
		{
		print "some thing wrong in Style sheet update, please contact Administrator";
		}
	}
if($colid=="7")
	{
	$css = "dbrn_07.css";	
	$sqlup  = "update  srvs_home set comp_css='$css' where mdirid='$srvsid'";
	if($sqlrd = mysql_query($sqlup))
		{
			header("Location: 0708150347.php?ID=$srvsid&SID=$sid&rand=$adms");
			exit;
		}
		else
		{
		print "some thing wrong in Style sheet update, please contact Administrator";
		}
	}
if($colid=="8")
	{
	$css = "yellow_08.css";	
	$sqlup  = "update  srvs_home set comp_css='$css' where mdirid='$srvsid'";
	if($sqlrd = mysql_query($sqlup))
		{
			header("Location: 0708150347.php?ID=$srvsid&SID=$sid&rand=$adms");
			exit;
		}
		else
		{
		print "some thing wrong in Style sheet update, please contact Administrator";
		}
	}



?>

