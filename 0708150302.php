<?php
include 'include/masterdatasrvs.php'; 
$db  = new DB();
$db->open();
?>
<html>
<head>
<title>About Us</title>
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
                          <td width="605" height="48" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td height="29" align="center" valign="middle" class="title4"> 
                                  <div align="left"><?php print "$cname"; ?> </div></td>
                              </tr>
                              <tr> 
                                <td height="19" align="center" valign="top" class="bluenote"><div align="left">(<?php print "$pdet"; ?>)</div></td>
                              </tr>
                              <!--DWLayoutTable-->
                            </table></td>
                          <td width="47">&nbsp;</td>
                          <td width="144">&nbsp;</td>
                          <td width="264" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="264" height="57" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr> 
                          <td height="9"></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td height="27"></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          
                          <td colspan="4" valign="right"><div align="right">
                            <?php include 'include/hlink.php';  ?>
                          </div></td>
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
      <td width="194" rowspan="3" valign="top"><table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0" valign="top" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="12" height="23"></td>
            <td width="170">&nbsp;</td>
            <td width="12"></td>
          </tr>
          <tr> 
            <td height="38"></td>
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
            <td></td>
          </tr>
          <tr> 
            <td height="13"></td>
            <td></td>
            <td></td>
          </tr>
          <tr> 
            <td height="96"></td>
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
            <td></td>
          </tr>
          <tr> 
            <td height="10"></td>
            <td></td>
            <td></td>
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
                  <td height="19" valign="top" class="grncel_DRK bluenote" align="center"><?php print "$add2"; ?> 
                  </td>
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
            <td></td>
          </tr>
          <tr> 
            <td height="77"></td>
            <td>&nbsp;</td>
            <td></td>
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
                      <input name="srvsid" type="text" class="list_border" id="srvsid" size="15" maxlength="15"> 
                    </td>
                  </tr>
                  <tr> 
                    <td height="24" align="center" valign="top" class="org_border_b_cell"><input type="submit" name="Submit" value="Open Site"> 
                    </td>
                  </tr>
                </form>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="168"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table>
      <td width="569" height="19" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19" valign="top" class="smallLink"><marquee>
              <?php print "$marqs"; ?></marquee></td>
          </tr>
        </table></tr>
    <tr> 
      <td height="1"></tr>
    <tr> 
      <td height="641" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="20" colspan="3" align="center" valign="top" class="grncel_LIT title">Branch 
              List </td>
          </tr>
          <tr> 
            <td width="29" height="597">&nbsp;</td>
            <td width="100%" align="center" valign="top"><table id="dashed1"  width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
   <?php
	$brlist = "select *  from srvs_branch where mids = '$srvsid'";
	$brlistrd = mysql_query($brlist);
	$numrows = mysql_num_rows($brlistrd);
	$rownum = abs(1);

	while ($posts_info = mysql_fetch_array($brlistrd))
	 {
   		
		$asoadd1 = $posts_info['add1'];
		$asoadd2 = $posts_info['add2'];
		$asocity = $posts_info['city'];
		$asodist = $posts_info['dist'];
		$asostat = $posts_info['stat'];
		$asocont = $posts_info['cout'];
		$asotel  = $posts_info['tel'];
		$asomob	 = $posts_info['mob'];
		$asomail = $posts_info['mail'];
		$asocname = $posts_info['cpname'];
		$pincode = $posts_info['pin'];
		// city code
		$city_st = "select citname from city where citid='$asocity'";
		$city_rcd = mysql_query($city_st);
		$city_name = mysql_result($city_rcd,0,'citname');
		
		// district code
		$dist_st = "select dstname from district where dstid='$asodist'";
		$dist_rcd = mysql_query($dist_st);
		$dist_name = mysql_result($dist_rcd,0,'dstname');

		// country code
	    $count_st = "select cntname from country where cntid='$asocont'";
		$count_rcd = mysql_query($count_st);
		$count_name = mysql_result($count_rcd,0,'cntname');
	
		//state code
		$state_st = "select * from state where stid='$asostat'";
		$state_rcd = mysql_query($state_st);
		$state_name = mysql_result($state_rcd,0,'stname');
	
	
	
	
		print " 
		 <table>
		<tr>
			<td width=\"10\" class=\"bluenote\">$rownum.</td>
			<td width=\"350\" class=\"bluenote\">$city_name - ($state_name) </td> 
			<td width=\"350\" class=\"bluenote\">Contact Person :$asocname</td>
		</tr>	
	   <tr>
	      	<td width=\"10\" class=\"bluenote\"></td>
			<td class=\"bluenote\">Address : $asoadd1,</td>
			<td width=\"350\" class=\"bluenote\">Tel. No. : $asotel </td>
		</tr>
		<tr>
			<td width=\"10\" class=\"bluenote\"></td>
			<td class=\"bluenote\">$asoadd2 ,</td>
			<td class=\"bluenote\">Mobile No. : $asomob</td>
		</tr>
		<tr>	
			<td width=\"10\" class=\"bluenote\"> </td>
			<td class=\"bluenote\">$state_name - $pincode ($count_name)</td>
			<td class=\"bluenote\">E-Mail : $asomail</td>
	    </tr>
		<tr>
			<td><br></td>
		</tr> ";
		$rownum++;
		}
		
				?>
				    </table></td>
            <td width="32">&nbsp;</td>
          </tr>
          <tr>
            <td height="24">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></tr>
    <tr> 
      <td height="19" colspan="2" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></tr>
</table>
</body>
</html>
