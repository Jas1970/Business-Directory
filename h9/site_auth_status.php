<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$asost = "select *  from dir_tmain order by dir_cname";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
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
	
	//================
	$asost = "select distinct(dir_id) from dir_tadvts order by sidx";
	$asorcd = mysql_query($asost,$abc);
	$numrows = mysql_num_rows($asorcd);
	if ($numrows < 1)
		{
		$display_block .=  "<table width=\"550\"  ><tr>
			 					<td width=\"550\"><font color=\"#990000\" size=\"2\">02. Business Directory Product Listing</font></td>
								<td width=\"100\">(Records : 0) </td> 
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
//==============================================		
	
$asost = "select *  from tsrvs_main order by cname";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
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
//============================

$asost = "select distinct(mids) from tsrvs_advts order by sidx";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
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

$asost = "select distinct(prop_comp_id), prop_comp_type from prop_tmain order by prop_comp_type";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
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

$asost = "select distinct(job_comp), job_tag from job_tmain order by job_tag";
$asorcd = mysql_query($asost,$abc);
$numrows = mysql_num_rows($asorcd);
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
