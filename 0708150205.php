<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();
$rstid = $_GET['ID'];
$msgs	= $_GET['msgs'];
if($msgs=="") {
	$msgs = "Please Enter Full Details, Thanks";
	}
	else 
	{
	$msgs = "Something got wrong, your $msgs, Please contact Site Administrator";
	}

$select_rcd = "select *  from dir_main where dir_id='$rstid'";
$result_rcd = mysql_query($select_rcd);
$count_rcd = mysql_num_rows($result_rcd);
$cname = mysql_result($result_rcd,0,'dir_cname');
$dircno = mysql_result($result_rcd,0,'dir_cno');
$slmoto = "select * from dir_home where mdirid = '$rstid'";
$rdmoto = mysql_query($slmoto);
$rdcount = mysql_num_rows($rdmoto);
if($rdcount<>"0")
	{
	$pdet  = mysql_result($rdmoto,0,'comp_moto');
	$chome = mysql_result($rdmoto,0,'comp_home');
	$css   = mysql_result($rdmoto,0,'comp_css');
	$marqs  = mysql_result($rdmoto,0,'comp_marque');	
	}
if($css=="grn_01.css")
	{
		$mocol	= "#44A49A";
		$mcol	= "#8CC6C6";
	}	
if($css=="org_02.css")
	{
		$mocol	= "#FFCC00";
		$mcol	= "#FDAD5E";			
	}	
if($css=="blu_03.css")
	{
		$mocol	= "#6464FF";
		$mcol	= "#9797FF";			
	}		
if($css=="red_04.css")
	{
		$mocol	= "#FF4A4A";
		$mcol	= "#FFA4A4";			
	}	
if($css=="brown_05.css")
	{
		$mocol	= "#B5B5B5";
		$mcol	= "#999999";			
	}	
if($css=="lbrn_06.css")
	{
		$mocol	= "#DA591B";
		$mcol	= "#CF8354";			
	}	
if($css=="dbrn_07.css")
	{
		$mocol	= "#AFAF5F";
		$mcol	= "#959A4A";			
	}	
if($css=="yellow_08.css")
	{
		$mocol	= "#AAAA00";
		$mcol	= "#CECE00";			
	}	

mysql_free_result($result_rcd);
mysql_free_result($rdmoto);

?>
<html>
<head>
<title>Feed Back</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">

<script language="javascript">
function check(frmfback) 
	{
	if(frmfback.name.value=="")
		{
		alert("Please Enter Sender Name");
		frmfback.name.focus();
		return (false);
		}
	
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

	if(frmfback.msg.value=="")
		{
		alert("Please Enter Your Message");
		frmfback.msg.focus();
		return (false);
		}
	if(frmfback.msg.value.length<=30)
		{
		alert("Please Enter Your Message minimum 30 character");
		frmfback.msg.focus();
		return (false);
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
      <td height="106" colspan="4" valign="top"> <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
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
                          <td width="278">&nbsp;</td>
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
                                <td width="129"></td> 
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
            <td width="22">&nbsp;</td>
          </tr>
          <tr>
            <td height="38"></td>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="19" valign="top" class="org_border_t_cell title"><div align="center">Site 
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
                <form name="frm" action="0708150113.php" method="post" onSubmit="return check2(frm)">
                  <tr> 
                    <td width="170" height="19" align="center" valign="top" class="org_border_t_cell title">Product 
                    Site</td>
                  </tr>
                  <tr> 
                    <td height="22" align="center" valign="top" class="org_border_c_cell"> 
                    <input name="dirprod" type="text" size="15" maxlength="15" class="list_border">                    </td>
                  </tr>
                  <tr> 
                    <td height="24" align="center" valign="top" class="org_border_b_cell"><input type="submit" name="Submit" value="Open Site">                    </td>
                  </tr>
                </form>
            </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="387"></td>
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
      <td width="34" height="228"></td>
      <td width="785" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="537" height="20" align="center" valign="top" class="grncel_LIT title">Feed 
              Back </td>
          </tr>
          <tr> 
            <td height="190" valign="top" class="small"><div align="justify"> 
                <p><em>Please <strong>do not</strong> use this contact information 
                  for inquiries relating to business directory advertised on this 
                  site. You can use the contact information listed in every business 
                  directory page. </em></p>
                <p>Fill in the form below. We will contact you as soon as possible. 
                  All fields are required.<br>
                  <em><br>
                  <span class="small">Please <strong>do not </strong>use this 
                  contact information for inquiries relating to renting a property 
                  advertised on this site. You need to contact the individual 
                  owner - manager</span></em><br>
                  &nbsp; </p>
              </div></td>
          </tr>
          <tr>
          	<td align="center"><?php print "$msgs"; ?></td>
          </tr>
        </table></td>
      <td width="22"></td>
    </tr>
    <tr>
      <td height="14"></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="372"></td>
      <td valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <form name="frmfback" method="post" action="0708150262.php?ID=<?php print"$rstid"; ?>" onSubmit="return check(this)">
            <tr> 
              <td width="18" height="22">&nbsp;</td>
              <td width="162">&nbsp;</td>
              <td width="522">&nbsp;</td>
              <td width="83">&nbsp;</td>
            </tr>
            <tr> 
              <td height="22">&nbsp;</td>
              <td valign="top"><div align="right">Your Name :</div></td>
              <td valign="top"><input name="name" type="text" id="name" size="60" maxlength="50"></td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="22">&nbsp;</td>
              <td valign="top"><div align="right">Your Email :</div></td>
              <td valign="top"><input name="mail" type="text" id="mail" size="60" maxlength="50"></td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td valign="top"><div align="right">Message :</div></td>
              <td rowspan="2" valign="top"><textarea name="msg" cols="80" rows="15" id="msg"></textarea></td>
              <td></td>
            </tr>
            <tr> 
              <td height="221"></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="39"></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            
            <tr> 
              <td height="24"></td>
              <td></td>
	            <td valign="top">
	  		      <div align="center">
	  		        <input type="hidden" name="rstid" value="<?php print "$rstid"; ?>"> 
	  		        <input type="submit" name="Submit" value="Send Message">
	           </div></td>
              <td></td>
            </tr>
          </form>
      </table></td>
      <td></td>
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
