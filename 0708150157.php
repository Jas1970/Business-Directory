<?php
$srvsid = $_GET['SID'];
$ssrvsid = $_GET['SSID'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title></title>
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

<frameset rows="150,*" cols="*" frameborder="NO" border="0" framespacing="0" >
  <frame src="0708150142.php?SID=<?PHP print "$srvsid"; ?>&SSID=<?php print "$ssrvsid"; ?>" name="topFrame" scrolling="NO">
  <frameset rows="*" cols="23%,60%" framespacing="0" frameborder="NO" border="0">
    <frame src="0708150140.php?SID=<?PHP print "$srvsid"; ?>&SSID=<?php print "$ssrvsid"; ?> " scrolling="YES"  name="leftFrame" marginwidth="23%">
    <frame src="0708150138.php?SID=<?PHP print "$srvsid"; ?>&SSID=<?php print "$ssrvsid"; ?> "name="mainFrame" marginwidth="70%">
  <frame src="UntitledFrame-1"></frameset>
</frameset>
<noframes><body>

</body></noframes>
</html>
