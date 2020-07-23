<?php require_once('Connections/abc.php'); 
mysql_select_db($database_abc,$abc) or die("unable to Open database");
?>
<html>
<head>
<title>Products Master</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


</head>


<body>

<div id="Layer1" style="position:absolute; left:41px; top:0px; width:760px; height:318px; z-index:1"> 
  <form action="catprodadd_db.php" name="form1" method="POST" onSubmit="return check(this)">
    <p>&nbsp;</p>
    <table width="94%" border="0" align="center" bgcolor="#FFCCCC">
      <!--DWLayoutTable-->
      <tr> 
        <td colspan="3"><div align="center"><font color="#663300" size="4">Category Product 
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
        <td><font color="#990000"><strong>Category Name</strong></font></td>
        <td>&nbsp;</td>
        <td> <select name=catid>
							    <option value=''>Select One</option>
			    <?
							$q=mysql_query("select * from catg order by catname");
							while($n=mysql_fetch_array($q)){
										echo "<option value=$n[catid]>$n[catname]</option>";
								}

?>
  </select></td>
      </tr>
      <tr> 
        <td><font color="#990000"><strong>Product Name</strong></font></td>
        <td>&nbsp;</td>
        <td> <select name=prod>
							    <option value=''>Select One</option>
			    <?
							$q=mysql_query("select * from prod order by prodnam");
							while($n=mysql_fetch_array($q)){
										echo "<option value=$n[prodid]>$n[prodnam]</option>";
								}

?>
  </select></td>
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
