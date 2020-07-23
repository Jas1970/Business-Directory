<?php
// Adam's Custom PHP MySQL Pagination Tutorial and Script
// You have to put your mysql connection data and alter the SQL queries(both queries)
// This script is in tutorial form and is accompanied by the following video:
// http://www.youtube.com/watch?v=K8xYGnEOXYc
//mysql_connect("DB_Host_Here","DB_Username_Here","DB_Password_Here") or die (mysql_error());
//mysql_select_db("DB_Name_Here") or die (mysql_error());
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();	


if (ISSET($_POST['submit']))
		{
			$pg = $_REQUEST['pg'];
			$country = $_REQUEST['country_dropdown'];
			$state	 = $_REQUEST['state_dropdown'];
			$district = $_REQUEST['district_dropdown'];
			$city	 = $_REQUEST['city_dropdown'];
			$ssrvsid = $_REQUEST['srvssub_dropdown'];
		}
		else
		{
			$srvsid= $_GET['SID'];
			$ssrvsid= $_GET['SSID'];
		}


//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
//$sql = mysql_query("SELECT id, firstname, country FROM myTable ORDER BY id ASC");
$sql = mysql_query("SELECT distinct(srvs_advts.mids) FROM srvs_advts, srvs_main 
			 where srvs_advts.mids=srvs_main.sr_id and
			 srvs_advts.srid = '$ssrvsid' and
			  srvs_advts.srvsid='$srvsid' 
			  order by srvs_advts.sidx");


//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
$mids = mysql_result($sql,0,'mids');
if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
    //$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
} else { // If the pn URL variable is not present force it to be value of page number 1
    $pn = 1;
} 
//This is where we set how many database items to show on each page 
$itemsPerPage = 1; 
// Get the value of the last page in the pagination result set
$lastPage = ceil($nr / $itemsPerPage);
// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
if ($pn < 1) { // If it is less than 1
    $pn = 1; // force if to be 1
} else if ($pn > $lastPage) { // if it is greater than $lastpage
    $pn = $lastPage; // force it to be $lastpage's value
} 
// This creates the numbers to click in between the next and back buttons
// This section is explained well in the video that accompanies this script
$centerPages = "";
$sub1 = $pn - 1;
$sub2 = $pn - 2;
$add1 = $pn + 1;
$add2 = $pn + 2;
if ($pn == 1) {
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?SID='.$srvsid. '&SSID='.$ssrvsid. '&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
} else if ($pn == $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?SID='.$srvsid. '&SSID='.$ssrvsid. '&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
} else if ($pn > 2 && $pn < ($lastPage - 1)) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] .'?SID='.$srvsid. '&SSID='.$ssrvsid.  '&pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?SID='.$srvsid. '&SSID='.$ssrvsid. '&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?SID='.$srvsid. '&SSID='.$ssrvsid. '&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?SID='.$srvsid. '&SSID='.$ssrvsid. '&pn=' . $add2 . '">' . $add2 . '</a> &nbsp;';
} else if ($pn > 1 && $pn < $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?SID='.$srvsid. '&SSID='.$ssrvsid. '&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?SID='.$srvsid. '&SSID='.$ssrvsid. '&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
}
// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage; 
// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
// $sql2 is what we will use to fuel our while loop statement below
$sql2 = mysql_query("SELECT distinct(srvs_advts.mids) FROM srvs_advts, srvs_main 
			 where srvs_advts.mids=srvs_main.sr_id and
			 srvs_advts.srid = '$ssrvsid' and
			  srvs_advts.srvsid='$srvsid' 
			  order by srvs_advts.sidx ASC $limit"); 
//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
$paginationDisplay = ""; // Initialize the pagination output variable
// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
if ($lastPage != "1"){
    // This shows the user what page they are on, and the total number of pages
    $paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp; &nbsp;  &nbsp; ';
    // If we are not on page 1 we can place the Back button
    if ($pn != 1) {
        $previous = $pn - 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] .'?SID='.$srvsid. '&SSID='.$ssrvsid.  '&pn=' . $previous . '"> Back</a> ';
    } 
    // Lay in the clickable numbers display here between the Back and Next links
    $paginationDisplay .= '<span class="paginationNumbers">' . $centerPages . '</span>';
    // If we are not on the very last page we can place the Next button
    if ($pn != $lastPage) {
        $nextPage = $pn + 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] . '?SID='.$srvsid. '&SSID='.$ssrvsid. '&pn=' . $nextPage . '"> Next</a> ';
    } 
}
///////////////////////////////////// END Adam's Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
// Build the Output Section Here
$outputList = '';
while($row = mysql_fetch_array($sql2)){ 
    $id = $row["mids"];
				$srvsData = srvsadd($id);
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
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"org_DRK_tb bgimg\" colspan=5 align=\"left\">
							<a href=0708150141.php?ID=$cid target=_parent><b>$cname - ($ctname)</b></a></td>
							<td align=\"center\" class=\"org_DRK_tb bgimg\"><a href=0708150141.php?ID=$cid target=_parent> Web Site : Yes </a></td>
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
							<td class = \"grncel_DRK\" width=\"46%\">$add1 $add2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"15%\">$mail </td>
							
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










    
} // close while loop
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<link href="css/org_02.css" rel="stylesheet" type="text/css">


<title></title>
<style type="text/css">
<!--
.pagNumActive {
    color: #000;
    border:#060 1px solid; background-color: #D2FFD2; padding-left:1px; padding-right:1px;
}
.paginationNumbers a:link {
    color: #000;
    text-decoration: none;
    border:#999 1px solid; background-color:#F0F0F0; padding-left:1px; padding-right:1px;
}
.paginationNumbers a:visited {
    color: #000;
    text-decoration: none;
    border:#999 1px solid; background-color:#F0F0F0; padding-left:1px; padding-right:1px;
}
.paginationNumbers a:hover {
    color: #000;
    text-decoration: none;
    border:#060 1px solid; background-color: #D2FFD2; padding-left:1px; padding-right:1px;
}
.paginationNumbers a:active {
    color: #000;
    text-decoration: none;
    border:#999 1px solid; background-color:#F0F0F0; padding-left:1px; padding-right:1px;
}
-->
</style>
</head>
    <body>
        <div id="wrapper">
        <?php include 'include/header.php'; 
		print " Srvs id is : $srvsid";
		
		?>
            <!-- end div#header -->
            <div id="page">
                <div id="content">
                    <div id="welcome">
            				<div style="alignment-adjust: central"> <h3>Total Records Display: <?php echo $nr; ?></h3>  </div> 
							<div  padding: 1px; background-color:#FFF; border:#999 1px solid;"><?php echo $paginationDisplay; ?></div>
							<div><?php print "$outputList"; ?></div>
			  				<div align="center" padding:1px; background-color:#FFF; border:#999 1px solid;"><?php echo $paginationDisplay; ?></div>
                      </div>
                    
                    <!-- end div#welcome -->			
                    
                </div>
                <!-- end div#content -->
                <div id="sidebar">
					<?php 
					include '0708150140_1.php'; ?>		
                        <!-- end updates -->
                </div>
                <!-- end div#sidebar -->
                <div style="clear: both; height: 1px"></div>
            </div>
        </div>
        <!-- end div#wrapper -->
    </body>




</body>
</html>
