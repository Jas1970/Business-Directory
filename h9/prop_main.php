<?php
$sid = $_GET['sid'];
session_start();
$csid = session_id();
if($sid<>$csid)

	{
	header("Location: adminlgf.php");
   exit;
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<frameset rows="80,*" cols="*" frameborder="NO" border="0" framespacing="0">
  <frame src="prop_main_head.php" name="topFrame" scrolling="NO" noresize >
  <frameset rows="*" cols="187,*" framespacing="0" frameborder="NO" border="0">
    <frame src="prop_main_btn.php" name="leftFrame" scrolling="NO" noresize>
    <frame src="prop_main_body.php" name="mainFrame">
  </frameset>
</frameset>
<noframes><body>

</body></noframes>
</html>
