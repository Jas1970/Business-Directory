<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
if ($_POST['op'] != "del") 
			{
			$srvs_id = $_REQUEST['service_dropdown'];
			$prodid = "select srvs_main.sr_id, srvs_main.cname, srvs_main.mail, srvs_nletter.ids, srvs_nletter.sr_id, dir_srvs.srvs_id, dir_srvs.srvs_name, srvs_nletter.srvs_id 
					   from srvs_nletter, srvs_main, dir_srvs where 
			dir_srvs.srvs_id='$srvs_id' and
			dir_srvs.srvs_id=srvs_nletter.srvs_id and
			srvs_nletter.sr_id=srvs_main.sr_id";
			$prodrcd1 = mysql_query($prodid,$abc)or die(mysql_error());
			$rcdcount = mysql_num_rows($prodrcd1);
			$prodnum = abs(1);
		    
		$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
		$display_block .= "<table width=\"700px\">";
		
			while ($postsinfo = mysql_fetch_array($prodrcd1))
						{
						$cname = $postsinfo['cname'];
						$cat_name = $postsinfo['srvs_name'];
						$dir_mail	= $postsinfo['mail'];
						$ids		= $postsinfo['ids'];
							$display_block .= "
												<tr>
									    		   	<td width=\"5%\" class=\"org_border_l_cell\" ><font color=\"#OOOO0O\"><strong>$prodnum.</font> </td>
    		   										<td width=\"30%\" class=\"org_border_l_cell\" ><font color=\"#990033\">$cname</strong></font> </td>
    		   										<td width=\"30%\" class=\"org_border_l_cell\" > <font color=\"#990033\"></strong></font> </td>
													<td width=\"30%\" class=\"org_border_r_cell\"><input type=\"checkbox\" value=\"false\" name=\"cbox-$ids\" ><font face=\"arial\" 		
													size=\"1.5\" color=\"navy\">ID : $ids</font></td>
											</tr>";
								 	  $prodnum++;

							}

$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<tr>
							<td class=\"org_border_box\" colspan=\"4\"><center><input type=submit name= \"Sent Newsletter\" value=\"Sent Newsletter\">
					</center></td>
					  </tr>";
	
$display_block .= "</table>";   
$display_block .= "</FORM>";
	}
	else if ($_POST['op'] == "del") 
	{
//	
	$result=mysql_query("SELECT ids FROM srvs_nletter ORDER BY ids") or die("Query failed");
	
	$query = "select * from srvs_nletter where ids=";
		$flag=TRUE;
		while($lines = mysql_fetch_array($result, MYSQL_ASSOC))
		{   
			foreach($lines as $gid[0])
			{
				if($_REQUEST["cbox-$gid[0]"]=="false")
					if($flag==TRUE)
					{
						$query=$query.$gid[0];
						$flag=FALSE;
						
					}
					else
					{
						$query=$query." OR ids=".$gid[0];
					}
			}
		}
       $result = mysql_query($query, $abc);
	   $rcdcount = mysql_num_rows($result);
	   if($rcdcount==0)
			{
			$display_block .= "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
			<tr><td class=\"org_border_t_cell\" align=\"center\">Please Select any One Record for Newsletter</td</tr>
			<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"Cat_sl5.php\"> Click Here </a></td></tr>
			</table>";
			exit;
			}	
	   
	   $Ids = mysql_result($result,0,'ids');
	   
	  $slrcd = "select * from srvs_nletter where Ids='$Ids'";
$rdrcd = mysql_query($slrcd, $abc);
$numrcd = mysql_num_rows($rdrcd);
if($numrcd==0)
	{
	$display_block .= "Record Not Found Against this Category : $Ids";
	exit;
	}


			$nlsl 	= "select sr_id from srvs_nletter where ids='$Ids'";
			$nlrd 	= mysql_query($nlsl,$abc)or die(mysql_error());
			$rcdcount = mysql_num_rows($nlrd);
		    
			
	while ($postsinfo = mysql_fetch_array($nlrd))
		{
						
			$srvs_sr_id = $postsinfo['sr_id'];
			
			$subject  = "Promote Your Business Worldwide To Simple";

	// advertisement details
	
		$sladvts = "select srvs_advts.mids, srvs_advts.srvsid, srvs_advts.srid, srvs_advts.rfyear, srvs_advts.city, 
					dir_srvs.srvs_id, dir_srvs.srvs_name, 
					dir_subsrvs.sn_id, dir_subsrvs.sname,
					city.citid, city.citname 
					from srvs_advts, dir_srvs, dir_subsrvs, city where
					srvs_advts.mids = '$srvs_sr_id' and
					srvs_advts.srvsid = dir_srvs.srvs_id and
					srvs_advts.srid=dir_subsrvs.sn_id and
					city = city.citid ";

		$rdadvts = mysql_query($sladvts,$abc);
		$count = mysql_num_rows($rdadvts);
		$srvs_date = mysql_result($rdadvts,0,'rfyear');
		$srvs_mid  = mysql_result($rdadvts,0,'mids');
		$srvs_id = mysql_result($rdadvts,0,'srvs_id');
		$srvs_name = mysql_result($rdadvts,0,'srvs_name');
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
 $msg = "<font face='Times New Roman' size='3'>\n<br>"; 
 $msg = $msg.''."<link href=\"www.haanzee.com/css/org_02.css\" rel=\"stylesheet\" type=\"text/css\">"; 
 $msg = $msg.''."<table width=\"200\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"ttable\">"; 
 $msg = $msg.''."<tr><td class=\"org_border_box\">$logo </td></tr> </table>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\">Hi</font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\">$cpname </font>\n<br>";
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\">$cname </font>\n<br>";
 $msg = $msg.''."\t<font size=\"3\">$citname - $pin ($stname) </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\">  Sir, </font><br>"; 
 $msg = $msg.''."\t <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> Please find enclosed herewith complementoy addition to Serviee directory under site on www.haanzee.com . </font><br>"; 
 $msg = $msg.''."\t<font size=\"3\"> the site www.haanzee.com build under the no profit & no loss then the charge the minimum cost for developing </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> web site. If you can avail the full facility of contorl panel. You can access/benifit  to as Under : </font> <br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 01. Complete Web Site </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 02. Service Listing </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 03. Branch Address List </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 04. Online Address Book </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 05. Dual Website Address </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 06. Five Years One time Registration</font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 07. Service Directory Listing </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 08. Business Directory Available </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 09. Real Estate / Property Directory Available </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> 10. Placement Directory Available </font> <br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> Under Service providor Directory you can register any number of service as you required for </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> for your Business requirements on service & City basis </font> <br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> To avail above mention facility Registration Fee As under :</font> </b> \n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> One Service & One City <a href=\"wwww.haanzee.com/0708150119.php\"> Registration </a> : 500.00/Per Year</font> </b> \n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> Registration Details</font> </b> \n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> The Service Category is      : </font><b><font color=\"#FF0000\" size=\"4\">$srvs_name </font> </b>\n<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> The Sub-Service Category Is  : </font><b><font color=\"#FF0000\" size=\"4\">$sub_srvs_name</font> </b> \n<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> Under the City               : </font><b><font color=\"#FF0000\" size=\"4\">$srvs_city </font> </b> \n<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> Registration for Years       : </font><b><font color=\"#FF0000\" size=\"4\">$srvs_date /Years </font> </b> \n<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font size=\"3\"> Best Regards </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<b><font size=\"3\">Management(Shine Tech.)</font></b></font>"; 			
 $msg = $msg.''."\t<b><font size=\"3\">(Service Directory)</font></b></font>"; 			
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
		
			$rdins = mysql_query($nlins,$abc)or die(mysql_error());
			
			$msgs = "News Letter Sent : $cname";
		}
		else
		{	
			$msgs = "Something Wrong";
		}
		
}
$display_block =  "$msgs";

}
?>

<html>
<head>
<title>Newsletter</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php print $display_block;?> 
</body>
</html>
