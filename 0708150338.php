<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';
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
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tbody>
    <tr> 
      <td height="106" colspan="5" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="415" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> Business 
                                  Directory</a> || <a href="0708150144.php" target="_parent">Service 
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
      <td height="20" colspan="5" valign="top"><?php include 'include/sbar.php';?></td>
    </tr>
    <tr> 
      <td width="176" rowspan="5" valign="top"><table class="tbbgcol" width="194" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="10" height="11"></td>
            <td width="170"></td>
            <td width="14"></td>
          </tr>
          <tr>
            <td height="149"></td>
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
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150324.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Service 
                    Provider Dir. Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150333.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Job 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150338.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Job 
                    Authorisation Status</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150336.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Job 
                    Delete From Temp.</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150364.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Job 
                    Final Authorisation</a></td>
                </tr>

                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150339.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Property 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="10"></td>
                </tr>
              </table></td>
          <td></td>
          </tr>
          <tr>
            <td height="410"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          
      </table></td>
      <td width="30" height="19">&nbsp;</td>
      <td colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19">&nbsp;</td>
          </tr>
        </table></tr>
    <tr>
      <td height="253">&nbsp;</td>
      <td width="5"></td>
      <td width="825"  valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="537" height="22" valign="top" colspan="4" class="org_border_t_cell"><div align="center"> 
                Business Directory Authorisation Pending</div></td>
          </tr>
          <?php
				$slreg = "select distinct(tjob_id) from job_tmain where job_comp='$srvsid' and job_tag='2'";
				$rdreg = mysql_query($slreg);
				$advtcount = mysql_num_rows($rdreg);
				
				$numsr = abs(1);
				
				while ($posts_info = mysql_fetch_array($rdreg))
		 				{
							$jobid = $posts_info['tjob_id'];

							$job_sl = "select * from job_tmain where tjob_id='$jobid'";
							$jobrd = mysql_query($job_sl);
							$job_name = mysql_result($jobrd,0,'job_nm');
							$job_no   = mysql_result($jobrd,0,'job_no');
							$job_qual = mysql_result($jobrd,0,'job_qual');
							$job_sal  = mysql_result($jobrd,0,'job_sal');
							
							$qualsl = "select * from job_qual where jqual_id='$job_qual'";
							$qualrd = mysql_query($qualsl);
							$qual_name = mysql_result($qualrd,0,'jqual_name');


						print "<tr>
									<td width=\"200\" class=\"grncel_DRK\">$numsr. $job_name </td> 
									<td width=\"150\" class=\"grncel_DRK\">$qual_name </td>
									<td width=\"75\" class=\"grncel_DRK\">$job_no No. </td>
									<td width=\"100\" class=\"grncel_DRK\">$job_sal.00 </td>
									
							  </tr>";
					$numsr++;

						}			
			?>
          <tr> 
            <td width="537" height="231">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      <td width="11"></td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="200">&nbsp;</td>
      <td></td>
      <td valign="top"> 
	  
	  <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
          <!--DWLayoutTable-->
          
          <tr>
            <td height="143"></td>
            <td valign="top">
			
			  <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                <!--DWLayoutTable-->
                
                <tr>
                  <td colspan="3" valign="top" class="grncel_LIT title1" ><div align="center">Directory Listing Status &nbsp;</div></td>
                 </tr>
            <?php
				$slreg = "select job_id  from job_main where job_comp='$srvsid' and job_tag='2'";
				$rdreg = mysql_query($slreg)or die(mysql_error());
				$advtcount = mysql_num_rows($rdreg);
				$advtnum	= abs(10);
				$advtbal	= $advtnum-$advtcount;
				
				
				
				print "<tr>
							<td width=\"100%\" class=\"grncel_DRK\" colspan=\"3\">&nbsp;</td> 
						</tr>";
				print "<tr>
							<td width=\"50%\" class=\"grncel_DRK\">Record Listing In Directory</td>
							<td width=\"25%\" class=\"grncel_DRK\">Listing : $advtcount /Nos.</td>
							<td width=\"25%\" class=\"grncel_DRK\">Balance : $advtbal /Nos.</td>
					  </tr>";
			?>
			    <tr>
			      
                  <td colspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                 
			    </tr>
              </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="32"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td></td>
    </tr>
    <tr>
      <td height="72">&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="19" colspan="5" valign="top"> <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" align="center"><?php include "include/footer.php"; ?></td>
          </tr>
      </table></td>
    </tr>
</table>
</body>
</html>
