<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();

$catid		= $_GET['CID'];
$prodid 	= $_GET['PID'];

$slcat = "select catname from catg where catid = '$catid'";
$rdcat = mysql_query($slcat);
$catname = mysql_result($rdcat,0,'catname');
$slcatprd = "select * from prod where  prodid = '$prodid'";
$rdcatprd = mysql_query($slcatprd)or die(mysql_error());
$prodname = mysql_result($rdcatprd,0,'prodnam');
$count = $db->numRows($rdcatprd);
$db->close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Business Directory Search</title>
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
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body topmargin="0" leftmargin="0">
<table width="100%" height="169" border="0" cellpadding="0" cellspacing="0" bgcolor="#F7F7F7">
  <!--DWLayoutTable-->
  <tr>
    <td width="100%"  height="14"></td>
    <td width="219"></td>
    <td colspan="2" rowspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="241" height="104" valign="top"><img src="images/Haanzee.gif" width="292" height="94"></td>
        </tr>
    </table></td>
    <td width="198"></td>
    <td width="273"></td>
    <td width="114"></td>
    <td width="4"></td>
  </tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  <tr>
    <td  height="57" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="263" height="57" valign="top"><img src="images/img_bst/b2b.gif" width="263" height="57"></td>
        </tr>
      
    </table></td>
    <td></td>
    <td>&nbsp;</td>
    <td rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="266" height="70" valign="top"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','273','height','71','src','images/img_bst/Haanzee','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/img_bst/Haanzee' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="273" height="71">
  <param name="movie" value="images/img_bst/Haanzee.swf">
  <param name="quality" value="high">
  <embed src="images/img_bst/Haanzee.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="273" height="71"></embed>
  </object></noscript></td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  
  <tr>
    <td  height="14"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td  height="19"></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td  height="14" colspan="8" valign="top">

      <table width="100%" border="0" cellpadding="0" cellspacing="4">
        <!--DWLayoutTable-->
        <tr> 
          <td width="150" height="4" bgcolor="#990000"></td>
        <td width="150" bgcolor="#FF6600"></td>
        <td width="150" bgcolor="#33CC00"></td>
        <td width="150" bgcolor="#00FFCC"></td>
        <td width="150" bgcolor="#FFFF00"></td>
        <td width="150" bgcolor="#FF9999"></td>
      </tr>
        </table></td>
  </tr>
  <tr>
    <td  height="38" colspan="7" align="center" valign="middle" background="images/img_bst/srbar.jpg"><div align="center">Search For Category  : <?php print $catname; ?>  : <?php print $prodname; ?></div></td>
    <td></td>
  </tr>
  <tr>
    <td  height="29">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="88">&nbsp;</td>
    <td width="204">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  
  <tr>
    <td height="3"></td>
    <td colspan="2"><img src="file:///C|/xampp/htdocs/b2b/mm_spacer.gif" alt="" width="307" height="1"></td>
    <td colspan="4"><img src="file:///C|/xampp/htdocs/b2b/mm_spacer.gif" alt="" width="731" height="1"></td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td><img src="spacer.gif" alt="" width="219" height="1"></td>
    <td><img src="spacer.gif" alt="" width="88" height="1"></td>
    <td><img src="spacer.gif" alt="" width="204" height="1"></td>
    <td><img src="spacer.gif" alt="" width="198" height="1"></td>
    <td><img src="spacer.gif" alt="" width="273" height="1"></td>
    <td><img src="spacer.gif" alt="" width="114" height="1"></td>
    <td><img src="spacer.gif" alt="" width="4" height="1"></td>
  </tr>
</table>
</body>
</html>
