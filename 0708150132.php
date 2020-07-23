<html
<title></title>
<head>
<link href="css/yellow_08.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF">
</body>
</html>
<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();	
		$line_num = 25;  
		$max = $line_num;	// configure how many rows of message display per page
		$count = 0;
		$type_id	= $_REQUEST['ptype'];
		$citid		= $_REQUEST['pcity'];
		$pbudget	= $_REQUEST['pbudget'];
		$pfor		= $_REQUEST['pfor'];	

		$pg = $_REQUEST['pg'];
		$cur_rows = 0;
		$max_rows = $max;
		
	if($type_id=="")
		{	
			$type_id = $_GET['typeid'];
		}
	if($citid=="")
		{
			$citid = $_GET['citid'];
		}
	if($pbudget=="")
		{
			$pbudget = $_GET['budget'];
		}
	if($pfor=="")
		{
			$pfor = $_GET['pfor'];
		}						
	
	
	
	
		if($pbudget==1)
			{
				$plprc = 0;
				$puprc = 500000;
			}
		elseif($pbudget==2)	
			{
				$plprc = 500000;
				$puprc = 1000000;
			}
		elseif($pbudget==3)	
			{
				$plprc = 1000000;
				$puprc = 2000000;
			}
		elseif($pbudget==4)	
			{
				$plprc = 2000000;
				$puprc = 4000000;
			}
		elseif($pbudget==5)	
			{
				$plprc = 4000000;
				$puprc = 8000000;
			}
		elseif($pbudget==6)	
			{
				$plprc = 8000000;
				$puprc = 10000000;
			}
		elseif($pbudget==7)	
			{
				$plprc = 10000000;
				$puprc = 15000000;
			}
		elseif($pbudget==8)	
			{
				$plprc = 15000000;
				$puprc = 20000000;
			}
		elseif($pbudget==9)	
			{
				$plprc = 20000000;
				$puprc = 25000000;
			}
		elseif($pbudget==10)	
			{
				$plprc = 25000000;
				$puprc = 100000000;
			}
		else
			{
				$plprc = 0;
				$puprc = 250000000;
			}
	
	if ($pfor=='1')
		{
			$pfor= "Buy";
		}	
	if ($pfor=='2')
		{
			$pfor= "Sel";
		}	
	if ($pfor=='3')
		{
			$pfor= "Rent";
		}	
		
		
			
					

	if($pg!=1)
	{
		for($i=1;$i<$pg;$i++)
		{
			$cur_rows=$cur_rows+$max;
			$max_rows=$max_rows+$max;
		}
	}
		
	

