<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$srvsid = $_POST['srvsid'];
$slcomp = "select * from job_tmain  where job_comp='$srvsid' and job_tag='2'";
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
	$dirmainsl = "select * from srvs_main where sr_id='$srvsid'";
	$dirmainrd = mysql_query($dirmainsl,$abc);
	$dircname = mysql_result($dirmainrd,0,'cname');
	$DirCitIds = mysql_result($dirmainrd,0,'city'); 
	$Diradd1 = mysql_result($dirmainrd,0,'add1'); 
	$Diradd2 = mysql_result($dirmainrd,0,'add2'); 
	$dcitsel = "select * from city where citid='$DirCitIds'";
	$dcitrcd = mysql_query($dcitsel,$abc);
	$dcitname = mysql_result($dcitrcd,0,'citname');	
	$display_block .= " 
		<tr>
		 		<td width=\"600\" colspan=\"3\"> <hr> </td>	
		</tr>
		<tr>
		   	<td colspan=\"3\" width=\"600\"> <font color=\"#FF0000\"><strong>$dircname ($dcitname)</strong></font> </td>
		</tr>";
		$rownum = abs(1);
		while ($pinfo = mysql_fetch_array($rcdcomp))
		 {
			$jobid = $pinfo['tjob_id'];	
			$catnmsl = "select * from job_tmain where tjob_id='$jobid' and job_comp='$srvsid'";
			$catnmrd = mysql_query($catnmsl,$abc);
			$job_name = mysql_result($catnmrd,0,'job_nm');
			$job_qual = mysql_result($catnmrd,0,'job_qual');
			$job_type = mysql_result($catnmrd,0,'job_type');
			$job_grp  = mysql_result($catnmrd,0,'job_grp');
			$job_no  = mysql_result($catnmrd,0,'job_no');
			$qualsl = "select * from job_qual where jqual_id='$job_qual'";
			$qualrd = mysql_query($qualsl,$abc);
			$qual_name = mysql_result($qualrd,0,'jqual_name');
			$grpsl = "select * from job_grp where grp_id='$job_grp'";
			$grprd = mysql_query($grpsl,$abc);
			$grp_name = mysql_result($grprd,0,'grp_name');
			$jobssl = "select * from job_type where jtype_id = '$job_type'";
			$results_rcd = mysql_query($jobssl, $abc) or die ("some thig wrong with statement");
			$types_name = mysql_result($results_rcd,0,'jtype_name');					
			$display_block .= " <tr>
									<td width=\"500\" colspan=\"2\"><font color=\"#000099\"><strong>&nbsp;&nbsp;&nbsp; $rownum. $types_name ($grp_name) </strong></font> </td>   
									<td width=\"100\" align=center><input type=checkbox value=false name=cbox-$jobid><font face=arial size=1.5 color=navy>ID : $jobid</font></td>
								</tr>";
			$display_block .= "
							<tr>
								<td>&nbsp;&nbsp;&nbsp; Qualification : $qual_name, </td> 
								<td>Vacany : $job_no Nos.</td>
								<td> </td>
							</tr>";
					$rownum++;
						}
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<input type=hidden name=srvsid value=$srvsid>";
$display_block .= "<center><input type=submit name= Authorised value=Authorised></center>";
$display_block .= "</FORM>";
	}
	else if ($_POST[op] == "del") 
	{
		$query = "select tjob_id from job_tmain where job_comp='$srvsid'";
        $result = mysql_query($query, $abc) or die("<h4> You are Not Select Record Or Select More Then One,  <br> <a href=\"0708150335.php\"> Try Again Please </a></h4>");
		$ids = mysql_result($result,0,'tjob_id');
		$DirAdvtSl = "Select * from job_tmain where job_comp='$srvsid' order by tjob_id";
		$DirAdvtRd = mysql_query($DirAdvtSl,$abc);
		while($inst = mysql_fetch_array($DirAdvtRd)) 
				{
				$dir_id 	= $inst['job_comp'];
				$job_type 	= $inst['job_type'];
				$job_grp	= $inst['job_grp'];
				$job_inds	= $inst['job_inds'];
				$job_qual	= $inst['job_qual'];
				$job_age	= $inst['job_age'];
				$job_sal	= $inst['job_sal'];
				$job_exp	= $inst['job_exp'];
				$job_FP		= $inst['job_FP'];
				$job_no		= $inst['job_no'];
				$job_fdt	= $inst['job_fdt'];
				$job_tdt	= $inst['job_tdt'];
				$job_day	= $inst['job_day'];
				$job_mage	= $inst['job_mage'];
				$job_tag	= $inst['job_tag'];
				$job_nm		= $inst['job_nm'];
				$job_city	= $inst['job_city'];
				$rcddir =2;
						$inssql = "insert into job_main
						(job_type,
						job_grp,
						job_inds,
						job_qual,
						job_age,
						job_sal,
						job_exp,
						job_FP,
						job_no,
						job_fdt,
						job_tdt,
						job_day,
						job_mage,
						job_comp,
						job_tag,	
						job_nm,
						job_city)
						values ('$job_type','$job_grp','$job_inds','$job_qual','$job_age','$job_sal','$job_exp',
						'$job_FP','$job_no','$job_fdt','$job_tdt','$job_day','$job_mage','$dir_id',
						'$rcddir','$job_nm','$job_city')";
						if (mysql_query($inssql, $abc)) 
							{
						    $delrcd = "delete from job_tmain where tjob_id='$ids'";
							$rcddel = mysql_query($delrcd,$abc);
							} 
							else 
							{
						    echo "something went wrong";
							}
					}
				$display_block .= "<center><h4>Record Successfuly Authorised <br>
										Company Id = $srvsid <br>
							<a href=\"0708150335.php\"> Authorised Another One </a></h4></center>" ;
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
