<?php
include("Connections/db.inc.php");
$db  = new DB();
$db->open();
$srvsid = $_GET['SID'];
$css="grn_01.css";
$sql = "select srvs_name from dir_srvs where srvs_id = '$srvsid'";
$db->query($sql);
$crnum = $db->numRows();
if($crnum>=1)
	{
	$srvsname = $db->getSingleResult($sql);
	}
	else
	{
		$srvsname = null;
	}
	

?>
<html>
<head>
<title>Category List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/search.css" rel="stylesheet" type="text/css">

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body topmargin="0">

<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td height="108" valign="top"><table width="100%" background="images/img_bst/bg_green_122.gif"   cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="261" rowspan="4" valign="top"><img src="images/img_bst/b2b.gif" width="263" height="57"></td>
          <td width="237" height="20"></td>
          <td width="290"></td>
          <td width="200"></td>
          <td width="1"></td>
          <td width="35">&nbsp;</td>
          <td width="4">&nbsp;</td>
        </tr>
        <tr>
          <td height="4"></td>
          <td></td>
          <td></td>
          <td></td>
          <td colspan="2" rowspan="4" valign="top"><div align="right"><img src="images/img_bst/ani28t.gif" width="40" height="40"></div></td>
        </tr>
        <tr>
          <td height="32"></td>
          <td></td>
          <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr> 
                <td width="199" height="32" valign="top"><div align="right"> 
                    <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0','width','199','height','30','src','images/img_bst/Registration','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','images/img_bst/Registration' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="199" height="30">
                      <param name="movie" value="images/img_bst/Registration.swf">
                      <param name="quality" value="high">
                      <embed src="images/img_bst/Registration.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="199" height="30"></embed></object></noscript>
                </div></td>
              </tr>
          </table></td>
          <td></td>
        </tr>
        <tr>
          <td height="1"></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
        <tr> 
          <td height="3"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td height="31"></td>
          <td></td>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td height="15"></td>
          <td></td>
          <td colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <!--DWLayoutTable-->
              <tr>
                <td width="533" height="15" valign="top"><div align="right"><a href="index.php" target="_parent"><font size="2">Home</font></a><font size="2"> 
                    ||<a href="0708150114.php" target="_parent"> Business Directory</a> 
                    || <a href="0708150144.php" target="_parent">Service Provider</a> 
                    || <a href="0708150137.php">Property Directory</a> || <a href="0708150131.php">Placement 
                Directory</a></font></div></td>
              </tr>
          </table></td>
          <td></td>
        </tr>
        
        
        
    </table></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td height="22" colspan="2" valign="top"><table width="100%"  background="images/img_bst/td_grn_20.gif"  cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td  height="20" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td height="38" colspan="2" valign="top"> 
      <!--DWLayoutTable-->
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <?php
	   print "
	   	<tr> 
			 <td colspan=\"9\" width=\"1010\" height=\"30\" valign=\"top\" class=\"grncel_lrt title2\">$srvsname</td>
        </tr>";
		$slcatprd = "select sn_id, sname from dir_subsrvs where srvs_id = '$srvsid' order by sname";
		$rdcatprd = mysql_query($slcatprd);
		$rcdcount = abs(mysql_num_rows($rdcatprd));
		$rownum1 = abs(1);

		$ercount = abs($rcdcount);
		

		$catln1=0;
		while ($posts_info = mysql_fetch_array($rdcatprd))
		 {
	        $SSID = $posts_info['sn_id'];
			$prodname = $posts_info['sname'];
			$sql  = "select * from srvs_advts where srvsid = '$srvsid' and srid = '$SSID'";
			$sqlrd = mysql_query($sql);
			$rcount  = mysql_num_rows($sqlrd);
			
			if($catln1==0) {
				print "
					<tr>
						<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;$rownum1.</td>
						<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\"><a href=\"0708150157.php?SID=$srvsid&SSID=$SSID&pg=1\">$prodname </a></td>
						<td  width = \"5%\" class=\"grncel_rb ttle\">[$rcount]</td>
						" ;
						
						if($ercount==$rownum1)
							{
						print "
							<td  width = \"3%\" height=\"20\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
							<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
							<td  width = \"5%\" class=\"grncel_nlrb ttle\">&nbsp;</td>
							<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;</td>
							<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
							<td  width = \"5%\" class=\"grncel_rb ttle\">&nbsp;</td>
							" ;	
							}
	  				$rownum1++;
					$catln1++;	
						}			
						elseif($catln1==1) 
						{
				print "
					<td  width = \"3%\" height=\"20\"  class=\"grncel_nlrb ttle\">&nbsp;$rownum1.</td>
					<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\"><a href=\"0708150157.php?SID=$srvsid&SSID=$SSID&pg=1\">$prodname </a></td>
					<td width = \"5%\"  class=\"grncel_nlrb ttle\" >[$rcount]</td>	
					" ;
					
					
						if($ercount==$rownum1)
							{
						print "
							<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;</td>
							<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
							<td  width = \"5%\" class=\"grncel_rb ttle\">&nbsp;</td>
							</tr>" ;	
							}
					$rownum1++;
					$catln1++;

						}
						else  
						{
				print "
					<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;$rownum1.</td>
					<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp; <a href=\"0708150157.php?SID=$srvsid&SSID=$SSID&pg=1\">$prodname </a></td>
					<td  width = \"5%\" class=\"grncel_rb ttle\">[$rcount]</td>
					</tr>" ;
	  		    	$rownum1++;
					$catln1=0;
					}							
			}	

			
			print "
				<tr>
					<td colspan=\"9\" width=\"100%\" class=\"grncel_lrbd\">&nbsp;</td>
				</tr>" ;
