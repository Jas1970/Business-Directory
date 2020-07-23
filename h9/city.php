<?php
require_once('Connections/abc.php'); 
mysql_select_db($database_abc, $abc);

$sldist = "select * from district order by dstname";
$rddist = mysql_query($sldist,$abc);


?>
	


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
	if(form1.citynam.value=="")
		{
		alert("please enter City name");
		form1.citynam.focus();
		return (false);
		}
	if(form1.distname.value=="")
		{
		alert("please select District name");
		form1.distname.focus();
		return (false);
		}
	}	
</script>
</head>
<body>
<div id="Layer1" style="position:absolute; left:42px; top:0px; width:475px; height:296px; z-index:1"> 
  <form action="cityadd.php" name="form1" method="POST" onSubmit="return check(this)">
    <p>&nbsp;</p>
    <table width="94%" border="0" align="center" bgcolor="#FFCCCC">
      <tr>
        <td colspan="3"><div align="center"><font color="#660000" size="4">City 
            Master</font> </div></td>
      </tr>
      <tr> 
        <td colspan="3"><hr></td>
      </tr>
      <tr> 
        <td colspan="3"><font color="#990000">&nbsp;</font></td>
      </tr>
      <tr> 
        <td width="30%"><font color="#990000"><strong>City Name</strong></font></td>
        <td width="4%">&nbsp;</td>
        <td width="66%"> <input name="citynam" type="text" id="citynam" size="40" maxlength="30"></td>
      </tr>
      <tr> 
        <td><font color="#990000"><strong>District Name</strong></font></td>
        <td>&nbsp;</td>
        <td> <select name="distname" id="distname">
								<option value="-1">Select District</option>
								<?php
								while($rowDist=mysql_fetch_array($rddist)){
									?>
									<option value="<?php echo $rowDist['dstid']?>"><?php echo $rowDist['dstname']?></option>
									<?php
								}
								?>
        
          </select></td>
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