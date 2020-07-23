
<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

if ($_POST[op] != "del") 

	{

$slcomp = "select * from job_inds";
$rcdcomp = mysql_query($slcomp,$abc);
$numrows = mysql_num_rows($rcdcomp);


if ($numrows < 1)
	{
	print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
	print "<tr><td class=\"org_border_t_cell\" align=\"center\">There No Any Record For Deletion, For Add Record </td</tr>";
	print "<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"inds.php\"> Click Here </a></td></tr>";
	print "</table>";
	exit;
			
	}

	$display_block .= "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
	$display_block .= "<tr>
							<td align=\"center\" class=\"org_border_box\" width=\"430px\" colspan=\"2\">Delete From Industries Master</td>
					  </tr>";
	$rownum = abs(1);

	while ($pinfo = mysql_fetch_array($rcdcomp))
	 	{
   		$srvsid	= $pinfo['inds_id'];
		$srvsname = $pinfo['inds_name'];		
		$display_block .= " 
			<tr>
    		   	<td width=\"200px\" class=\"org_border_l_cell\" ><font color=\"#OOOO0O\"><strong>$rownum.</font> <font color=\"#990033\">$srvsname</strong></font> </td>
				<td class=\"org_border_r_cell\"><input type=\"checkbox\" value=\"false\" name=\"cbox-$srvsid\" ><font face=\"arial\" size=\"1.5\" color=\"navy\">ID : $srvsid</font></td>
			</tr>";
	 	  $rownum++;
		  }
   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<tr>
							<td class=\"org_border_box\" width=\"430px\" colspan=\"2\"><center><input type=submit name= Delete value=Delete>
					</center></td>
					  </tr>";

$display_block .= "</table>";   

$display_block .= "</FORM>";
	}
	else if ($_POST[op] == "del") 
	{
//	
	$result=mysql_query("SELECT inds_id FROM job_inds ORDER BY inds_id") or die("Query failed");
	
	$query = "select * from job_inds where inds_id=";
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
						$query=$query." OR srvs_id=".$gid[0];
					}
			}
		}
       $result = mysql_query($query, $abc);
	   $rcdcount = mysql_num_rows($result);
	   if($rcdcount==0)
			{
			$display_block .= "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
			<tr><td class=\"org_border_t_cell\" align=\"center\">Please Select any One Record for Deletion</td</tr>
			<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"inds_del.php\"> Click Here </a></td></tr>
			</table>";
			exit;
			}	
	   
	   $srvsid = mysql_result($result,0,'inds_id');
	   
	   $chksl = "select * from job_main where job_inds='$srvsid'";
	   $chkrd = mysql_query($chksl,$abc);
	   $chknum = mysql_num_rows($chkrd);
	   if($chknum<>0)
	   		{
			$display_block .= "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
			<tr><td class=\"org_border_t_cell\" align=\"center\">Record Exist in Job Main Table Name Cant Be Deleted </td</tr>
			<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"inds_del.php\"> Delete Another One</a></td></tr>
			</table>";
			}
			else
	   		{
				$delrcd = "delete from job_inds where inds_id= '$srvsid'";
				if($delnum = mysql_query($delrcd,$abc))
					{
		
					$display_block .= "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">Record Sucessfully Deleted From Database,</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"inds_del.php\"> Delete Another One</a></td></tr>
					</table>";


					}
					else
					{
					$display_block .= "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">You are Not Select Record Or Select More Then One,,</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"inds_del.php\"> Try Again Please</a></td></tr>
					</table>";

					}			
			
			}
	}
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php print $display_block; ?> 
</body>
</html>
