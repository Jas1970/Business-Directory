<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$rstid = "$_POST[dirno]";
$slcomp = "select distinct(dir_cat_id) from dir_tadvts  where dir_id='$rstid'";
$rcdcomp = mysql_query($slcomp,$abc);
$numrows = mysql_num_rows($rcdcomp);
if($numrows=="0")
	{
		$display_block .= "<h4><font color=\"#006600\"><strong> There Not Any Temp Company Record For Authorisation</strong></font></h4>";
	}
  else
   {
if($_POST[op] != "del") 
	{
	$display_block .= "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<table>";
	$dirmainsl = "select * from dir_main where dir_id='$rstid'";
	$dirmainrd = mysql_query($dirmainsl,$abc);
	$dircname = mysql_result($dirmainrd,0,'dir_cname');
	$DirCitySl = "select * from dir_add where dir_id='$rstid'";
	$DirCityRd = mysql_query($DirCitySl,$abc);
	$DirCitIds = mysql_result($DirCityRd,0,'dir_city'); 
	$Diradd1 = mysql_result($DirCityRd,0,'dir_add1'); 
	$Diradd2 = mysql_result($DirCityRd,0,'dir_add2'); 
	$dcitsel = "select * from city where citid='$DirCitIds'";
	$dcitrcd = mysql_query($dcitsel,$abc);
	$dcitname = mysql_result($dcitrcd,0,'citname');	
	$display_block .= " 
		<tr>
		 		<td width=\"500\" colspan=\"3\"> <hr> </td>	
		</tr>
		<tr>
		   	<td width=\"200\"> <font color=\"#FF0000\"><strong>$dircname</strong></font> </td>
			<td width=\"200\"></td>
			<td width=\"100\" align=center><input type=checkbox value=false name=cbox-$rstid><font face=arial size=1.5 color=navy>ID : $rstid</font></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">City : $dcitname</font></td>
			<td></td>
			<td></td>			
		</tr>";
	while ($pinfo = mysql_fetch_array($rcdcomp))
		 {
		$catid = $pinfo['dir_cat_id'];	
		$catnmsl = "select catname from catg where catid='$catid'";
		$catnmrd = mysql_query($catnmsl,$abc);
		$catname = mysql_result($catnmrd,0,'catname');
		$display_block .= " <tr>
							<td colspan=\"3\"><font color=\"#000099\"><strong> Category    : $catname </strong></font> </td>   
					</tr>";
		$prodidsl = "select * from dir_tadvts where dir_id='$rstid' and dir_cat_id='$catid'";		
		$prodidrd = mysql_query($prodidsl, $abc);
		while ($info = mysql_fetch_array($prodidrd))
				 {
					$prodid = $info['dir_prod_id'];
					$rfyr	= $info['dir_regfyear'];
					$prodsell = "select prodnam from prod where prodid = '$prodid'";
					$prodsellrcd = mysql_query($prodsell,$abc);
					$prodname = mysql_result($prodsellrcd,0,'prodnam');	
					$display_block .= "
							<tr>
								<td > </td> 
								<td> $rownum $prodname</td>
								<td> $rfyr Years</td>
						</tr>";
					$rownum++;
						}
   					}
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<input type=hidden name=dirno value=$rstid>";
$display_block .= "<center><input type=submit name= Authorised value=Authorised></center>";
$display_block .= "</FORM>";
	}
	else if ($_POST[op] == "del") 
	{
		$query = "select dir_catprodid from dir_tadvts where dir_id='$rstid'";
        $result = mysql_query($query, $abc) or die("<center><h4> You are Not Select Record Or Select More Then One,  <br> <a href=\"0708150221.php\"> Try Again Please </a></center></h4>");
		$ids = mysql_result($result,0,'dir_catprodid');
		$DirAdvtSl = "Select * from dir_tadvts where dir_id='$rstid'";
		$DirAdvtRd = mysql_query($DirAdvtSl,$abc);
		while($inst = mysql_fetch_array($DirAdvtRd)) 
				{
				$Dirids = $inst['dir_id'];
				$DirCatid = $inst['dir_cat_id'];
				$DirPrdid = $inst['dir_prod_id'];
				$DirRfy   = $inst['dir_regfyear'];
				$idx 	= $inst['sidx'];
				$dyear = date("Y", mktime())+$DirRfy;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());
				$curdate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));
				$Advtins = "insert into dir_catprd(main_dirid,cat_id, prd_id,regfrdt,regtodt,aut_tag, sidx)
							values ('$Dirids', '$DirCatid', '$DirPrdid', now(),'$curdate','Y', '$idx')";		
				$Advtrds = mysql_query($Advtins,$abc) or die ("Unable to Insert");
				}
				$deladvtsl  = "delete from dir_tadvts where dir_id='$rstid'";
				$deladvtrd	= mysql_query($deladvtsl, $abc);
				$display_block .= "<center><h4>Record Successfuly Authorised <br>
										Company Id = $rstid <br>
									   
							<a href=\"0708150221.php\"> Authorised Another One </a></h4></center>" ;
				}
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php print $display_block; ?>
</body>
</html>
