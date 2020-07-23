
<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

//$slcomp = "select distinct(dir_id) from dir_tadvts";

	$dirid = "$_POST[dirno]";

	$slcompm = "select * from dir_main where dir_id='$dirid'";
	$rcdcompm = mysql_query($slcompm,$abc);
	$numrows = mysql_num_rows($rcdcompm);

if ($_POST['op'] != "del") 
	{


	if ($numrows < 1)
	{
		print "<center><h3><font color=\"#006600\"><strong> There Not Any Temp Company Record For Deletion</strong></font></h3></center>";
		exit;
	}



	$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .=  "<center><strong><h3> Delete Company's Category & Products From Authorised List</h3> </strong> </center>";
 	$display_block .= "<hr>";
	$display_block .= "<table>";
	while ($pinfo = mysql_fetch_array($rcdcompm))
	 {
   		// category  code (cat id)
  		$dirid	= $pinfo['dir_id'];
		$dircname = $pinfo['dir_cname'];
		//$dirasoid = $pinfo['dir_asoid'];
		
	//	$dirasoidsl = "select * from aso_main where aso_id='$dirasoid'";
	//	$dirasoidrd = mysql_query($dirasoidsl,$abc);
	//	$asofname = mysql_result($dirasoidrd,0,'aso_fname');
	//	$asomname = mysql_result($dirasoidrd,0,'aso_mname');
	//	$asolname = mysql_result($dirasoidrd,0,'aso_lname');
		
		$DirCitySl = "select * from dir_add where dir_id='$dirid'";
		$DirCityRd = mysql_query($DirCitySl,$abc);
		$DirCitIds = mysql_result($DirCityRd,0,'dir_city'); 
		$Diradd1 = mysql_result($DirCityRd,0,'dir_add1'); 
		$Diradd2 = mysql_result($DirCityRd,0,'dir_add2'); 
		


		$dcitsel = "select * from city where citid='$DirCitIds'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
		

	//	$DirCityAsoSl = "select * from aso_add where aso_id='$dirasoid'";
	//	$DirCityAsoRd = mysql_query($DirCityAsoSl,$abc);
	//	$DirCitId = mysql_result($DirCityAsoRd,0,'aso_city'); 
		
	//	$citsel = "select * from city where citid='$DirCitId'";
	//	$citrcd = mysql_query($citsel,$abc);
	//	$citname = mysql_result($citrcd,0,'citname');
	
	
	
		$display_block .= " 
		<tr>
			<td><font color=\"#FF0000\"><strong> $dircname </strong></font></td>
	
		</tr>
		<tr>
			<td><font color=\"#FF0000\"> $Diradd1 </font></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">$Diradd2 </font></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">City : $dcitname</font></td>
		</tr>";

		$cdsel = "select distinct(cat_id)  from dir_catprd where main_dirid='$dirid'";
		$cdrcd = mysql_query($cdsel,$abc);
		
		while ($nfo = mysql_fetch_array($cdrcd))
			{
			$catid = $nfo['cat_id'];
//			// category code (cat name)
			$catnmsl = "select catname from catg where catid='$catid'";
			$catnmrd = mysql_query($catnmsl,$abc);
			$catname = mysql_result($catnmrd,0,'catname');
	   		$display_block .=	"<tr>
					<td><font color=\"#000099\"><strong> Category    : $catname </strong></font> </td>   
					</tr>";
		
			$prodidsl = "select cp_id, cat_id, prd_id, date_format(regtodt, '%d-%m-%Y') as regtodt from dir_catprd where main_dirid='$dirid' and cat_id='$catid'";		
			$prodidrd = mysql_query($prodidsl, $abc);

				$rownum = abs(1);
				while($pinfos = mysql_fetch_array($prodidrd))
					{
					$prodid = $pinfos['prd_id'];
					$catporddid = $pinfos['cp_id'];
					$dirrfyr  =  $pinfos['regtodt'];
			
					$prodsell = "select prodnam from prod where prodid = '$prodid'";
					$prodsellrcd = mysql_query($prodsell,$abc);
					$prodname = mysql_result($prodsellrcd,0,'prodnam');	
					
					
					$display_block .= "
							<tr>
								<td></td>
							</tr>
							<tr>
								<td>$rownum $prodname </td><td> .... $dirrfyr  </td> 
								<td align=center><input type=checkbox value=false name=cbox-$catporddid><font face=arial size=1.5 color=navy>ID : $catporddid</font></td>

						</tr>";
					$rownum++;
			}
		}
   }
$display_block .= "</table>";   
$display_block .= "<hr>";
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<center><input type=submit name= Delete value=Delete>
					</center>";

$display_block .= "</FORM>";
	}
	else if ($_POST[op] == "del") 
	{
//	
	$result=mysql_query("SELECT cp_id FROM dir_catprd ORDER BY cp_id") or die("Query failed");
	
	$query = "delete from dir_catprd where cp_id=";
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
						$query=$query." OR cp_id=".$gid[0];
					}
			}
		}
     
	 
	 
	 
	 
	   if($result = mysql_query($query, $abc))
	   {
				$display_block .= "<center><h3>Category & Product Record Parmanently Delete From Database <br>
								  <br>
										<a href=\"dir_comp_catprd_del_sr.php\"> Delete Another One</a></h3></center>";

			}
			else
			{
			  $display_block .= "<center> You are Not Select Record Or Select More Then One,  Try Again Please";
			}	

		$deltadsl = "delete from dir_catprd where main_dirid= '$dirid'";
		$deltadrd = mysql_query($deltadsl,$abc);
		

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