if($type_id<>"" and  $citid<>"" and $pfor<>"")
	{

		
			$recd = mysql_query("SELECT distinct(prop_id) FROM prop_main 
			 where prop_city='$citid' and 
			 prop_type='$type_id' and 
			 prop_want_to='$pfor' and	
			 prop_price between $plprc and $puprc
			 order by prop_id") or die("Query failed a");
	
	
	$num_rows = mysql_num_rows($recd);


	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"500px\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This City & Property Type .... Try Another One ... Thanks</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT distinct(prop_id) FROM prop_main 
			 where prop_city='$citid' and 
			 prop_type='$type_id' and
			 prop_want_to='$pfor' and
			 prop_price between $plprc and $puprc
			 order by prop_id";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Category, Product and City </h3>";
			exit;
		}

	$listed=0;

//	print "<font color=\"Blue\">Rearch for Category <b>$catnm </b> Record Found <b> $recnum</font></b> "; 	
	
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
	{	
		if($listed>=$cur_rows && $listed< $max_rows)
		{
			foreach($line as $guest_rec[$count])
			{
			if($count==0) 
                   {      
                            
                       /*     $propData = propdet($guest_rec[$count]);
                 for($index=0;$index < count($propData);$index++)
                    {
                     $propclass = $propData[$index];
                     $pcomp_id = $propclass->getPropcid();
                     $pcomp_type = $propclass->getPropctype();
                     $prop_city = $propclass->getPropcity();                     
                     $prop_loc  = $propclass->getProploc();
                     $prop_add1 = $propclass->getPropadd1();
                     $prop_add2 = $propclass->getPropadd2();
                     $prop_dist = $propclass->getPropdist();
                     $prop_state = $propclass->getPropstat();
                     $prop_rate = $propclass->getPropprice();
                     $prop_area = $propclass->getProparea();
                     $prop_fdt  = $propclass->getPropfrdt();
                     $prop_fday = $propclass->getPropadday();
                     $prop_type = $propclass->getProptype();
                     */
                                
				$slmain = "select prop_comp_id, prop_comp_type, prop_type, prop_city, prop_location, prop_add1, prop_add2,
							prop_dist, prop_state, prop_price, prop_area, date_format(prop_fr_dt,'%d-%m-%Y') as frdt,
							prop_ad_day, prop_area_type from prop_main where prop_id='$guest_rec[$count]'";
				$rdmain = mysql_query($slmain);
				$pcomp_id 	= mysql_result($rdmain,0,'prop_comp_id');
				$pcomp_type     = mysql_result($rdmain,0,'prop_comp_type');
				$prop_type 	= mysql_result($rdmain,0,'prop_type');
				$prop_city	= mysql_result($rdmain,0,'prop_city');
				$prop_loc	= mysql_result($rdmain,0,'prop_location');
				$prop_add1	= mysql_result($rdmain,0,'prop_add1');
				$prop_add2	= mysql_result($rdmain,0,'prop_add2');
				$prop_dist	= mysql_result($rdmain,0,'prop_dist');
				$prop_state	= mysql_result($rdmain,0,'prop_state');
				$prop_rate	= mysql_result($rdmain,0,'prop_price');	
				$prop_area	= mysql_result($rdmain,0,'prop_area');
				$prop_fdt	= mysql_result($rdmain,0,'frdt');
				$prop_fday	= mysql_result($rdmain,0,'prop_ad_day');
//				$tot_amt	= round($prop_rate/$prop_area,2); 
				
				$prop_areat	= mysql_result($rdmain,0,'prop_area_type');

				$citysl = "select * from city where citid='$prop_city'";
				$cityrd = mysql_query($citysl);
				$city_name = mysql_result($cityrd,0,'citname');
				
				$dist_st = "select dstname from district where dstid='$prop_dist'";
				$dist_rcd = mysql_query($dist_st);
				$dist_name = mysql_result($dist_rcd,0,'dstname');
					
				$state_st = "select stname from state where stid='$prop_state'";
				$state_rcd = mysql_query($state_st);
				$state_name = mysql_result($state_rcd,0,'stname');
                                  
                   }
				$prtypesl 	= "select type_name from prop_type where type_id='$prop_type'";
				$prtyperd 	= mysql_query($prtypesl);
				$type_name	= mysql_result($prtyperd,0,'type_name');
				
				if($pcomp_type==1)
					{
							$job_comp_sl = "select * from dir_main, dir_add where dir_main.dir_id='$pcomp_id' 
								    and dir_add.dir_id='$pcomp_id'";
							
							$job_comp_rd = mysql_query($job_comp_sl);
							$rcd_count = mysql_num_rows($job_comp_rd);
							$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
							//$dir_moto  = mysql_result($job_comp_rd,0,'dir_pdet');
							$cpname		= mysql_result($job_comp_rd,0,'dir_cpname');
							$mobno		= mysql_result($job_comp_rd,0,'dir_mob');	 
						}
							else
						{
							$job_comp_sl = "select * from srvs_main where sr_id='$pcomp_id'";  

							$job_comp_rd = mysql_query($job_comp_sl);
							$comp_name = mysql_result($job_comp_rd,0,'cname');
							//$dir_moto	= mysql_result($job_comp_rd,0,'compmoto');
							$cpname		= mysql_result($job_comp_rd,0,'cpname');	
							$mobno		= mysql_result($job_comp_rd,0,'mob');	 


						}

                   
	print  "<fieldset>
			<table border =0 width=100% cellspacing=0 cellpadding=2>
				<tr>
					<td height =\"25\" colspan=\"5\" width=\"75%\" class=\"grncel_DRK_tb bgimg\" ><a href=0708150135.php?ID=$guest_rec[$count] target=_parent><font class=\"smally\"><b> $type_name </b> </td>
					<td align=\"left\" class=\"grncel_DRK_tb bgimg\" > <b>Area :$prop_area $prop_areat</b></td>
					
				</tr>	
				<tr>
					<td class = \"grncel_DRK\" colspan=\"6\"><b><a href=0708150135.php?ID=$guest_rec[$count] target=_parent> $comp_name, </a></b> </td>
				</tr>
				<tr>
					<td class = \"grncel_DRK\" align=\"right\" width=\"20%\"> Contact Person </td>
					<td class = \"grncel_DRK\" width=\"3%\">:</td>
					<td class = \"grncel_DRK\" width=\"25%\"><b> $cpname - Mobile No. $mobno </b> </td>
					<td class = \"grncel_DRK\" align=\"right\" width=\"20%\"><b>Posted On Date</b> </td>
					<td class = \"grncel_DRK\" width=\"3%\">:</td>
					<td class = \"grncel_DRK\" align=\"left\" width=\"25%\">$prop_fdt </td>

				</tr>
				
				<tr>
					<td class = \"grncel_DRK\"  align=\"right\"> Property Location</td>
					<td class = \"grncel_DRK\"  align=\"center\">:</td>
					<td class = \"grncel_DRK\"  align=\"left\"><b> $prop_loc</b> </td>
					<td class = \"grncel_DRK\" align=\"right\" width=\"20%\"><b>Vaild For Days</b> </td>
					<td class = \"grncel_DRK\" width=\"3%\">:</td>
					<td class = \"grncel_DRK\" align=\"left\" width=\"25%\">$prop_fday /Days</td>
				</tr>
				<tr>
					<td class = \"grncel_DRK\" align=\"right\"> Address </td>
					<td class = \"grncel_DRK\" >:</td>
					<td class = \"grncel_DRK\" colspan=\"4\"><b> $prop_add1  $prop_add2 </b> </td>
				</tr>
				<tr>
					<td class = \"grncel_DRK\" align=\"right\"> City </td>
					<td class = \"grncel_DRK\">:</td>
					<td class = \"grncel_DRK\" colspan=\"4\"><b> $city_name, $state_name - (India)</b> </td>
				</tr>
				<tr>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					
				</tr>
	
	<tr>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					<td class = \"grncel_DRK\">&nbsp;</td>
					
				</tr>
		</table>
	</fieldset>";	
	
	print "<br>";
						
						$count++;
			}
                        
		}
		$listed++;
		$count=0;
		print "</td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#FDF0C6><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150132.php?typeid=$type_id&citid=$citid&budget=$pbudget&pfor=$pfor&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150132.php?typeid=$type_id&citid=$citid&budget=$pbudget&pfor=$pfor&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150132.php?typeid=$type_id&citid=$citid&budget=$pbudget&pfor=$pfor&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
	else
	{
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Please Select Vaild Category ,Products and city Name ....Thanks</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
	}
?>


