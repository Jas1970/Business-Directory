
<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

//$slcomp = "select distinct(dir_id) from dir_tadvts";

$dirid = "$_POST[dirno]";

	$slcompm = "select * from dir_main where dir_id='$dirid'";
	$rcdcompm = mysql_query($slcompm,$abc);
	$numrows = mysql_num_rows($rcdcompm);

if ($_POST[op] != "del") 
	{

	if ($numrows < 1)
	{
		print "<center><h3><font color=\"#006600\"><strong> There Not Any Temp Company Record For Deletion</strong></font></h3></center>";
		exit;
	}
	$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<hr>";
	$display_block .= "<table>";
	while ($pinfo = mysql_fetch_array($rcdcompm))
	 {
   		// category  code (cat id)
  		$dirid	= $pinfo['dir_id'];
		$dircname = $pinfo['dir_cname'];
		$dirasoid = $pinfo['dir_asoid'];
		
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
		
//
//		$DirCityAsoSl = "select * from aso_add where aso_id='$dirasoid'";
//		$DirCityAsoRd = mysql_query($DirCityAsoSl,$abc);
//		$DirCitId = mysql_result($DirCityAsoRd,0,'aso_city'); 
//		$citsel = "select * from city where citid='$DirCitId'";
//		$citrcd = mysql_query($citsel,$abc);
//		$citname = mysql_result($citrcd,0,'citname');
	
	
	
		$display_block .= " 
		
		<tr>
		   	<td><font color=\"#FF0000\"><strong>$dircname</strong></font> </td>
			<td align=center><input type=checkbox value=false name=cbox-$dirid><font face=arial size=1.5 color=navy>ID : $dirid</font></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\"> $Diradd1 </font></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">$Diradd2 </font></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">City : $dcitname</font></td>
		</tr>		
		
		<tr>
			<td><font color=\"#006600\"><strong> Associate ID : $dirasoid  </font></td>
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
		
			$prodidsl = "select cat_id, prd_id, date_format(regtodt, '%d-%m-%Y') as regtodt from dir_catprd where main_dirid='$dirid' and cat_id='$catid'";		
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
								<td>........ $rownum $prodname </td><td> .... $dirrfyr  </td> 
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
	$result=mysql_query("SELECT dir_id FROM dir_main ORDER BY dir_id") or die("Query failed");
	
	$query = "select dir_id from dir_main where dir_id=";
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
		$display_block .= " Company Id=$dirid  Delete Parmanently From Database <br><br> ";
		
		$deltaddsl = "delete from dir_add where dir_id='$dirid'";
		$deltaddrd = mysql_query($deltaddsl,$abc);
		//$dir_add = mysql_num_rows($deltaddrd);
				
		$deltadsl = "delete from dir_catprd where main_dirid= '$dirid'";
		$deltadrd = mysql_query($deltadsl,$abc);
		//$dir_catprd = mysql_num_rows($deltadrd);

		$delcompprodsl = "delete from dir_compprod where mdirid='$dirid'";
		$delcompprodrd = mysql_query($delcompprodsl);
		//$dir_compprod = mysql_num_rows($delcompprodrd);
		
		$delcompfhosl = "delete from dir_fho where dir_id='$dirid'";
		$delcompfhord = mysql_query($delcompfhosl);
		//$dir_fho = mysql_num_rows($delcompfhord);
		
		$delcomphomesl = "delete from dir_home where mdirid='$dirid'";
		$delcomphomerd = mysql_query($delcomphomesl);
		//$dir_home = mysql_num_rows($delcomphomerd);

		$delcompprofsl = "delete from dir_profile where mdirid='$dirid'";
		$delcompprofrd = mysql_query($delcompprofsl);
		//$dir_profile = mysql_num_rows($delcompprofrd);
				
		$deljobsl = "delete from job_main where job_tag='1' and job_comp='$dirid'";
		$deljobrcd = mysql_query($deljobsl,$abc);
		//$dir_job = mysql_num_rows($deljobrcd);

		$delpropsl = "delete from prop_main where prop_comp_type='1' and prop_comp_id= '$dirid'";
		$delproprd = mysql_query($delpropsl,$abc);
		//$dir_prop = mysql_num_rows($delproprd);		
			
		$deladminsl = "delete from dir_admin where dlogin_cno='$dirid'";
		$deladminrd = mysql_query($deladminsl,$abc);
		//$dir_admin = mysql_num_rows($deladminrd);
		
		$delsitemgr = "delete from sitemgr where num = '$dirid' and type = 'DIR'";
		$delsitemgrrd = mysql_query($delsitemgr,$abc);
		
		$deladbksetup = "delete from dir_addbksetup where dir_id='$dirid'";
		$deladbksetuprd = mysql_query($deladbksetup,$abc);

		$deladdbk = "delete from dir_addbook where dir_id='$dirid'";
		$deladdbkrd = mysql_query($deladdbk,$abc);


		$deltmsl = "delete from dir_main where dir_id = '$dirid'";
		if($deltmrd = mysql_query($deltmsl, $abc)) 
			{
				$display_block .= "Record Successfuly Deleted";
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