mysql_free_result($rdcatprd);



    ?>		
			
      </table></td>
  </tr>
 <tr> 
    <td height="221" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="546" height="10"></td>
          <td width="16"></td>
          <td width="495"></td>
        </tr>
        <tr>
          <td height="40" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
              	<td height="30" colspan="9" valign="top" class="grncel_lrt title2"><strong>&nbsp;&nbsp; 
                  Manufacturer, Distributors, Suppliers &amp; Agents.</strong></td>
                 </tr>   
              <?php
	            	$slcat = "select catid, catname from catg order by catname";
					$rdcat = mysql_query($slcat);
					$rcdcount = mysql_num_rows($rdcat);
					$rownum = abs(1);
					$catln=0;
						while ($posts_info = mysql_fetch_array($rdcat))
		 					{
	        				$catid 		= $posts_info['catid'];
							$catname 	= $posts_info['catname'];
							$sql		= "Select * from dir_catprd where cat_id='$catid'";
							$sqldb      = mysql_query($sql);
							$numprcd	= mysql_num_rows($sqldb);
							
							
							if($catln==0) {
							
								print "
									<tr>
									<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;$rownum.</td>
									<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\"><a href=\"0708150156.php?CATID=$catid\">$catname</a></td>
									<td  width = \"5%\" height=\"20\"  class=\"grncel_rb ttle\">[$numprcd]</td>
									" ;
									
									
									if($rcdcount==$rownum)
										{
											print "
												<td  width = \"3%\" height=\"20\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
												<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
												<td  width = \"5%\" class=\"grncel_nlrb ttle\">&nbsp;</td>
												<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;</td>
												<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
												<td  width = \"5%\" class=\"grncel_rb ttle\">&nbsp;</td>
											" ;	
							}
	  		        			$rownum++;
								$catln++;	
								}
								elseif($catln==1) 
								{
								print "
									<td  width = \"3%\" height=\"20\"  class=\"grncel_nlrb ttle\">&nbsp;$rownum.</td>
									<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\"><a href=\"0708150156.php?CATID=$catid\">$catname</a></td>
									<td  width = \"5%\" height=\"20\"  class=\"grncel_rb ttle\">[$numprcd]</td>
									" ;
									
									if($rcdcount==$rownum)
										{
										print "
											<td  width = \"3%\" height=\"20\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
											<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
											<td  width = \"5%\" class=\"grncel_rb ttle\">&nbsp;</td>
											</tr>" ;	
											}
	  		        			$rownum++;
								$catln++;
								}
								else  
								{
								print "
									<td  width = \"3%\" height=\"20\"  class=\"grncel_nlrb ttle\">&nbsp;$rownum.</td>
									<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\"><a href=\"0708150156.php?CATID=$catid\">$catname</a></td>
									<td  width = \"5%\" height=\"20\"  class=\"grncel_rb ttle\">[$numprcd]</td>
									</tr>" ;
	  		        			$rownum++;
								$catln=0;
								}							
						}	
						
		print "
				<tr>
					<td colspan=\"9\" width=\"100%\" class=\"grncel_lrbd\">&nbsp;</td>
				</tr>" ;

