<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();
$propid = $_GET[ID];
$pobsl = "Select * from prop_main where prop_id='$propid'";
$pobrd = mysql_query($pobsl);
$compid = mysql_result($pobrd,0,'prop_comp_id');
$prop_tag = mysql_result($pobrd,0,'prop_comp_type');
if ($prop_tag==1)
	{
		session_start();
		$_SESSION[DIRID]=$compid;
		header("Location: 0708150212.php?ID=$compid");
	}
if ($prop_tag==2)
	{
		session_start();
		$_SESSION[DIRID]=$compid;
		header("Location: 0708150312.php?ID=$compid");
	}
?>

