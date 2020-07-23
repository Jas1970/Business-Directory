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
	if(form1.catname.value=="")
		{
		alert("please enter Category name");
		form1.catname.focus();
		return (false);
		}
	}	
</script>
</head>

<body>

<div id="Layer1" style="position:absolute; left:42px; top:1px; width:764px; height:274px; z-index:1">
  <form name="form1" method="POST" action="catadd.php" onSubmit="return check(this)">
    <p align="center">&nbsp;</p>
    <table width="90%"  border="0" align="center" bordercolor="#0000FF" bgcolor="#FFCCCC">
      <tr> 
        <td height="21" colspan="3"><div align="center"><font color="#990000" size="4">Category 
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
        <td><div align="right"><font color="#660000"><strong>Category Name</strong></font></div></td>
        <td>:</td>
        <td><label> 
          <input name="catname" type="text" id="catname" size="50" maxlength="50">
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
