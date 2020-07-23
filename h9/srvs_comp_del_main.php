
<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");


$dirid = $_POST['cno'];

	$slcompm = "select * from srvs_main where sr_id='$dirid'";
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
	$display_block .= "<hr>";
	$display_block .= "<table>";
	while ($pinfo = mysql_fetch_array($rcdcompm))
	 {
   		// category  code (cat id)
  		$srid	= $pinfo['sr_id'];
		$cname = $pinfo['cname'];
//		$srvsasoid = $pinfo['asoid'];
		$DirCitIds = $pinfo['city'];
		$Diradd1   = $pinfo['add1'];	
		$Diradd2   = $pinfo['add2'];	

/*		
		$dirasoidsl = "select * from aso_main where aso_id='$srvsasoid'";
		$dirasoidrd = mysql_query($dirasoidsl,$abc);
		$asofname = mysql_result($dirasoidrd,0,'aso_fname');
		$asomname = mysql_result($dirasoidrd,0,'aso_mname');
		$asolname = mysql_result($dirasoidrd,0,'aso_lname');
		
*/
		$dcitsel = "select * from city where citid='$DirCitIds'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
		
/*
		$DirCityAsoSl = "select * from aso_add where aso_id='$srvsasoid'";
		$DirCityAsoRd = mysql_query($DirCityAsoSl,$abc);
		$DirCitId = mysql_result($DirCityAsoRd,0,'aso_city'); 
		$citsel = "select * from city where citid='$DirCitId'";
		$citrcd = mysql_query($citsel,$abc);
		$citname = mysql_result($citrcd,0,'citname');
	*/
	
	
		$display_block .= " 
		
		<tr>
		   	<td><font color=\"#FF0000\"><strong>$cname</strong></font> </td>
			<td align=center><input type=checkbox value=false name=cbox-$srid><font face=arial size=1.5 color=navy>ID : $srid</font></td>
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

		$cdsel = "select distinct(srvsid)  from srvs_advts where mids='$srid'";
		$cdrcd = mysql_query($cdsel,$abc);
		$num = abs(1);
		while ($nfo = mysql_fetch_array($cdrcd))
			{
			$srvsid = $nfo['srvsid'];
//			// category code (cat name)
			$catnmsl = "select srvs_name from dir_srvs where srvs_id='$srvsid'";
			$catnmrd = mysql_query($catnmsl,$abc);
			$catname = mysql_result($catnmrd,0,'srvs_name');
			
			$srvssl = "select date_format(rgfdate,'%d-%m-%Y')as fdate, date_format(rgtdate, '%d-%m-%Y')as tdate from srvs_advts where mids='$srid'";
			$srvsrd = mysql_query($srvssl,$abc);
			$fdate = mysql_result($srvsrd,0,'fdate');
			$fdate = mysql_result($srvsrd,0,'tdate');
						
	   		$display_block .=	"<tr>
					<td><font color=\"#000099\"><strong> $num . $catname </strong></font> </td>   
					<td> $fdate</td>
					<td> $tdate </td>
					</tr>";
		
			$num++;
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
	$result=mysql_query("SELECT sr_id FROM srvs_main ORDER BY sr_id") or die("Query failed");
	
	$query = "select sr_id from srvs_main where sr_id=";
		$flag=TRUE;
		while($lines = mysql_fetch_array($result, MYSQL_ASSOC))
		{   
			foreach($lines as $srid[0])
			{
				if($_REQUEST["cbox-$srid[0]"]=="false")
					if($flag==TRUE)
					{
						$query=$query.$srid[0];
						$flag=FALSE;
					}
					else
					{
						$query=$query." OR sr_id=".$srid[0];
					}
			}
		}
        $result = mysql_query($query, $abc) or die("<center> You are Not Select Record Or Select More Then One,  Try Again Please");
		$dirid = mysql_result($result,0,'sr_id');
		 
		$display_block .= " Delete Record Idis  : $dirid";
		

		
		$deltadsl = "delete from srvs_advts where mids= '$dirid'";
		$deltadrd = mysql_query($deltadsl,$abc);
		//$dir_catprd = mysql_num_rows($deltadrd);
		

		$delcompprodsl = "delete from srvs_branch where mids='$dirid'";
		$delcompprodrd = mysql_query($delcompprodsl);
		//$dir_compprod = mysql_num_rows($delcompprodrd);
		
		$delcompfhosl = "delete from srvs_fho where sr_id='$dirid'";
		$delcompfhord = mysql_query($delcompfhosl);
		//$dir_fho = mysql_num_rows($delcompfhord);
		
		$delcomphomesl = "delete from srvs_home where mdirid='$dirid'";
		$delcomphomerd = mysql_query($delcomphomesl);
		//$dir_home = mysql_num_rows($delcomphomerd);

				
		$deljobsl = "delete from job_main where job_tag='2' and job_comp='$dirid'";
		$deljobrcd = mysql_query($deljobsl,$abc);
		//$dir_job = mysql_num_rows($deljobrcd);

		$delpropsl = "delete from prop_main where prop_comp_type='2' and prop_comp_id= '$dirid'";
		$delproprd = mysql_query($delpropsl,$abc);
		//$dir_prop = mysql_num_rows($delproprd);

		$delsitemgr = "delete from sitemgr where type='SRVS'and num = '$dirid'";
		$delsitemgrrd=mysql_query($delsitemgr,$abc);

		$deladbksetup = "delete from srvs_addbksetup where dlogin_cno='$dirid'";
		$deladbksetuprd = mysql_query($deladbksetup, $abc);
		
		$deladdbk = "delete from srvs_addbook where srvs_id = '$dirid'";
		$deladdbkrd = mysql_query($deladdbk,$abc); 
		
		$deladminsl= "delete from srvs_admin where dlogin_cno = '$dirid'";
		$deladminrd = mysql_query($deladminsl, $abc); 
		//$dir_main = mysql_num_rows($deladminrd);		
			
		$deltmsl = "delete from srvs_main where sr_id = '$dirid'";
		$deltmrd = mysql_query($deltmsl, $abc); 
		//$dir_main = mysql_num_rows($deltmrd);
		
	

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
