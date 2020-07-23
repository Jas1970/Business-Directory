<?php
include 'include/masterdatasrvs.php'; 
$db  = new DB();
$db->open();

$srvsid = $_GET['ID'];
$msgs	= $_GET['msgs'];
if($msgs=="") {
	$msgs = "Please Enter Full Details, Thanks";
	}
	else 
	{
	$msgs = "Something got wrong, your $msgs, Please contact Site Administrator";
	}

?>
<html>
<head>
<title>Feed Back</title>
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
<script language="javascript">
function check2(fback) 
	{
	if(fback.name.value=="")
		{
		alert("Please Enter Sender Name");
		fback.name.focus();
		return (false);
		}
	if(fback.msg.value=="")
		{
		alert("Please Enter Your Message");
		fback.msg.focus();
		return (false);
		}
	if(fback.msg.value.length<=30)
		{
		alert("Please Enter Your Message minimum 30 character");
		fback.msg.focus();
		return (false);
		}
	if(fback.mail.value=="")
			{
			alert("please enter your email");
			fback.mail.focus();
			return (false);
			}
	if(fback.mail.value!="")
			{
			pass = fback.mail.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				fback.mail.focus();
				return (false);
				}
			}
	if(fback.mail.value!="")
			{
			pass = frmfback.mail.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				fback.mail.focus();
				return (false);
				}
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
                          <td height="48" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="499" height="29"  valign="middle" class="title4" > 
                                    <?php print "$cname"; ?> </td>
                              </tr>
                              <tr> 
                                <td height="19"  valign="top" class="bluenote"><div align="left">(<?php print "$pdet"; ?>)</div></td>
                              </tr>
                              <!--DWLayoutTable-->
                            </table></td>
                          <td width="179">&nbsp;</td>
                          <td width="266" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="264" height="57" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr> 
                          <td width="196" height="9"></td>
                          <td width="406"></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td height="27">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="22">&nbsp;</td>
                          <td colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="851" height="22" align="right" valign="top" class="bluenote"><a href="index.php" target="_parent" alt="this is test">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> Business 
                                  Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></td>
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
      <td width="194" rowspan="3" valign="top">
        
        <table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0" valign="top" >
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
            <td height="195"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table>
      <td width="45" height="26">
      <td width="776">      
      <td width="32">      
    </tr>
    <tr>
      <td height="94">    
      <td valign="top">    
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
                <!--DWLayoutTable-->
                <tr> 
                  <td  height="20" align="center" valign="top" class="grncel_LIT title">Feed 
                    Back </td>
                </tr>
                <tr> 
                  <td  valign="top" class="bluenote"><div align="justify"> 
                      <p><em>Please <strong>do not</strong> use this contact information 
                        for inquiries relating to business directory advertised 
                        on this site. You can use the contact information listed 
                        in every business directory page. </em></p>
                      <p>Fill in the form below. We will contact you as soon as 
                        possible. All fields are required.<br>
                        <em> <span class="bluenote">Please <strong>do not </strong>use 
                        this contact information for inquiries relating to renting 
                        a property advertised on this site. You need to contact 
                        the individual owner - manager</span></em> &nbsp; </p>
                    </div></td>
                </tr>
                <tr>
                	<td align="center"> <?php print "$msgs"; ?></td>
                </tr>
              </table>
              </td>
            <td></td>
          </tr>
          <tr> 
            <td height="372"></td>
            <td colspan="3" valign="top">
            
            <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
          <form name="fback" method="post" action="0708150362.php?ID=<?php print"$srvsid"; ?>"  onSubmit="return check2(this)">
          
          <tr> 
              <td width="18" height="22">&nbsp;</td>
              <td width="154">&nbsp;</td>
              <td width="38">&nbsp;</td>
              <td width="250">&nbsp;</td>
              <td width="77">&nbsp;</td>
            </tr>
            <tr> 
              <td height="22">&nbsp;</td>
              <td valign="top"><div align="right">Your Name :</div></td>
              <td colspan="2" valign="top"><input name="name" type="text" id="name" size="60" maxlength="50"></td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="22">&nbsp;</td>
              <td valign="top"><div align="right">Your Email :</div></td>
              <td colspan="2" valign="top"><input name="mail" type="text" id="mail" size="60" maxlength="50"></td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td valign="top"><div align="right">Message :</div></td>
              <td colspan="2" rowspan="2" valign="top"><textarea name="msg" cols="80" rows="15" id="msg"></textarea></td>
              <td></td>
            </tr>
            <tr> 
              <td height="160"></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="7"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td></td>
              <td valign="middle" ><div align="center">
                  <input name="checkbox" type="checkbox" value="mcopy" <?php if (!(strcmp("mcopy",1))) {echo "checked";} ?>>
                  
                </div></td>
              <td valign="top">Message Copy Requir on Self Address</td>
              <td></td>
            </tr>
            <tr> 
              <td height="8"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td></td>
	            <td colspan="2" valign="top">
	  		      <div align="center">
	  		        <input type="hidden" name="srvsid" value="<?php print "$srvsid"; ?>"> 
	  		        <input type="submit" name="Submit" value="Send Message">
	           </div></td>
              <td></td>
            </tr>
                </form>
            </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="13"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          
          
      </table>
      
      <td>    
    </tr>
    <tr>
      <td height="574">    
      <td>    
      <td>    
    </tr>
    </td>
    </table>
    
    <tr> 
      <td height="57" colspan="4" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
    </table>    </tr>
    </tbody>
</table>

</body>
</html>
