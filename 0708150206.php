<?php
//include 'Connections/db.inc.php';
include 'include/masterdata.php'; 
$db->close();
?>
<html>
<head>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">

function check(frm1) 
	{
	if(frm1.dirprod.value=="")
		{
		alert("Please Enter Web site Reference No. : ");
		frm1.dirprod.focus();
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
      <td height="107" colspan="4" valign="top"> <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas"   width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="564" height="22" valign="top"><?php include 'include/hlink.php';  ?></td>
                          <td width="278" >&nbsp;</td>
                          <td width="266" rowspan="2" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                        </tr>
                        <tr> 
                          <td height="35">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="49" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="133"></td> 
                                <td width="100%" height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
                                <td width="113"></td>
                              </tr>
                              <tr>
                                <td></td> 
                                <td height="19" align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>)                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td height="1"></td>
                                <td></td>
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
      <td height="20" colspan="4" valign="top"><?php include 'include/bsbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="3" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" valign="top" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="23"></td>
            <td width="170">&nbsp;</td>
            <td width="10"></td>
          </tr>
          <tr> 
            <td height="38"></td>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="14" valign="top" class="org_border_t_cell title"><div align="center">Site 
                      Ref.No.</div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_b_cell"><div align="center"><font size="2"><b><?php print "$dircno";?></b></font></div></td>
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
                  <td height="19" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150210.php?ID=<?php print"$rstid"; ?>">Flash 
                      Out </a></div></td>
                </tr>
                <tr> 
                  <td height="18" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150211.php?ID=<?php print"$rstid"; ?>">Job 
                      Placement </a></div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150212.php?ID=<?php print"$rstid"; ?>">Property 
                      Listing </a></div></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="11"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height="65"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="frm1" action="0708150113.php" method="post" onSubmit="return check(frm1)">
                  <tr> 
                    <td width="170" height="19" align="center" valign="top" class="org_border_t_cell title">Product 
                      Site</td>
                  </tr>
                  <tr> 
                    <td height="22" align="center" valign="top" class="org_border_c_cell"> 
                      <input name="dirprod" type="text" size="15" maxlength="15" class="list_border"> 
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
            <td height="313"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td height="19" colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19" valign="top" class="smallLink"><marquee>
              <?php print "$marqs"; ?></marquee></td>
          </tr>
        </table></tr>
    <tr> 
      <td width="22" height="293">&nbsp;</td>
      <td width="75%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="20" colspan="3" align="center" valign="top" class="grncel_LIT title">Contact 
              Us </td>
          </tr>
          <tr> 
            <td width="20" height="20">&nbsp;</td>
            <td width="494">&nbsp;</td>
            <td width="23">&nbsp;</td>
          </tr>
          <tr> 
            <td height="238">&nbsp;</td>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="9" height="29">&nbsp;</td>
                  <td width="471">&nbsp;</td>
                  <td width="14">&nbsp;</td>
                </tr>
                <tr> 
                  <td height="28">&nbsp;</td>
                  <td valign="top" class="grncel_LIT title2" ><?php print "$cname "; ?>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20">&nbsp;</td>
                  <td valign="top" class="grncel_DRK title"><?php print "$diradd1, $diradd2 "; ?> 
                    &nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td height="23">&nbsp;</td>
                  <td valign="top" class="grncel_DRK title"><?php print "$citname,$stname-$dirpin ($ctname)"; ?> 
                    &nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td height="23">&nbsp;</td>
                  <td valign="top" class="grncel_DRK title"><?php print"Tel.No. :$dirtel, Fax No. : $dirfax"; ?> 
                    &nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td height="21">&nbsp;</td>
                  <td valign="top" class="grncel_DRK title"><?php print "E-Mail : $dirmail, Web : $dirweb"; ?> 
                    &nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td height="22"></td>
                  <td valign="top" class="grncel_DRK title"><!--DWLayoutEmptyCell-->&nbsp; </td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="22"></td>
                  <td valign="top" class="grncel_DRK title"><?php print "Contact Person : $cpname"; ?>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td height="21"></td>
                  <td valign="top" class="grncel_DRK title"> <?php print "Mobile No. : $dirmob"; ?> 
                    &nbsp;</td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="29"></td>
                  <td>&nbsp;</td>
                  <td></td>
                </tr>
              </table></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="15"></td>
            <td></td>
            <td></td>
          </tr>
        </table></td>
      <td width="10">&nbsp;</td>
    </tr>
    <tr> 
      <td height="157">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="19" colspan="4" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" ><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
