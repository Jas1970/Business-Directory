<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';


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
	
/*
$select_rcd = "select *  from srvs_main where sr_id='$srvsid'";
$result_rcd = mysql_query($select_rcd);
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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tbody>
    <tr> 
      <td height="107" colspan="6" valign="top"> <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas"   width="100%" border="0" cellpadding="0" cellspacing="0">
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
      <td height="20" colspan="6" valign="top"><?php include 'include/sbar.php';?></td>
    </tr>
    <tr> 
      <td width="181" rowspan="2" valign="top">
        <table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="13" height="11"></td>
            <td width="170"></td>
            <td width="11"></td>
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
            <td height="380"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table>
      
      <td width="56" height="19">      
      <td colspan="3" valign="top">                                                                                           <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="574" height="19" valign="top" class="smallLink"><marquee>
              <?php print "$marqs"; ?></marquee></td>
          </tr>
      </table>
      <td width="67">      
    </tr>
    <tr>
      <td height="521">      
      <td width="2">      
      <td width="727" valign="top">                                                                                                                              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="574" height="20" align="center" valign="top" class="grncel_LIT title"></td>
          </tr>
          <tr> 
            <td height="14"></td>
          </tr>
          <tr> 
            <td height="66" align="center" valign="top"> 
              <!--DWLayoutTable-->
              <?php
		      if ($op != "del") 
				{
				$slcomp = "select * from job_tmain where job_comp='$srvsid' and job_tag='2' order by tjob_id";
				$rcdcomp = mysql_query($slcomp);
				$numrows = mysql_num_rows($rcdcomp);
				if ($numrows < 1)
					{
					print "<table width=\"700px\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">There No Any Record For Deletion</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150333.php?ID=$srvsid&SID=$sid&rand=$adms\">For Addition, Click Here </a></td></tr>
					</table>";
					exit;
					}
					print "<form method=post action=\"0708150336.php?ID=$srvsid&SID=$sid&rand=$adms\">
					
					<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
						";
					$rownum = abs(1);
					while ($pinfo = mysql_fetch_array($rcdcomp))
					 	{
						$jobname = $pinfo['job_nm'];
				   		$jgrp	 = $pinfo['job_grp'];
						$jno	 = $pinfo['job_no'];
						$jobid   = $pinfo['tjob_id'];
						
						$select_rcd = "select grp_name from job_grp where grp_id='$jgrp'";
						$result_rcd = mysql_query($select_rcd);
						$jgname = mysql_result($result_rcd,0,'grp_name');
						
							print "<tr>
									<td width=\"337\" class=\"grncel_DRK\">$rownum. $jobname ($jgname) </td>
									<td width=\"200\" class=\"grncel_DRK small\"><input type=\"checkbox\" value=\"false\" name=\"cbox-$jobid\" ><font face=\"arial\" size=\"1.5\" color=\"navy\">ID : $jobid</font></td>
								  </tr>";
								$rownum++;
							
		  				}
print  "<input type=hidden name=ID value=$rstid>";
print  "<input type=hidden name=op value=del>";
print  "<tr>
			<td  width=\"700px\" colspan=\"2\"><center><input type=submit name= Delete value=Delete></center></td>
	   </tr>";

print  "</table>";   

print  "</FORM>";
	}
	else if ($op == "del") 
	{
	$result=mysql_query("SELECT tjob_id FROM job_tmain ORDER BY tjob_id") or die("Query failed");
	
	$query = "select * from job_tmain where tjob_id=";
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
	   
	   
	   
	   if($rcdcount==0)
			{
			print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
			<tr><td class=\"org_border_t_cell\" align=\"center\">Please Select any One Record for Deletion</td</tr>
			<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150336.php?ID=$srvsid&SID=$sid&rand=$adms\"> Click Here </a></td></tr>
			</table>";
			exit;
			}	
	   
		   $jid = mysql_result($result,0,'tjob_id');
	   
		 	$delrcd = "delete from job_tmain where tjob_id= '$jid'";
			   
					if($delnum = mysql_query($delrcd))
					{
					print "Record Sucessfully Delete Delete Another one <br> <a href=\"0708150336.php?ID=$srvsid&SID=$sid&rand=$adms\">Click here </a>";
					exit;
					}
					else
					{
					print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">You are Not Select Record Or Select More Then One,,</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150336.php?ID=$srvsid&SID=$sid&rand=$adms\"> Try Again Please</a></td></tr>
					</table>";
					}			
			}		
		
			   
			   ?>            </td>
          </tr>
          <tr> 
            <td height="412"></td>
          </tr>
      </table>
    <td width="1">    
        
    <td>    
    </tr>
    <tr> 
      <td height="19" colspan="6" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
