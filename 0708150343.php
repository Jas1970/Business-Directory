<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';

// from 339

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
$sid			= $_GET['SID'];
$padvtdays		= abs(1);
$padvtfday		= abs(30);		 
$padvtfrdt		= $_REQUEST['prop_fr_dt'];
$rcddir=2;

				
				

				$slreg = "select prop_comp_id from prop_main where prop_comp_id='$srvsid'";
				$rdreg = mysql_query($slreg);
				$advtcount = mysql_num_rows($rdreg);
				$advtnum = abs(10);
				$advtbal = $advtnum-$advtcount;
		if($advtbal==0)
			{
			$msg = "3";
			header("Location: 0708150339.php?ID=$pcompid&SID=$sid&rand=$adms&msg=$msg");
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
						'$pwt','$pprice','$parea','$pareat','$powner','$pdist_id','$padvtfday',
						now(),'$todate','$type_id')";
		
		if($rst = mysql_query($inssql))
			{
			$msg = "1";
			header("Location: 0708150339.php?ID=$pcompid&SID=$sid&rand=$adms&msg=$msg");
		    exit;
			}
			else
			{
			$msg = "1";
	 		header("Location: 0708150339.php?ID=$pcompid&SID=$sid&rand=$adms&msg=$msg");
    		exit;				
			}	
		}
?>
