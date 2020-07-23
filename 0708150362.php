<?php
include 'include/masterdatasrvs.php'; 
//include 'include/srsess.php';

$srvsid	 = $_GET['ID'];	
$semail	 = $_REQUEST['mail'];
$sname	 = $_REQUEST['name'];
$smsg	 = $_REQUEST['msg'];
$mcopy	 = $_REQUEST['mcopy'];

if (($semail =="") || ($srvsid == "")) 
  	{
		print "<center> Something Worng <br>";
	    exit;
	}
	$subject  = "Feedback From Customers on site From : $sname ";
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
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> $smsg </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Best Regards </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<b><font color=\"#006600\" size=\"3\"> $sname</font></b></font>"; 			
 $msg = $msg.''."\t<b><font color=\"#006600\" size=\"3\"> </font></b></font>"; 			
 $msg = $msg.''."\t<br>";  
 $crlf = chr(10) . chr(13);
	  //create a From: mailheader
$username = $sname;
$Fromname = $sname; 
$Fromaddress = $semail; 
$headers = "from:$Fromname<$fromaddress>\n";
$headers .= "return-path: $Fromname<$Fromaddress>\r\n"; 
$headers .= "Content-Type:text/html; charset=iso-8859-1\n";
$headers .= "MIME-Version:1.0 \n";
$headers .= "reply-to: $Fromname<$fromaddress>\n";
$email = $mail;
set_time_limit(0);
if( mail($email, stripslashes($subject), stripslashes($msg), $headers))
	 	{
		   $msgs =  "Feedback Sucessfuly Sent : $Fromaddress";
   			header("Location: 0708150305.php?ID=$srvsid&msgs=$msgs");			
		}
			else
		{	
			$msgs = 'Mail Dead';
			header("Location: 0708150305.php?ID=$srvsid&msgs=$msgs");		
		}
?>