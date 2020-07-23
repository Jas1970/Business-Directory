
<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");


$dirid = "$_POST[cno]";

	$slcompm = "select * from job_main where job_comp='$dirid' and job_tag='1'";
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
	
	$srid 		= mysql_result($rcdcompm,0,'job_id');
	$job_comp	= mysql_result($rcdcompm,0,'job_comp');
	
			$slcomp = "select * from dir_main where dir_id='$job_comp'";
		$rdcomp = mysql_query($slcomp,$abc);
		$cname = mysql_result($rdcomp,0,'dir_cname');
		
		$slcadd = "select * from dir_add where dir_id='$job_comp'";
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


		$sladvt = "select * from job_main where job_comp='$job_comp' and job_tag='1'";
		$rdadvt = mysql_query($sladvt,$abc);	

		$num=abs(1);	

		while ($pinfo = mysql_fetch_array($rdadvt))
			 {
				$srid	 	= $pinfo['job_id'];
				$jobid 		= $pinfo['job_id'];
				$job_type 	= $pinfo['job_type'];	
				$job_name 	= $pinfo['job_nm'];
				$job_no	  	= $pinfo['job_no'];
				$job_fdt	= $pinfo['job_fdt'];
				$job_tdt	= $pinfo['job_tdt'];
					
			
				$typesl = "select * from job_type where jtype_id='$job_type'";
				$typerd = mysql_query($typesl,$abc);
				$type_name = mysql_result($typerd,0,'jtype_name');


	   		$display_block .=	"<table><tr>
					<td width=\"250\"><font color=\"#000099\"><strong> $num . $job_name ($type_name) </strong></font> </td>   
					<td width=\"100\"> $job_fdt</td>
					<td width=\"100\"> $job_tdt</td>
					<td width=\"50\"> $job_no</td>
					<td width=\"100\" align=center><input type=checkbox value=false name=cbox-$jobid><font face=arial size=1.5 color=navy>ID : $jobid</font></td>
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
	$result=mysql_query("SELECT job_id FROM job_main ORDER BY job_id") or die("Query failed");
	
	$query = "select job_id from job_main where job_id=";
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
		$dirid = mysql_result($result,0,'job_id');
		
	
		$deltadsl = "delete from job_main where job_id= '$dirid'";
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
