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
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<frameset rows="43,*" cols="*" frameborder="NO" border="0" framespacing="0">
  <frame src="dmain_head.php" name="topFrame" scrolling="NO" noresize >
  <frameset rows="*" cols="287,*" framespacing="0" frameborder="NO" border="0">
    <frame src="dmain_btn.php" name="leftFrame" scrolling="NO" noresize>
    <frame src="dmain_body.php" name="mainFrame">
  </frameset>
</frameset>
<noframes><body>

</body></noframes>
</html>
