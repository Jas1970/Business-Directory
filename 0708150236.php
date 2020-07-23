<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';


$msgs = $_GET['msgs'];

/*

$select_rcd = "select *  from dir_main where dir_id='$rstid'";
$result_rcd = mysql_query($select_rcd,$abc);
$count_rcd = mysql_num_rows($result_rcd);

$cname = mysql_result($result_rcd,0,'dir_cname');


$slmoto = "select * from dir_home where mdirid = '$rstid'";
$rdmoto = mysql_query($slmoto,$abc);
$rdcount = mysql_num_rows($rdmoto);


if($rdcount<>"0")
	{
	$pdet  = mysql_result($rdmoto,0,'comp_moto');
	$chome = mysql_result($rdmoto,0,'comp_home');
	$css   = mysql_result($rdmoto,0,'comp_css');	
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



	
	
	$slmarq = "select * from dir_home where mdirid = '$rstid'";
	$rdmarq = mysql_query($slmarq,$abc);
	$count_rcd = mysql_num_rows($rdmarq);
	if($count_rcd<>0)
			{
				$marqs  = mysql_result($rdmarq,0,'comp_marque');
			}


			$cadd = "select * from dir_add where dir_id='$rstid'";
			$caddrcd = mysql_query($cadd,$abc);
			$diradd1 = mysql_result($caddrcd,0,'dir_add1');
			$diradd2 = mysql_result($caddrcd,0,'dir_add2');
			$dircity = mysql_result($caddrcd,0,'dir_city');
			$dirstat = mysql_result($caddrcd,0,'dir_stat');
			$dircount = mysql_result($caddrcd,0,'dir_cont');
			$dirtel = mysql_result($caddrcd,0,'dir_tel');
			$dirfax = mysql_result($caddrcd,0,'dir_fax');
			$dirmob = mysql_result($caddrcd,0,'dir_mob');
			$dirmail = mysql_result($caddrcd,0,'dir_mail');
			$dirweb = mysql_result($caddrcd,0,'dir_web');
			$dirpin = mysql_result($caddrcd,0,'dir_pin');
			
			$citysl = "select * from city where citid='$dircity'";
			$cityrd = mysql_query($citysl,$abc);
			$citname = mysql_result($cityrd,0,'citname');

			$statsl = "select * from state where stid='$dirstat'";
			$statrd = mysql_query($statsl,$abc);
			$stname = mysql_result($statrd,0,'stname');

			$ctsl = "select * from country where cntid='$dircount'";
			$ctrd = mysql_query($ctsl,$abc);
			$ctname = mysql_result($ctrd,0,'cntname');

*/
?>
<html>
<head>
<title>Placement Entery</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">
<!--
function check(frmPlc) 
	{
	if(frmPlc.jobname.value=="")
		{
		alert("This Facility Avilable later on as soon as possible");
		frmPlc.jobname.focus();
		return (false);
		}
	//if(frmPlc.jobname.value!="")
	//	{
	//	alert("This Facility Avilable later on as soon as possible");
	//	frmPlc.jobname.focus();
	//	return (false);
	//	}

	if(frmPlc.jobnamer.value=="")
		{
		alert("Please Select Job / Vacancy Name");
		frmPlc.jobnamer.focus();
		return (false);
		}
	if(frmPlc.jgrp.value=="")
		{
		alert("Please Select Job Group");
		frmPlc.jgrp.focus();
		return (false);
		}
	if(frmPlc.jinds.value=="")
		{
		alert("Please Select Job In Industries");
		frmPlc.jinds.focus();
		return (false);
		}
	if(frmPlc.jqual.value=="")
		{
		alert("Please Select Job Minimum Qualification");
		frmPlc.jqual.focus();
		return (false);
		}
	if(frmPlc.minage.value=="")
		{
		alert("Please Enter Job Minimum Age Limit");
		frmPlc.minage.focus();
		return (false);
		}
	if(frmPlc.maxage.value=="")
		{
		alert("Please Enter Job Miximum Age Limit");
		frmPlc.maxage.focus();
		return (false);
		}
	if(frmPlc.jexp.value=="")
		{
		alert("Please Enter Job Miximum Expreience");
		frmPlc.jexp.focus();
		return (false);
		}
	if(frmPlc.jsal.value=="")
		{
		alert("Please Enter Job Miximum Salary/Wages");
		frmPlc.jsal.focus();
		return (false);
		}
	if(frmPlc.jtype.value=="")
		{
		alert("Please Select Job Type");
		frmPlc.jtype.focus();
		return (false);
		}
	if(frmPlc.jcity.value=="")
		{
		alert("Please Select Job In City");
		frmPlc.jcity.focus();
		return (false);
		}
	if(frmPlc.jno.value=="")
		{
		alert("Please Enter Number of Job / Vacancy");
		frmPlc.jno.focus();
		return (false);
		}
	if (!document.frmPlc.prv.checked)
		{
		alert("please Select Privacy Terms");
		frmPlc.prv.focus();
		return (false);
		}
	if (!document.frmPlc.trm.checked)
		{
		alert("please Select Terms & Condition You are Accepted");
		frmPlc.trm.focus();
		return (false);
		}	
	}
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
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
                          <td width="480" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="480" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></td>
                              </tr>
                          </table></td>
                          <td width="351">&nbsp;</td>
                          <td width="277" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
                                <td width="100%" height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
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
      <td height="20" colspan="4" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="191" rowspan="5" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="12" height="11"></td>
            <td width="170"></td>
            <td width="9"></td>
          </tr>
          <tr>
            <td height="169"></td>
            <td valign="top"><table width="170" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="170" height="20" valign="top" class="org_border_box title"><div align="center">Directory 
                      Listing</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150222.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Business 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150236.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Job 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150241.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Job 
                    Authorisation Status</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150266.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Job 
                    Final Authorisation </a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150239.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Job 
                    Delete From Temp.</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150242.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Property 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="10"></td>
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
      <td width="70" height="16"></td>
      <td width="674"></td>
      <td width="112"></td>
    </tr>
    <tr>
      <td height="27"></td>
      <td valign="top" align="center"><strong><?php print "$msgs"; ?></strong>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="576"></td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form name="frmPlc" action="0708150240.php?ID=<?php print"$rstid";?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> " method="post" onSubmit="return check(this)">
            <tr> 
              <td height="22" colspan="4" valign="top" class="org_border_t_cell"><div align="center">Vacancy 
                  Entry</div></td>
            </tr>
            <tr> 
              <td height="22" colspan="4" valign="top" class="grncel_DRK"><div align="center"></div></td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">Job 
                  Name (Display)</div></td>
              <td width="10" valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td width="352" valign="top" class="grncel_DRK"><input name="jobname" type="text" id="jobname" size="50" maxlength="50"></td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">Job 
                  Name (Record Only)</div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><select name="jobnamer" id="jobnamer">
                <?php
                
                                $jtype_id=0;
                                $addJobTypeData = jobtype($jtype_id);
                                for($index=0;$index < count($addJobTypeData);$index++)
                                {
                                    $jobTypeClass = $addJobTypeData[$index];
                                    $jtype_id = $jobTypeClass->getJtype_id();
                                    $jobtype_name = $jobTypeClass->getJtype_name();
                                    print "<option value=\"$jtype_id\">";
				    print "$jobtype_name</option>";
                                  } 
  				?>

                </select></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Job 
                  Group </div></td>
              <td valign="top" class="grncel_DRK"> <div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><select name="jgrp" id="jgrp">
                            <?php
                                $grp_id=0;
                                $addGrpData = jobgrp($grp_id);
                                for($index=0;$index < count($addGrpData);$index++)
                                {
                                    $jobGrpClass = $addGrpData[$index];
                                    $jobgrp_id = $jobGrpClass->getJobgrp_id();
                                    $jobgrp_name = $jobGrpClass->getJobgrp_name();
                                    print "<option value=\"$jobgrp_id\">";
				    print "$jobgrp_name</option>";
                                  } 
  				?>

                </select></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Job 
                  In Industries</div></td>
              <td valign="top" class="grncel_DRK"> <div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><select name="jinds" id="jinds">
                            <?php
                                $inds_id=0;
                                $addIndsData = jobinds($inds_id);
                                for($index=0;$index < count($addIndsData);$index++)
                                {
                                    $jobIndsClass = $addIndsData[$index];
                                    $jobinds_id = $jobIndsClass->getJobinds_id();
                                    $jobinds_name = $jobIndsClass->getJobinds_name();
                                    print "<option value=\"$jobinds_id\">";
				    print "$jobinds_name</option>";
                                  } 
  				?>

                      
                </select></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Min. 
                  Qualification </div></td>
              <td valign="top" class="grncel_DRK"> <div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><select name="jqual" id="jqual">
                                <?php
                                $jobqual_id=0;
                                $addQualData = jobqual($jobqual_id);
                                 for($index=0;$index < count($addQualData);$index++)
                                {
                                    $jobQualclass = $addQualData[$index];
                                    $jobqual_id = $jobQualclass->getJobqual_id();
                                    $jobqual_name = $jobQualclass->getJobqual_name();
                                    print "<option value=\"$jobqual_id\">";
				    print "$jobqual_name</option>";
                                  } 
  				?>

                </select></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Age 
                  Min. .</div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><input name="minage" type="text" id="minage" size="5" maxlength="2">
                Years , Age Max.<strong>:</strong> <input name="maxage" type="text" id="maxage" size="5" maxlength="2">
                Years </td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">Minimum 
                  Job Experience</div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"> <input name="jexp" type="text" id="jexp" size="5" maxlength="2">
                Years </td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right"> 
                  Salary (Rs.)</div></td>
              <td valign="top" class="grncel_DRK"> <div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"> <div align="left"> 
                  <input name="jsal" type="text" id="jsal" size="15" maxlength="10">
                  (Annual)</div></td>
            </tr>
            <tr> 
              <td height="24" colspan="2" valign="top" class="grncel_DRK"><div align="right">Job 
                  Type </div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><select name="jtype" id="jtype">
                  <option value="1">Full Time</option>
                  <option value="2">Part Time</option>
                  <option value="3">Both</option>
                </select></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Job 
                  Location </div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><select name="jcity" id="jcity">
                         <?php
                                $citid=0;
		                $addCityData = dircity($citid);
                                for($index=0;$index < count($addCityData);$index++)
                                    {
                                    $cityclass = $addCityData[$index];
                                    $citid = $cityclass->getCitid();
                                    $citname = $cityclass->getCitname();
                                    $dstname = $cityclass->getDistid();
                                    
                                    print "<option value=\"$citid\">";
                                    print "$citname</option>";
                                  } 
                        	?>

                      
                </select></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><div align="right">Number 
                  of Vacancy </div></td>
              <td valign="top" class="grncel_DRK"><div align="center"><strong>:</strong></div></td>
              <td valign="top" class="grncel_DRK"><input name="jno" type="text" id="jno" size="5" maxlength="3"></td>
            </tr>
            <tr> 
              <td height="22" colspan="2" valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top" class="grncel_DRK"><!--DWLayoutEmptyCell-->&nbsp;</td>
            </tr>
            <tr> 
              <td  width="20" valign="top" class="grncel_DRK"> <input name="prv" type="checkbox" id="prv" value="checkbox"></td>
              <td colspan="3" valign="top" class="grncel_DRK bluenote"> <p align="justify">The 
                  personal information provided in the above form will be treated 
                  by Haanzee.com in accordance with the provisions of Indian privacy 
                  law, which regulates the protection of persons and other entities 
                  with respect to the processing of personal data.</p>
                <p align="justify">
                  The act of providing the above-mentioned personal information 
                  is absolutely voluntary and at the complete discretion of the 
                  person concerned. According to law, I inconditionally accept 
                  that my personal data wil be subject to all handling operations 
                  indicated in Law .<br>
                </p>                </td>
            </tr>
            <tr> 
              <td height="19" valign="top" class="grncel_DRK bluenote"> <input name="trm" type="checkbox" id="trm" value="checkbox"></td>
              <td colspan="3" valign="top" class="grncel_DRK bluenote">I have 
                read and accept abc.com 's <a href="#" onClick="MM_openBrWindow('terms.php','terms','scrollbars=yes,resizable=yes,height=300,width=550')">terms 
                and conditions</a>.</td>
            </tr>
            <tr> 
              <td class="grncel_DRK"  height="19" colspan="4" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
            </tr>
            <tr> 
              <td class="grncel_DRK" height="24" colspan="4" valign="top"><div align="center"> 
                  <input type="hidden" name="ID" value="<?php print "$rstid"; ?>">
                  <input type="hidden" name="SID" value="<?php print "$sid"; ?>">
                  <input name="Submit" type="submit" value="Submit Page Details">
                  <input type="reset" name="Submit2" value="Reset Page Details">
                </div></td>
            </tr>
            <tr> 
              <td class="grncel_DRK" height="62"></td>
              <td class="grncel_DRK" width="158"></td>
              <td class="grncel_DRK"></td>
              <td class="grncel_DRK"></td>
            </tr>
          </form>
        </table>
      
      <td></td>
    </tr>
    <tr>
      <td height="11"></td>
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td height="19" colspan="4" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" align="center"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>