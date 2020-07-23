<?php require_once('Connections/abc.php'); ?>
<html>
<head>
<title>Job Qualification</title>
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
	if(form1.qual_name.value=="")
		{
		alert("please enter Qualification name");
		form1.qual_name.focus();
		return (false);
		}
	}	
</script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="Layer1" style="position:absolute; left:42px; top:1px; width:476px; height:274px; z-index:1">
  <form name="form1" method="POST" action="job_qual_add.php" onsubmit="return check(this)">
    <p align="center">&nbsp;</p>
    <table width="450px"  border="0" cellpadding="0" cellspacing="0">
      <tr> 
        <td class="org_border_box" height="21" colspan="3"><div align="center"><font color="#990000" size="4">Job 
            Qualification Master</font></div></td>
      </tr>
      <tr> 
        <td class="org_border_c_cell" height="21" colspan="3">&nbsp;</td>
      </tr>
      <tr> 
        <td class="org_border_c_cell"  colspan="3"><font color="#990000">&nbsp;</font></td>
      </tr>
      <tr> 
        <td class="org_border_l_cell"><div align="right"><font color="#660000"><strong>Qualification 
            Name</strong></font></div></td>
        <td class="org_border_no_cell">:</td>
        <td class="org_border_r_cell"><div align="left">
            <label> 
            <input name="qual_name" type="text" id="qual_name" size="45" maxlength="40" class="list_border">
            </label>
          </div></td>
      </tr>
      <tr> 
        <td class="org_border_c_cell" colspan="3">&nbsp;</td>
      </tr>
      <tr> 
        <td class="org_border_c_cell" colspan="3">&nbsp;</td>
      </tr>
      <tr> 
        <td class="org_border_box" colspan="3"><div align="center"> 
            <input type="submit" name="Submit" value="Submit">
            &nbsp;&nbsp; 
            <input name="reset" type="reset" id="reset" value="Reset">
          </div></td>
      </tr>
      <tr> 
        <td class="org_border_b_cell" colspan="3">&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</div>
</body>
</html>
