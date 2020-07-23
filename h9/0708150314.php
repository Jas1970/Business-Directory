<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$srvsid = "$_POST[cno]";
print " this is $srvsid";
	$slcompm = "select distinct(mids) from tsrvs_advts where mids='$srvsid'";
	$rcdcompm = mysql_query($slcompm,$abc);
	$numrows = mysql_num_rows($rcdcompm);
if ($_POST[op] != "del") 
	{
	if ($numrows < 1)
	{
		print "<h4><font color=\"#006600\"><strong> There Not Any Temp Company Record For Deletion</strong></font></h4>";
		exit;
	}
	$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<table>";
	$display_block .= " <tr><td width=\"550\" colspan=\"4\"><hr></td></tr>";
	while ($pinfo = mysql_fetch_array($rcdcompm))
	 {
   		// category  code (cat id)
  		$srid	= $pinfo['mids'];
		$slrcds = "select * from srvs_main where sr_id='$srid'";
		$rdrcds = mysql_query($slrcds,$abc);
		$cname	= mysql_result($rdrcds,0,'cname');	
		$DirCitIds	= mysql_result($rdrcds,0,'city');	
		$Diradd1   = mysql_result($rdrcds,0,'add1');	
		$Diradd2   = mysql_result($rdrcds,0,'add2');	
		$dcitsel = "select * from city where citid='$DirCitIds'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
		$display_block .= " 
		<tr>
		   	<td><font color=\"#FF0000\"><strong>$cname</strong></font> </td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">City : $dcitname</font></td>
		</tr>";

		$cdsel = "select ids,srvsid,srid,city,date_format(rgfdate,'%d-%m-%Y')as fdate,date_format(rgtdate,'%d-%m-%Y')as tdate from tsrvs_advts where mids='$srvsid'";
		$cdrcd = mysql_query($cdsel,$abc);
		$num = abs(1);
		while ($nfo = mysql_fetch_array($cdrcd))
			{

			$ids = $nfo['ids'];
			$srvsid = $nfo['srvsid'];
			$city   = $nfo['city'];
			$fdate  = $nfo['fdate'];
			$tdate  = $nfo['tdate'];
			$sr_id  = $nfo['srid'];
		
			// city
			$citsel = "select * from city where citid='$city'";
			$citrcd = mysql_query($citsel,$abc);
			$citname = mysql_result($citrcd,0,'citname');
			
			
//			// category code (cat name)
			$catnmsl = "select srvs_name from dir_srvs where srvs_id='$srvsid'";
			$catnmrd = mysql_query($catnmsl,$abc);
			$catname = mysql_result($catnmrd,0,'srvs_name');

			$slsubsrvs =  "select sname from dir_subsrvs where sn_id ='$sr_id'";
			$rdsubsrvs = mysql_query($slsubsrvs, $abc);
			$sub_name  = mysql_result($rdsubsrvs,0,'sname');
						
	   		$display_block .=	"<table><tr>
					<td width=\"250\"><font color=\"#000099\"><strong> $num. $sub_name ($catname) -- $citname </strong></font> </td>   
					<td width=\"100\"> $fdate</td>
					<td width=\"100\"> $tdate </td>
					<td width=\"100\" align=center><input type=checkbox value=false name=cbox-$ids><font face=arial size=1.5 color=navy>ID : $ids</font></td>
					</tr>";
		
			$num++;
			}
  	 }
$display_block .= " <tr><td colspan=\"4\"><hr></td></tr>";
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<center><input type=submit name= Delete value=Authorised>
					</center>";

$display_block .= "</FORM>";
	}
	else if ($_POST[op] == "del") 
	{
//	
	$result=mysql_query("SELECT ids FROM tsrvs_advts ORDER BY ids") or die("Query failed");
	
	$query = "select ids from tsrvs_advts where ids=";
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
		$adid = mysql_result($result,0,'ids');
		
	
		$aslrcd = "select * from tsrvs_advts where ids = '$adid'";
		$ardrcd = mysql_query($aslrcd,$abc);
		$mids 		= mysql_result($ardrcd,0,'mids');
		$srvid 		= mysql_result($ardrcd,0,'srvsid');
		$city 		= mysql_result($ardrcd,0,'city');
		$rfyear		= mysql_result($ardrcd,0,'rfyear');
		$rgfdate	= mysql_result($ardrcd,0,'rgfdate');
		$rgtdate	= mysql_result($ardrcd,0,'rgtdate');
		$authtag	= mysql_result($ardrcd,0,'authtag');
		$sidx		= mysql_result($ardrcd,0,'sidx');
		$srid		= mysql_result($ardrcd,0,'srid');

		 
		$AdvtSl = "insert into srvs_advts(mids,srvsid,city,rfyear,rgfdate,rgtdate,authtag,sidx,srid)
				values
				('$mids','$srvid','$city','$rfyear','$rgfdate','$rgtdate','$authtag','$sidx', '$srid')";	
		 if($AdvtRd = mysql_query($AdvtSl,$abc))
	 		{
			$deltadsl = "delete from tsrvs_advts where ids= '$adid'";
			$delrcd= mysql_query($deltadsl, $abc);
			$display_block .= "Record Sucessfully Inserted <br> Authorised Another One <a href=\"0708150315.php\">click Here </a>";
			}
			else
			{
						$display_block .= "Record not Deleted";
			}

	}
?>

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<?php print $display_block; ?>
</body>
</html>
