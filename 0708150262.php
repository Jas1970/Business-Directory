<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();

$rstid = $_REQUEST['rstid'];

$semail	 = $_REQUEST['mail'];
$sname	 = $_REQUEST['name'];
$smsg	 = $_REQUEST['msg'];
$mcopy	 = $_REQUEST['mcopy'];

if (($semail =="") || ($rstid == "")) 
  	{
		print "<center> Something Worng semail : $semail  rstid :$rstid <br>";
	    exit;
	}
  	$subject  = "Feedback From Customers on site From : $sname ";
	$select_rcd = "select *  from dir_main where dir_id='$rstid'";
	$result_rcd = mysql_query($select_rcd);
	$count_rcd = mysql_num_rows($result_rcd);
	$cname = mysql_result($result_rcd,0,'dir_cname');
	$cpname = mysql_result($result_rcd,0,'dir_cpname');
	$slmid = "select * from  dir_add where dir_id='$rstid'";
	$username = $sname;
	$Fromname = $sname; 
 	$Fromaddress = $semail; 
	$rdmid = mysql_query($slmid);
	$diradd1 = mysql_result($rdmid,0,'dir_add1');
	$diradd2 = mysql_result($rdmid,0,'dir_add2');
	$dircity = mysql_result($rdmid,0,'dir_city');
	$dirstat = mysql_result($rdmid,0,'dir_stat');
	$dircount = mysql_result($rdmid,0,'dir_cont');
	$dirtel = mysql_result($rdmid,0,'dir_tel');
	$dirfax = mysql_result($rdmid,0,'dir_fax');
	$dirmob = mysql_result($rdmid,0,'dir_mob');
	$dirmail = mysql_result($rdmid,0,'dir_mail');
	$mailid = mysql_result($rdmid,0,'dir_mail');
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
//$rpath = "admin@haanzee.com"; 
 $msg = "<font face='OCR A Extended' size='3'>\n<br>"; 
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
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> $smsg<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Best Regards </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<b><font color=\"#006600\" size=\"3\">$sname</font></b></font>"; 			
 $msg = $msg.''."\t<b><font color=\"#006600\" size=\"3\"></font></b></font>"; 			
 $msg = $msg.''."\t<br>"; 
$crlf = chr(10) . chr(13);
$headers = "from:$sname<$semail>\n";
$headers .= "return-path:$sname<$semail>\r\n"; 
$headers .= "Content-Type:text/html; charset=iso-8859-1\n";
$headers .= "MIME-Version:1.0 \n";
$headers .= "reply-to: $sname<$semail>\n";
$email = $mailid;
set_time_limit(0);
if( mail($email, stripslashes($subject), stripslashes($msg), $headers))
	 	{
		   $msg  = "Your Feed Back Has Been Sucessfuly Submit To Related Company.  Thanks For Visit on Site $email";
		   header("Location: 0708150263.php?ID=$rstid&MSG=$msg");
		   exit;
   		}
		else
		{			
		$msgs = "Mail Dead"; 
		header("Location: 0708150205.php?ID=$rstid&msgs=$msgs");
		}
?>