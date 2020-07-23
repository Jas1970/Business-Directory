
<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

if ($_POST[op] != "del") 

	{

$slcomp = "select * from dir_srvs";
$rcdcomp = mysql_query($slcomp,$abc);
$numrows = mysql_num_rows($rcdcomp);


if ($numrows < 1)
	{
		print "<center> <font color=\"#000099\"><strong>There No Any Record For Deletion</strong></font></center>";
		exit;
	}

	$display_block .= "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<hr>";
	$display_block .= "<center><h3> Delete Service Name From Database <h3></center>";
	$display_block .= "<hr>";
	$display_block .= "<table>";

	$rownum = abs(1);

	while ($pinfo = mysql_fetch_array($rcdcomp))
	 	{
   		$srvsid	= $pinfo['srvs_id'];
		$srvsname = $pinfo['srvs_name'];		
		$display_block .= " 
			<tr>
    		   	<td><font color=\"#OOOO0O\"><strong>$rownum.</font> <font color=\"#990033\">$srvsname</strong></font> </td>
				<td> ......... </td><td align=center><input type=checkbox value=false name=cbox-$srvsid><font face=arial size=1.5 color=navy>ID : $srvsid</font></td>

			</tr>";
	 	  $rownum++;
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
	$result=mysql_query("SELECT srvs_id FROM dir_srvs ORDER BY srvs_id") or die("Query failed");
	
	$query = "select * from dir_srvs where srvs_id=";
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
	   $srvsid = mysql_result($result,0,'srvs_id');
	   
	   $chksl = "select * from srvs_advts where srvsid='$srvsid'";
	   $chkrd = mysql_query($chksl,$abc);
	   $chknum = mysql_num_rows($chkrd);
	   if($chknum<>0)
	   		{
				$display_block .= "<center><h3>  Record Exist in Service Advertisement Master Service Name Cant Be Deleted <br> 
										<a href=\"dir_srvs_del.php\"> Delete Another One</a></h3></center>";
				
			}
			else
	   		{
				$delrcd = "delete from dir_srvs where srvs_id= '$srvsid'";
				if($delnum = mysql_query($delrcd,$abc))
					{
		
					$display_block .= "<center><h3> $srvsid Category & Product Record Parmanently Delete From Database <br>
								  <br>
										<a href=\"dir_srvs_del.php\"> Delete Another One</a></h3></center>";
					}
					else
					{
			  		$display_block .= "<center> You are Not Select Record Or Select More Then One,  Try Again Please";
					}			
			
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
