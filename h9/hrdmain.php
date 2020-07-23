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
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
  <frame src="hrd_head.php" name="topFrame" scrolling="NO" noresize >
<frameset rows="*" cols="181,*" framespacing="0" frameborder="NO" border="0">
  <frame src="hrd_btn.php" name="leftFrame" scrolling="NO" noresize>
  <frame src="hrd_body.php" name="mainFrame">
</frameset>
<noframes><body>
</body></noframes>
</html>
