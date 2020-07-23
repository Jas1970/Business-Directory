<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';


if($srvsid=="")
	{
	$srvsid = $_REQUEST['ID'];
	}
$dno	= $_POST['dno'];
//$dir	= $_POST['directory'];
if($dno<>"")
	{
	$sitesl = "Select * from sitemgr where sadd = '$dno'";
	$siterd = mysql_query($sitesl);
	$dir 	= mysql_result($siterd,0,'type');
	}

$sl44 = "select * from srvs_addbook where srvs_id = '$srvsid'";
$rd44 = mysql_query($sl44);
$chknum11 	= mysql_num_rows($rd44);
if($chknum11>="100")
	{
		$msg = "Record Limit Over can't Insert Data";
	}
	else
	{	
if($dno<>"")
	{
		if($dir=="DIR")
			{
				$slrcd = "select * from dir_main where dir_cno='$dno'";
				$rdrcd = mysql_query($slrcd);
				$rdnum = mysql_num_rows($rdrcd);
				$srvs_id = mysql_result($rdrcd,0,'dir_id');
				echo "rdnum dir = $rdnum";
				$dirtp = 1;
				if($rdnum<>"")
					{
						$chkdup = "select * from srvs_addbook where srvs_id='$srvsid' 
																and add_id = '$srvs_id' 
																and dir_type='$dirtp'";
						$chkrcd = mysql_query($chkdup);
						$rdnum 	= mysql_num_rows($chkrcd);
						if($rdnum=="")
							{
							$rdins = "insert into srvs_addbook(srvs_id, add_id, dir_type, add_limit)
									  values
									  ('$srvsid','$srvs_id','$dirtp','100')";
									if($insrd = mysql_query($rdins))
										{
										$msg = "Record Insert Sucessfully";
										}
										else
										{
										$msg = "Record Not Insert Sucessfully";
										}
							}		
							else
							{
								$msg = "Record Already Exist in Table";
							}	
					}			
					else
					{
						$msg = "Record Not Found In Master Table";
					}				
			}
			else
			{
				$slrcd = "select * from srvs_main where cno='$dno'";
				$rdrcd = mysql_query($slrcd);
				$rdnum = mysql_num_rows($rdrcd);
				echo "rdnum srvs = $rdnum";
				$srvs_id = mysql_result($rdrcd,0,'sr_id');
				$dirtp = 2;
				if($rdnum<>"")
					{
						$chkdup = "select * from srvs_addbook where srvs_id='$srvsid' 
																and add_id = '$srvs_id' 
																and dir_type='$dirtp'";
						$chkrcd = mysql_query($chkdup);
						$rdnum = mysql_num_rows($chkrcd);
						if($rdnum=="")
							{
							$rdins = "insert into srvs_addbook(srvs_id, add_id, dir_type, add_limit)
									  values
									  ('$srvsid','$srvs_id','$dirtp','100')";
									if($insrd = mysql_query($rdins))
										{
										$msg = "Record Insert Sucessfully";
										}
										else
										{
										$msg = "Record Not Insert Sucessfully";
										}
							}		
							else
							{
								$msg = "Record Already Exist in Table"; 
							}	
					}				
					else
					{
						$msg = "Record Not Found";
					}				
		}
	$dno = "";
	$dir = "";
	}
}	
$sl4 = "select * from srvs_addbook where srvs_id = '$srvsid'";
$rd4 = mysql_query($sl4);
$chknum1 	= mysql_num_rows($rd4);
$limit		= 100;

$blimit = abs($limit-$chknum1);


