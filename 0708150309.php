<?php
include 'include/masterdatasrvs.php'; 
$db  = new DB();
$db->open();
$srvsid = $_GET['ID'];
$msgs	= $_GET['msgs'];
	if($msgs=="") {
		$msgs= "Please Specify your Alternate Mail Id for Password";
		}
?>	
<html>
<head>
<title>Request for Password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">
function check(frmfback) 
	{
	if(frmfback.mail.value=="")
			{
			alert("please enter your email");
			frmfback.mail.focus();
			return (false);
			}
	if(frmfback.mail.value!="")
			{
			pass = frmfback.mail.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmfback.mail.focus();
				return (false);
				}
			}
	if(frmfback.mail.value!="")
			{
			pass = frmfback.mail.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmfback.mail.focus();
				return (false);
				}
			}

	}
</script>

<script language="javascript">

function check2(frm) 
	{
	if(frm.srvsid.value=="")
		{
		alert("Please Enter Web site Reference No. : ");
		frm.srvsid.focus();
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
                          <td width="600" height="48" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
                          <td width="181">&nbsp;</td>
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
                          <td height="26">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="23" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="1047" height="23" align="right" valign="top" class="bluenote"><?php include 'include/hlink.php';  ?></td>
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
      <td height="20" colspan="4" valign="top"> <table class="tbbdrcol" width="100%" border="0"cellpadding="0" cellspacing="0">
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
      <td width="206" rowspan="4" valign="top"><table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0" valign="top" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="23"></td>
            <td width="170">&nbsp;</td>
            <td width="10"></td>
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
                  <td height="19" valign="top" class="org_border_b_cell" onMouseOver= frmlogin.login.value="<?php print "$cno"; ?>"><div align="center"><font size="2"><b> <?php print "$cno";?></b></font></div></td>
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
            <td height="13"></td>
            <td></td>
            <td></td>
          </tr>
          <tr> 
            <td height="134"></td>
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
                    <?php print "$stname-$pin ($ctname)"; ?></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK bluenote" align="center"><?php print "$mail"; ?></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="grncel_DRK bluenote" align="center"> 
                    <?php print "$web"; ?></td>
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
                <form name="frm" action="0708150143.php?ID=<?php print"$srvsid"; ?>" method="post" onSubmit="return check2(frm)">
                  <tr> 
                    <td width="170" height="19" align="center" valign="top" class="org_border_t_cell title">Product 
                      Site</td>
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
            <td></td>
          </tr>
          <tr> 
            <td height="164"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td height="19" colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19" valign="top" class="smallLink"><marquee><?php print "$marqs"; ?></marquee></td>
          </tr>
          <tr>
          	<td></td>
          </tr>
          <tr>	
          	<td align="center"><?php print "$msgs"; ?> </td>
          </tr>
          
        </table></tr>
    <tr> 
      <td width="34" height="55">&nbsp;</td>
      <td width="785">&nbsp;</td>
      <td width="22">&nbsp;</td>
    </tr>
    <tr>
      <td height="362">&nbsp;</td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->

          <form name="frmrpass" method="post" action="0708150358.php?ID=<?php print"$srvsid"; ?>" onSubmit="return check(this)">
          <tr> 
            <td width="83" height="63">&nbsp;</td>
            <td width="169">&nbsp;</td>
            <td width="238">&nbsp;</td>
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
            <td valign="top" class="org_border_r_cell"><input name="mail" type="text" id="mail" size="50" maxlength="60"></td>
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
				<input type="hidden" name="srvsid" value="<?php print "$srvsid"; ?>">
                <input type="submit" name="Submit" value="      Request Passord      ">
              </div></td>
            <td></td>
          </tr>
          <tr> 
            <td height="22"></td>
            <td colspan="2" valign="top" class="org_border_b_cell"><div align="center"></div>  </td>
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
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="160">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
