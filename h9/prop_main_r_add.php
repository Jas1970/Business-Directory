<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$ptype		= $_REQUEST['prop_type'];
$pwt		= $_REQUEST['prop_wt'];
$pprice		= $_REQUEST['prop_price'];
$parea		= $_REQUEST['prop_area'];
$pareat		= $_REQUEST['prop_area_type'];
$powner		= $_REQUEST['prop_owner'];
$plocation	= $_REQUEST['prop_location'];
$padd1		= $_REQUEST['prop_add1'];
$padd2		= $_REQUEST['prop_add2'];
$pcity		= $_REQUEST['prop_city'];
$pdist		= $_REQUEST['prop_dist'];
$pstate		= $_REQUEST['prop_state'];
$pcomptype	= $_REQUEST['prop_comp_type'];
$pcompid	= $_REQUEST['prop_comp_id'];
$padvtdays	= $_REQUEST['prop_advt_days'];		 
$padvtfrdt	= $_REQUEST['prop_fr_dt'];

$pcitysl 	= "select citid from city where citname = '$pcity'";
$pcityrd 	= mysql_query($pcitysl,$abc);
$pcity_id 	= mysql_result($pcityrd,0,'citid');		 

$ptypesl 	= "select type_id from prop_type where type_name='$ptype'";
$ptyperd 	= mysql_query($ptypesl,$abc);
$rcdcount 	= mysql_num_rows($ptyperd);
$type_id 	= mysql_result($ptyperd,0,'type_id');

$pdist_id 	= "select dstid from district where dstname= '$pdist'";
$pdist_rcd 	= mysql_query($pdist_id,$abc);
$pdist_id	= mysql_result($pdist_rcd,0,'dstid');

$pstat_id 	= "select stid from state where stname= '$pstate'";
$pstat_rcd	= mysql_query($pstat_id,$abc);
$pstat_id	=mysql_result($pstat_rcd,0,'stid');




$startdate  = date("$padvtfrdt", mktime());
				
				$dyear = date("Y", mktime());
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime())+$padvtdays;
				

				$todate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));



if($pcomptype<>"Service Providor")
			{
			$dirsl = "select * from dir_main where dir_id='$pcompid'";
			$dirrd = mysql_query($dirsl,$abc);
			$rcdcount = mysql_num_rows($dirrd);
	
			
				if($rcdcount==0)
					{
					print "Record Dose not Exists";
					}
				else
					{
					$rcddir=1;
			
					$inssql = "insert into prop_main
						(prop_comp_type, prop_comp_id, prop_location, prop_add1, prop_add2, prop_city,
						prop_state,prop_want_to, prop_price, prop_area, prop_area_type, prop_owner_type, 
						prop_dist, prop_ad_day, prop_fr_dt, prop_to_dt, prop_type)
						values ('$rcddir','$pcompid','$plocation','$padd1', '$padd2','$pcity_id','$pstat_id',
						'$pwt','$pprice','$parea','$pareat','$powner','$pdist_id','$padvtdays',
						'$startdate','$todate','$type_id')";
						
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
							
				$srvssl = "select * from srvs_main where sr_id= '$pcompid'";
				$srvsrd = mysql_query($srvssl,$abc);
				$rcdcount = mysql_num_rows($srvsrd);
				if($rcdcount==0)
					{
					print "Record Dose not Exists";
					}
				else
					{
					$rcddir=2;
					
					$inssql = "insert into prop_main
						(prop_comp_type, prop_comp_id, prop_location, prop_add1, prop_add2, prop_city, prop_state, 
						prop_want_to, prop_price, prop_area, prop_area_type, prop_owner_type, prop_dist, 
						prop_ad_day, prop_fr_dt, prop_to_dt, prop_type)
						values ('$rcddir','$pcompid','$plocation','$padd1', '$padd2','$pcity_id','$pstat_id',
						'$pwt','$pprice','$parea','$pareat','$powner','$pdist_id','$padvtdays',
						'$startdate','$todate','$type_id')";
						
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


?>
