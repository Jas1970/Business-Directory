<?php require_once('Connections/abc.php'); ?>
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

<script language="javascript">
<!--
function check(form1) 
	{
	if(form1.servname.value=="")
		{
		alert("please enter Service name");
		form1.servname.focus();
		return (false);
		}
	}	
</script>
</head>

<body>

<div id="Layer1" style="position:absolute; left:42px; top:1px; width:476px; height:274px; z-index:1">
  <form name="form1" method="POST" action="dir_srvs_add.php" onsubmit="return check(this)">
    <p align="center">&nbsp;</p>
    <table width="90%"  border="0" align="center" bordercolor="#0000FF" bgcolor="#FFCCCC">
      <tr> 
        <td height="21" colspan="3"><div align="center"><font color="#990000" size="4">Service 
            Master</font></div></td>
      </tr>
      <tr> 
        <td height="21" colspan="3"><hr></td>
      </tr>
      <tr> 
        <td width="31%"><font color="#990000">&nbsp;</font></td>
        <td width="3%">&nbsp;</td>
        <td width="66%">&nbsp;</td>
      </tr>
      <tr> 
        <td><font color="#660000"><strong>Services Name</strong></font></td>
        <td>:</td>
        <td><label> 
          <input name="servname" type="text" id="servname" size="40" maxlength="40">
          </label></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
      <tr> 
        <td colspan="3"><div align="center"> 
            <input type="submit" name="Submit" value="Submit">
            &nbsp;&nbsp; 
            <input name="reset" type="reset" id="reset" value="Reset">
          </div></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</div>
</body>
</html>
