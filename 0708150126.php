<html
<title></title>
<head>
<link href="css/red_04.css" rel="stylesheet" type="text/css">
</head>
<body>
</body>
</html>
<?php 
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();

$count = 0;
	
		$line_num = 25;  
		$max = $line_num;	// configure how many rows of message display per page
		$jname		= $_REQUEST['jname'];
		$inds_id	= $_REQUEST['inds'];
		$city_id	= $_REQUEST['city'];
		$type_id	= $_REQUEST['jtype'];
		
		$pg = $_REQUEST['pg'];

		$cur_rows = 0;
		$max_rows = $max;

	
	if($pg!=1)
	{
		for($i=1;$i<$pg;$i++)
		{
			$cur_rows=$cur_rows+$max;
			$max_rows=$max_rows+$max;
		}
	}

			
			if($jname=="")
				{
					$jname=$_GET['jname'];
				}
			if($inds_id=="")
				{
					$inds_id=$_GET['inds_id'];
				}
			if($city_id=="")
				{
					$city_id=$_GET['city_id'];
				}				
			if($type_id=="")
				{
					$type_id=$_GET['type_id'];
				}	
				
				
			if($type_id=="1")
				{
					$type_name = "Full Time";
				}
			if($type_id=="2")
				{

					$type_name = "Part Time";
				}
			if($type_id=="3")
				{
					$type_name = "Part Time & Full Time";
				}		
					


//  First Loop 	


