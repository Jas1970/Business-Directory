<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$jobname = $_REQUEST['jobname'];
$jobnamer = $_REQUEST['jnrcd'];
$jobgrp	  = $_REQUEST['jobgrp'];
$jobinds  = $_REQUEST['jobinds'];
$jobqual  = $_REQUEST['jobqual'];
$jobminage = $_REQUEST['minage'];
$jobmaxage = $_REQUEST['maxage'];
$jobexp	   = $_REQUEST['jobexp'];
$jobsal		= $_REQUEST['jobsal'];
$jobpf		= $_REQUEST['jobpf'];
$jobdays	= $_REQUEST[advtdays];
$jobadvtstdt = $_REQUEST['advtstdt'];
$jobcompid	= $_REQUEST['compid'];
$joblisting	= $_REQUEST['listing'];
$jobvanc	= $_REQUEST['vanc'];		 
$jobcity	= $_REQUEST['city_name'];

$jcitysl = "select citid from city where citname = '$jobcity'";
$jcityrd = mysql_query($jcitysl,$abc);
$jcity_id = mysql_result($jcityrd,0,'citid');		 



$jtypesl = "select jtype_id from job_type where jtype_name='$jobnamer'";
$jtyperd = mysql_query($jtypesl,$abc);
$rcdcount = mysql_num_rows($jtyperd);
$jtype_id = mysql_result($jtyperd,0,'jtype_id');

$jobgrpsl = "select grp_id from job_grp where grp_name= '$jobgrp'";
$jobgrprd = mysql_query($jobgrpsl,$abc);
$jgrp_id  = mysql_result($jobgrprd,0,'grp_id');

$jobindssl = "select inds_id from job_inds where inds_name= '$jobinds'";
$jobindsrd = mysql_query($jobindssl,$abc);
$jinds_id  = mysql_result($jobindsrd,0,'inds_id');

$jobqualsl = "select jqual_id from job_qual where jqual_name= '$jobqual'";
$jobqualrd = mysql_query($jobqualsl,$abc);
$jqual_id  = mysql_result($jobqualrd,0,'jqual_id');



$startdate  = date("$jobadvtstdt", mktime());
				
				$dyear = date("Y", mktime());
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime())+$jobdays;
				

				$todate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));


$jobpf		= $_REQUEST['jobpf'];
$jobcompid	= $_REQUEST['compid'];
$joblisting	= $_REQUEST['listing'];		 

if($joblisting<>"Service Providor")
			{
			$dirsl = "select * from dir_main where dir_id='$jobcompid'";
			$dirrd = mysql_query($dirsl,$abc);
			$rcdcount = mysql_num_rows($dirrd);
				if($rcdcount==0)
					{
					print "Record Dose not Exists";
					}
				else
					{
					$rcddir=1;
					$inssql = "insert into job_main
						(job_type,job_grp,job_inds,job_qual,job_age,job_sal,
						job_exp,job_FP,job_no,job_fdt,job_tdt,job_day,job_mage,job_comp,job_tag,job_nm,job_city)
						values ('$jtype_id','$jgrp_id','$jinds_id','$jqual_id','$jobminage','$jobsal','$jobexp',
						'$jobpf','$jobvanc',now(),'$todate','$jobdays','$jobmaxage','$jobcompid',
						'$rcddir','$jobname','$jcity_id')";
						
						if (mysql_query($inssql, $abc)) 
							{
						    echo "record added";
							} 
							else 
							{
						    echo "something went wrong";
							}
					}
			}
			else
			{
				$srvssl = "select * from srvs_main where sr_id= '$jobcompid'";
				$srvsrd = mysql_query($srvssl,$abc);
				$rcdcount = mysql_num_rows($srvsrd);
				if($rcdcount==0)
					{
					print "Record Dose not Exists";
					}
				else
					{
					$rcddir=2;
					$inssql = "insert into job_main
						(job_type,job_grp,job_inds,job_qual,job_age,job_sal,
						job_exp,job_FP,job_no,job_fdt,job_tdt,job_day,job_mage,job_comp,job_tag,job_nm, job_city)
						values ('$jtype_id','$jgrp_id','$jinds_id','$jqual_id','$jobminage','$jobsal','$jobexp',
						'$jobpf','$jobvanc',now(),'$todate','$jobdays','$jobmaxage','$jobcompid',
						'$rcddir','$jobname','$jcity_id')";
						
						if (mysql_query($inssql, $abc)) 
							{
						    echo "record added";
							} 
							else 
							{
						    echo "something went wrong";
							}






					}
				}												

//$insertSQL = "INSERT INTO aso_tmp(aso_fname,aso_mname,aso_lname,aso_sex,aso_age,aso_equl,aso_pqul,aso_exp,aso_add1,aso_add2,aso_city,aso_dist,aso_stat,aso_cout,aso_tel,aso_mob,aso_mail) 
//VALUES ('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[sex]','$_POST[age]','$_POST[equl]','$_POST[pqul]','$_POST[exps]','$_POST[add1]','$_POST[add2]','$city_code','$dist_code','$stat_code','$cout_code','$_POST[tel]','$_POST[mob]','$_POST[mail]')";
//if (mysql_query($insertSQL, $abc)) 
	//	{
//	    header("Location: asotmpthanks.php");
	//	} 
	//	else 
	//	{
	//    echo "something went wrong";
	//	}
	
?>
