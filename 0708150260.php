<?php 
include 'include/masterdata.php'; 
//include 'include/sess.php';

$rstid	 = $_REQUEST['rstid'];
$fmail	 = $_REQUEST['fmail'];
if (($fmail =="") || ($rstid == "")) 
  	{
		print "<center> Something Worng <br>";
	    exit;
	}
  	
	// Login id & password
	
	$sql = "select * from dir_admin where dlogin_cno='$rstid'";
	$result = mysql_query($sql) or die(mysql_error());
  	$loginid = mysql_result($result,0,'dlogin_id');
	$loginpwd = mysql_result($result,0,'dlogin_pwd');	
 	$loginpwdde	= base64_decode($loginpwd);
	$subject  = "Login ID and Password";
	
	// Address Details
	
	$select_rcd = "select *  from dir_main where dir_id='$rstid'";
	$result_rcd = mysql_query($select_rcd);
	$count_rcd = mysql_num_rows($result_rcd);
	$cname = mysql_result($result_rcd,0,'dir_cname');
	$cpname = mysql_result($result_rcd,0,'dir_cpname');
	
	$slmid = "select * from  dir_add where dir_id='$rstid'";
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
	
	
	
 $logo = "<img src='http://haanzee.com/img_bst/b2b.gif'>"; 
 $rpath = "admin@haanzee.com"; 
 $msg = "<font face='OCR A Extended' size='3'>\n<br>"; 
 $msg = $msg.''."<link href=\"www.haanzee.com/css/org_02.css\" rel=\"stylesheet\" type=\"text/css\">"; 
 $msg = $msg.''."<table width=\"200\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"ttable\">"; 
 $msg = $msg.''."<tr><td class=\"org_border_box\">$logo </td></tr> </table>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t <font color=\"#006600\" size=\"3\">Hi</font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$cpname </font>\n<br>";
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$cname </font>\n<br>";
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$citname - $dirpin ($stname) </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">  Sir, </font><br>"; 
 $msg = $msg.''."\t <br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Please find enclosed herewith your admin login ID and Admin Password for site on www.haanzee.com </font><br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> for security reason please update your admin password and write down.</font> <br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> The Login ID : </font><b><font color=\"#FF0000\" size=\"4\"> $loginid</font> </b>\n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> The Password : </font><b><font color=\"#FF0000\" size=\"4\"> $loginpwdde</font> </b> \n<br>"; 
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
set_time_limit(0);
if( mail($email, stripslashes($subject), stripslashes($msg), $headers))
	 	{
		   $msg  = "Your Login ID And Password Has been Sent On Your Mail Address.  ............ Thanks";
		   header("Location: 0708150263.php?ID=$rstid&MSG=$msg");
		   exit;
   		}
		else
		{			
		$msgs = 'Mail Dead';
		header("Location: 0708150209.php?ID=$rstid&msgs=$msgs");
		}
?>