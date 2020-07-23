<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$dirid = $_POST['cno'];
	$slcompm = "select distinct(mids) from tsrvs_advts where mids='$dirid'";
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
	$display_block .= "<hr>";
	$display_block .= "<table>";
	while ($pinfo = mysql_fetch_array($rcdcompm))
	 {
   		// category  code (cat id)
  		$srid	= $pinfo['mids'];
		$slrcds = "select * from srvs_main where sr_id='$srid'";
		$rdrcds = mysql_query($slrcds,$abc);
		$cname	= mysql_result($rdrcds,0,'cname');	
		$DirCitIds	= mysql_result($rdrcds,0,'city');	
		$dcitsel = "select * from city where citid='$DirCitIds'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
		$display_block .= " 
		<tr>
		   	<td><font color=\"#FF0000\"><strong>$cname - ($dcitname)</strong></font> </td>
		</tr>
		</table>";

		$cdsel = "select ids,city,srvsid,date_format(rgfdate,'%d-%m-%Y')as fdate,date_format(rgtdate,'%d-%m-%Y')as tdate from tsrvs_advts where mids='$srid'";
		$cdrcd = mysql_query($cdsel,$abc);
		$num = abs(1);
		while ($nfo = mysql_fetch_array($cdrcd))
			{
			$ids 		= $nfo['ids'];
			$srvsid 	= $nfo['srvsid'];
			$cid 		= $nfo['city'];
			$fdate		=$nfo['fdate'];
			$tdate		=$nfo['tdate'];
//			// category code (cat name)
			$catnmsl = "select srvs_name from dir_srvs where srvs_id='$srvsid'";
			$catnmrd = mysql_query($catnmsl,$abc);
			$catname = mysql_result($catnmrd,0,'srvs_name');
			$citsel = "select * from city where citid='$cid'";
			$citrcd = mysql_query($citsel,$abc);
			$citname = mysql_result($citrcd,0,'citname');
	   		$display_block .=	"<table><tr>
					<td width=\"250\"><font color=\"#000099\"><strong> $num . $catname - ($citname) </strong></font> </td>   
					<td width=\"100\"> $fdate</td>
					<td width=\"100\"> $tdate </td>
					<td width=\"100\" align=center><input type=checkbox value=false name=cbox-$ids><font face=arial size=1.5 color=navy>ID : $ids</font></td>
					</tr>";
			$num++;
			}
  	 }
$display_block .= "</table>";   
$display_block .= "<hr>";
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<center><input type=submit name= Authorised value=Authorised>
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
        $result = mysql_query($query, $abc) or die("<f4> You are Not Select Record Or Select More Then One,  Try Again Please </f4>");
		$dirid = mysql_result($result,0,'ids');
		$deltadsl = "delete from tsrvs_advts where ids= '$dirid'";
		if (mysql_query($deltadsl, $abc))
				{
				$display_block .=" Record Sucessfully Deleted <br> Delete Another one <a href=\"0708150317.php\">Click Here</a> ";
				}
				else
				{
				$display_block .="<center> You are Not Select Record Or Select More Then One,  Try Again Please";
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
