<?php
include 'include/masterdatasrvs.php'; 
//include 'include/srsess.php';

$mail	 = $_REQUEST['mail'];
if (($mail =="") || ($srvsid == "")) 
  	{
		print "<center> Something Worng <br>";
	    exit;
	}
	
	// Login id & Password
	
	
  	$sql = "select * from srvs_admin where dlogin_cno='$srvsid'";
	$result = mysql_query($sql) or die(mysql_error());
  	$loginid = mysql_result($result,0,'dlogin_id');
	$loginpwd = mysql_result($result,0,'dlogin_pwd');	
 	$loginpwdde	= base64_decode($loginpwd);
	$subject  = "Login ID and Password";
		// Addresss Details
	
			$select_rcd = "select *  from srvs_main where sr_id='$srvsid'";
			$result_rcd = mysql_query($select_rcd);
			$count_rcd = mysql_num_rows($result_rcd);

			$cname 		= mysql_result($result_rcd,0,'cname');
			$cpname 	= mysql_result($result_rcd,0,'cpname');
			$add1 		= mysql_result($result_rcd,0,'add1');
			$add2 		= mysql_result($result_rcd,0,'add2');
			$city 		= mysql_result($result_rcd,0,'city');
			$dist		= mysql_result($result_rcd,0,'dist');
			$stat 		= mysql_result($result_rcd,0,'stat');
			$count 		= mysql_result($result_rcd,0,'cout');
			$tel 		= mysql_result($result_rcd,0,'tel');
			$fax 		= mysql_result($result_rcd,0,'fax');
			$mob 		= mysql_result($result_rcd,0,'mob');
			$mail 		= mysql_result($result_rcd,0,'mail');
			$web 		= mysql_result($result_rcd,0,'web');
			$pin 		= mysql_result($result_rcd,0,'pin');
			$cno		= mysql_result($result_rcd,0,'cno');
			$amail		= mysql_result($result_rcd,0,'amail');

			$citysl = "select * from city where citid='$city'";
			$cityrd = mysql_query($citysl);
			$citname = mysql_result($cityrd,0,'citname');
			
			$distsl = "select * from district where dstid='$dist'";
			$distrd = mysql_query($distsl);
			$distname = mysql_result($distrd,0,'dstname');
			
			
			$statsl = "select * from state where stid='$stat'";
			$statrd = mysql_query($statsl);
			$stname = mysql_result($statrd,0,'stname');
			
			$ctsl = "select * from country where cntid='$count'";
			$ctrd = mysql_query($ctsl);
			$ctname = mysql_result($ctrd,0,'cntname');
	// Create a Message
	
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
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$citname - $pin ($stname) </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">  Sir, </font><br>"; 
 $msg = $msg.''."\t <br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Please find enclosed herewith your admin login ID and Admin Password for site on www.haanzee.com </font><br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> www.haanzee.com for security reason please update your admin password and write down.</font> <br>"; 
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
 $crlf = chr(10) . chr(13);
	  //create a From: mailheader
	$username = "Jaswinder Singh";
	$Fromname = "Shine Tech."; 
 	$Fromaddress = "admin@haanzee.com"; 
$headers = "from:$Fromname<admin@haanzee.com>\n";
$headers .= "return-path:$Fromaddress<$Fromaddress>\r\n"; 
$headers .= "Content-Type:text/html; charset=iso-8859-1\n";
$headers .= "MIME-Version:1.0 \n";
$headers .= "reply-to: $Fromname<admin@haanzee.com>\n";
$email = $amail;
set_time_limit(0);
if(mail($email, $subject, $msg, $headers))
	 	{
   		$msgs = "Password Sent to your Mail ID: $email";
		header("Location: 0708150309.php?ID=$srvsid&msgs=$msgs");		
		exit;
		}
		else
		{	
		$msgs = 'Mail Dead';
		header("Location: 0708150309.php?ID=$srvsid&msgs=$msgs");		
		}
?>