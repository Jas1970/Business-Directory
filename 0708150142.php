<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();
$srvsid = $_GET['SID'];
$ssrvsid = $_GET['SSID'];
$srname = "select srvs_name from dir_srvs where srvs_id= '$srvsid'";
$rdsrname = mysql_query($srname);
$sname = mysql_result($rdsrname,0,'srvs_name');
$slsrsub = "select * from dir_subsrvs where srvs_id= '$srvsid' and sn_id = '$ssrvsid'";
$rdsrsub = mysql_query($slsrsub)or die(mysql_error());
$subsrvs = mysql_result($rdsrsub,0,'sname');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Placement Directory</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" >
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F7F7F7">
  <!--DWLayoutTable-->
  <tr>
    <td width="100%" height="12" ></td>
    <td width="243" ></td>
    <td width="292" rowspan="4" valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="292" height="97" valign="top"><img src="images/Haanzee.gif" width="292" height="97"></td>
        </tr>
      
    </table></td>
    <td width="179" ></td>
    <td width="273" ></td>
    <td width="124" ></td>
  </tr>
  <tr>
    <td height="66" valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="263" height="66" valign="top"><img src="images/img_bst/b2b.gif" width="263" height="57"></td>
        </tr>
    </table></td>
    <td ></td>
    <td ></td>
    <td rowspan="2" valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      
      <tr>
        <td width="273" height="71" valign="top"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','273','height','71','src','images/img_bst/Haanzee','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/img_bst/Haanzee' ); //end AC code
        </script>          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="273" height="71">
            <param name="movie" value="images/img_bst/Haanzee.swf">
            <param name="quality" value="high">
            <embed src="images/img_bst/Haanzee.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="273" height="71"></embed>
            </object>
          </noscript></td>
        </tr>
    </table></td>
    <td >&nbsp;</td>
  </tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <tr>
    <td height="5" ></td>
    <td ></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr>
    <td height="14" ></td>
    <td ></td>
    <td ></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr>
    <td height="13" colspan="6" valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="4">
        <!--DWLayoutTable-->
        <tr> 
          <td width="150" height="5" bgcolor="#990000"></td>
        <td width="150" bgcolor="#FF6600"></td>
        <td width="150" bgcolor="#33CC00"></td>
        <td width="150" bgcolor="#00FFCC"></td>
        <td width="150" bgcolor="#FFFF00"></td>
        <td width="150" bgcolor="#FF9999"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="38" colspan="6" align="center" valign="middle" background="images/img_bst/srbar.jpg" ><div align="center">Search for Service  :<?php print $subsrvs; ?> Under Category  :<?php print $sname; ?>  </div></td>
  </tr>
  <tr>
    <td height="51" >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <tr>
    <td height="1"></td>
    <td><img src="spacer.gif" alt="" width="243" height="1"></td>
    <td><img src="spacer.gif" alt="" width="292" height="1"></td>
    <td><img src="spacer.gif" alt="" width="179" height="1"></td>
    <td><img src="spacer.gif" alt="" width="273" height="1"></td>
    <td><img src="spacer.gif" alt="" width="124" height="1"></td>
  </tr>
  </table>
</body>
</html>
