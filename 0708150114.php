<?php
$catid	= $_GET['CID'];
$prodid 	= $_GET['PID'];
if($catid=="" and $prodid=="")
	{
		header("Location: search.php");
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

<frameset rows="150,*" cols="*" frameborder="NO" border="0" framespacing="0" >
  <frame src="0708150112.php?CID=<?php print "$catid"; ?>&PID=<?php print "$prodid"; ?>" name="topFrame" frameborder="1" scrolling="NO" >
  <frameset rows="*" cols="23%,60%" framespacing="0" frameborder="NO" border="0">
    <frame src="0708150110.php?CID=<?php print "$catid"; ?>&PID=<?php print "$prodid"; ?>" name="leftFrame" scrolling="YES" frameborder="0"  marginwidth="23%" >
    <frame src="0708150108.php?CID=<?PHP print "$catid"; ?>&PID=<?php print "$prodid"; ?>" name="mainFrame" marginwidth="70%" frameborder="0">
  </frameset>
</frameset>
<noframes><body>

</body></noframes>
</html>
