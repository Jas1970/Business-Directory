<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$slcomp = "select distinct(dir_id), city, state, district, country from dir_aadvts";
$rcdcomp = mysql_query($slcomp,$abc);
$numrows = mysql_num_rows($rcdcomp);
if($numrows == "0")
	{
		$display_block = "<h4><font color=\"#006600\"><strong> There Not Any Temp Company Record For Authorisation $numrows</strong></font></h4>";
	}
  else
   {
if($_POST['op'] != "del") 
	{
	$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<table width=\"100%\">";
	while ($pinfo = mysql_fetch_array($rcdcomp))
	 {
  		$dirid	= $pinfo['dir_id'];
		$city	= $pinfo['city'];
		$district = $pinfo['district'];
		$state = $pinfo['state'];
		$country = $pinfo['country'];
		
		$dirmainsl 	= "select * from dir_main where dir_id='$dirid'";
		$dirmainrd 	= mysql_query($dirmainsl,$abc);
		$dircname 	= mysql_result($dirmainrd,0,'dir_cname');


		$dcitsel = "select * from city where citid='$city'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
		
		$display_block .= " 
		<tr>
		 		<td colspan=\"4\"> <hr> </td>	
		</tr>
		<tr>
		   	<td width=\"40%\"><font color=\"#FF0000\"><strong>$dircname</strong></font> </td>
			<td width=\"20%\" align=center>: </td>
			<td width=\"20%\"> </td>
			<td width=\"20%\"><input type=checkbox value=false name=cbox-$dirid><font face=arial size=1.5 color=navy>ID : $dirid</font></td>
			
		</tr>
		<tr>
			<td colspan=\"4\"><font color=\"#FF0000\">  </font></td>
		</tr>
		<tr>
			<td colspan=\"4\"><font color=\"#FF0000\"> </font></td>
		</tr>
		<tr>
			<td colspan=\"4\"><font color=\"#FF0000\">City : $dcitname</font></td>
		</tr>";		
		
		
		$cdsel = "select distinct(dir_cat_id)  from dir_aadvts where dir_id='$dirid'";
		$cdrcd = mysql_query($cdsel,$abc);
		
		while ($nfo = mysql_fetch_array($cdrcd))
			{
			$catid = $nfo['dir_cat_id'];
//			// category code (cat name)
			$catnmsl = "select catname from catg where catid='$catid'";
			$catnmrd = mysql_query($catnmsl,$abc);
			$catname = mysql_result($catnmrd,0,'catname');
	   		$display_block .=	"<tr>
					<td colspan=\"4\"><font color=\"#000099\"><strong> Category    : $catname </strong></font> </td>   
					</tr>";
		
			$prodidsl = "select dir_catprodid, dir_prod_id, dir_regfyear from dir_aadvts where dir_id='$dirid' and dir_cat_id='$catid'";		
			$prodidrd = mysql_query($prodidsl, $abc);

				$rownum = abs(1);
				while($pinfos = mysql_fetch_array($prodidrd))
					{
					$prodid = $pinfos['dir_prod_id'];
					$catporddid = $pinfos['dir_catprodid'];
					$rgtdate	= $pinfos['dir_regfyear'];			
		
					$prodsell = "select prodnam from prod where prodid = '$prodid'";
					$prodsellrcd = mysql_query($prodsell,$abc);
					$prodname = mysql_result($prodsellrcd,0,'prodnam');	
	
					$display_block .= "
							<tr>
								<td colspan=\"4\"></td>
							</tr>
							<tr>
								<td></td>
								<td>$rownum </td> 
								<td>$prodname </td>
								<td>$rgtdate Year(s)</td>
						</tr>";
					$rownum++;
			}
			
		}
   }
   
$display_block .=	"<tr>
		 				<td colspan=\"4\"> <hr> </td>	
					</tr>";
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<center><input type=submit name= Authorised value=Authorised>
					</center>";

$display_block .= "</FORM>";
	}
	else if ($_POST['op'] == "del") 
	{
//
//$slcomp = "select distinct(dir_id) from dir_tadvts";
	
	$result=mysql_query("SELECT dir_id FROM dir_aadvts ORDER BY dir_id") or die("Query failed");
	
	$query = "select dir_id from dir_aadvts where dir_id=";
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
        $result = mysql_query($query, $abc) or die("<center><h4> You are Not Select Record Or Select More Then One,  <br> <a href=\"DirCatPrdAddM.php\"> Try Again Please </a></center></h4>");
		$dirid = mysql_result($result,0,'dir_id');
		
		$tdirid = $dirid;

			
		
		




///==============================================================================================================
///                             select from Advts Temp
///==============================================================================================================				
					 
					 
		$DirTadvtSl 	= "select * from dir_aadvts where dir_id='$tdirid'";
		$DirTadvtRd		= mysql_query($DirTadvtSl,$abc);
		$DirCatid 		= mysql_result($DirTadvtRd,0,'dir_cat_id');
		$DirProdid 		= mysql_result($DirTadvtRd,0,'dir_prod_id');
		$dirRyear  		= mysql_result($DirTadvtRd,0,'dir_regfyear');
		$dirSindex		= mysql_result($DirTadvtRd,0,'sidx');
		$dircity		= mysql_result($DirTadvtRd,0,'city');
		$dirFdate		= mysql_result($DirTadvtRd,0,'rgfdate');
		$dirTdate		= mysql_result($DirTadvtRd,0,'rgtdate');
		$dirAuthtag		= mysql_result($DirTadvtRd,0,'authtag');
		$dirDirstrict	= mysql_result($DirTadvtRd,0,'district');
		$dirState		= mysql_result($DirTadvtRd,0,'state');
		$dirCountry		= mysql_result($DirTadvtRd,0,'country');



		
		$dirins	= "insert into dir_catprd(main_dirid, cat_id, prd_id, regfrdt, regtodt, aut_tag, sidx, rfyear, city, district, state, country)
					values
					('$tdirid','$DirCatid','$DirProdid','$dirFdate','$dirTdate','$dirAuthtag','$dirSindex','$dirRyear','$dircity', '$dirDirstrict', '$dirState','$dirCountry')";
		$dirinsq	= mysql_query($dirins,$abc) or die(mysql_error());
		
		
					
					
		$deladvtsl	= "delete from dir_aadvts where dir_id='$tdirid'"; 
		$deladvtrd	= mysql_query($deladvtsl, $abc);
					
					
// ==============================================================================================================
//                delete record from Temp main, Temp add, temp advertisement table
//===============================================================================================================				

				$display_block = "<h4>Record Successfuly Authorised <br>
								 <br>	   
							<a href=\"DirCatPrdAddM_A.php\"> Authorised Another One </a>
							<br>
							Open Web Site <a href=\"0708150201.php?ID=$dirid\" target=\"_blank\"> Click Here </a>
							</h4>
							
							
							" ;
		

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
