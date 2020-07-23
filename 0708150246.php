<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';


$type_id		= $_REQUEST['ptype'];
$pwt			= $_REQUEST['prop_wt'];
$pprice			= $_REQUEST['prop_price'];
$parea			= $_REQUEST['prop_area'];
$pareat			= $_REQUEST['prop_area_ty'];
$powner			= $_REQUEST['prop_owner'];
$plocation		= $_REQUEST['prop_location'];
$padd1			= $_REQUEST['prop_add1'];
$padd2			= $_REQUEST['prop_add2'];
$pcity_id		= $_REQUEST['prop_city'];
$pdist_id		= $_REQUEST['prop_dist'];
$pstat_id		= $_REQUEST['prop_state'];
$pcompid		= $_REQUEST['ID'];
$psid			= $_REQUEST['SID'];
$padvtdays		= 30;
$pfordays		= abs(1);
		 
$padvtfrdt		= $_REQUEST['prop_fr_dt'];
$rcddir=1;

				

$slreg = "select prop_comp_id from prop_main where prop_comp_id='$rstid'";
$rdreg = mysql_query($slreg);
$advtcount = mysql_num_rows($rdreg);
$advtnum = abs(10);
$advtbal = $advtnum-$advtcount;		
if($advtbal==0)
	{
	$msgs = "Your Limit is Over";
	header("Location: 0708150242.php?ID=$pcompid&SID=$psid&rand=$adms&msgs=$msgs");
    exit;
	}
	else
	{
				$dyear = date("Y");
				$dmon  = date("m")+1;
				if($dmon==13)
					{
					$dmon=1;
					$dyear=date("Y")+1;
					}
				$dday  = date("d");
				
				$todate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));


	
	
		$inssql = "insert into prop_tmain
						(prop_comp_type, prop_comp_id, prop_location, prop_add1, prop_add2, prop_city,
						prop_state,prop_want_to, prop_price, prop_area, prop_area_type, prop_owner_type, 
						prop_dist, prop_ad_day, prop_fr_dt, prop_to_dt, prop_type)
						values ('$rcddir','$pcompid','$plocation','$padd1', '$padd2','$pcity_id','$pstat_id',
						'$pwt','$pprice','$parea','$pareat','$powner','$pdist_id','$padvtdays',
						now(),'$todate','$type_id')";
		
		if($rst = mysql_query($inssql))
			{
			$msgs = "Record Successfuly Enter in Temp.";
			header("Location: 0708150242.php?ID=$pcompid&SID=$psid&rand=$adms&msgs=$msgs");
		    exit;
			}
			else
			{
	 		header("Location: 0708150201.php?ID=$pcompid&SID=$psid");
    		exit;				
			}	
	}
?>
