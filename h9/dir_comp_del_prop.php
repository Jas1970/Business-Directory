
<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");


$dirid = "$_POST[cno]";

	$slcompm = "select * from prop_main where prop_comp_id='$dirid' and prop_comp_type='1'";
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
	
		$srid 		= mysql_result($rcdcompm,0,'prop_id');
		$dir_id		= mysql_result($rcdcompm,0,'prop_comp_id');
	
			$slcomp = "select * from dir_main where dir_id='$dir_id'";
		$rdcomp = mysql_query($slcomp,$abc);
		$cname = mysql_result($rdcomp,0,'dir_cname');
		
		$slcadd = "select * from dir_add where dir_id='$dir_id'";
		$rdcadd = mysql_query($slcadd,$abc);
		$dir_city = mysql_result($rdcadd,0,'dir_city');
		$dir_state = mysql_result($rdcadd,0,'dir_stat');
		$dir_add1	= mysql_result($rdcadd,0,'dir_add1');
		$dir_add2	= mysql_result($rdcadd,0,'dir_add2');
			
		

		$citysl = "select * from city where citid='$dir_city'";
		$cityrd = mysql_query($citysl,$abc);
		$citname = mysql_result($cityrd,0,'citname');

		$statsl = "select * from state where stid='$dir_state'";
		$statrd = mysql_query($statsl,$abc);
		$stname = mysql_result($statrd,0,'stname');
  		
			
		$display_block .= " 
		
		<tr>
		   	<td><font color=\"#FF0000\"><strong>$cname</strong></font> </td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\"> $dir_add1 </font></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">$dir_add2 </font></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">City : $citname - ($stname)</font></td>
		</tr>		
		</table>";


		$sladvt = "select * from prop_main where prop_comp_id='$dir_id' and prop_comp_type='1'";
		$rdadvt = mysql_query($sladvt,$abc);	

		$num=abs(1);	

		while ($pinfo = mysql_fetch_array($rdadvt))
			 {
				$srid	 		= $pinfo['prop_id'];
				$prop_type 		= $pinfo['prop_type'];	
				$prop_area 		= $pinfo['prop_area'];
				$prop_area_type = $pinfo['prop_area_type'];
				$prop_fr_dt		= $pinfo['prop_fr_dt'];
				$prop_to_dt		= $pinfo['prop_to_dt'];
					
			
				$typesl = "select * from prop_type where type_id='$prop_type'";
				$typerd = mysql_query($typesl,$abc);
				$type_name = mysql_result($typerd,0,'type_name');


	   		$display_block .=	"<table><tr>
					<td width=\"175\"><font color=\"#000099\"><strong> $num $type_name </strong></font> </td>   
					<td width=\"100\"> $prop_fr_dt</td>
					<td width=\"100\"> $prop_to_dt</td>
					<td width=\"150\"> $prop_area -($prop_area_type)</td>
					<td width=\"100\" align=center><input type=checkbox value=false name=cbox-$srid><font face=arial size=1.5 color=navy>ID : $srid</font></td>
					</tr>";
		
			$num++;
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
	$result=mysql_query("SELECT prop_id FROM prop_main ORDER BY prop_id") or die("Query failed");
	
	$query = "select prop_id from prop_main where prop_id=";
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
		$dirid = mysql_result($result,0,'prop_id');
		
	
		$deltadsl = "delete from prop_main where prop_id= '$dirid'";
		if (mysql_query($deltadsl, $abc))
				{
				$display_block .=" Record Sucessfully Deleted";
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
