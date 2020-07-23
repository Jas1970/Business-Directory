<?php
include 'include/masterdata.php'; 

$rstid	 = $_REQUEST['ID'];
$msg   = $_GET['MSG'];	

/*
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
*/
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
      <td height="106" colspan="4" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td height="22" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="381">&nbsp;</td>
                          <td colspan="2" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="264" height="57" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr> 
                          <td width="107" height="35">&nbsp;</td>
                          <td width="308">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="49">&nbsp;</td>
                          <td colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
                              </tr>
                              <tr> 
                                <td height="19" align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>)                                </td>
                              </tr>
                          </table></td>
                          <td width="113">&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="1"></td>
                          <td></td>
                          <td></td>
                          <td width="151"></td>
                          <td></td>
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
      <td width="194" rowspan="3" valign="top"><table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0" valign="top" >
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
                  <td height="19" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150210.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>">Flash 
                      Out </a></div></td>
                </tr>
                <tr> 
                  <td height="18" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150211.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>">Job 
                      Placement </a></div></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box small bgimg"><div align="center"><a href="0708150212.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>">Property 
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
                <form name="frm" action="0708150113.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>" method="post" onSubmit="return check2(frm)">
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
            <td height="311"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td height="19" colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19" valign="top" class="smallLink"><marquee><?php print "$marqs"; ?></marquee></td>
          </tr>
        </table></tr>
    <tr> 
      <td width="22" height="348"></td>
      <td width="537" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form name="frmrpass" method="post" action="0708150260.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>" onSubmit="return check1(this)">
            <tr> 
              <td width="82" height="63">&nbsp;</td>
              <td width="408">&nbsp;</td>
              <td width="47">&nbsp;</td>
            </tr>
            <tr> 
              <td height="20">&nbsp;</td>
              <td valign="top"><div align="center" class="org_border_box title">Message</div></td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="19"></td>
              <td valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="20"></td>
              <td valign="top" class="org_border_c_cell"> <?php print "$msg";    ?> &nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="21"></td>
              <td valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td valign="top" class="org_border_c_cell"><div align="center"> &nbsp;
                </div></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td valign="top" class="org_border_b_cell"><div align="center"></div>
                &nbsp; </td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="135"></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
          </form>
        </table></td>
      <td width="10"></td>
    </tr>
    <tr> 
      <td height="124"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="19" colspan="4" valign="top">
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
