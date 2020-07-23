<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();
$jobid = $_GET['ID'];
$jobsl = "Select * from job_main where job_id='$jobid'";
$jobrd = mysql_query($jobsl);
$compid = mysql_result($jobrd,0,'job_comp');
$job_tag = mysql_result($jobrd,0,'job_tag');

// =========== Job Tag 1 for business Directory and 2 for Service Directory

if ($job_tag==1)
	{
		
		header("Location: 0708150211.php?ID=$compid");
	}
if ($job_tag==2)
	{
		
		header("Location: 0708150311.php?ID=$compid");
	}	
?>

