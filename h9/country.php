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
	if(form1.contname.value=="")
		{
		alert("please enter Countery name");
		form1.contname.focus();
		return (false);
		}
	}	
</script>
</head>

<body>

<div id="Layer1" style="position:absolute; left:37px; top:1px; width:477px; height:274px; z-index:1">
  <form name="form1" method="POST" action="contadd.php" onsubmit="return check(this)">
    <p align="center">&nbsp;</p>
    <table width="94%"  border="0" align="center" bgcolor="#FFCCCC">
      <tr>
        <td colspan="3"><div align="center"><font color="#663300" size="4">Country 
            Master</font></div></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
      <tr> 
        <td width="26%">&nbsp;</td>
        <td width="4%">&nbsp;</td>
        <td width="70%">&nbsp;</td>
      </tr>
      <tr> 
        <td><font color="#990000"><strong>Country Name</strong></font></td>
        <td>:</td>
        <td><label> 
          <input name="contname" type="text" id="contname" size="45" maxlength="40">
          </label></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
