<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();


$cname 		= $_POST['cname'];
$cpname		= $_POST['cpname'];
$mno		= $_POST['mno'];
$add1		= $_POST['add1'];
$add2		= $_POST['add2'];
$city		= $_POST['city'];
$district	= $_POST['district'];
$state		= $_POST['state'];
$country 	= $_POST['country'];
$zip		= $_POST['zip'];
$tel		= $_POST['tel'];
$fax		= $_POST['fax'];
$email		= $_POST['email'];
$aemail		= $_POST['aemail'];
$web		= $_POST['web'];
$capcha		= $_POST['capcha'];


$srvs_id	=	$_POST['srvs_id'];
$subsrvs_id	=	$_POST['subsrvs_id'];
$ryear		=	$_POST['ryears'];

				$dyear = date("Y", mktime())+$ryear;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());
				$curdate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));

$insertSQL = "INSERT INTO tsrvs_main(cname,cpname, add1, add2, city,
			  dist, stat, cout, pin, tel, fax, mob, mail, web, amail,capcha)
			  VALUES 
			  ('$cname','$cpname','$add1','$add2','$city','$district','$state','$country','$zip','$tel','$fax',
			   '$mno','$email','$web', '$aemail',$capcha)";
	
		if(mysql_query($insertSQL))
				{
				$idssl = "select ids from tsrvs_main where capcha = '$capcha'";
				$idsrs	= mysql_query($idssl);
				$csrvsid = mysql_result($idsrs,0,'ids');
				
				$slindx = "select left(cname,1) as cname from tsrvs_main where ids='$csrvsid'";
				$rdindx = mysql_query($slindx)or die ("some thing wrong");
				$sindx = mysql_result($rdindx,0,'cname');
				
				
				$advtSl = "insert into tsrvs_advts(mids,srvsid,city,rfyear,rgfdate,rgtdate,authtag,sidx, srid, district, state, country, capcha)
				values
				('$csrvsid','$srvs_id','$city','$ryear',now(),'$curdate','Y','$sindx', '$subsrvs_id', '$district', '$state', '$country', '$capcha')";	
				
				$advtRS = mysql_query($advtSl);
				

					$msg = 1;
					header("Location: 0708150147.php?msg=$msg");
					exit;			
				} 
				else
				{
					$msg = 2;
					header("Location: 0708150147.php?msg=$msg");
					exit;
				}

?>
