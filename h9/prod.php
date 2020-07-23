<html>
<head>
<title>Products Master</title>
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
	if(form1.prodname.value=="")
		{
		alert("please enter Product name");
		form1.prodname.focus();
		return (false);
		}
	
	}	
</script>


</head>


<body>

<div id="Layer1" style="position:absolute; left:41px; top:0px; width:760px; height:318px; z-index:1"> 
  <form action="prodadd.php" name="form1" method="POST" onSubmit="return check(this)">
    <p>&nbsp;</p>
    <table width="94%" border="0" align="center" bgcolor="#FFCCCC">
      <tr> 
        <td colspan="3"><div align="center"><font color="#663300" size="4">Product 
            Master</font> </div></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
      <tr> 
        <td width="28%"><font color="#990000">&nbsp;</font></td>
        <td width="2%">&nbsp;</td>
        <td width="70%">&nbsp;</td>
      </tr>
      <tr> 
        <td><font color="#990000"><strong>Product Name</strong></font></td>
        <td>&nbsp;</td>
        <td><label>
        <input name="prodname" type="text" id="prodname" size="60" maxlength="60">
        </label></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
      <tr> 
        <td colspan="3"><div align="center"> 
            <input type="submit" name="Submit" value="Submit">
            &nbsp;&nbsp; 
            <input type="reset" name="Submit2" value="Reset">
          </div></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
    </table>
    <p>&nbsp; </p>
  </form>
</div>
</body>
</html>