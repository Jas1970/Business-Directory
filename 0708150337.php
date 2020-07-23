<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';

$jobname 	= $_REQUEST['jobname'];
$jtype_id 	= $_REQUEST['jobnamer'];
$jgrp_id	= $_REQUEST['jgrp'];
$jinds_id  	= $_REQUEST['jinds'];
$jqual_id  	= $_REQUEST['jqual'];
$jobminage 	= $_REQUEST['minage'];
$jobmaxage 	= $_REQUEST['maxage'];
$jobexp	   	= $_REQUEST['jexp'];
$jobsal		= $_REQUEST['jsal'];
$jobpf		= $_REQUEST['jtype'];
$jobfdays	= abs(1);
$jobdays	= abs(30);
$jobadvtstdt = $_REQUEST['advtstdt'];
$jobvanc	= $_REQUEST['jno'];		 
$jcity_id	= $_REQUEST['jcity'];
$startdate  = date("$jobadvtstdt", mktime());
				
				$dyear = date("Y", mktime());
				$dmon  = date("m", mktime())+$jobfdays;;
				$dday  = date("d", mktime());
				$todate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));
				$jobcompid	= $_REQUEST['ID'];
//$sid		= $_GET['SID'];
			$joblisting	= $_REQUEST['listing'];		 

		$rcddir=2;
		
		$slreg = "select job_id  from job_main where job_comp='$srvsid' and job_tag='2'";
				$rdreg = mysql_query($slreg)or die(mysql_error());
				$advtcount = mysql_num_rows($rdreg);
				$advtnum	= abs(10);
				$advtbal	= $advtnum-$advtcount;
		
		if($advtbal==0)
			{
				$msg = "3";
				header("Location: 0708150333.php?ID=$jobcompid&rand=$adms&SID=$sid&msg=$msg");
		  		exit;
			
			}
			else
			{
		$inssql = "insert into job_tmain
					(job_type,job_grp,job_inds,job_qual,job_age,job_sal,
					job_exp,job_FP,job_no,job_fdt,job_tdt,job_day,job_mage,job_comp,job_tag,job_nm,job_city)
					values ('$jtype_id','$jgrp_id','$jinds_id','$jqual_id','$jobminage','$jobsal','$jobexp',
					'$jobpf','$jobvanc',now(),'$todate','$jobdays','$jobmaxage','$jobcompid',
					'$rcddir','$jobname','$jcity_id')";
					if (mysql_query($inssql)) 
							{
							$msg = "1";
						    header("Location: 0708150333.php?ID=$jobcompid&rand=$adms&SID=$sid&msg=$msg");
		  				    exit;
							} 
							else 
							{
							$msg = "2";
						    header("Location: 0708150333.php?ID=$jobcompid&SID=$sid&rand=$adms&msg=$msg");
		  				    exit;
						}
				}
?>
