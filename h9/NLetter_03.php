<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
if ($_POST['op'] != "del") 
			{
			$catid = $_REQUEST['category_dropdown'];
			$prodid = "select dir_main.dir_id, dir_main.dir_cname, dir_nletter.ids, dir_nletter.dir_id, catg.catid, catg.catname, dir_nletter.cat_id ,
						dir_add.dir_id, dir_add.dir_mail
			from dir_nletter, dir_main, catg, dir_add where 
			catg.catid='$catid' and
			dir_add.dir_id = dir_nletter.dir_id and
			catg.catid=dir_nletter.cat_id and
			dir_nletter.dir_id=dir_main.dir_id";
			$prodrcd1 = mysql_query($prodid,$abc)or die(mysql_error());
			$rcdcount = mysql_num_rows($prodrcd1);
			$prodnum = abs(1);
		    
		$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
		$display_block .= "<table width=\"700px\">";
		
			while ($postsinfo = mysql_fetch_array($prodrcd1))
						{
						$cname = $postsinfo['dir_cname'];
						$cat_name = $postsinfo['catname'];
						$dir_mail	= $postsinfo['dir_mail'];
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
	$result=mysql_query("SELECT ids FROM dir_nletter ORDER BY ids") or die("Query failed");
	
	$query = "select * from dir_nletter where ids=";
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
	   
	   $slrcd = "select * from dir_nletter where ids='$Ids'";
$rdrcd = mysql_query($slrcd, $abc);
$numrcd = mysql_num_rows($rdrcd);
if($numrcd==0)
	{
	$display_block .=  "Record Not Found Against this Category : $Ids";
	exit;
	}


			$nlsl 	= "select dir_id,cat_id from dir_nletter where 
						dir_nletter.ids='$Ids'";
			$nlrd 	= mysql_query($nlsl,$abc)or die(mysql_error());
			$rcdcount = mysql_num_rows($nlrd);
		    
			
			while ($postsinfo = mysql_fetch_array($nlrd))
						{
						
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
 $msg = $msg.''."\t <font color=\"#006600\" size=\"3\">Hi</font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$cpname </font>\n<br>";
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$cname </font>\n<br>";
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">$citname - $dirpin ($stname) </font><br>"; 
 $msg = $msg.''."\t<br>"; 
 $msg = $msg.''."\t<font color=\"#006600\" size=\"3\">  Sir, </font><br>"; 
 $msg = $msg.''."\t <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> Please find enclosed herewith complementory addition to Business directory under site on www.haanzee.com . </font><br>"; 
 $msg = $msg.''."\t<font size=\"3\"> the site www.haanzee.com build under the no profit & no loss then the charge the minimum cost for developing </font> <br>"; 
 $msg = $msg.''."\t<font size=\"3\"> web site. If you can avail the full facility of contorl panel. You can access/benifit  to as Under : </font> <br>"; 
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



			$display_block =  "Newletter sent To $cname";

//		   $msg  = "Your Login ID And Password Has been Sent On Your Mail Address.  ............ Thanks";
//		   header("Location: 0708150263.php?ID=$rstid&MSG=$msg");
//		   exit;
   		}
		else
		{			
		$display_block .=  "Mail Dead, something got wrong";
//		header("Location: 0708150209.php?ID=$rstid&msgs=$msgs");
		}
		
	}
}
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php print $display_block; ?> 
</body>
</html>
