<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
	if(form1.login.value=="")
		{
		alert("Please Enter Login ID");
		form1.login.focus();
		return (false);
		}
	if(form1.password.value=="")
		{
		alert("Please Enter Login Password");
		form1.password.focus();
		return (false);
		}
	}	
</script>

</head>

<body background="images/img_bst/tech.gif">
<p>&nbsp;</p><div id="Layer2" style="position:absolute; left:649px; top:0px; width:141px; height:39px; z-index:2"><a href="index.php" target="_parent"><img src="imgs/home.gif" alt="Home Page" width="116" height="41" border="0"></a></div>
<p>&nbsp;</p>
<div id="Layer3" style="position:absolute; left:283px; top:377px; width:446px; height:18px; z-index:4"> 
  <hr>
</div>
<div id="Layer1" style="position:absolute; left:282px; top:401px; width:446px; height:18px; z-index:3"> 
  <div align="center"><font size="2">|| <a href="index.php" target="_parent">Home 
    Page</a> || <a href="abt_prof_i.htm" target="_parent">About Us</a> || <a href="dirmain.php" target="_parent">Business 
    Directory</a> || </font></div>
</div>
<div id="Layer4" style="position:absolute; left:283px; top:420px; width:446px; height:14px; z-index:5"> 
  <div align="center"><font size="2">|| <a href="0708150114.php" target="_parent">Search 
    Product</a> || <a href="0708150144.php" target="_parent">Search Service</a> ||</font></div>
</div>
<table width="352" border="0" align="center" cellpadding="0" cellspacing="0" background="images/img_bst/tech.gif" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr> 
    <td height="23" colspan="3" valign="top"><div align="center"><strong><font color="#FF0000">Direcoty 
        Admin Login</font></strong></div></td>
  </tr>
  <tr> 
    <td width="26" height="18"></td>
    <td width="300"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td height="144"><img src="imgs/gds/br2.jpg" width="26" height="191"></td>
    <td align="left"  valign="top" bgcolor="#FEE3BC"><form name="form1" method="post" action="0708150151.php" onSubmit="return check(this)" >
        <br>
        <br>
        <label><strong><font color="#000099">Login Id &nbsp; </font></strong> 
        : 
        <input type="text" name="login">
        </label>
        <br>
        <label><strong><font color="#000099">Password </font></strong> : 
        <input type="password" name="password">
        <br>
        <br>
        </label>
        <div align="center"> 
          <input type="submit" name="Submit" value="Submit">
          <input type="reset" name="Submit2" value="Reset">
          <br>
        </div>
      </form></td>
    <td><img src="imgs/gds/br1.jpg" width="26" height="191"></td>
  </tr>
</table>
</body>
</html>
