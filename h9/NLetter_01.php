<?php require_once('Connections/abc.php'); 
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$catid =  $_REQUEST['category_dropdown'];

$slrcd = "select * from dir_nletter where cat_id='$catid'";
$rdrcd = mysql_query($slrcd, $abc);
$numrcd = mysql_num_rows($rdrcd);
if($numrcd==0)
	{
	echo "Record Not Found Against this Category : $catid";
	exit;
	}


			$nlsl 	= "select ids, dir_id, cat_id from dir_nletter where 
						dir_nletter.cat_id='$catid'";
			$nlrd 	= mysql_query($nlsl,$abc)or die(mysql_error());
			$rcdcount = mysql_num_rows($nlrd);
		    
			
			while ($postsinfo = mysql_fetch_array($nlrd))
						{
						$Ids   = $postsinfo['ids'];
						$dirid = $postsinfo['dir_id'];
						$catid = $postsinfo['cat_id'];
	
		// Address Details
	
			$select_rcd = "select *  from dir_main where dir_id='$dirid'";
			$result_rcd = mysql_query($select_rcd);
			$count_rcd = mysql_num_rows($result_rcd);
			$cname = mysql_result($result_rcd,0,'dir_cname');
			$cpname = mysql_result($result_rcd,0,'dir_cpname');
	
				$slmid = "select * from  dir_add where dir_id='$dirid'";
				$rdmid = mysql_query($slmid);
				$mailid = mysql_result($rdmid,0,'dir_mail');
				$diradd1 = mysql_result($rdmid,0,'dir_add1');
				$diradd2 = mysql_result($rdmid,0,'dir_add2');
				$dircity = mysql_result($rdmid,0,'dir_city');
				$dirstat = mysql_result($rdmid,0,'dir_stat');
				$dircount = mysql_result($rdmid,0,'dir_cont');
				$dirtel = mysql_result($rdmid,0,'dir_tel');
				$dirfax = mysql_result($rdmid,0,'dir_fax');
				$dirmob = mysql_result($rdmid,0,'dir_mob');
				$dirmail = mysql_result($rdmid,0,'dir_mail');
				$dirweb = mysql_result($rdmid,0,'dir_web');
				$dirpin = mysql_result($rdmid,0,'dir_pin');
				$citysl = "select * from city where citid='$dircity'";
				$cityrd = mysql_query($citysl);
				$citname = mysql_result($cityrd,0,'citname');
				$statsl = "select * from state where stid='$dirstat'";
				$statrd = mysql_query($statsl);
				$stname = mysql_result($statrd,0,'stname');
				$ctsl = "select * from country where cntid='$dircount'";
				$ctrd = mysql_query($ctsl);
				$ctname = mysql_result($ctrd,0,'cntname');

 	$loginpwdde	= "";
	$subject  = "Promote Your Business Globley To Simple";

	
	
 $logo = "<img src='http://haanzee.com/img_bst/b2b.gif'>"; 
 $rpath = "admin@haanzee.com"; 
 $msg = "<font face='OCR A Extended' size='3'>\n<br>"; 
 $msg = $msg.''."<link href=\"www.haanzee.com/css/org_02.css\" rel=\"stylesheet\" type=\"text/css\">"; 
 $msg = $msg.''."<table width=\"200\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"ttable\">"; 
 $msg = $msg.''."<tr><td class=\"org_border_box\">$logo </td></tr> </table>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">Hi</font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$cpname </font>\n<br>";
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$cname </font>\n<br>";
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$citname - $dirpin ($stname) </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">  Sir, </font><br>"; 
 $msg = $msg.''."\t <br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Please find enclosed herewith your admin login ID and Admin Password for site on www.haanzee.com </font><br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> www.haanzee.com for security reason please update your admin password and write down.</font> <br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> The Login ID : </font><b><font color=\"#FF0000\" size=\"4\"> </font> </b>\n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> The Password : </font><b><font color=\"#FF0000\" size=\"4\"> </font> </b> \n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Best Regards </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<b><font color=\"#006600\" size=\"3\"> Management(Shine Tech.) </font></b></font>"; 			
 $msg = $msg.''."\t<br>"; 
 
 // Mail Header
 
	$username = "Jaswinder Singh";
	$Fromname = "Shine Tech."; 
 	$Fromaddress = "admin@haanzee.com"; 

 
$crlf = chr(10) . chr(13);
$headers = "from:$Fromname<admin@haanzee.com>\n";
$headers .= "return-path:$Fromaddress<$Fromaddress>\r\n"; 
$headers .= "Content-Type:text/html; charset=iso-8859-1\n";
$headers .= "MIME-Version:1.0 \n";
$headers .= "reply-to: $Fromname<admin@haanzee.com>\n";
$email = $mailid;
if(mail($email, $subject, $msg, $headers))
	 	{

			
			$nlins = "insert into nletter_dir_history(nl_ids, nl_cl_id, nl_cat_id, nl_date) values
						('$Ids','$dirid','$catid', now())" ;
		
			$rdins = mysql_query($nlins,$abc)or die(mysql_error());

			
			$msg = "News Letter Sent";

//		   $msg  = "Your Login ID And Password Has been Sent On Your Mail Address.  ............ Thanks";
//		   header("Location: 0708150263.php?ID=$rstid&MSG=$msg");
//		   exit;
   		}
		else
		{			
		$msg = "Mail Dead, something got wrong";
//		header("Location: 0708150209.php?ID=$rstid&msgs=$msgs");
		}
		
	}
	echo "$msg";
	
?>