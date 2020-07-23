<?php
//include 'Connections/db.inc.php';
include 'include/masterdata.php'; 
$db->close();

$msgs	 = $_GET['msgs'];

?>
<html>
<head>
<title>Request Password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">
function check1(frmrpass) 
	{
	if(frmrpass.fmail.value=="")
			{
			alert("please enter your email");
			frmrpass.fmail.focus();
			return (false);
			}
	if(frmrpass.fmail.value!="")
			{
			pass = frmrpass.fmail.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmrpass.fmail.focus();
				return (false);
				}
			}
	if(frmrpass.fmail.value!="")
			{
			pass = frmrpass.fmail.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmrpass.fmail.focus();
				return (false);
				}
			}
	}
</script>
<script language="javascript">
function check2(frm) 
	{
	if(frm.dirprod.value=="")
		{
		alert("Please Enter Web site Reference No. : ");
		frm.dirprod.focus();
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
      <td height="107" colspan="4" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="564" height="22" valign="top"><?php include 'include/hlink.php';  ?></td>
                          <td width="280" >&nbsp;</td>
                          <td width="264" rowspan="2" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
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
                                <td width="114"></td>
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
      <td width="206" rowspan="4" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" valign="top" >
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
            <td valign="top" align="center"><table width="170px" border="0" cellpadding="0" cellspacing="0">
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
            <td height="13"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height="65"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="frm" action="0708150113.php?ID=<?php print"$rstid"; ?>" method="post" onSubmit="return check2(frm)">
                  <tr> 
                    <td width="170" height="19" align="center" valign="top" class="org_border_t_cell title">Product 
                      Site</td>
                  </tr>
                  <tr> 
                    <td height="22" align="center" valign="top" class="org_border_c_cell"> 
                      <input name="dirprod" type="text" size="15" maxlength="15" class="list_border"> </td>
                  </tr>
                  <tr> 
                    <td height="24" align="center" valign="top" class="org_border_b_cell"><input type="submit" name="Submit" value="Open Site">                    </td>
                  </tr>
                </form>
              </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="311"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td height="76" colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td  height="19" valign="top" class="smallLink"><marquee><?php print "$marqs"; ?></marquee></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
	    </tr>
          <tr>
            <td>&nbsp;</td>
	     </tr>
    
           <tr> 
            <td  height="19" align="center" valign="top"><?php print "$msgs"; ?></td>
          </tr>

        </table></tr>
    <tr> 
      <td width="34" height="16"></td>
      <td width="785"></td>
      <td width="22"></td>
    </tr>
    <tr>
      <td height="362"></td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form name="frmrpass" method="post" action="0708150260.php?ID=<?php print"$rstid"; ?>"  onSubmit="return check1(this);">
          <tr> 
            <td width="82" height="63">&nbsp;</td>
            <td width="105">&nbsp;</td>
            <td width="303">&nbsp;</td>
            <td width="47">&nbsp;</td>
          </tr>
          <tr> 
            <td height="20">&nbsp;</td>
            <td colspan="2" valign="top"><div align="center" class="org_border_box title">Registered 
                Member Login - Lost Password</div></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="19"></td>
            <td colspan="2" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td></td>
          </tr>
          <tr> 
            <td height="20"></td>
            <td valign="top" class="org_border_l_cell title"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td></td>
          </tr>
          <tr> 
            <td height="22"></td>
            <td valign="top" class="org_border_l_cell title">E-Mail</td>
            <td valign="top" class="org_border_r_cell"><input name="fmail" type="text" id="fmail" size="45" maxlength="65"></td>
            <td></td>
          </tr>
          <tr> 
            <td height="21"></td>
            <td colspan="2" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td></td>
          </tr>
          <tr> 
            <td height="24"></td>
            <td colspan="2" valign="top" class="org_border_c_cell"><div align="center">
				<input type="hidden" name="rstid" value="<?php print "$rstid"; ?>"> 
                <input type="submit" name="Submit" value="      Request Passord      ">
              </div></td>
            <td></td>
          </tr>
          <tr> 
            <td height="22"></td>
            <td colspan="2" valign="top" class="org_border_b_cell"><div align="center"></div>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="135"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
  </form>
      </table></td>
      <td></td>
    </tr>
    <tr>
      <td height="162"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
     
    <tr> 
      <td height="57" colspan="4" valign="top">
	  	<table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  valign="top">
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
