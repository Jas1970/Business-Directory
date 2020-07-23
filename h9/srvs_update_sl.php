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
function check(form1) 
	{
	if(form1.dirno.value=="")
		{
		alert("please enter Company ID");
		form1.dirno.focus();
		return (false);
		}
	
	}	
</script>

</head>

<body>

<div id="Layer1" style="position:absolute; left:117px; top:19px; width:369px; height:128px; z-index:1">
  <form name="form1" method="post" action="srvs_update_add.Php" onsubmit="return check(this)">
    <table width="100%" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
      <tr bgcolor="#CCFFCC"> 
        <td colspan="3"><div align="center"><font color="#660000"><strong>Enter 
            Code For Company Status (Srvs).</strong></font></div></td>
      </tr>
      <tr> 
        <td width="38%">&nbsp;</td>
        <td width="5%">&nbsp;</td>
        <td width="57%">&nbsp;</td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td><strong><font color="#660000">Company ID</font></strong></td>
        <td>&nbsp;</td>
        <td><input name="dirno" type="text" id="dirno" size="20" maxlength="15"></td>
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
            <input type="submit" name="Submit" value="Search">
            <input type="reset" name="Submit2" value="Reset">
          </div></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
