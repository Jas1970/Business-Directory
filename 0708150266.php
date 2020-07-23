<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';

	
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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tbody>
    <tr> 
      <td height="107" colspan="2" valign="top"> <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"><table class="aas"   width="100%" border="0" cellpadding="0" cellspacing="0">
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
                          <td width="109" height="35">&nbsp;</td>
                          <td width="306">&nbsp;</td>
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
                          <td width="114">&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="1"></td>
                          <td></td>
                          <td></td>
                          <td width="150"></td>
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
      <td height="20" colspan="2" valign="top"><?php include 'include/bbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="194px" rowspan="2" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="11"></td>
            <td width="170"></td>
            <td width="82"></td>
          </tr>
          <tr>
            <td height="140"></td>
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
            <td height="380"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          
        </table>
      <td width="574" height="19" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="574" height="19" valign="top" class="smallLink"><marquee>
              <?php print "$marqs"; ?></marquee></td>
          </tr>
        </table></tr>
    <tr> 
      <td height="512" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
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
		      if ($op != "auth") 
				{
				$slcomp = "select * from job_tmain where job_comp='$rstid' order by tjob_id";
				$rcdcomp = mysql_query($slcomp);
				$numrows = mysql_num_rows($rcdcomp);
				if ($numrows < 1)
					{
					print "<table width=\"800px\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">There No Any Record For Authorisation</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150236.php?ID=$rstid&SID=$sid&rand=$adms\"> Click Here </a></td></tr>
					</table>";
					exit;
					}
					print "<form method=post action=\"0708150266.php?ID=$rstid&SID=$sid&rand=$adms\">
					
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
						<td width=\"700px\" class=\"grncel_DRK\">$rownum. $jobname ($jgname) </td>
						<td width=\"100px\" class=\"grncel_DRK small\"><input type=\"checkbox\" value=\"false\" name=\"cbox-$jobid\" ><font face=\"arial\" size=\"1.5\" color=\"navy\">ID : $jobid</font></td>
								  </tr>";
								$rownum++;
							
		  				}
print  "<input type=hidden name=ID value=$rstid>";
print  "<input type=hidden name=op value=auth>";
print  "<tr>
			<td  width=\"700px\" colspan=\"2\"><center><input type=submit name=Authorised value=Authorised></center></td>
	   </tr>";

print  "</table>";   

print  "</FORM>";
	}
	else if ($_POST[op] == "auth") 
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
			<tr><td class=\"org_border_t_cell\" align=\"center\">Please Select any One Record for Authorisation</td</tr>
			<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150266.php?ID=$rstid&SID=$sid&rand=$adms\"> Click Here </a></td></tr>
			</table>";
			exit;
			}	
	   
		 //  $rstid = mysql_result($result,0,'tjob_id');
	   /*
		 	$delrcd = "delete from job_tmain where tjob_id= '$srvsid'";
			   
					if($delnum = mysql_query($delrcd,$abc))
					{
					print "Record Sucessfully Delete Delete Another one <br> <a href=\"0708150239.php?ID=$rstid&SID=$sid\">Click here </a>";
					exit;
					}
					else
					{
					print "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">You are Not Select Record Or Select More Then One,,</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150239.php?ID=$rstid&SID=$sid&rand=$adms\"> Try Again Please</a></td></tr>
					</table>";
					}			
			}		
		
			   
			   ?> 
		*/
		$query = "select tjob_id from job_tmain where job_comp='$rstid'";
        $result = mysql_query($query) or die("<h4> You are Not Select Record Or Select More Then One,  <br> <a 							
													href=\"0708150266.php?ID=$rstid&SID=$sid&rand=$adms\"> Try Again Please </a></h4>");
		$ids = mysql_result($result,0,'tjob_id');
		$DirAdvtSl = "Select * from job_tmain where job_comp='$rstid' order by tjob_id";
		$DirAdvtRd = mysql_query($DirAdvtSl);
		while($inst = mysql_fetch_array($DirAdvtRd)) 
				{
				$dir_id 	= $inst['job_comp'];
				$job_type 	= $inst['job_type'];
				$job_grp	= $inst['job_grp'];
				$job_inds	= $inst['job_inds'];
				$job_qual	= $inst['job_qual'];
				$job_age	= $inst['job_age'];
				$job_mage	= $inst['job_mage'];
				$job_sal	= $inst['job_sal'];
				$job_exp	= $inst['job_exp'];
				$job_FP		= $inst['job_FP'];
				$job_no		= $inst['job_no'];
				$job_fdt	= $inst['job_fdt'];
				$job_tdt	= $inst['job_tdt'];
				$job_day	= $inst['job_day'];	
				$job_tag	= $inst['job_tag'];
				$job_nm		= $inst['job_nm'];
				$job_city	= $inst['job_city'];
				$rcddir =1;
				
				$slreg = "select job_id  from job_main where job_comp='$rstid'";
				$rdreg = mysql_query($slreg);
				$advtcount = mysql_num_rows($rdreg);
				$advtnum = abs(10);
				$advtbal = $advtnum-$advtcount;
				if($advtbal==0)
					{
					$display_block .= "<h4>Record Successfuly Authorised <br>
										Company Id = $rstid <br>
							<a href=\"0708150266.php?ID=$rstid&SID=$sid&rand=$adms\"> Authorised Another One </a></h4>" ;
					}
					else
					{
						$inssql = "insert into job_main
						(job_type,job_grp,job_inds,job_qual,job_age,job_sal,
						job_exp,job_FP,job_no,job_fdt,job_tdt,job_day,job_mage,job_comp,job_tag,job_nm,job_city)
						values ('$job_type','$job_grp','$job_inds','$job_qual','$job_age','$job_sal','$job_exp',
						'$job_FP','$job_no','$job_fdt','$job_tdt','$job_day','$job_mage','$dir_id',
						'$rcddir','$job_nm','$job_city')";
						if (mysql_query($inssql, $abc)) 
							{
						    $delrcd = "delete from job_tmain where tjob_id='$ids'";
							$rcddel = mysql_query($delrcd);

							print  "<h4>Record Successfuly Authorised <br>
										Balance Record  = $advtbal <br>
							<a href=\"0708150266.php?ID=$rstid&SID=$sid&rand=$adms\"> Authorised Another One </a></h4>" ;
							} 
							else 
							{
						    echo "something went wrong";
							}
					}
				$display_block .= "<h4>Record Successfuly Authorised <br>
										Company Id = $rstid <br>
							<a href=\"0708150266.php?ID=$rstid&SID=$sid&rand=$adms\"> Authorised Another One </a></h4>" ;
		}
	
	}
?>
            </td>
          </tr>
          <tr> 
            <td height="412"></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td height="19" colspan="2" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
