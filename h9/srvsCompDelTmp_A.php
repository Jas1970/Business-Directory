
<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");


$slcomp = "select * from asrvs_advts";
$rcdcomp = mysql_query($slcomp,$abc);
$numrows = mysql_num_rows($rcdcomp);
if ($numrows < 1)
	{
		print "<h4>There No Any Record For Deletion</h4>";
		exit;
	}
if ($_POST['op'] != "del") 
	{
	$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<table width=\"100%\">";
	while ($pinfo = mysql_fetch_array($rcdcomp))
	 {
  		$dirid	= $pinfo['mids'];
		$ids 	= $pinfo['ids'];
		$slmain = "select * from srvs_main where sr_id='$dirid'";
		$rsmain = mysql_query($slmain,$abc);
		$dircname = mysql_result($rsmain,0,'cname');
		$city = mysql_result($rsmain,0,'city');
		
		
		$dcitsel = "select * from city where citid='$city'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$city_name = mysql_result($dcitrcd,0,'citname');
				
	$display_block .= " 
		<tr>
		 		<td width=\"100%\" colspan=\"2\"> <hr> </td>
		</tr>
		<tr>
		   	<td width=\"60%\"><font color=\"#FF0000\"><strong>$dircname - ($city_name)</strong></font> </td>
			<td width=\"40%\" align=center><input type=checkbox value=false name=cbox-$ids><font face=arial size=1.5 color=navy>ID : $ids</font></td>
		</tr>";
   }

$display_block .= " 
		<tr>
		 		<td colspan=\"2\"> <hr> </td>
		</tr>";
   
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<center><input type=submit name= Delete value=Delete></center>";

$display_block .= "</FORM>";
	}
	else if ($_POST['op'] == "del") 
	{
//	
	$result=mysql_query("SELECT ids FROM asrvs_advts ORDER BY mids") or die("Query failed");
	
	$query = "select ids from asrvs_advts where ids=";
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
        $result = mysql_query($query, $abc) or die("<center> You are Not Select Record Or Select More Then One,  Try Again Please");
		$idsdel = mysql_result($result,0,'ids');
		
		$deltaddsl = "delete from asrvs_advts where ids='$idsdel'";
		$deltaddrd = mysql_query($deltaddsl,$abc);
		
					$display_block = "<h4>Record Parmanently Delete From Database <br>
											<a href=\"srvsCompDelTmp.php\"> Delete Another One : $idsdel </a></h4>" ;
			 
			/*
		if($deltaddrd = mysql_query($deltaddsl,$abc))
		
	 		{
			
						$display_block = "<h4>Record Parmanently Delete From Database <br>
											<a href=\"srvsCompDelTmp.php\"> Delete Another One : $idsdel </a></h4>" ;
			}
			else
			{
			  $display_block .= "<center> You are Not Select Record Or Select More Then One,  Try Again Please";
			}
		*/

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
