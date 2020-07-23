<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();

$cname		= $_POST['cname'];
$cpname		= $_POST['cpname'];
$add1		= $_POST['add1'];	
$add2		= $_POST['add2'];	
$city		= $_POST['city'];
$district	= $_POST['dist'];
$state		= $_POST['state'];
$country 	= $_POST['country'];	
$zip	 	= $_POST['zip'];
$tel	 	= $_POST['tel'];	
$fax 	 	= $_POST['fax'];
$mno	 	= $_POST['mno'];	
$email		= $_POST['email'];
$aemail		= $_POST['aemail'];	
$web	 	= $_POST['web'];
$capcha		= $_POST['capcha'];

$category	= $_POST['catid'];
$product	= $_POST['prodid'];
$ryear		= $_POST['ryear'];


				$dyear = date("Y", mktime())+$ryear;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());
				$curdate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));


$insertSQL = "INSERT INTO dir_tmain(dir_cname,dir_cpname, dir_add1, dir_add2, dir_city,
			  dir_dist,dir_stat,dir_cont,dir_zip,dir_tel, dir_fax,dir_mob,dir_mail,dir_web, dir_amail, capcha)
			  VALUES 
			  ('$cname','$cpname','$add1','$add2','$city','$district','$state','$country','$zip','$tel','$fax',
			   '$mno','$email','$web', '$aemail', '$capcha')";
		if(mysql_query($insertSQL))
				{
				
					$idssl = "select dir_id from dir_tmain where capcha = '$capcha'";
					$idsrs	= mysql_query($idssl);
					$trstid = mysql_result($idsrs,0,'dir_id');
				
					$cmpidsl = "select dir_id, left(dir_cname,1) as idx from dir_tmain where dir_id = '$trstid'";
					$cmpidrcd = mysql_query($cmpidsl);
					$idx   = mysql_result($cmpidrcd,0,'idx'); 
						
					$sqlisrt = "insert into dir_tadvts (dir_id, dir_cat_id, dir_prod_id, dir_regfyear, sidx, city, rgfdate,rgtdate,authtag, district, state, country, capcha)
			  		   values ('$trstid', '$category', '$product', '$ryear','$idx','$city',now(),'$curdate','Y','$district','$state','$country','$capcha')";
					if($sqlisrtrcd = mysql_query($sqlisrt))
		
			
			
					$msg = 1;
					header("Location: 0708150103.php?msg=$msg");
		
		
					exit;			
				
				} 
				else
				{
					$msg = 2;
					header("Location: 0708150103.php?msg=$msg");
					exit;
				}
?>
