
<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

//$slcomp = "select distinct(dir_id) from dir_tadvts";

	$slcomp = "select * from dir_tmain";
	$rcdcomp = mysql_query($slcomp,$abc);
	$numrows = mysql_num_rows($rcdcomp);
	if ($numrows < 1)
	{
		print "<h4><font color=\"#006600\"><strong> There Not Any Temp Company Record For Deletion</strong></font></h4>";
		exit;
	}



if ($_POST['op'] != "del") 
	{


	$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<table>";
	while ($pinfo = mysql_fetch_array($rcdcomp))
	 {
   		// category  code (cat id)
  		$dirid	= $pinfo['dir_id'];
		$dirmainsl = "select * from dir_tmain where dir_id='$dirid'";
		$dirmainrd = mysql_query($dirmainsl,$abc);
		$dircname = mysql_result($dirmainrd,0,'dir_cname');
		$DirCitIds = mysql_result($dirmainrd,0,'dir_city'); 
		$Diradd1 = mysql_result($dirmainrd,0,'dir_add1'); 
		$Diradd2 = mysql_result($dirmainrd,0,'dir_add2'); 
		


		$dcitsel = "select * from city where citid='$DirCitIds'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
		

		$display_block .= " 
		<tr>
		 		<td width=\"100%\" colspan=\"2\"> <hr> </td>	
		</tr>
		<tr>
		   	<td width=\"550\"><font color=\"#FF0000\"><strong>$dircname</strong></font> </td>
			<td width=\"150\" align=center><input type=checkbox value=false name=cbox-$dirid><font face=arial size=1.5 color=navy>ID : $dirid</font></td>
		</tr>
		<tr>
			<td colspan=\"2\"><font color=\"#FF0000\"> $Diradd1 </font></td>
		</tr>
		<tr>
			<td colspan=\"2\"><font color=\"#FF0000\">$Diradd2 </font></td>
		</tr>
		<tr>
			<td colspan=\"2\"><font color=\"#FF0000\">City : $dcitname</font></td>
		</tr>
		";

		$cdsel = "select distinct(dir_cat_id)  from dir_tadvts where dir_id='$dirid'";
		$cdrcd = mysql_query($cdsel,$abc);
		
		while ($nfo = mysql_fetch_array($cdrcd))
			{
			$catid = $nfo['dir_cat_id'];
//			// category code (cat name)
			$catnmsl = "select catname from catg where catid='$catid'";
			$catnmrd = mysql_query($catnmsl,$abc);
			$catname = mysql_result($catnmrd,0,'catname');
	   		$display_block .=	"<tr>
					<td><font color=\"#000099\"><strong> Category    : $catname </strong></font> </td>   
					</tr>";
		
			$prodidsl = "select dir_catprodid, dir_prod_id, dir_regfyear from dir_tadvts where dir_id='$dirid' and dir_cat_id='$catid'";		
			$prodidrd = mysql_query($prodidsl, $abc);

				$rownum = abs(1);
				while($pinfos = mysql_fetch_array($prodidrd))
					{
					$prodid = $pinfos['dir_prod_id'];
					$catporddid = $pinfos['dir_catprodid'];
					$dirrfyr  =  $pinfos['dir_regfyear'];
			
					$prodsell = "select prodnam from prod where prodid = '$prodid'";
					$prodsellrcd = mysql_query($prodsell,$abc);
					$prodname = mysql_result($prodsellrcd,0,'prodnam');	
					
					
					$display_block .= "
							<tr>
								<td></td>
							</tr>
							<tr>
								<td>$rownum $prodname </td><td> .... $dirrfyr Year </td> 
						</tr>";
					$rownum++;
			}
		}
   }
$display_block .=	"<tr>
		 				<td width=\"500\" colspan=\"2\"> <hr> </td>	
					</tr>";
   
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<center><input type=submit name= Delete value=Delete>
					<input type=submit name=Authorised value=Authorised></center>";

$display_block .= "</FORM>";
	}
	else if ($_POST[op] == "del") 
	{
//	
	$result=mysql_query("SELECT dir_id FROM dir_tmain ORDER BY dir_id") or die("Query failed");
	
	$query = "select dir_id from dir_tmain where dir_id=";
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
						$query=$query." OR dir_id=".$gid[0];
					}
			}
		}
        $result = mysql_query($query, $abc) or die("<center> You are Not Select Record Or Select More Then One,  Try Again Please");
		$dirid = mysql_result($result,0,'dir_id');
			
		$deltadsl = "delete from dir_tadvts where dir_id= '$dirid'";
		$deltadrd = mysql_query($deltadsl,$abc);
		
		$deltmsl = "delete from dir_tmain where dir_id = '$dirid'";
		if($deltmrd = mysql_query($deltmsl, $abc))
			{
				$display_block .= "Record Sucessfully Deleted <br> <br> Delete Another One Please <a href=\"dircatprdadd.php\">Click Here</a>" ;	
			}
			else
			{
					$display_block .= "Record Not Deleted <br> <br> Please Send feed Back <a href=\"dirfback.php\">Click Here</a>" ;	
			}
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
