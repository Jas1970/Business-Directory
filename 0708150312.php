<?php
include 'include/masterdatasrvs.php'; 
$db  = new DB();
$db->open();
$srvsid = $_GET['ID'];
?>
<html>
<head>
<title>Property Listing Status</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">

function check(frm1) 
	{
	if(frm1.srvsid.value=="")
		{
		alert("Please Enter Web site Reference No. : ");
		frm1.srvsid.focus();
		return (false);
		}
	}	
</script>		

</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tbody>
    <tr> 
      <td height="107" colspan="2" valign="top"> <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas"   width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="594" height="48" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="499" height="29" align="center" valign="middle" class="title4"><div align="left"> 
                                    <?php print "$cname"; ?> </div></td>
                              </tr>
                              <tr> 
                                <td height="19" align="center" valign="top" class="bluenote"><div align="left">(<?php print "$pdet"; ?>)</div></td>
                              </tr>
                              <!--DWLayoutTable-->
                            </table></td>
                          <td width="187">&nbsp;</td>
                          <td width="266" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="264" height="57" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr> 
                          <td height="9"></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td height="27">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="22" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="1047" height="22" align="right" valign="top" class="bluenote"><?php include 'include/hlink.php';  ?></td>
                              </tr>
                          </table></td>
                        </tr>
                        
                        
                    </table></td>
                  </tr>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    <tr> 
      <td height="20" colspan="2" valign="top"> <table class="tbbdrcol" width="100%" border="0"cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="110" height="20" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150301.php?ID=<?php print"$srvsid"; ?>" target="_parent">Home</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>"; ><div align="center"><a href="0708150302.php?ID=<?php print"$srvsid"; ?>">Branch 
                List</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>"; ><div align="center"><a href="0708150303.php?ID=<?php print"$srvsid"; ?>">Service 
                List</a></div></td>
            <td width="138" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>"; ><div align="center"><a href="0708150304.php?ID=<?php print"$srvsid"; ?>">Service 
                Catalouge</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150305.php?ID=<?php print"$srvsid"; ?>">Feed 
                Back</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150306.php?ID=<?php print"$srvsid"; ?>">Contact 
                Us</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150307.php?ID=<?php print"$srvsid"; ?>" target="_parent">Admin 
                Site</a></div></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td width="249" rowspan="4" valign="top">
        
        <table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0" valign="top" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="12" height="23">&nbsp;</td>
            <td width="170">&nbsp;</td>
            <td width="12">&nbsp;</td>
          </tr>
          <tr>
            <td height="38">&nbsp;</td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="14" valign="top" class="org_border_t_cell title"><div align="center">Site 
                      Ref.No.</div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_b_cell"><div align="center"><font size="2"><b><?php print "$cno";?></b></font></div></td>
                </tr>
            </table></td>
          <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="96">&nbsp;</td>
            <td align="center" valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="157" height="19" valign="top" class="org_border_t_cell title"><div align="center">Quick 
                      Reference</div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150310.php?ID=<?php print"$srvsid"; ?>">Flash 
                      Out </a></div></td>
                </tr>
                <tr> 
                  <td height="18" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150311.php?ID=<?php print"$srvsid"; ?>">Job 
                      Placement </a></div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150312.php?ID=<?php print"$srvsid"; ?>">Property 
                      Listing </a></div></td>
                </tr>
            </table></td>
          <td>&nbsp;</td>
          </tr>
          
          
          
          
          <tr> 
            <td height="171"></td>
            <td valign="top"><table id="dashed1" width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="19" valign="top" class="grncel_LIT small"><div align="center">Address</div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="19"   align="center" valign="top"  class="grncel_DRK bluenote"><strong> 
                    <?php print "$cname "; ?></strong></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK bluenote" align="center"> 
                    <?php print "$add1,  "; ?></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK bluenote" align="center"><?php print "$add2"; ?>                  </td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK bluenote" align="center"> 
                    <?php print "$citname,"; ?></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK bluenote" align="center"> 
                    <?php print "$stname-$pin ($ctname)"; ?>&nbsp;</td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK bluenote" align="center"><?php print "$mail"; ?> 
                    &nbsp;</td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK bluenote" align="center"> 
                    <?php print "$web"; ?>&nbsp;</td>
                </tr>
            </table></td>
          <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="77"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="65"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="frm1" action="0708150143.php" method="post" onSubmit="return check(frm1)">
                  <tr> 
                    <td width="170" height="19" align="center" valign="top" class="org_border_t_cell title">Service 
                      Provider Site</td>
                  </tr>
                  <tr> 
                    <td height="22" align="center" valign="top" class="org_border_c_cell"> 
                      <input name="srvsid" type="text" class="list_border" id="srvsid" size="15" maxlength="15">                    </td>
                  </tr>
                  <tr> 
                    <td height="24" align="center" valign="top" class="org_border_b_cell"><input type="submit" name="Submit" value="Open Site">                    </td>
                  </tr>
                </form>
            </table></td>
          <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="227"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      
      <td width="811" height="19" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19" valign="top" class="smallLink"><marquee>
              <?php print "$marqs"; ?></marquee></td>
          </tr>
        </table>      
    </tr>
       <tr>
      <td height="607" valign="top">    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="20" colspan="3" align="center" valign="top" class="grncel_LIT title"></td>
          </tr>
          
          <tr>
            <td height="341"></td>
            <td align="center" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="20" colspan="3" align="center" valign="top" class="grncel_LIT title">Property 
              Listing Status In Directory</td>
          </tr>
          <tr> 
            <td width="9" height="4"></td>
            <td width="711"></td>
            <td width="12"></td>
          </tr>
          <tr>
            <td height="346"></td>
            <td valign="top">
			
			  <table id="dashed1"  width="100%" border="0" cellpadding="0" cellspacing="0">
			    <!--DWLayoutTable-->
			    
			    <?php 
                $sl_rcd = "select * from prop_main where prop_comp_id ='$srvsid' and prop_comp_type='2'";
				$rs_rcd = mysql_query($sl_rcd);
				$count_rcd = mysql_num_rows($rs_rcd);
				$rownum = abs(1);
				while ($posts_info = mysql_fetch_array($rs_rcd))
		 			{
					$ptype 		= $posts_info['prop_type'];
					$pcity		= $posts_info['prop_city'];
					$pcomp_id 	= $posts_info['prop_comp_id'];
					$prop_loc	= $posts_info['prop_location'];
					$prop_add1	= $posts_info['prop_add1'];
					$prop_add2	= $posts_info['prop_add2'];
					$prop_dist	= $posts_info['prop_city'];
					$prop_state	= $posts_info['prop_state'];
					$prop_rate	= $posts_info['prop_price'];	
					$prop_area	= $posts_info['prop_area'];
					$prop_areat	= $posts_info['prop_area_type'];
					$prop_selbuy = $posts_info['prop_want_to'];	


			$citysl = "select * from city where citid='$pcity'";
			$cityrd = mysql_query($citysl);
			$city_name = mysql_result($cityrd,0,'citname');
			
			$prtypesl 	= "select type_name from prop_type where type_id='$ptype'";
			$prtyperd 	= mysql_query($prtypesl);
			$type_name	= mysql_result($prtyperd,0,'type_name');
			
			$dist_st = "select dstname from district where dstid='$prop_dist'";
			$dist_rcd = mysql_query($dist_st);
			$dist_name = mysql_result($dist_rcd,0,'dstname');
					
			$state_st = "select stname from state where stid='$prop_state'";
			$state_rcd = mysql_query($state_st);
			$state_name = mysql_result($state_rcd,0,'stname');
			
			
	/*		$job_comp_sl = "select dir_main.dir_id, dir_main.dir_cname, dir_main.dir_cpnamem, dir_add.dir_id, dir_add.dir_mob from 
							dir_main, dir_add where dir_main.dir_id=''$srvsid'' 
						    and dir_add.dir_id=''$srvsid''";
						
			$job_comp_rd = mysql_query($job_comp_sl,$abc);
			$comp_name = mysql_result($job_comp_rd,0,'dir_cname');
			$cpname		= mysql_result($job_comp_rd,0,'dir_cpname');
	 		$mobno		= mysql_result($job_comp_rd,0,'dir_mob');
		*/

				print "
					
	<tr>
		<td class=\"org_border_nr_box\" colspan=\"2\" width=\"450\"><font class=\"smallp\"><div align=\"left\">$rownum  Property Type :  $type_name</div></font></td>
		<td class=\"org_border_nl_box\" width=\"550\" align=\"right\"><b>Area :  $prop_area $prop_areat</b></td>
	</tr>
	<tr>
		<td class=\"org_border_l_cell bluenote\">Location</td>
		<td class=\"org_border_no_cell bluenote\" width=\"15px\">:</td>
		<td class=\"org_border_r_cell bluenote\" width=\"285px\">$prop_loc&nbsp</td>	
	</tr>	
	<tr>
		<td class=\"org_border_l_cell bluenote\">Address </td>
		<td class=\"org_border_no_cell bluenote\" >:</td>
		<td class=\"org_border_r_cell\">$prop_add1</td>
	</tr>
	<tr>
		<td class=\"org_border_l_cell bluenote\">&nbsp;</td>
		<td class=\"org_border_no_cell bluenote\" >:</td>
		<td class=\"org_border_r_cell bluenote\">$prop_add2</td>
	</tr>
	<tr>
		<td class=\"org_border_l_cell bluenote\">City</td>
		<td class=\"org_border_no_cell bluenote\" >:</td>
		<td class=\"org_border_r_cell bluenote\">$city_name, $dist_name,</td>
	</tr>
	<tr>
		<td class=\"org_border_l_cell bluenote\">State</td>
		<td class=\"org_border_no_cell bluenote\" >:</td>
		<td class=\"org_border_r_cell bluenote\">$state_name</td>
	</tr>
	<tr>
		<td class=\"org_border_l_cell bluenote\">Property For</td>
		<td class=\"org_border_no_cell bluenote\">:</td>
		<td class=\"org_border_r_cell bluenote\"> $prop_selbuy</td>
	</tr>
	<tr>
		<td class=\"org_border_b_cell bluenote\" colspan=\"3\">&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
	<tr>
				";
					
				$rownum++;	

					}
					?>
			    </table></td>
          <td></td>
          </tr>
          <tr>
            <td height="133"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          
        </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="80"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
      </table>      
    </tr>
    
    <tr>
      <td height="75">              </tr>
    
    <tr> 
      <td height="19" colspan="2" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table>      
    </tr>
</table>
</body>
</html>
