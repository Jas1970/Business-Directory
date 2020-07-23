<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$srvsid = $_POST['srvsid'];
$slcomp = "select * from prop_tmain  where prop_comp_id='$srvsid' and prop_comp_type='2'";
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
		 		<td width=\"500\" colspan=\"3\"> <hr> </td>	
		</tr>
		<tr>
		   	<td width=\"200\"> <font color=\"#FF0000\"><strong>$dircname ($dcitname)</strong></font> </td>
			<td width=\"200\"></td>
			<td width=\"200\"></td>
		</tr>";
		$rownum = abs(1);
	while ($pinfo = mysql_fetch_array($rcdcomp))
		 {
		$propid = $pinfo['tprop_id'];	
		$catnmsl = "select * from prop_tmain where tprop_id='$propid' and prop_comp_id='$srvsid'";
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
								<td>City : $dcitname</td>
								<td> </td>
							</tr>";
					$rownum++;
						}
$display_block .= " 
		<tr>
		 		<td width=\"500\" colspan=\"3\"> <hr> </td>	
		</tr>";						
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<input type=hidden name=srvsid value=$srvsid>";
$display_block .= "<center><input type=submit name= Authorised value=Authorised></center>";
$display_block .= "</FORM>";
	}
	else if ($_POST[op] == "del") 
	{
	
	$result=mysql_query("select tprop_id from prop_tmain where prop_comp_id='$srvsid' and prop_comp_type='2'") or die("Query failed");
	
	$query = "select tprop_id from prop_tmain where prop_comp_type='2' and tprop_id=";
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
        $result = mysql_query($query, $abc) or die("<h4> You are Not Select Record Or Select More Then One, srvsid= $srvsid <br>
													 <a href=\"srvs_Adm_PropAuthSl.php\"> Try Again Please </a></h4>");
		$ids = mysql_result($result,0,'tprop_id');
		$DirAdvtSl = "Select * from prop_tmain where tprop_id='$ids' and prop_comp_type='2' ";
		$DirAdvtRd = mysql_query($DirAdvtSl,$abc);
		while($inst = mysql_fetch_array($DirAdvtRd)) 
				{
				$type_id		= $inst['prop_type'];
				$pwt			= $inst['prop_want_to'];
				$pprice			= $inst['prop_price'];
				$parea			= $inst['prop_area'];
				$pareat			= $inst['prop_area_type'];
				$powner			= $inst['prop_owner_type'];
				$plocation		= $inst['prop_location'];
				$padd1			= $inst['prop_add1'];
				$padd2			= $inst['prop_add2'];
				$pcity_id		= $inst['prop_city'];
				$pdist_id		= $inst['prop_dist'];
				$prop_day		= $inst['prop_ad_day'];
				$prop_fr_dt		= $inst['prop_fr_dt'];				
				$prop_to_dt		= $inst['prop_to_dt'];
				$pstat_id		= $inst['prop_state'];
				$pcompid		= $inst['prop_comp_id'];
				$rcddir 		=2;
						$inssql = "insert into prop_main
						(prop_comp_type, 
						prop_comp_id, 
						prop_location, 
						prop_add1, 
						prop_add2, 
						prop_city,
						prop_state,
						prop_want_to, 
						prop_price, 
						prop_area, 
						prop_area_type, 
						prop_owner_type, 
						prop_dist, 
						prop_ad_day, 
						prop_fr_dt, 
						prop_to_dt, 
						prop_type)
						values ('$rcddir','$srvsid','$plocation','$padd1', '$padd2','$pcity_id','$pstat_id',
						'$pwt','$pprice','$parea','$pareat','$powner','$pdist_id', '$prop_day',
						'$prop_fr_dt', '$prop_to_dt','$type_id')";
					if (mysql_query($inssql, $abc)) 
							{
							$delrcd = "delete from prop_tmain where tprop_id='$ids'";
							$rcddel = mysql_query($delrcd,$abc);

							$display_block .= "<h4>Record Successfuly Authorised <br>
					 							Company Id = $srvsid <br>
												<a href=\"0708150341.php\"> Authorised Another One </a></h4></center>" ;
							} 
							else 
							{
							$display_block .= "<h4>Record Not Authorised, something went wrong <br>
												Company Id = $srvsid <br>";
							exit;
							}
						}
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
