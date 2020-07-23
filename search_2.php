<?php
	/*
		Place code to connect to your DB here.
	*/
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();	

$srvsid=34;
$ssrvsid=1;

//	$tbl_name="srvs_advts";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT distinct(srvs_advts.mids) as num FROM srvs_advts , srvs_main 
			 where srvs_advts.mids=srvs_main.sr_id and
			 srvs_advts.srid = '$ssrvsid' and
			  srvs_advts.srvsid='$srvsid' 
			  order by srvs_advts.sidx";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	
	/* Setup vars for query. */
	$targetpage = "search_2.php"; 	//your file name  (the name of this file)
	$limit = 2; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT distinct(srvs_advts.mids) FROM srvs_advts, srvs_main 
			  where  srvs_advts.mids=srvs_main.sr_id and
			 srvs_advts.srid = '$ssrvsid' and
			  srvs_advts.srvsid='$srvsid' 
			  order by srvs_advts.sidx";
	
	$result = mysql_query($sql);
	$mids = mysql_result($result,0,'mids');
	
echo " main ids : $mids";

	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">� previous</a>";
		else
			$pagination.= "<span class=\"disabled\">� previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next �</a>";
		else
			$pagination.= "<span class=\"disabled\">next �</span>";
		$pagination.= "</div>\n";		
	}
?>

	<?php
		while($row = mysql_fetch_array($result))
		{
				$srvsData = srvsadd($mids);
                 for($index=0;$index < count($srvsData);$index++)
                    {
                     $srvsmain = $srvsData[$index];
                     $cid    = $srvsmain->getSrvsid();
                     $cname  = $srvsmain->getCname();
                     $cpname = $srvsmain->getCpname();
                     $add1   = $srvsmain->getAdd1();
                     $add2   = $srvsmain->getAdd2();
                     $mail   = $srvsmain->getMail();
                     $web    = $srvsmain->getWeb();
                     $tel    = $srvsmain->getTel();
                     $fax    = $srvsmain->getFax();
                     $pin    = $srvsmain->getPin();
                     $ctname = $srvsmain->getCity();
                     $state  = $srvsmain->getStat();    
                     $cotname = $srvsmain->getCont();
                     $cno     = $srvsmain->getCno();
					$srvsauth = $srvsmain->getSrvs_auth();
               		}
				///==============
				 $slhome = "select * from srvs_home where mdirid = '$id'";	
				 $rdhome = mysql_query($slhome);
				 $moto = mysql_result($rdhome,0,'comp_moto');
				 $srvsname = "select * from srvs_sadvts where mids = '$srvsid' order by sname";
				 $rdsrvs   = mysql_query($srvsname);
				 $rdnum    = $db->numRows($rdsrvs);
				 if($rdnum<>"0")
					{
					while ($posts_info = mysql_fetch_array($rdsrvs))
						{
							$sname = $posts_info['sname'];
							$srname = $srname.''."$sname, ";
						}
					}
					else

					{
					
					}
 						$srvssla = "select * from dir_srvs where srvs_id='$srvsid'";
						$srvsrda = mysql_query($srvssla);
						
						$srvs_name = mysql_result($srvsrda,0,'srvs_name');
						
						$subsrvssla = "select * from dir_subsrvs where sn_id = '$ssrvsid'";
						$subsrvsrda = mysql_query($subsrvssla);
						$subsrvs_name = mysql_result($subsrvsrda,0,'sname');


						$srname = "$srvs_name : " . "($subsrvs_name)";

				
					$desc = substr($srname,0,139);
				
		
		///==========

				$outputList .=	"<fieldset>
					<table border = 0 width=75% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"org_DRK_tb bgimg\" colspan=5 align=\"left\">
							<a href=0708150141.php?ID=$cid target=_parent><b>$cname - ($ctname)</b></a></td>
							<td align=\"center\" class=\"org_DRK_tb bgimg\"><a href=0708150141.php?ID=$guest_rec[$count] target=_parent> Web Site : Yes </a></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($moto)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"7%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"33%\">$add1 $add2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"7%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"30%\">$mail </td>
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $ctname, $state - $pin ($cotname)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $web</td>
							
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$tel,  Fax : $fax </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$cno </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;  </b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
						</tr>
						
						
						
						</table>
					</fieldset>";
	
		// Your while loop here
	
		}
	?>

<?=$pagination?>
	
