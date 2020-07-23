<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';


//$srvsid = 3;
$srvsid = $_GET['ID'];
$sid 	= $_GET['SID'];

$op		= $_REQUEST['op'];
		$line_num = 5;  
		$max = $line_num;	// configure how many rows of message display per page
		$pg = $_REQUEST['pg'];
		$cur_rows = 0;
		$max_rows = $max;
	if($pg!=1)
		{
		for($i=1;$i<$pg;$i++)
		{
			$cur_rows=$cur_rows+$max;
			$max_rows=$max_rows+$max;
		}
	}

$msg	= $_GET['msg'];

if($msg=="1")
	{
	$msg	= "Record Sucessfully Updated";
	}
if($msg=="2")
	{
	$msg	= "Record Not Entered, Please Contact Site Admin.";
	}

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

$slbranch = "select * from srvs_branch where mids = '$srvsid'";
$rdbranch = mysql_query($slbranch,$abc);
$rcdcount = mysql_num_rows($rdbranch);
*/
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">

<script language="javascript">
function check(frmbasic) 
	{
	if(frmbasic.cpname.value=="")
		{
		alert("Please Enter Contact Person Name");
		frmbasic.cpname.focus();
		return (false);
		}
		
	if(frmbasic.add1.value=="")
		{
		alert("Please Enter Vaild Mailing Address");
		frmbasic.add1.focus();
		return (false);
		}		

	if(frmbasic.add2.value=="")
		{
		alert("Please Enter Vaild Mailing Address");
		frmbasic.add2.focus();
		return (false);
		}		

	if(frmbasic.city.value=="")
		{
		alert("Please Select Your City");
		frmbasic.city.focus();
		return (false);
		}

	if(frmbasic.dist.value=="")
		{
		alert("Please Select Your District");
		frmbasic.dist.focus();
		return (false);
		}

	if(frmbasic.state.value=="")
		{
		alert("Please Select Your State");
		frmbasic.state.focus();
		return (false);
		}
	if(frmbasic.count.value=="")
		{
		alert("Please Select Your Country Name");
		frmbasic.country.focus();
		return (false);
		}

	if(frmbasic.zip.value=="")
		{
		alert("Please Enter Your Pin Code");
		frmbasic.zip.focus();
		return (false);
		}
	if(frmbasic.tel.value=="")
		{
		alert("Please Enter Your Telephone Number");
		frmbasic.tel.focus();
		return (false);
		}
		
	if(frmbasic.mob.value=="")
		{
		alert("Please Enter Your Mobile Number");
		frmbasic.mob.focus();
		return (false);
		}
		
	if(frmbasic.mail.value=="")
		{
		alert("please Enter Confirmed and Operative E-Mail Id");
		frmbasic.mail.focus();
		return (false);
		}
		
	if(frmbasic.mail.value=="")
			{
			alert("please enter your email");
			frmbasic.mail.focus();
			return (false);
			}
	if(frmbasic.mail.value!="")
			{
			pass = frmbasic.mail.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmbasic.mail.focus();
				return (false);
				}
			}
	if(frmbasic.mail.value!="")
			{
			pass = frmbasic.mail.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmbasic.mail.focus();
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
      <td height="107" colspan="6" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"> <table align="center" class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="415" height="22" valign="top"> <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="428">&nbsp;</td>
                          <td width="265" rowspan="2" valign="top"> <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
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
      <td height="20" colspan="3" valign="top"><?php include 'include/sbar.php';?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="3" valign="top"><table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0" >
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
                 <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="srvsr_Adm_Dirsrvs.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Service 
                    Provider Dir. Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="srvsr_Adm_Plac.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Job 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="srvsr_Adm_prop.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Property 
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
            <td height="79"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="20" valign="top" class="org_border_box title"><div align="center">Directory 
                      Listing</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150320.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Add 
                    Branch Address</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150321.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Delete 
                    Branch Address</a></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="472"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td width="22" height="19">&nbsp;</td>
      <td width="547">&nbsp;</td>
    </tr>
    <tr>
      <td height="468">&nbsp;</td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="547" height="272" valign="top"> <table id="dashed1"  width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="547" height="20" align="center" valign="top" class="grncel_LIT title">Delete 
                    Branch From List</td>
                </tr>
                <tr> 
                  <td height="14"></td>
                </tr>
                <tr> 
                  <td height="18" align="center" valign="top"> 
				  <?php
		      if ($op != "del") 
				{
				$slcomp = "select * from srvs_branch where mids='$srvsid'";
				$rcdcomp = mysql_query($slcomp);
				$numrows = mysql_num_rows($rcdcomp);
				if ($numrows < 1)
					{
					print "<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">There No Any Record For Deletion</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150320.php?ID=$srvsid&SID=$sid&rand=$adms\"> Click Here </a></td></tr>
					</table>";
					exit;
					}
					print "<form method=post action=\"0708150321.php?ID=$srvsid&SID=$sid&rand=$adms\">
					
					<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
						";
					$rownum = abs(1);
					while ($pinfo = mysql_fetch_array($rcdcomp))
					 	{
						$ids	 = $pinfo['ids'];
						$asoadd1 = $pinfo['add1'];
						$asoadd2 = $pinfo['add2'];
						$asocity = $pinfo['city'];
						$asodist = $pinfo['dist'];
						$asostat = $pinfo['stat'];
						$asocont = $pinfo['cout'];
						$asotel  = $pinfo['tel'];
						$asomob	 = $pinfo['mob'];
						$asomail = $pinfo['mail'];
						$asocname = $pinfo['cpname'];
						$pincode = $pinfo['pin'];
						// city code
						$city_st = "select citname from city where citid='$asocity'";
						$city_rcd = mysql_query($city_st);
						$city_name = mysql_result($city_rcd,0,'citname');
						//state code
						$state_st = "select * from state where stid='$asostat'";
						$state_rcd = mysql_query($state_st);
						$state_name = mysql_result($state_rcd,0,'stname');
						
							print "<tr>
									<td width=\"487\" class=\"grncel_DRK\">$rownum. $city_name -($state_name),$asocname</td>
									<td width=\"50\" class=\"grncel_DRK small\">
										<input type=\"checkbox\" value=\"false\" name=\"cbox-$ids\" ><font face=\"arial\" size=\"1.5\" color=\"navy\">ID : $ids</font></td>
								  </tr>";
								$rownum++;
							
		  				}
print  "<input type=hidden name=ID value=$srvsid>";
print  "<input type=hidden name=op value=del>";
print  "<tr>
			<td  width=\"430px\" colspan=\"2\"><center><input type=submit name= Delete value=Delete></center></td>
	   </tr>";

print  "</table>";   

print  "</FORM>";
	}
	else if ($op == "del") 
	{
	$result=mysql_query("SELECT ids FROM srvs_branch ORDER BY ids") or die("Query failed");
	
	$query = "select * from srvs_branch where ids=";
		$flag=TRUE;
		while($lines = mysql_fetch_array($result, MYSQL_ASSOC))
		{   
			foreach($lines as $gid[0])
			{
				if($_REQUEST["cbox-$gid[0]"]=="false")
					if($flag==TRUE)
					{
						$query=$query.$gid[0];
						$flag=FALSE;
						
					}
					else
					{
						$query=$query." OR srvs_id=".$gid[0];
					}
			}
		}
       $result = mysql_query($query);
	   $rcdcount = mysql_num_rows($result);
	   $srvsid = mysql_result($result,0,'ids');
	   
	   
	   
	   if($rcdcount==0)
			{
			print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
			<tr><td class=\"org_border_t_cell\" align=\"center\">Please Select any One Record for Deletion</td</tr>
			<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150321.php?ID=$srvsid&SID=$sid&rand=$adms\"> Click Here </a></td></tr>
			</table>";
			exit;
			}	
	   
		 	$delrcd = "delete from srvs_branch where ids= '$srvsid'";
			   
					if($delnum = mysql_query($delrcd))
					{
					print "Record Sucessfully Delete Delete Another one <br> <a href=\"0708150321.php?ID=$srvsid&SID=$sid&rand=$adms\">Click here </a>";
					exit;
					}
					else
					{
					print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">You are Not Select Record Or Select More Then One,,</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150321.php?ID=$srvsid&SID=$sid&rand=$adms\"> Try Again Please</a></td></tr>
					</table>";
					}			
			}		
		
			   
			   ?> </td>
                </tr>
                <tr> 
                  <td height="220">&nbsp;</td>
                </tr>
              </table> 
          <tr> 
            <td height="57">&nbsp; </table>
    </tr>
    <tr>
      <td height="185">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="19" colspan="3" valign="top"> <table class="tbbgcolbot"  width="763" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="763" height="19" valign="top"  align="center"><?php include "include/footer.php"; ?> </td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>