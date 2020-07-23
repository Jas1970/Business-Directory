<?php
$srvsid = $_GET['SID'];
$ssrvsid = $_GET['SSID'];
if($srvsid=="")
	{
		$srvsid=1;
		header("Location: searchsrvs.php?SID=$srvsid");
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title>Service Directory</title>
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

<frameset rows="152,*" cols="*" frameborder="NO" border="0" framespacing="0">
  <frame src="0708150142.php?SID=<?PHP print "$srvsid"; ?>&SSID=<?php print "$ssrvsid"; ?>" name="topFrame" scrolling="NO" noresize >
  <frameset rows="*" cols="293,*" framespacing="0" frameborder="NO" border="0">
    <frame src="0708150140.php?SID=<?PHP print "$srvsid"; ?>&SSID=<?php print "$ssrvsid"; ?>" name="leftFrame" scrolling="NO" noresize>
    <frame src="0708150139.php?SID=<?PHP print "$srvsid"; ?>&SSID=<?php print "$ssrvsid"; ?>" name="mainFrame">
  </frameset>
</frameset>
<noframes><body>

</body></noframes>
</html>
