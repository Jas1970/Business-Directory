<?php
include 'include/masterdata.php'; 
include 'include/sess.php';


//============================page Authorisation end

$catid		= $_REQUEST['catid'];
$prodid		= $_REQUEST['pid'];
$rfory		= $_REQUEST['years'];

$city		= $_POST['city_dropdown'];
$district	= $_POST['district_dropdown'];
$state		= $_POST['state_dropdown'];
$country	= $_POST['country_dropdown'];
$capcha 	= "7888";

				$dyear = date("Y", mktime())+$rfory;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());
				$curdate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));


$chkdupsl = "select * from dir_catprd where 
			main_dirid = '$rstid' and 
			cat_id	 = '$catid' and 
			prd_id	 = '$prodid' and  
			city	 = '$city' and
			district = '$district' and
			state 	 = '$state' and
			country	 = '$country'";

$chkduprd = mysql_query($chkdupsl);
$chknum  = mysql_num_rows($chkduprd);
if($chknum<1)
	{
	$cmpidsl = "select dir_id, left(dir_cname,1) as idx from dir_main where dir_id = '$rstid'";
	$cmpidrcd = mysql_query($cmpidsl);
	$idx   = mysql_result($cmpidrcd,0,'idx'); 
	
	$chdupprod = "select * from dir_aadvts 
			 	 where 
			  	dir_id		 = '$rstid' and 
			  	dir_cat_id	 = '$catid' and 
			  	dir_prod_id	 = '$prodid' and 
			  	city		 = '$city' and
			  	district	 = '$district' and
			  	state		 = '$state' and
			  	country = '$country'";
				
	$chdupprodrcd = mysql_query($chdupprod);
	$chduprow = mysql_num_rows($chdupprodrcd);
	if ($chduprow ==0)
			{
			$sqsrt = "insert into dir_aadvts 
			(dir_id, dir_cat_id, dir_prod_id, dir_regfyear, sidx, city, rgfdate, rgtdate, authtag, district, state, country, capcha) 
			values    
			('$rstid', '$catid', '$prodid', '$rfory','$idx', '$city', now(), '$curdate', 'Y', '$district', '$state', '$country','$capcha')";
					
						
			if($srcd = mysql_query($sqsrt))
				{
				 	$msg = "Record Sucessfully Insert";	
				 	header("Location: 0708150222.php?ID=$rstid&SID=$sid&rand=$adms&msg=$msg");
   		    		exit;
				}
				else
				{
				$msg = "something wrong Record Not Insert, Contact site Administrator, $chduprow ";
				 header("Location: 0708150222.php?ID=$rstid&SID=$sid&rand=$adms&msg=$msg");
				  		exit;
				}
				
				
			}
			else
			{			
			 $msg = "Duplicate Record Exist In Tempraory  Table";
			 header("Location: 0708150222.php?ID=$rstid&SID=$sid&rand=$adms&msg=$msg");
   			 exit;
			}
		}
	else
	{
		 $msg = "Duplicate Record Exist In Master Table";
		 header("Location: 0708150222.php?ID=$rstid&SID=$sid&rand=$adms&msg=$msg");
   		 exit;
	}
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php //print $msg;  $display_block; ?>  
</body>
</html>
