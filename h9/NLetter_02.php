<?php require_once('Connections/abc.php'); 
mysql_select_db($database_abc,$abc) or die("unable to Open database");

$srvsid =  $_REQUEST['service_dropdown'];

$slrcd = "select * from srvs_nletter where srvs_id='$srvsid'";
$rdrcd = mysql_query($slrcd, $abc);
$numrcd = mysql_num_rows($rdrcd);
if($numrcd==0)
	{
	echo "Record Not Found Against this Category : $srvsid";
	exit;
	}


			$nlsl 	= "select ids, sr_id from srvs_nletter where 
						srvs_nletter.srvs_id='$srvsid'";
			$nlrd 	= mysql_query($nlsl,$abc)or die(mysql_error());
			$rcdcount = mysql_num_rows($nlrd);
		    
			
	while ($postsinfo = mysql_fetch_array($nlrd))
		{
			$Ids	= $postsinfo['ids'];
			$srvs_mid = $postsinfo['sr_id'];
			
			$subject  = "Promote Your Business Globley To Simple";

	// advertisement details
	
		$sladvts = "select srvs_advts.mids, srvs_advts.srvsid, srvs_advts.srid, srvs_advts.rfyear, srvs_advts.city, 
					dir_srvs.srvs_id, dir_srvs.srvs_name, 
					dir_subsrvs.sn_id, dir_subsrvs.sname,
					city.citid, city.citname 
					from srvs_advts, dir_srvs, dir_subsrvs, city where
					srvs_advts.mids = '$srvs_mid' and
					srvs_advts.srvsid = dir_srvs.srvs_id and
					srvs_advts.srid=dir_subsrvs.sn_id and
					city = city.citid ";

		$rdadvts = mysql_query($sladvts,$abc);
		$count = mysql_num_rows($rdadvts);
		$srvs_date = mysql_result($rdadvts,0,'rfyear');
		$srvs_name = mysql_result($rdadvts,0,'srvs_name');
		$srvs_id 	= mysql_result($rdadvts,0,'srvs_id');
		$sub_srvs_name = mysql_result($rdadvts,0,'sname');
		$srvs_city = mysql_result($rdadvts,0,'citname');

	
	// Address Details

			$select_rcd = "select *  from srvs_main where sr_id='$srvs_mid'";
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
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Please find enclosed herewith your complementoy addition to Serviee directory under site on www.haanzee.com . </font><br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> the site www.haanzee.com build under the no profit & no loss then the charge the minimum cost for developing </font> <br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> web site. If you can avail the full facility of contorl panel. </font> <br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Under Service provide Directory you can register under any number of service as you required for </font> <br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> for your Business requirements. </font> <br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Registration Details</font> </b> \n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> The Service Category is :</font><b><font color=\"#FF0000\" size=\"4\">$srvs_name </font> </b>\n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> The Sub-Service Category Is  : </font><b><font color=\"#FF0000\" size=\"4\"> $sub_srvs_name</font> </b> \n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Under the City : </font><b><font color=\"#FF0000\" size=\"4\">$srvs_city </font> </b> \n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\"> Registration for Years : </font><b><font color=\"#FF0000\" size=\"4\">$srvs_date </font> </b> \n<br>"; 
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

	 if( mail($email, stripslashes($subject), stripslashes($msg), $headers))
	 	{
		
			$nlins = "insert into nletter_srvs_history(nl_ids, nl_cl_id, nl_srvs_id, nl_date) values
						('$Ids','$srvs_mid','$srvs_id', now())" ;
		
			$rdins = mysql_query($nlins,$abc)or die("something rowng");
			//$counts = mysql_num_rows($rdins);
		
		
			$msgs = "News Letter Sent $count  : $srvs_name";
		}
		else
		{	
			$msgs = "Something Wrong";
		}
		
}
echo "$msgs";

?>