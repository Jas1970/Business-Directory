<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';
//include("Connections/db.inc.php");
//$db  = new DB();
//$db->open();

$csrvsid 	= $_POST['ID'];					// company id
$sr_id		= $_POST['SID'];				// service Grup id
$sr_subid	= $_POST['sub_service_dropdown'];	// sub service id
$regfy		= $_POST['years'];
$city		= $_POST['city_dropdown'];
$state 		= $_POST['state_dropdown'];
$district 	= $_POST['district_dropdown'];
$country	= $_POST['country_dropdown'];

echo "City : $city <br>";
echo "District : $district <br>";
echo "state : $state <br>";
echo "Country : $country <br>";


$slindx = "select left(cname,1) as cname from srvs_main where sr_id='$csrvsid'";
$rdindx = mysql_query($slindx)or die ("some thing wrong");
$sindx = mysql_result($rdindx,0,'cname');

$chkdup = "select * from asrvs_advts
			 where 
			mids = '$csrvsid' and 
			srvsid = '$sr_id' and 
			srid = '$sr_subid' and
			city= '$city' and 
			state = '$state' and
			district = '$district' and 
			country = '$country "; 
						
$chkrd  = mysql_query($chkdup)or mysql_error();
$rcdcount = mysql_num_rows($chkrd);

if($rcdcount<1)
	{
	$selcsrvs = "select * from srvs_advts where 
				mids='$csrvsid' and 
				srvsid='$sr_id' and 
				srid='$sr_subid' and 
				city = '$city' and
				state='$state' and
				district ='$district' and 
				country = '$country "; 
					
		$chkrd1  = mysql_query($selcsrvs)or mysql_error();
		$profnum = mysql_num_rows($chkrd1);
				
				
		
	if($profnum>0)
		{
		$msg  = "Duplicate, Record Already Registered city : $city District : $district State : $state  Country : $country";
 		header("Location: 0708150324.php?ID=$csrvsid&SID=$sid&rand=$adms&msg=$msg");
	   	exit;
		}
		else
		{
				$dyear = date("Y", mktime())+$regfy;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());
				$curdate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));
				$AdvtSl = "insert into asrvs_advts(mids,srvsid,city,rfyear,rgfdate,rgtdate,authtag,sidx, srid, district, state, country, capcha )
				values
				('$csrvsid','$sr_id','$city','$regfy',now(),'$curdate','Y','$sindx', '$sr_subid', '$district', '$state','$country','$capcha')";	
		
		
				 if($AdvtRd = mysql_query($AdvtSl))
			 			{
					$msg = "Record Sucessfully Inserted temp : $rcdcount  main : $profnum";
			 		header("Location: 0708150324.php?ID=$csrvsid&SID=$sid&rand=$adms&msg=$msg");
			    	exit;
				}
				else
				{
					$msg = "Something Wrong with programe";
			 		header("Location: 0708150324.php?ID=$csrvsid&SID=$sid&rand=$adms&msg=$msg");
			   		exit;
				}
		}	
	} 
	else
	{
			$msg = "Record Exist in Temprory Table, Try Another One temp : $rcdcount  main : $profnum";
			header("Location: 0708150324.php?ID=$csrvsid&SID=$sid&rand=$adms&msg=$msg");
		   exit;
	}  

?>