if($inds_id<>"1" and $city_id<>"1" and $type_id<>"3" )
	{
	
	$recd = mysql_query("SELECT job_id FROM job_main 
			 where job_type='$jname' and 
			 job_inds='$inds_id'  and
			 job_FP='$type_id' and
			 job_city= '$city_id'				 
			 ") or die("Query failed a");
	
	
	
	$num_rows = mysql_num_rows($recd);

			
//			print " Record Count  $num_rows";


	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Job Group, Industries and City ......Search Another one .... Thanks (1)</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT  job_id FROM job_main 
			 where job_type='$jname' and 
			 job_inds='$inds_id'  and
			 job_FP='$type_id'  and  
 			 job_city= '$city_id'";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h4>Record Not Found Against This Job Group, Industries and City </h4>";
			exit;
		}

	$listed=0;

	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{	
		if($listed>=$cur_rows && $listed< $max_rows)
			{
			foreach($line as $guest_rec[$count])
				{
				if($count==0) 
					{
					$slmain = "select job_type, job_grp, job_inds, job_qual,
								job_tag, job_comp, job_no, 
								date_format(job_fdt,'%d-%m-%Y') as frdt, 
								date_format(job_tdt,'%d-%m-%Y') as todt,
								job_day, job_nm, job_FP, job_age, job_sal,
								job_exp, job_mage, job_city from job_main where job_id='$guest_rec[$count]'";
								
					$rdmain = mysql_query($slmain);
					$jtype_id = mysql_result($rdmain,0,'job_type');
					$jgrp_id  = mysql_result($rdmain,0,'job_grp');
					$jinds_id  = mysql_result($rdmain,0,'job_inds');
					$jqual_id  = mysql_result($rdmain,0,'job_qual');
					$job_tag = mysql_result($rdmain,0,'job_tag');
					$dir_id	=  mysql_result($rdmain,0,'job_comp');
					$job_va = mysql_result($rdmain,0,'job_no');
					$job_fdt = mysql_result($rdmain,0,'frdt');
					$job_tdt = mysql_result($rdmain,0,'todt');
					$job_day = mysql_result($rdmain,0,'job_day');
					$job_nm = mysql_result($rdmain,0,'job_nm');
					$jobpf = mysql_result($rdmain,0,'job_FP');
					$job_age = mysql_result($rdmain,0,'job_age');
					$job_sal = mysql_result($rdmain,0,'job_sal');
					$job_exp = mysql_result($rdmain,0,'job_exp');
					$job_mage =mysql_result($rdmain,0,'job_mage');
					$job_city = mysql_result($rdmain,0,'job_city');
					
					if ($jobpf=="1")
						{
							$job_pf="full Time";
						}
					if ($jobpf=="2")
						{
							$job_pf="Part Time ";
						}		
					if ($jobpf=="3")
						{
							$job_pf="Part Time & Full Time";
						}		


					$jobssl = "select * from job_type where jtype_id = '$jtype_id'";
					$results_rcd = mysql_query($jobssl) or die ("some thig wrong with statement");
					$types_name = mysql_result($results_rcd,0,'jtype_name');
				
					$grpsl = "select * from job_grp where grp_id='$jgrp_id'";
					$grprd = mysql_query($grpsl);
					$grp_name = mysql_result($grprd,0,'grp_name');
		
					$indsl  = "select * from job_inds where inds_id = '$jinds_id'";
					$indrs  = mysql_query($indsl);
					$inds_name = mysql_result($indrs,0,'inds_name');
				
					$qualsl = "select * from job_qual where jqual_id='$jqual_id'";
					$qualrd = mysql_query($qualsl);
					$qual_name = mysql_result($qualrd,0,'jqual_name');

					$citysl = "select * from city where citid='$job_city'";
					$cityrd = mysql_query($citysl);
					$city_name = mysql_result($cityrd,0,'citname');
				
				
				
				
				
					if($job_tag==1)
						{
							$job_comp_sl = "select * from dir_main, dir_add where dir_main.dir_id='$dir_id' 
								    and dir_add.dir_id='$dir_id'";
							
							$job_comp_rd = mysql_query($job_comp_sl);
							$rcd_count = mysql_num_rows($job_comp_rd);
							$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
							//$dir_moto  = mysql_result($job_comp_rd,0,'dir_pdet'); 

							$cid		= mysql_result($job_comp_rd,0,'dir_city');	
							$sid		= mysql_result($job_comp_rd,0,'dir_stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
							else
						{
							$job_comp_sl = "select * from srvs_main where sr_id='$dir_id'";  

							$job_comp_rd = mysql_query($job_comp_sl);
							$comp_name = mysql_result($job_comp_rd,0,'cname');
							$dir_moto	= mysql_result($job_comp_rd,0,'compmoto');
							
							$cid		= mysql_result($job_comp_rd,0,'city');	
							$sid		= mysql_result($job_comp_rd,0,'stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
		print "<fieldset>
			<table border = 0 width=100% cellspacing=0 cellpadding=1>
		<tr>
			<td width=\"75%\" height=\"20\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">
					<a href=0708150129.php?ID=$guest_rec[$count] target=_parent><b>$job_nm ($grp_name)</a>
			</td>
			<td width=\"25%\" class=\"grncel_DRK_tb bgimg\" align=\"center\"><b>Vacancy : $job_va </b></td> 
		</tr>
		<tr>
				<td height= \"25\" class = \"grncel_DRK\" colspan=6><b><a href=0708150129.php?ID=$guest_rec[$count] target=_parent>$comp_name , $c_name ($s_name)</a></b></td>
		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Min.Qualification  1</td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$qual_name </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_fdt </b> </td>



		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Age Limit </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_age - $job_mage Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Expire On Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_tdt</b> </td>

		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Job Experience </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_exp Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening for Days</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_day / Days</b> </td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Job Type </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_pf </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
		</tr>
		
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Salary Approx. </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_sal/- Annual</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">City </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$city_name </b>,&nbsp;&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>



		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Industries </td>
			<td class = \"grncel_DRK\"> : </td>
			<td class = \"grncel_DRK\"><b>$inds_name</td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>


		<tr>
			<td class = \"grncel_DRK\"  colspan=6 align=\"left\">Show All Job This Company</td>
		</tr>
	</table>
	</fieldset>";				
				$count++;
				}
			} 
		}
		$listed++;
		$count=0;
		print "</blockquote></td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#F0F0F0><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=100%><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
	
//                  Second Loop Start Here

	
elseif ($inds_id=="1" and $city_id<>"1" and $type_id<>"3")
 	{
			$recd = mysql_query("SELECT job_id FROM job_main 
			 where job_type='$jname' and 
			 job_FP='$type_id' and
			 job_city= '$city_id'				 
			 ") or die("Query failed a");
	 
					
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Job Group, Industries and City ......Search Another one .... Thanks(2) </font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT  job_id FROM job_main 
			 where job_type='$jname' and 
			 job_FP='$type_id'  and  
 			 job_city= '$city_id'";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Job Group, Industries and City </h3>";
			exit;
		}

	$listed=0;
	
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{	
		if($listed>=$cur_rows && $listed< $max_rows)
			{
			foreach($line as $guest_rec[$count])
				{
				if($count==0) 
					{
					$slmain = "select job_type, job_grp, job_inds, job_qual,
								job_tag, job_comp, job_no, 
								date_format(job_fdt,'%d-%m-%Y') as frdt, 
								date_format(job_tdt,'%d-%m-%Y') as todt,
								job_day, job_nm, job_FP, job_age, job_sal,
								job_exp, job_mage, job_city from job_main where job_id='$guest_rec[$count]'";
								
					$rdmain = mysql_query($slmain);
					$jtype_id = mysql_result($rdmain,0,'job_type');
					$jgrp_id  = mysql_result($rdmain,0,'job_grp');
					$jinds_id  = mysql_result($rdmain,0,'job_inds');
					$jqual_id  = mysql_result($rdmain,0,'job_qual');
					$job_tag = mysql_result($rdmain,0,'job_tag');
					$dir_id	=  mysql_result($rdmain,0,'job_comp');
					$job_va = mysql_result($rdmain,0,'job_no');
					$job_fdt = mysql_result($rdmain,0,'frdt');
					$job_tdt = mysql_result($rdmain,0,'todt');
					$job_day = mysql_result($rdmain,0,'job_day');
					$job_nm = mysql_result($rdmain,0,'job_nm');
					$jobpf = mysql_result($rdmain,0,'job_FP');
					$job_age = mysql_result($rdmain,0,'job_age');
					$job_sal = mysql_result($rdmain,0,'job_sal');
					$job_exp = mysql_result($rdmain,0,'job_exp');
					$job_mage =mysql_result($rdmain,0,'job_mage');
					$job_city = mysql_result($rdmain,0,'job_city');
					
					if ($jobpf=="1")
						{
							$job_pf="full Time";
						}
					if ($jobpf=="2")
						{
							$job_pf="Part Time ";
						}		
					if ($jobpf=="3")
						{
							$job_pf="Part Time & Full Time";
						}		


					$jobssl = "select * from job_type where jtype_id = '$jtype_id'";
					$results_rcd = mysql_query($jobssl) or die ("some thig wrong with statement");
					$types_name = mysql_result($results_rcd,0,'jtype_name');
				
					$grpsl = "select * from job_grp where grp_id='$jgrp_id'";
					$grprd = mysql_query($grpsl);
					$grp_name = mysql_result($grprd,0,'grp_name');
		
					$indsl  = "select * from job_inds where inds_id = '$jinds_id'";
					$indrs  = mysql_query($indsl);
					$inds_name = mysql_result($indrs,0,'inds_name');
				
					$qualsl = "select * from job_qual where jqual_id='$jqual_id'";
					$qualrd = mysql_query($qualsl);
					$qual_name = mysql_result($qualrd,0,'jqual_name');

					$citysl = "select * from city where citid='$job_city'";
					$cityrd = mysql_query($citysl);
					$city_name = mysql_result($cityrd,0,'citname');
				
				
				
				
				
					if($job_tag==1)
						{
							$job_comp_sl = "select * from dir_main, dir_add where dir_main.dir_id='$dir_id' 
								    and dir_add.dir_id='$dir_id'";
							
							$job_comp_rd = mysql_query($job_comp_sl);
							$rcd_count = mysql_num_rows($job_comp_rd);
							$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
							//$dir_moto  = mysql_result($job_comp_rd,0,'dir_pdet'); 

							$cid		= mysql_result($job_comp_rd,0,'dir_city');	
							$sid		= mysql_result($job_comp_rd,0,'dir_stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
							else
						{
							$job_comp_sl = "select * from srvs_main where sr_id='$dir_id'";  

							$job_comp_rd = mysql_query($job_comp_sl);
							$comp_name = mysql_result($job_comp_rd,0,'cname');
							$dir_moto	= mysql_result($job_comp_rd,0,'compmoto');
							
							$cid		= mysql_result($job_comp_rd,0,'city');	
							$sid		= mysql_result($job_comp_rd,0,'stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
			print "<fieldset>
			<table border = 0 width=100% cellspacing=0 cellpadding=1>
		<tr>
			<td width=\"75%\" height=\"20\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">
					<a href=0708150129.php?ID=$guest_rec[$count] target=_parent><b>$job_nm ($grp_name)</a>
			</td>
			<td width=\"25%\" class=\"grncel_DRK_tb bgimg\" align=\"center\"><b>Vacancy : $job_va </b></td> 
		</tr>
		<tr>
				<td height= \"25\" class = \"grncel_DRK\" colspan=6><b><a href=0708150129.php?ID=$guest_rec[$count] target=_parent>$comp_name , $c_name ($s_name)</a></b></td>
		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Min.Qualification 2</td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$qual_name </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_fdt </b> </td>



		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Age Limit </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_age - $job_mage Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Expire On Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_tdt</b> </td>

		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Job Experience </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_exp Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening for Days</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_day / Days</b> </td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Job Type </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_pf </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
		</tr>
		
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Salary Approx. </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_sal/- Annual</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">City </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$city_name </b>,&nbsp;&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>



		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Industries </td>
			<td class = \"grncel_DRK\"> : </td>
			<td class = \"grncel_DRK\"><b>$inds_name</td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>


		<tr>
			<td class = \"grncel_DRK\"  colspan=6 align=\"left\">Show All Job This Company</td>
		</tr>
	</table>
	</fieldset>";	
				$count++;
				}
			} 
		}
		$listed++;
		$count=0;
		print "</blockquote></td></tr>";
	}
	print("</table><br><table border=0 width=600 cellspacing=0><tr bgcolor=#F0F0F0><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	if($pg!=1)
	{
		print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=100%><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
///   Third Loop   for    Job type = Part time / full time == Both
	 /*
industries = all
city	   = <>all
type	   = both	


*/
  
elseif ($inds_id=="1" and $city_id<>"1" and $type_id=="3")
 	{

			$recd = mysql_query("SELECT job_id FROM job_main 
			 where job_type='$jname' and 
			 job_city= '$city_id'				 
			 ") or die("Query failed a");
	 
 
					
	$num_rows = mysql_num_rows($recd);

	
	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"520px\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Job Group, Industries and City ......Search Another one .... Thanks.(3)</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT  job_id FROM job_main 
			 where job_type='$jname' and 
 			 job_city= '$city_id'";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Job Group, Industries and City </h3>";
			exit;
		}

	$listed=0;


	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{	
		if($listed>=$cur_rows && $listed< $max_rows)
			{
			
			foreach($line as $guest_rec[$count])
				{
				if($count==0) 
					{
					$slmain = "select job_type, job_grp, job_inds, job_qual,
								job_tag, job_comp, job_no, 
								date_format(job_fdt,'%d-%m-%Y') as frdt, 
								date_format(job_tdt,'%d-%m-%Y') as todt,
								job_day, job_nm, job_FP, job_age, job_sal,
								job_exp, job_mage, job_city from job_main where job_id='$guest_rec[$count]'";
								
					$rdmain = mysql_query($slmain);
					$jtype_id = mysql_result($rdmain,0,'job_type');
					$jgrp_id  = mysql_result($rdmain,0,'job_grp');
					$jinds_id  = mysql_result($rdmain,0,'job_inds');
					$jqual_id  = mysql_result($rdmain,0,'job_qual');
					$job_tag = mysql_result($rdmain,0,'job_tag');
					$dir_id	=  mysql_result($rdmain,0,'job_comp');
					$job_va = mysql_result($rdmain,0,'job_no');
					$job_fdt = mysql_result($rdmain,0,'frdt');
					$job_tdt = mysql_result($rdmain,0,'todt');
					$job_day = mysql_result($rdmain,0,'job_day');
					$job_nm = mysql_result($rdmain,0,'job_nm');
					$jobpf = mysql_result($rdmain,0,'job_FP');
					$job_age = mysql_result($rdmain,0,'job_age');
					$job_sal = mysql_result($rdmain,0,'job_sal');
					$job_exp = mysql_result($rdmain,0,'job_exp');
					$job_mage =mysql_result($rdmain,0,'job_mage');
					$job_city = mysql_result($rdmain,0,'job_city');
					
					if ($jobpf=="1")
						{
							$job_pf="full Time";
						}
					if ($jobpf=="2")
						{
							$job_pf="Part Time ";
						}		
					if ($jobpf=="3")
						{
							$job_pf="Part Time & Full Time";
						}		


					$jobssl = "select * from job_type where jtype_id = '$jtype_id'";
					$results_rcd = mysql_query($jobssl) or die ("some thig wrong with statement");
					$types_name = mysql_result($results_rcd,0,'jtype_name');
				
					$grpsl = "select * from job_grp where grp_id='$jgrp_id'";
					$grprd = mysql_query($grpsl);
					$grp_name = mysql_result($grprd,0,'grp_name');
		
					$indsl  = "select * from job_inds where inds_id = '$jinds_id'";
					$indrs  = mysql_query($indsl);
					$inds_name = mysql_result($indrs,0,'inds_name');
				
					$qualsl = "select * from job_qual where jqual_id='$jqual_id'";
					$qualrd = mysql_query($qualsl);
					$qual_name = mysql_result($qualrd,0,'jqual_name');

					$citysl = "select * from city where citid='$job_city'";
					$cityrd = mysql_query($citysl);
					$city_name = mysql_result($cityrd,0,'citname');
				
				
				
				
				
					if($job_tag==1)
						{
							$job_comp_sl = "select * from dir_main, dir_add where dir_main.dir_id='$dir_id' 
								    and dir_add.dir_id='$dir_id'";
							
							$job_comp_rd = mysql_query($job_comp_sl);
							$rcd_count = mysql_num_rows($job_comp_rd);
							$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
							//$dir_moto  = mysql_result($job_comp_rd,0,'dir_pdet'); 

							$cid		= mysql_result($job_comp_rd,0,'dir_city');	
							$sid		= mysql_result($job_comp_rd,0,'dir_stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
							else
						{
							$job_comp_sl = "select * from srvs_main where sr_id='$dir_id'";  

							$job_comp_rd = mysql_query($job_comp_sl);
							$comp_name = mysql_result($job_comp_rd,0,'cname');
							$dir_moto	= mysql_result($job_comp_rd,0,'compmoto');
							
							$cid		= mysql_result($job_comp_rd,0,'city');	
							$sid		= mysql_result($job_comp_rd,0,'stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
	print "<fieldset>
			<table border = 0 width=100% cellspacing=0 cellpadding=1>
		<tr>
			<td width=\"75%\" height=\"20\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">
					<a href=0708150129.php?ID=$guest_rec[$count] target=_parent><b>$job_nm ($grp_name)</a>
			</td>
			<td width=\"25%\" class=\"grncel_DRK_tb bgimg\" align=\"center\"><b>Vacancy : $job_va </b></td> 
		</tr>
		<tr>
				<td height= \"25\" class = \"grncel_DRK\" colspan=6><b><a href=0708150129.php?ID=$guest_rec[$count] target=_parent>$comp_name , $c_name ($s_name)</a></b></td>
		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Min.Qualification 3</td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$qual_name </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_fdt </b> </td>



		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Age Limit </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_age - $job_mage Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Expire On Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_tdt</b> </td>

		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Job Experience </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_exp Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening for Days</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_day / Days</b> </td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Job Type </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_pf </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
		</tr>
		
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Salary Approx. </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_sal/- Annual</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">City </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$city_name </b>,&nbsp;&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>



		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Industries </td>
			<td class = \"grncel_DRK\"> : </td>
			<td class = \"grncel_DRK\"><b>$inds_name</td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>


		<tr>
			<td class = \"grncel_DRK\"  colspan=6 align=\"left\">Show All Job This Company</td>
		</tr>
	</table>
	</fieldset>";	
				$count++;
				}
			} 
		}
		$listed++;
		$count=0;
		print "</blockquote></td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#F0F0F0><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
	
	// forth loop   industries <> all city <> all and type = both      
	
		 /*
industries = <>all
city	   = <>all
type	   = both	


*/

	
	elseif ($inds_id<>"1" and $city_id<>"1" and $type_id=="3")
	 	{
		
	
			$recd = mysql_query("SELECT job_id FROM job_main 
			 where job_type='$jname' and 
		 	 job_inds='$inds_id'  and
			 job_city= '$city_id'				 
			 ") or die("Query failed a");
	 
					
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Job Group, Industries and City ......Search Another one .... Thanks.(4)</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT  job_id FROM job_main 
			 where job_type='$jname' and 
			 job_inds='$inds_id'  and
 			 job_city= '$city_id'";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Job Group, Industries and City </h3>";
			exit;
		}

	$listed=0;

	
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{	
		if($listed>=$cur_rows && $listed< $max_rows)
			{
			
			foreach($line as $guest_rec[$count])
				{
				if($count==0) 
					{
					$slmain = "select job_type, job_grp, job_inds, job_qual,
								job_tag, job_comp, job_no, 
								date_format(job_fdt,'%d-%m-%Y') as frdt, 
								date_format(job_tdt,'%d-%m-%Y') as todt,
								job_day, job_nm, job_FP, job_age, job_sal,
								job_exp, job_mage, job_city from job_main where job_id='$guest_rec[$count]'";
								
					$rdmain = mysql_query($slmain);
					$jtype_id = mysql_result($rdmain,0,'job_type');
					$jgrp_id  = mysql_result($rdmain,0,'job_grp');
					$jinds_id  = mysql_result($rdmain,0,'job_inds');
					$jqual_id  = mysql_result($rdmain,0,'job_qual');
					$job_tag = mysql_result($rdmain,0,'job_tag');
					$dir_id	=  mysql_result($rdmain,0,'job_comp');
					$job_va = mysql_result($rdmain,0,'job_no');
					$job_fdt = mysql_result($rdmain,0,'frdt');
					$job_tdt = mysql_result($rdmain,0,'todt');
					$job_day = mysql_result($rdmain,0,'job_day');
					$job_nm = mysql_result($rdmain,0,'job_nm');
					$jobpf = mysql_result($rdmain,0,'job_FP');
					$job_age = mysql_result($rdmain,0,'job_age');
					$job_sal = mysql_result($rdmain,0,'job_sal');
					$job_exp = mysql_result($rdmain,0,'job_exp');
					$job_mage =mysql_result($rdmain,0,'job_mage');
					$job_city = mysql_result($rdmain,0,'job_city');
					
					if ($jobpf=="1")
						{
							$job_pf="full Time";
						}
					if ($jobpf=="2")
						{
							$job_pf="Part Time ";
						}		
					if ($jobpf=="3")
						{
							$job_pf="Part Time & Full Time";
						}		


					$jobssl = "select * from job_type where jtype_id = '$jtype_id'";
					$results_rcd = mysql_query($jobssl) or die ("some thig wrong with statement");
					$types_name = mysql_result($results_rcd,0,'jtype_name');
				
					$grpsl = "select * from job_grp where grp_id='$jgrp_id'";
					$grprd = mysql_query($grpsl);
					$grp_name = mysql_result($grprd,0,'grp_name');
		
					$indsl  = "select * from job_inds where inds_id = '$jinds_id'";
					$indrs  = mysql_query($indsl);
					$inds_name = mysql_result($indrs,0,'inds_name');
				
					$qualsl = "select * from job_qual where jqual_id='$jqual_id'";
					$qualrd = mysql_query($qualsl);
					$qual_name = mysql_result($qualrd,0,'jqual_name');

					$citysl = "select * from city where citid='$job_city'";
					$cityrd = mysql_query($citysl);
					$city_name = mysql_result($cityrd,0,'citname');
				
				
				
				
				
					if($job_tag==1)
						{
							$job_comp_sl = "select * from dir_main, dir_add where dir_main.dir_id='$dir_id' 
								    and dir_add.dir_id='$dir_id'";
							
							$job_comp_rd = mysql_query($job_comp_sl);
							$rcd_count = mysql_num_rows($job_comp_rd);
							$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
							//$dir_moto  = mysql_result($job_comp_rd,0,'dir_pdet'); 

							$cid		= mysql_result($job_comp_rd,0,'dir_city');	
							$sid		= mysql_result($job_comp_rd,0,'dir_stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
							else
						{
							$job_comp_sl = "select * from srvs_main where sr_id='$dir_id'";  

							$job_comp_rd = mysql_query($job_comp_sl);
							$comp_name = mysql_result($job_comp_rd,0,'cname');
							$dir_moto	= mysql_result($job_comp_rd,0,'compmoto');
							
							$cid		= mysql_result($job_comp_rd,0,'city');	
							$sid		= mysql_result($job_comp_rd,0,'stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
	print "<fieldset>
			<table border = 0 width=100% cellspacing=0 cellpadding=1>
		<tr>
			<td width=\"75%\" height=\"20\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">
					<a href=0708150129.php?ID=$guest_rec[$count] target=_parent><b>$job_nm ($grp_name)</a>
			</td>
			<td width=\"25%\" class=\"grncel_DRK_tb bgimg\" align=\"center\"><b>Vacancy : $job_va </b></td> 
		</tr>
		<tr>
				<td height= \"25\" class = \"grncel_DRK\" colspan=6><b><a href=0708150129.php?ID=$guest_rec[$count] target=_parent>$comp_name , $c_name ($s_name)</a></b></td>
		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Min.Qualification 4</td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$qual_name </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_fdt </b> </td>



		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Age Limit </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_age - $job_mage Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Expire On Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_tdt</b> </td>

		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Job Experience </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_exp Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening for Days</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_day / Days</b> </td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Job Type </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_pf </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
		</tr>
		
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Salary Approx. </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_sal/- Annual</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">City </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$city_name </b>,&nbsp;&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>



		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Industries </td>
			<td class = \"grncel_DRK\"> : </td>
			<td class = \"grncel_DRK\"><b>$inds_name</td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>


		<tr>
			<td class = \"grncel_DRK\"  colspan=6 align=\"left\">Show All Job This Company</td>
		</tr>
	</table>
	</fieldset>";		
				$count++;
				}
			} 
		}
		$listed++;
		$count=0;
		print "</blockquote></td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#F0F0F0><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=15%><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
	 
	 // fifth loop
	 
	 /*
industries = <>all
city	   = all
type	   = both	


*/

	 
	 elseif ($inds_id<>"1" and $city_id=="1" and $type_id=="3")
	 	{
	
			$recd = mysql_query("SELECT job_id FROM job_main 
			  	 where job_type='$jname' and
				 job_inds='$inds_id'  
			 ") or die("Query failed a");
	 
					
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Job Group, Industries and City ......Search Another one .... Thanks.(5)</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT  job_id FROM job_main 
			 where job_type='$jname' and 
			 job_inds='$inds_id'";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Job Group, Industries and City </h3>";
			exit;
		}

	$listed=0;

	
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{	
		if($listed>=$cur_rows && $listed< $max_rows)
			{
			
			foreach($line as $guest_rec[$count])
				{
				if($count==0) 
					{
					$slmain = "select job_type, job_grp, job_inds, job_qual,
								job_tag, job_comp, job_no, 
								date_format(job_fdt,'%d-%m-%Y') as frdt, 
								date_format(job_tdt,'%d-%m-%Y') as todt,
								job_day, job_nm, job_FP, job_age, job_sal,
								job_exp, job_mage, job_city from job_main where job_id='$guest_rec[$count]'";
								
					$rdmain = mysql_query($slmain);
					$jtype_id = mysql_result($rdmain,0,'job_type');
					$jgrp_id  = mysql_result($rdmain,0,'job_grp');
					$jinds_id  = mysql_result($rdmain,0,'job_inds');
					$jqual_id  = mysql_result($rdmain,0,'job_qual');
					$job_tag = mysql_result($rdmain,0,'job_tag');
					$dir_id	=  mysql_result($rdmain,0,'job_comp');
					$job_va = mysql_result($rdmain,0,'job_no');
					$job_fdt = mysql_result($rdmain,0,'frdt');
					$job_tdt = mysql_result($rdmain,0,'todt');
					$job_day = mysql_result($rdmain,0,'job_day');
					$job_nm = mysql_result($rdmain,0,'job_nm');
					$jobpf = mysql_result($rdmain,0,'job_FP');
					$job_age = mysql_result($rdmain,0,'job_age');
					$job_sal = mysql_result($rdmain,0,'job_sal');
					$job_exp = mysql_result($rdmain,0,'job_exp');
					$job_mage =mysql_result($rdmain,0,'job_mage');
					$job_city = mysql_result($rdmain,0,'job_city');
					
					if ($jobpf=="1")
						{
							$job_pf="full Time";
						}
					if ($jobpf=="2")
						{
							$job_pf="Part Time ";
						}		
					if ($jobpf=="3")
						{
							$job_pf="Part Time & Full Time";
						}		


					$jobssl = "select * from job_type where jtype_id = '$jtype_id'";
					$results_rcd = mysql_query($jobssl) or die ("some thig wrong with statement");
					$types_name = mysql_result($results_rcd,0,'jtype_name');
				
					$grpsl = "select * from job_grp where grp_id='$jgrp_id'";
					$grprd = mysql_query($grpsl);
					$grp_name = mysql_result($grprd,0,'grp_name');
		
					$indsl  = "select * from job_inds where inds_id = '$jinds_id'";
					$indrs  = mysql_query($indsl);
					$inds_name = mysql_result($indrs,0,'inds_name');
				
					$qualsl = "select * from job_qual where jqual_id='$jqual_id'";
					$qualrd = mysql_query($qualsl);
					$qual_name = mysql_result($qualrd,0,'jqual_name');

					$citysl = "select * from city where citid='$job_city'";
					$cityrd = mysql_query($citysl);
					$city_name = mysql_result($cityrd,0,'citname');
				
				
				
				
				
					if($job_tag==1)
						{
							$job_comp_sl = "select * from dir_main, dir_add where dir_main.dir_id='$dir_id' 
								    and dir_add.dir_id='$dir_id'";
							
							$job_comp_rd = mysql_query($job_comp_sl);
							$rcd_count = mysql_num_rows($job_comp_rd);
							$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
							//$dir_moto  = mysql_result($job_comp_rd,0,'dir_pdet'); 

							$cid		= mysql_result($job_comp_rd,0,'dir_city');	
							$sid		= mysql_result($job_comp_rd,0,'dir_stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
							else
						{
							$job_comp_sl = "select * from srvs_main where sr_id='$dir_id'";  

							$job_comp_rd = mysql_query($job_comp_sl);
							$comp_name = mysql_result($job_comp_rd,0,'cname');
							$dir_moto	= mysql_result($job_comp_rd,0,'compmoto');
							
							$cid		= mysql_result($job_comp_rd,0,'city');	
							$sid		= mysql_result($job_comp_rd,0,'stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
	print "<fieldset>
			<table border = 0 width=100% cellspacing=0 cellpadding=1>
		<tr>
			<td width=\"75%\" height=\"20\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">
					<a href=0708150129.php?ID=$guest_rec[$count] target=_parent><b>$job_nm ($grp_name)</a>
			</td>
			<td width=\"25%\" class=\"grncel_DRK_tb bgimg\" align=\"center\"><b>Vacancy : $job_va </b></td> 
		</tr>
		<tr>
				<td height= \"25\" class = \"grncel_DRK\" colspan=6><b><a href=0708150129.php?ID=$guest_rec[$count] target=_parent>$comp_name , $c_name ($s_name)</a></b></td>
		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Min.Qualification 5</td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$qual_name </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_fdt </b> </td>



		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Age Limit </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_age - $job_mage Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Expire On Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_tdt</b> </td>

		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Job Experience </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_exp Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening for Days</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_day / Days</b> </td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Job Type </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_pf </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
		</tr>
		
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Salary Approx. </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_sal/- Annual</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">City </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$city_name </b>,&nbsp;&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>



		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Industries </td>
			<td class = \"grncel_DRK\"> : </td>
			<td class = \"grncel_DRK\"><b>$inds_name</td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>


		<tr>
			<td class = \"grncel_DRK\"  colspan=6 align=\"left\">Show All Job This Company</td>
		</tr>
	</table>
	</fieldset>";	
				$count++;
				}
			} 
		}
		$listed++;
		$count=0;
		print "</blockquote></td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#F0F0F0><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
	
/*
industries = all
city	   = all
type	   = both	
*/// Sixth Loop industries = all  city = all  type = both
	 elseif ($inds_id=="1" and $city_id=="1" and $type_id=="3")
	 	{
	
			$recd = mysql_query("SELECT job_id FROM job_main 
			  	 where job_type='$jname'") or die("Query failed a");
	 
					
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Job Group, Industries and City ......Search Another one .... Thanks.(6)</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT  job_id FROM job_main 
			 where job_type='$jname'";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Job Group, Industries and City </h3>";
			exit;
		}

	$listed=0;

	
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{	
		if($listed>=$cur_rows && $listed< $max_rows)
			{
			
			foreach($line as $guest_rec[$count])
				{
				if($count==0) 
					{
					$slmain = "select job_type, job_grp, job_inds, job_qual,
								job_tag, job_comp, job_no, 
								date_format(job_fdt,'%d-%m-%Y') as frdt, 
								date_format(job_tdt,'%d-%m-%Y') as todt,
								job_day, job_nm, job_FP, job_age, job_sal,
								job_exp, job_mage, job_city from job_main where job_id='$guest_rec[$count]'";
								
					$rdmain = mysql_query($slmain);
					$jtype_id = mysql_result($rdmain,0,'job_type');
					$jgrp_id  = mysql_result($rdmain,0,'job_grp');
					$jinds_id  = mysql_result($rdmain,0,'job_inds');
					$jqual_id  = mysql_result($rdmain,0,'job_qual');
					$job_tag = mysql_result($rdmain,0,'job_tag');
					$dir_id	=  mysql_result($rdmain,0,'job_comp');
					$job_va = mysql_result($rdmain,0,'job_no');
					$job_fdt = mysql_result($rdmain,0,'frdt');
					$job_tdt = mysql_result($rdmain,0,'todt');
					$job_day = mysql_result($rdmain,0,'job_day');
					$job_nm = mysql_result($rdmain,0,'job_nm');
					$jobpf = mysql_result($rdmain,0,'job_FP');
					$job_age = mysql_result($rdmain,0,'job_age');
					$job_sal = mysql_result($rdmain,0,'job_sal');
					$job_exp = mysql_result($rdmain,0,'job_exp');
					$job_mage =mysql_result($rdmain,0,'job_mage');
					$job_city = mysql_result($rdmain,0,'job_city');
					
					if ($jobpf=="1")
						{
							$job_pf="full Time";
						}
					if ($jobpf=="2")
						{
							$job_pf="Part Time ";
						}		
					if ($jobpf=="3")
						{
							$job_pf="Part Time & Full Time";
						}		


					$jobssl = "select * from job_type where jtype_id = '$jtype_id'";
					$results_rcd = mysql_query($jobssl) or die ("some thig wrong with statement");
					$types_name = mysql_result($results_rcd,0,'jtype_name');
				
					$grpsl = "select * from job_grp where grp_id='$jgrp_id'";
					$grprd = mysql_query($grpsl);
					$grp_name = mysql_result($grprd,0,'grp_name');
		
					$indsl  = "select * from job_inds where inds_id = '$jinds_id'";
					$indrs  = mysql_query($indsl);
					$inds_name = mysql_result($indrs,0,'inds_name');
				
					$qualsl = "select * from job_qual where jqual_id='$jqual_id'";
					$qualrd = mysql_query($qualsl);
					$qual_name = mysql_result($qualrd,0,'jqual_name');

					$citysl = "select * from city where citid='$job_city'";
					$cityrd = mysql_query($citysl);
					$city_name = mysql_result($cityrd,0,'citname');
				
				
				
				
				
					if($job_tag==1)
						{
							$job_comp_sl = "select * from dir_main, dir_add where dir_main.dir_id='$dir_id' 
								    and dir_add.dir_id='$dir_id'";
							
							$job_comp_rd = mysql_query($job_comp_sl);
							$rcd_count = mysql_num_rows($job_comp_rd);
							$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
						//	$dir_moto  = mysql_result($job_comp_rd,0,'dir_pdet'); 

							$cid		= mysql_result($job_comp_rd,0,'dir_city');	
							$sid		= mysql_result($job_comp_rd,0,'dir_stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
							else
						{
							$job_comp_sl = "select * from srvs_main where sr_id='$dir_id'";  

							$job_comp_rd = mysql_query($job_comp_sl);
							$comp_name = mysql_result($job_comp_rd,0,'cname');
							$dir_moto	= mysql_result($job_comp_rd,0,'compmoto');
							
							$cid		= mysql_result($job_comp_rd,0,'city');	
							$sid		= mysql_result($job_comp_rd,0,'stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
	print "<fieldset>
			<table border = 0 width=100% cellspacing=0 cellpadding=1>
		<tr>
			<td width=\"75%\" height=\"20\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">
					<a href=0708150129.php?ID=$guest_rec[$count] target=_parent><b>$job_nm ($grp_name)</a>
			</td>
			<td width=\"25%\" class=\"grncel_DRK_tb bgimg\" align=\"center\"><b>Vacancy : $job_va </b></td> 
		</tr>
		<tr>
				<td height= \"25\" class = \"grncel_DRK\" colspan=6><b><a href=0708150129.php?ID=$guest_rec[$count] target=_parent>$comp_name , $c_name ($s_name)</a></b></td>
		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Min.Qualification 6</td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$qual_name </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_fdt </b> </td>



		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Age Limit </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_age - $job_mage Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Expire On Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_tdt</b> </td>

		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Job Experience </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_exp Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening for Days</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_day / Days</b> </td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Job Type </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_pf </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
		</tr>
		
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Salary Approx. </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_sal/- Annual</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">City </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$city_name </b>,&nbsp;&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>



		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Industries </td>
			<td class = \"grncel_DRK\"> : </td>
			<td class = \"grncel_DRK\"><b>$inds_name</td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>


		<tr>
			<td class = \"grncel_DRK\"  colspan=6 align=\"left\">Show All Job This Company</td>
		</tr>
	</table>
	</fieldset>";	
				$count++;
				}
			} 
		}
		$listed++;
		$count=0;
		print "</blockquote></td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#F0F0F0><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
	
	// Seventh Loop  industries = all   city = all  type <> both
	
/*
industries = all
city	   = all
type	   = <>both	


*/
	
	
	
elseif ($inds_id=="1" and $city_id=="1" and $type_id<>"3")
 	{
	
			$recd = mysql_query("SELECT job_id FROM job_main 
			 where job_type='$jname' and 
			 job_FP='$type_id'") or die("Query failed a");
	 
					
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Job Group, Industries and City ......Search Another one .... Thanks (7)</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT  job_id FROM job_main 
			 where job_type='$jname' and 
			 job_FP='$type_id'";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Job Group, Industries and City </h3>";
			exit;
		}

	$listed=0;

	
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{	
		if($listed>=$cur_rows && $listed< $max_rows)
			{
			
			foreach($line as $guest_rec[$count])
				{
				if($count==0) 
					{
					$slmain = "select job_type, job_grp, job_inds, job_qual,
								job_tag, job_comp, job_no, 
								date_format(job_fdt,'%d-%m-%Y') as frdt, 
								date_format(job_tdt,'%d-%m-%Y') as todt,
								job_day, job_nm, job_FP, job_age, job_sal,
								job_exp, job_mage, job_city from job_main where job_id='$guest_rec[$count]'";
								
					$rdmain = mysql_query($slmain);
					$jtype_id = mysql_result($rdmain,0,'job_type');
					$jgrp_id  = mysql_result($rdmain,0,'job_grp');
					$jinds_id  = mysql_result($rdmain,0,'job_inds');
					$jqual_id  = mysql_result($rdmain,0,'job_qual');
					$job_tag = mysql_result($rdmain,0,'job_tag');
					$dir_id	=  mysql_result($rdmain,0,'job_comp');
					$job_va = mysql_result($rdmain,0,'job_no');
					$job_fdt = mysql_result($rdmain,0,'frdt');
					$job_tdt = mysql_result($rdmain,0,'todt');
					$job_day = mysql_result($rdmain,0,'job_day');
					$job_nm = mysql_result($rdmain,0,'job_nm');
					$jobpf = mysql_result($rdmain,0,'job_FP');
					$job_age = mysql_result($rdmain,0,'job_age');
					$job_sal = mysql_result($rdmain,0,'job_sal');
					$job_exp = mysql_result($rdmain,0,'job_exp');
					$job_mage =mysql_result($rdmain,0,'job_mage');
					$job_city = mysql_result($rdmain,0,'job_city');
					
					if ($jobpf=="1")
						{
							$job_pf="full Time";
						}
					if ($jobpf=="2")
						{
							$job_pf="Part Time ";
						}		
					if ($jobpf=="3")
						{
							$job_pf="Part Time & Full Time";
						}		


					$jobssl = "select * from job_type where jtype_id = '$jtype_id'";
					$results_rcd = mysql_query($jobssl) or die ("some thig wrong with statement");
					$types_name = mysql_result($results_rcd,0,'jtype_name');
				
					$grpsl = "select * from job_grp where grp_id='$jgrp_id'";
					$grprd = mysql_query($grpsl);
					$grp_name = mysql_result($grprd,0,'grp_name');
		
					$indsl  = "select * from job_inds where inds_id = '$jinds_id'";
					$indrs  = mysql_query($indsl);
					$inds_name = mysql_result($indrs,0,'inds_name');
				
					$qualsl = "select * from job_qual where jqual_id='$jqual_id'";
					$qualrd = mysql_query($qualsl);
					$qual_name = mysql_result($qualrd,0,'jqual_name');

					$citysl = "select * from city where citid='$job_city'";
					$cityrd = mysql_query($citysl);
					$city_name = mysql_result($cityrd,0,'citname');
				
				
				
				
				
					if($job_tag==1)
						{
							$job_comp_sl = "select * from dir_main, dir_add where dir_main.dir_id='$dir_id' 
								    and dir_add.dir_id='$dir_id'";
							
							$job_comp_rd = mysql_query($job_comp_sl);
							$rcd_count = mysql_num_rows($job_comp_rd);
							$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
							//$dir_moto  = mysql_result($job_comp_rd,0,'dir_pdet'); 

							$cid		= mysql_result($job_comp_rd,0,'dir_city');	
							$sid		= mysql_result($job_comp_rd,0,'dir_stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
							else
						{
							$job_comp_sl = "select * from srvs_main where sr_id='$dir_id'";  

							$job_comp_rd = mysql_query($job_comp_sl);
							$comp_name = mysql_result($job_comp_rd,0,'cname');
							$dir_moto	= mysql_result($job_comp_rd,0,'compmoto');
							
							$cid		= mysql_result($job_comp_rd,0,'city');	
							$sid		= mysql_result($job_comp_rd,0,'stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
print "<fieldset>
			<table border = 0 width=100% cellspacing=0 cellpadding=1>
		<tr>
			<td width=\"75%\" height=\"20\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">
					<a href=0708150129.php?ID=$guest_rec[$count] target=_parent><b>$job_nm ($grp_name)</a>
			</td>
			<td width=\"25%\" class=\"grncel_DRK_tb bgimg\" align=\"center\"><b>Vacancy : $job_va </b></td> 
		</tr>
		<tr>
				<td height= \"25\" class = \"grncel_DRK\" colspan=6><b><a href=0708150129.php?ID=$guest_rec[$count] target=_parent>$comp_name , $c_name ($s_name)</a></b></td>
		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Min.Qualification 8</td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$qual_name </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_fdt </b> </td>



		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Age Limit </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_age - $job_mage Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Expire On Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_tdt</b> </td>

		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Job Experience </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_exp Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening for Days</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_day / Days</b> </td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Job Type </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_pf </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
		</tr>
		
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Salary Approx. </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_sal/- Annual</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">City </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$city_name </b>,&nbsp;&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>



		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Industries </td>
			<td class = \"grncel_DRK\"> : </td>
			<td class = \"grncel_DRK\"><b>$inds_name</td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>


		<tr>
			<td class = \"grncel_DRK\"  colspan=6 align=\"left\">Show All Job This Company</td>
		</tr>
	</table>
	</fieldset>";	
				$count++;
				}
			} 
		}
		$listed++;
		$count=0;
		print "</blockquote></td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#F0F0F0><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
//  Eight Loop

/*
industries = <>all
city	   = all
type	   = <>both	


*/


	
elseif ($inds_id<>"1" and $city_id=="1" and $type_id<>"3")
	 	{
		
		

			$recd = mysql_query("SELECT job_id FROM job_main 
			 where job_type='$jname' and 
			 job_inds='$inds_id' and
			 job_FP='$type_id'") or die("Query failed a");
	 
					
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Job Group, Industries and City ......Search Another one .... Thanks (8)</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT  job_id FROM job_main 
			 where job_type='$jname' and 
 			 job_inds='$inds_id' and
			 job_FP='$type_id'";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Job Group, Industries and City </h3>";
			exit;
		}

	$listed=0;

	
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
		{	
		if($listed>=$cur_rows && $listed< $max_rows)
			{
			
			
			foreach($line as $guest_rec[$count])
				{
				if($count==0) 
					{
					$slmain = "select job_type, job_grp, job_inds, job_qual,
								job_tag, job_comp, job_no, 
								date_format(job_fdt,'%d-%m-%Y') as frdt, 
								date_format(job_tdt,'%d-%m-%Y') as todt,
								job_day, job_nm, job_FP, job_age, job_sal,
								job_exp, job_mage, job_city from job_main where job_id='$guest_rec[$count]'";
								
					$rdmain = mysql_query($slmain);
					$jtype_id = mysql_result($rdmain,0,'job_type');
					$jgrp_id  = mysql_result($rdmain,0,'job_grp');
					$jinds_id  = mysql_result($rdmain,0,'job_inds');
					$jqual_id  = mysql_result($rdmain,0,'job_qual');
					$job_tag = mysql_result($rdmain,0,'job_tag');
					$dir_id	=  mysql_result($rdmain,0,'job_comp');
					$job_va = mysql_result($rdmain,0,'job_no');
					$job_fdt = mysql_result($rdmain,0,'frdt');
					$job_tdt = mysql_result($rdmain,0,'todt');
					$job_day = mysql_result($rdmain,0,'job_day');
					$job_nm = mysql_result($rdmain,0,'job_nm');
					$jobpf = mysql_result($rdmain,0,'job_FP');
					$job_age = mysql_result($rdmain,0,'job_age');
					$job_sal = mysql_result($rdmain,0,'job_sal');
					$job_exp = mysql_result($rdmain,0,'job_exp');
					$job_mage =mysql_result($rdmain,0,'job_mage');
					$job_city = mysql_result($rdmain,0,'job_city');
					
					
					if ($jobpf=="1")
						{
							$job_pf="full Time";
						}
					if ($jobpf=="2")
						{
							$job_pf="Part Time ";
						}		
					if ($jobpf=="3")
						{
							$job_pf="Part Time & Full Time";
						}		


					$jobssl = "select * from job_type where jtype_id = '$jtype_id'";
					$results_rcd = mysql_query($jobssl) or die ("some thig wrong with statement");
					$types_name = mysql_result($results_rcd,0,'jtype_name');
				
					$grpsl = "select * from job_grp where grp_id='$jgrp_id'";
					$grprd = mysql_query($grpsl);
					$grp_name = mysql_result($grprd,0,'grp_name');
		
					$indsl  = "select * from job_inds where inds_id = '$jinds_id'";
					$indrs  = mysql_query($indsl);
					$inds_name = mysql_result($indrs,0,'inds_name');
				
					$qualsl = "select * from job_qual where jqual_id='$jqual_id'";
					$qualrd = mysql_query($qualsl);
					$qual_name = mysql_result($qualrd,0,'jqual_name');

					$citysl = "select * from city where citid='$job_city'";
					$cityrd = mysql_query($citysl);
					$city_name = mysql_result($cityrd,0,'citname');
				
				
				
				
				
					if($job_tag==1)
						{
							$job_comp_sl = "select * from dir_main, dir_add where dir_main.dir_id='$dir_id' 
								    and dir_add.dir_id='$dir_id'";
							
							$job_comp_rd = mysql_query($job_comp_sl);
							$rcd_count = mysql_num_rows($job_comp_rd);
							$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
							//$dir_moto  = mysql_result($job_comp_rd,0,'dir_pdet'); 

							$cid		= mysql_result($job_comp_rd,0,'dir_city');	
							$sid		= mysql_result($job_comp_rd,0,'dir_stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
							else
						{
							$job_comp_sl = "select * from srvs_main where sr_id='$dir_id'";  

							$job_comp_rd = mysql_query($job_comp_sl);
							$comp_name = mysql_result($job_comp_rd,0,'cname');
							$dir_moto	= mysql_result($job_comp_rd,0,'compmoto');
							
							$cid		= mysql_result($job_comp_rd,0,'city');	
							$sid		= mysql_result($job_comp_rd,0,'stat');
							
							$citsl = "select * from city where citid='$cid'";
							$citrd = mysql_query($citsl);
							$c_name = mysql_result($citrd,0,'citname');

							$stsl = "select * from state where stid='$sid'";
							$strd = mysql_query($stsl);
							$s_name = mysql_result($strd,0,'stname');
						}
print "<fieldset>
			<table border = 0 width=100% cellspacing=0 cellpadding=1>
		<tr>
			<td width=\"75%\" height=\"20\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">
					<a href=0708150129.php?ID=$guest_rec[$count] target=_parent><b>$job_nm ($grp_name)</a>
			</td>
			<td width=\"25%\" class=\"grncel_DRK_tb bgimg\" align=\"center\"><b>Vacancy : $job_va Nos. </b></td> 
		</tr>
		<tr>
				<td height= \"25\" class = \"grncel_DRK\" colspan=6><b><a href=0708150129.php?ID=$guest_rec[$count] target=_parent>$comp_name , $c_name ($s_name)</a></b></td>
		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Min.Qualification 9</td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$qual_name </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_fdt </b> </td>



		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Age Limit </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_age - $job_mage Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Expire On Date</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_tdt</b> </td>

		</tr>
		<tr>
			<td width=\"20%\" class = \"grncel_DRK\" align=\"right\">Job Experience </td>
			<td width=\"5%\" class = \"grncel_DRK\"> :</td>
			<td width=\"20%\"class = \"grncel_DRK\"><b>$job_exp Years</b> </td>
			<td width=\"25%\"class = \"grncel_DRK\" align=\"right\">Job Opening for Days</td>
			<td width=\"5%\"class = \"grncel_DRK\"><b> : </b> </td>
			<td width=\"25%\"class = \"grncel_DRK\"><b>$job_day / Days</b> </td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Job Type </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_pf </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
		</tr>
		
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Salary Approx. </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$job_sal/-  Per Annum</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>

		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">City </td>
			<td class = \"grncel_DRK\">   : </td>
			<td class = \"grncel_DRK\"><b>$city_name </b>,&nbsp;&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>



		</tr>
		<tr>
			<td class = \"grncel_DRK\" align=\"right\">Industries </td>
			<td class = \"grncel_DRK\"> : </td>
			<td class = \"grncel_DRK\"><b>$inds_name</td>
			<td class = \"grncel_DRK\"><b> &nbsp;</b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>
			<td class = \"grncel_DRK\"><b>&nbsp; </b></td>


		<tr>
			<td class = \"grncel_DRK\"  colspan=6 align=\"left\">Show All Job This Company</td>
		</tr>
	</table>
	</fieldset>";		
				$count++;
				}
			} 
		}
		$listed++;
		$count=0;
		print "</blockquote></td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#F0F0F0><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
if($pg!=1)
	{
		print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150126.php?jname=$jname&inds_id=$inds_id&city_id=$city_id&type_id=$type_id&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
			 	
	 else
	{
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Please Select Vaild Job Category and city Name ....Thanks (exit)</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
	}
		

?>