mysql_free_result($rdcat);

    ?>
                
              <tr> 
                <td height="25" colspan="9" valign="top" class="grncel_lrbd ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="45" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
              	<td height="25" colspan="9" valign="top" class="grncel_lrt title2"><strong>&nbsp;&nbsp; 
                  Service Provider </strong></td>
                 </tr>   
               <?php
	            	$slsrvs = "select srvs_id, srvs_name from dir_srvs order by srvs_name";
					$rdsrvs = mysql_query($slsrvs);
					$rcdcount = mysql_num_rows($rdsrvs);
					$rownum1 = abs(1);
					$catln1=0;
						while ($posts_info = mysql_fetch_array($rdsrvs))
		 					{
	        				$srvsid 		= $posts_info['srvs_id'];
							$srvsname	 	= $posts_info['srvs_name'];
							$sql		= "select * from srvs_advts where srvsid='$srvsid'";
							$sqldb		= mysql_query($sql);
							$numsrvs	= mysql_num_rows($sqldb);
							
							if($catln1==0) {
							
								print "
									<tr>
									<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;$rownum1.</td>
									<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\"><a href=\"0708150162.php?SRVSID=$srvsid\">$srvsname</a></td>
									<td  width = \"5%\" height=\"20\"  class=\"grncel_nlrb ttle\">[$numsrvs]</td>
									" ;
									
									if($rcdcount==$rownum1)
										{
											print "
												<td  width = \"3%\" height=\"20\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
												<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
												<td  width = \"5%\" class=\"grncel_nlrb ttle\">&nbsp;</td>
												<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;</td>
												<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
												<td  width = \"5%\" class=\"grncel_rb ttle\">&nbsp;</td>
											" ;	
										}
	  		        			$rownum1++;
								$catln1++;	
								}
								elseif($catln1==1) 
								{
								print "
									<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;$rownum1.</td>
									<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\"><a href=\"0708150162.php?SRVSID=$srvsid\">  $srvsname</a></td>
									<td  width = \"5%\" height=\"20\"  class=\"grncel_nlrb ttle\">[$numsrvs]</td>
									" ;
									if($rcdcount==$rownum1)
										{
										print "
											<td  width = \"3%\" height=\"20\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
											<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\">&nbsp;</td>
											<td  width = \"5%\" class=\"grncel_rb ttle\">&nbsp;</td>
											</tr>" ;	
											}
										
									
									
									
	  		        			$rownum1++;
								$catln1++;
								}
								else  
								{
								print "
									<td  width = \"3%\" height=\"20\"  class=\"grncel_lb ttle\">&nbsp;$rownum1.</td>
									<td  width=\"24%\" align=\"left\"  class=\"grncel_nlrb ttle\"><a href=\"0708150162.php?SRVSID=$srvsid\">  $srvsname</a></td>
									<td  width = \"5%\" height=\"20\"  class=\"grncel_rb ttle\">[$numsrvs]</td>
									</tr>" ;
	  		        			$rownum1++;
								$catln1=0;
								}							
						}	

			print "
				<tr>
					<td colspan=\"9\" width=\"100%\" class=\"grncel_lrbd\">&nbsp;</td>
				</tr>" ;

$db->close();

    ?>
                
              <tr> 
                <td height="17" colspan="9" valign="top" class="grncel_lrbd ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td></td>
              </tr>
          </table></td>
        </tr> 
         
         
               
        <tr> 
          <td height="126" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr> 
                <td width="546" height="24" valign="top" class="grncel_lrt ttle2"><strong>&nbsp;&nbsp;Real 
                Estate </strong></td>
              </tr>
              <tr> 
                <td height="21" valign="top" class="grncel_lrb ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr> 
                <td height="22" valign="top" class="grncel_lrb ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr> 
                <td height="25" valign="top" class="grncel_lrb ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr> 
                <td height="34" valign="top" class="grncel_lrbd ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
          </table></td>
          <td>&nbsp;</td>
          <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr> 
                <td width="495" height="24" valign="top" class="grncel_lrt ttle2"><strong>&nbsp;&nbsp;Placement 
                Service. </strong></td>
              </tr>
              <tr> 
                <td height="21" valign="top"  class="grncel_lrb ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr> 
                <td height="25" valign="top"  class="grncel_lrb ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr> 
                <td height="24" valign="top"  class="grncel_lrb ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr> 
                <td height="32" valign="top"  class="grncel_lrbd ttle"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
          </table></td>
        </tr>
        
    </table></td>
  </tr>
  <tr>
    <td height="31" colspan="2" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="100%" height="29" valign="top" class="grncel_lrbd"><?php include "include/footer.php"; ?></td>
        </tr>
    </table></td>
    </tr>
</table>
</body>
</html>
