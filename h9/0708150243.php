<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
include 'include/sess.php';

$rstid = $_POST['dirno'];
$slcomp = "select * from prop_tmain  where prop_comp_id='$rstid' and prop_comp_type='1'";
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
		   	<td width=\"200\"> <font color=\"#FF0000\"><strong>$dircname ($dcitname)</strong></font> </td>
			<td width=\"200\"></td>
			<td></td>
		</tr>";
		$rownum = abs(1);
	while ($pinfo = mysql_fetch_array($rcdcomp))
		 {
		$propid = $pinfo['tprop_id'];	
		$catnmsl = "select * from prop_tmain where tprop_id='$propid' and prop_comp_id='$rstid'";
		$catnmrd = mysql_query($catnmsl,$abc);
		$prop_type	 = mysql_result($catnmrd,0,'prop_type');
		$prop_loc 	 = mysql_result($catnmrd,0,'prop_location');
		$prop_areaty = mysql_result($catnmrd,0,'prop_area_type');
		$prop_area	 = mysql_result($catnmrd,0,'prop_area');
		$prop_city	 = mysql_result($catnmrd,0,'prop_city');
		$prtypesl 	= "select type_name from prop_type where type_id='$prop_type'";
		$prtyperd 	= mysql_query($prtypesl,$abc);
		$type_name	= mysql_result($prtyperd,0,'type_name');
		$dcitsel = "select * from city where citid='$prop_city'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
		$display_block .= " <tr>
								<td colspan=\"2\"><font color=\"#000099\"><strong>&nbsp;&nbsp;&nbsp; $rownum. $prop_loc ($type_name) </strong></font> </td>   
								<td width=\"100\" align=center><input type=checkbox value=false name=cbox-$propid><font face=arial size=1.5 color=navy>ID : $propid</font></td>

							</tr>";
		$display_block .= "
							<tr>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area : $prop_area \ $prop_areaty</td> 
								<td> </td>
								<td>City : $dcitname</td>
							</tr>";
					$rownum++;
						}
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<input type=hidden name=dirno value=$rstid>";
$display_block .= "<center><input type=submit name= Authorised value=Authorised></center>";
$display_block .= "</FORM>";
	}
	else if ($_POST[op] == "del") 
	{
	$result=mysql_query("select tprop_id from prop_tmain where prop_comp_id='$rstid' and prop_comp_type='1'") or die("Query failed");
	
	$query = "select tprop_id from prop_tmain where prop_comp_type='1' and tprop_id=";
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
		$ids = mysql_result($result,0,'tprop_id');
		$DirAdvtSl = "Select * from prop_tmain where prop_comp_id='$rstid' and prop_comp_type='1' order by tprop_id";
		$DirAdvtRd = mysql_query($DirAdvtSl,$abc);
		while($inst = mysql_fetch_array($DirAdvtRd)) 
				{
				$type_id		= $inst['prop_type'];
				$pwt		= $inst['prop_want_to'];
				$pprice		= $inst['prop_price'];
				$parea		= $inst['prop_area'];
				$pareat		= $inst['prop_area_type'];
				$powner		= $inst['prop_owner_type'];
				$plocation	= $inst['prop_location'];
				$padd1		= $inst['prop_add1'];
				$padd2		= $inst['prop_add2'];
				$pcity_id		= $inst['prop_city'];
				$pdist_id		= $inst['prop_dist'];
				$pstat_id		= $inst['prop_state'];
				$pcompid	= $inst['prop_comp_id'];
				$rcddir =1;
						$inssql = "insert into prop_main
						(prop_comp_type, prop_comp_id, prop_location, prop_add1, prop_add2, prop_city,
						prop_state,prop_want_to, prop_price, prop_area, prop_area_type, prop_owner_type, 
						prop_dist, prop_fr_dt, prop_to_dt, prop_type)
						values ('$rcddir','$rstid','$plocation','$padd1', '$padd2','$pcity_id','$pstat_id',
						'$pwt','$pprice','$parea','$pareat','$powner','$pdist_id',
						now(),now(),'$type_id')";
					if (mysql_query($inssql, $abc)) 
							{
							$delrcd = "delete from prop_tmain where tprop_id='$ids'";
							$rcddel = mysql_query($delrcd,$abc);
							} 
							else 
							{
							$display_block .= "<h4>Record Not Authorised, something went wrong <br>
												Company Id = $rstid <br>";
							exit;
							}
						}
						$display_block .= "<h4>Record Successfuly Authorised <br>
				 							Company Id = $rstid <br>
											<a href=\"0708150244.php?ID=$rstid&SID=$sid&rand=$adms\"> Authorised Another One </a></h4></center>" ;
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
