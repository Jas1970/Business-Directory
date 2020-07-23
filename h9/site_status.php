<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$asost = "select count(*) as rcd from dir_main";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_result($asorcd,0,'rcd');
if ($numrows < 1)
	{
	$display_block =  "<table width=\"550\">
						<tr><td colspan=\"2\"><hr></td></tr>
						<tr>
		 					<td width=\"550\"><font color=\"#990000\" size=\"2\">01. Business Directory Company Registration  </font></td>
							<td width=\"100\">(Records : 0) </td> 
					   </tr></table>";
	}
	else
	{
	$display_block = "<table width= \"550\">";
	 
	     $display_block .= " 
		 <tr>
		 	<td width=\"550\"><font color=\"#990000\" size=\"2\">01. Business Directory Company Registration  </font></td>
			<td width=\"100\">(Records : $numrows) </td> 
		</tr>";
  
	$display_block .= "</table>"; 
}
	
//================ Business directory Products Listing  1

	$asost = "select count(*) as rcd from dir_catprd";
	$asorcd = mysql_query($asost,$abc);
	$numrows = mysql_result($asorcd,0,'rcd');
	if ($numrows < 1)
		{
		$display_block .=  "<table width=\"550\"  ><tr>
			 					<td width=\"550\"><font color=\"#990000\" size=\"2\">02. Business Directory Product Listing</font></td>
								<td width=\"100\">(Record : 0) </td> 
						   </tr></table>";
		}
	else
		{
		
        $display_block .= " 
		<table width= \"550\">
		 <tr>
		 	<td width=\"550\"><font color=\"#990000\" size=\"2\">02. Business Directory Product Listing</font></td> 
			<td width=\"100\">(Records : $numrows) </td> 
		</tr>
		</table>"; 
		
		}
//==============================================		2
	
$asost = "select count(*) as rcd from srvs_main";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_result($asorcd,0,'rcd');
if ($numrows < 1)
	{
		$display_block .=  "<table width=\"550\">
								<tr>
			 						<td width=\"550\"><font color=\"#990000\" size=\"2\">03. Service Directory Company Registration</font></td>
									<td width=\"100\">(Records : 0) </td> 
						   		</tr>
						   </table>";
	}
	else
	{
	$display_block .= "<table width= \"550\">";
    $display_block .= " 
		 <tr>
		 	<td width=\"550\"><font color=\"#990000\" size=\"2\">03. Service Directory Company Registration </font></td> 
			<td width=\"100\">(Records : $numrows) </td> 
		</tr>";
	 
	$display_block .= "</table>";   
}
//============================ Service Directory Registration Status

$asost = "select count(*) as rcd from srvs_advts";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_result($asorcd,0,'rcd');
if ($numrows < 1)
	{
	$display_block .=  "<table width=\"550\">
						<tr>
	 						<td width=\"550\"><font color=\"#990000\" size=\"2\">04. Service Directory Service Authorisation</font></td>
							<td width=\"100\">(Records : 0) </td> 
				   		</tr>
 					   </table>";
	}
	else
	{
		$display_block .= "<table width= \"550\">";
	     $display_block .= " 
		 <tr>
		 	<td width=\"550\"><font color=\"#990000\" size=\"2\">04. Service Directory Service Authorisation</font></td>
			<td width=\"100\">(Records : $numrows) </td> 
		</tr>";
	$display_block .= "</table>";   
}

//============================= Property Listing

$asost = "select count(distinct(prop_comp_id)) as rcd from prop_main";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_result($asorcd,0,'rcd');
if ($numrows < 1)
	{
	$display_block .=  "<table width=\"550\">
						<tr>
	 						<td width=\"550\"><font color=\"#990000\" size=\"2\">05. Property Directory Authorisation</font></td>
							<td width=\"100\">(Records : 0) </td> 
				   		</tr>
 					   </table>";
	}
	else
	{
	$display_block .= "<table width= \"550\">";
   	$display_block .= " 
		 	<tr>
		 		<td width=\"550\"><font color=\"#990000\" size=\"2\">05. Property Directory Authorisation</font></td>
				<td width=\"100\">(Records : $numrows) </td> 
			</tr>";
	$display_block .= "</table>";   
   }


//=========================================== Job Directory Listing

$asost = "select count(distinct(job_comp)) as rcd from job_main";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_result($asorcd,0,'rcd');
if ($numrows < 1)
	{
			$display_block .=  "<table width=\"550\">
						<tr>
	 						<td width=\"550\"><font color=\"#990000\" size=\"2\">06. Placement Directory Authorisation</font></td>
							<td width=\"100\">(Records : 0) </td> 
				   		</tr>
						<tr><td colspan=\"2\"><hr></td></tr>
 						</table>";

	}
	else
	{
		$display_block .= "<table width= \"550\">";
	 	$display_block .= " 
		 	<tr>
		 		<td width=\"550\"><font color=\"#990000\" size=\"2\">06. Placement Directory Authorisation</font></td>
				<td width=\"100\">(Records : $numrows) </td> 
			</tr>";
	$display_block .= "<tr><td colspan=\"2\"><hr></td></tr>";
	$display_block .= "</table>";   
	}



?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php Print $display_block; ?>
</body>
</html>
