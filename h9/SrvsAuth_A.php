<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$slcomp = "select * from asrvs_advts";

$rcdcomp = mysql_query($slcomp,$abc);
$numrows = mysql_num_rows($rcdcomp);
if ($numrows < 1)
	{
		print "<h4><font color=\"#006600\"><strong> There Not Any Temp Company Record For Authorisation</strong></font></h4>";
		exit;
	}
if ($_POST['op'] != "del") 
	{
	$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<table width=\"100%\">";
	while ($pinfo = mysql_fetch_array($rcdcomp))
	 {
   		// category  code (cat id)
  		$dirid	= $pinfo['mids'];

		$dirmainsl = "select * from srvs_main where sr_id='$dirid'";
		$dirmainrd = mysql_query($dirmainsl,$abc);
		$dircname = mysql_result($dirmainrd,0,'cname');
		$DirCitIds = mysql_result($dirmainrd,0,'city'); 
		$Diradd1 = mysql_result($dirmainrd,0,'add1'); 
		$Diradd2 = mysql_result($dirmainrd,0,'add2'); 

		$dcitsel = "select * from city where citid='$DirCitIds'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
	
		$advtsl = "select * from asrvs_advts where mids='$dirid'";
		$advtrs = mysql_query($advtsl,$abc);
		$srvsid = mysql_result($advtrs,0,'srvsid');
		$srid	= mysql_result($advtrs,0,'srid');
		$rgfyear = mysql_result($advtrs,0,'rfyear');
		$rgfdate = mysql_result($advtrs,0,'rgfdate');
		$rgtdate = mysql_result($advtrs,0,'rgtdate');
		
		$srvssl	= "select * from dir_srvs where srvs_id ='$srvsid'";
		$srvsrs = mysql_query($srvssl,$abc);
		$srvs_name = mysql_result($srvsrs,0,'srvs_name');
		
		
		$subsrvssl = "select * from dir_subsrvs where sn_id='$srid'";
		$subsrvsrs = mysql_query($subsrvssl,$abc);
		$sname = mysql_result($subsrvsrs,0,'sname');
	
	
	
		$display_block .= " 
		<tr>
		 		<td colspan=\"4\"> <hr> </td>	
		</tr>
		<tr>
		   	<td width=\"25%\"><font color=\"#FF0000\"><strong>$dircname</strong></font> </td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
			<td width=\"25%\" align=center><input type=checkbox value=false name=cbox-$dirid><font face=arial size=1.5 color=navy>ID : $dirid</font></td>
		</tr>
		<tr>
			<td> <font color=\"#FF0000\"> $Diradd1 </font></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">$Diradd2 </font></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">City : $dcitname</font></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
		</tr>
				<tr>
		 		<td colspan=\"3\">  </td>	
		</tr>
		<tr>
			<td align=\"right\"><font color=\"#FF0000\">Registration : </font></td>
			<td width=\"25%\">$srvs_name</td>
			<td width=\"25%\">$sname</td>
			<td width=\"25%\">$rgtdate</td>
		</tr>

		";
		
   }
		$display_block .= " <tr>
		 				<td colspan=\"4\"> <hr> </td>	
					</tr>";  
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<center>
					<input type=submit name= Authorised value=Authorised>
					<input type=reset name= reset value=Reset>
					</center>";

$display_block .= "</FORM>";
	}
	else if ($_POST['op'] == "del") 
	{
	
	$result=mysql_query("SELECT distinct(mids) FROM asrvs_advts ORDER BY mids") or die("Query failed");
	
	$query = "select distinct(mids) from asrvs_advts where mids=";
		$flag=TRUE;
		while($lines = mysql_fetch_array($result, MYSQL_ASSOC))
		{   
			foreach($lines as $gid[0])
			{
				if($_REQUEST["cbox-$gid[0]"]=="false")
					if($flag==TRUE)
					{
						$query=$query.$gid[0];
						$flag=FALSE;
					}
					else
					{
						$query=$query." OR ids=".$gid[0];
					}
			}
		}
        $result = mysql_query($query, $abc) or die("<center><h4> You are Not Select Record Or Select More Then One,  <br>
		 <a href=\"DirCatPrdAddM.php\"> Try Again Please </a></center></h4>");
		$dirid = mysql_result($result,0,'mids');

							
							
		$srvsadvtSl 	= "select * from asrvs_advts where mids='$dirid'";
		$srvsadvsrs		= mysql_query($srvsadvtSl,$abc);
		
		$mids			= mysql_result($srvsadvsrs,0,'mids');
		$srvsids		= mysql_result($srvsadvsrs,0,'srvsid');
		$city			= mysql_result($srvsadvsrs,0,'city');
		$rfyear			= mysql_result($srvsadvsrs,0,'rfyear');
		$rgfdate		= mysql_result($srvsadvsrs,0,'rgfdate');	
		$rgtdate		= mysql_result($srvsadvsrs,0,'rgtdate');
		$authtag		= mysql_result($srvsadvsrs,0,'authtag');
		$sidx			= mysql_result($srvsadvsrs,0,'sidx');
		$srid			= mysql_result($srvsadvsrs,0,'srid');
		$district		= mysql_result($srvsadvsrs,0,'district');
		$state			= mysql_result($srvsadvsrs,0,'state');
		$country		= mysql_result($srvsadvsrs,0,'country');
		
		$advtsins	= "insert into srvs_advts(mids, srvsid, city, rfyear, rgfdate, rgtdate, authtag, sidx, srid, district, state, country)
					values
					('$mids','$srvsids','$city','$rfyear','$rgfdate','$rgtdate','$authtag','$sidx','$srid', '$district', '$state','$country')";
		$advtsinsrd	= mysql_query($advtsins,$abc) or die(mysql_error());
		
		
					
					
		$deladvtsl	= "delete from asrvs_advts where mids='$dirid'"; 
		$deladvtrd	= mysql_query($deladvtsl, $abc);
							
							

// ====================================================================================================================
//                delete record from Temp main, Temp add, temp advertisement table
//=====================================================================================================================				

				$display_block = "<h4>Record Successfuly Authorised <br>
									<a href=\"SrvsAuth_A.php\"> Authorised Another One </a> <br>
									Opent Web Site <a href=\"0708150301.php?ID=$mids\" target=\"_blank\"> Click Here </a> <br>
									</h4>" ;
			
			
		
	}
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<?php print $display_block; ?>
</body>
</html>