/*

$select_rcd = "select *  from srvs_main where sr_id='$srvsid'";
$result_rcd = mysql_query($select_rcd,$abc);
$count_rcd = mysql_num_rows($result_rcd);

			$cname 		= mysql_result($result_rcd,0,'cname');
			$cpname 	= mysql_result($result_rcd,0,'cpname');
			$add1 		= mysql_result($result_rcd,0,'add1');
			$add2 		= mysql_result($result_rcd,0,'add2');
			$city 		= mysql_result($result_rcd,0,'city');
			$dist		= mysql_result($result_rcd,0,'dist');
			$stat 		= mysql_result($result_rcd,0,'stat');
			$count 		= mysql_result($result_rcd,0,'cout');
			$tel 		= mysql_result($result_rcd,0,'tel');
			$fax 		= mysql_result($result_rcd,0,'fax');
			$mob 		= mysql_result($result_rcd,0,'mob');
			$mail 		= mysql_result($result_rcd,0,'mail');
			$web 		= mysql_result($result_rcd,0,'web');
			$pin 		= mysql_result($result_rcd,0,'pin');
			$cno		= mysql_result($result_rcd,0,'cno');

			$citysl = "select * from city where citid='$city'";
			$cityrd = mysql_query($citysl,$abc);
			$citname = mysql_result($cityrd,0,'citname');
			
			$distsl = "select * from district where dstid='$dist'";
			$distrd = mysql_query($distsl,$abc);
			$distname = mysql_result($distrd,0,'dstname');
			
			
			$statsl = "select * from state where stid='$stat'";
			$statrd = mysql_query($statsl,$abc);
			$stname = mysql_result($statrd,0,'stname');
			
			$ctsl = "select * from country where cntid='$count'";
			$ctrd = mysql_query($ctsl,$abc);
			$ctname = mysql_result($ctrd,0,'cntname');


$slmoto = "select * from srvs_home where mdirid = '$srvsid'";
$rdmoto = mysql_query($slmoto,$abc);
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
<title>Address Book</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">

function check(frmAdd) 
	{

	if(frmAdd.dno.value=="")
		{
		alert("Please Enter Directory Reference No.");
		frmAdd.dno.focus();
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
              <td width="100%" height="107" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"> <table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="415" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="429">&nbsp;</td>
                          <td width="264" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="264" height="57" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr> 
                          <td height="35">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="49" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="1108"  height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>)                                </td>
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
      <td height="20" colspan="4" valign="top"><?php include 'include/sbar.php';?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="5" valign="top"><table class="tbbgcol" width="194" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="10" height="11"></td>
            <td width="170"></td>
            <td width="14"></td>
          </tr>
          <tr> 
            <td height="99"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="167" height="20" valign="top" class="org_border_box title"><div align="center">Directory 
                      Listing</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150324.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Service 
                    Provider Dir. Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150333.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Job 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150339.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Property 
                    Directory Entry</a></td>
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
            <td height="139"></td>
            <td valign="top"> <table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="20" valign="top" class="org_border_box title"><div align="center">Utilities</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150350.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    Book Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150349.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    Book Setup</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150355.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    List All</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150353.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    List Select One</a></td>
                </tr>
                <tr>
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150351.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Address 
                    List Delete One</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150323.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Directory 
                    Status </a></td>
                </tr>
                <tr> 
                  <td height="1"></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="296"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td height="19" colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19">&nbsp;</td>
          </tr>
        </table></tr>
    <tr> 
      <td width="22" height="240"></td>
      <td  valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable">
          <!--DWLayoutTable-->
          <tr> 
            <td width="61" height="22"></td>
            <td width="427" valign="top" align="center"><?php print "$msg"; ?> 
              &nbsp;</td>
            <td width="52"></td>
          </tr>
          <tr> 
            <td height="16"></td>
            <td></td>
            <td></td>
          </tr>
          <tr> 
            <td height="164">&nbsp;</td>
            <td valign="top"> <table id="dashed" width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <form name="frmAdd" action="0708150350.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>" method="post" onSubmit="return check(this)">
                  <tr> 
                    <td height="18" colspan="3" valign="top" class="grncel_LIT"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="19" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td width="189" height="20" valign="top" class="grncel_DRK">Addition 
                      To Address Book</td>
                    <td width="13" valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
                    <td width="225" valign="top" class="grncel_DRK"><input name="dno" type="text" id="dno"></td>
                  </tr>
                  <tr> 
                    <td height="20" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top" class="grncel_DRK" ><div align="center">&nbsp;</div></td>
                    <td valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="21" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="22" colspan="3" valign="top" class="grncel_DRK"><div align="center"> 
                        <input type="hidden" name="ID" value="<?php print "$srvsid"; ?>">
                        <input type="reset" name="Reset" value="    Reset   ">
                        <input type="submit" name="Submit2" value="   Addition  ">
                      </div></td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="23" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                </form>
              </table></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="30">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      <td width="10"></td>
    </tr>
    <tr> 
      <td height="11"></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="153"></td>
      <td valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable">
          <!--DWLayoutTable-->
          <tr> 
            <td height="20" colspan="3" valign="top" class="grncel_LIT"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr> 
            <td height="21" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr> 
            <td width="243" height="22" valign="top" class="grncel_DRK"><div align="right">Your 
                Address Limit</div></td>
            <td width="17" valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
            <td width="277" valign="top" class="grncel_DRK"><b><?php print "$limit"; ?></b> 
              &nbsp;</td>
          </tr>
          <tr> 
            <td height="23" valign="top" class="grncel_DRK"><div align="right">Record 
                Entered</div></td>
            <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
            <td valign="top" class="grncel_DRK"><strong><?php print "$chknum1"; ?>&nbsp; 
              </strong></td>
          </tr>
          <tr> 
            <td height="21" valign="top" class="grncel_DRK"><div align="right">Balance 
                Limit</div></td>
            <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
            <td valign="top" class="grncel_DRK"><strong><b><?php print "$blimit"; ?></b></strong>&nbsp;</td>
          </tr>
          <tr> 
            <td height="19" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp; </td>
          </tr>
          <tr> 
            <td height="27" colspan="3" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
        </table></td>
      <td></td>
    </tr>
    <tr> 
      <td height="93"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="19" colspan="4" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
