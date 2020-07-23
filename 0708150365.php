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
      <td height="107" colspan="5" valign="top"> <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
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
      <td height="20" colspan="5" valign="top"><?php include 'include/sbar.php';?></td>
    </tr>
    <tr> 
      <td width="205" rowspan="2" valign="top">
        <table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="10" height="11"></td>
            <td width="189"></td>
            <td width="6"></td>
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
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150344.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Property 
                    Auth. Status</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150342.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Property Del. From Temp.</a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150365.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>"> 
                    Property Final Authorisation</a></td>
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
      
      <td width="41" height="19">      
      <td width="35">      
      <td colspan="2" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="574" height="19" valign="top" class="smallLink"><marquee>
              <?php print "$marqs"; ?></marquee></td>
          </tr>
        </table></tr>
    <tr>
      <td height="512">      
      <td colspan="2" valign="top">                                                                  
	  
	    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
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
				$slcomp = "select * from prop_tmain where prop_comp_id='$srvsid' and prop_comp_type='2'";
				$rcdcomp = mysql_query($slcomp);
				$numrows = mysql_num_rows($rcdcomp);
				if ($numrows < 1)
					{
					print "<table width=\"700px\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<tr><td class=\"org_border_t_cell\" align=\"center\">Records Not Found for Authorisation</td</tr>
					<tr><td class=\"org_border_b_cell\" align=\"center\"><a href=\"0708150339.php?ID=$srvsid&SID=$sid&rand=$adms\"> Click Here </a></td></tr>
					</table>";
					exit;
					}
					print "<form method=post action=\"0708150365.php?ID=$srvsid&SID=$sid&rand=$adms\">
					
					<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
						";
					$rownum = abs(1);
					while ($pinfo = mysql_fetch_array($rcdcomp))
					 	{
						$proploc = $pinfo['prop_location'];
				   		$propty	 = $pinfo['prop_type'];
						$propar	 = $pinfo['prop_area'];
						$propart = $pinfo['prop_area_type'];
						$propprc = $pinfo['prop_price'];
						$prop_id = $pinfo['tprop_id'];
						
						$prtypesl 	= "select type_name from prop_type where type_id='$propty'";
						$prtyperd 	= mysql_query($prtypesl);
						$type_name	= mysql_result($prtyperd,0,'type_name');

						
							print "<tr>
									<td width=\"450\" class=\"grncel_DRK\">$rownum. $proploc &nbsp;&nbsp; ($type_name) &nbsp;&nbsp;  Price :$propprc.00</td>
									<td width=\"100\" class=\"grncel_DRK small\">
										<input type=\"checkbox\" value=\"false\" name=\"cbox-$prop_id\" ><font face=\"arial\" size=\"1.5\" color=\"navy\">ID : $prop_id</font></td>
								  </tr>";
								$rownum++;
							
		  				}
print  "<input type=hidden name=ID value=$srvsid>";
print  "<input type=hidden name=op value=auth>";
print  "<tr>
			<td  width=\"700px\" colspan=\"2\"><center><input type=submit name= Authorised value=Authorised></center></td>
	   </tr>";

print  "</table>";   

print  "</FORM>";
	}
	else if ($op == "auth") 
	{
	$result=mysql_query("select tprop_id from prop_tmain where prop_comp_id='$srvsid' and prop_comp_type='2'") or die("Query failed");
	
	$query = "select tprop_id from prop_tmain where prop_comp_type='2' and tprop_id=";
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
						$query=$query." OR dir_id=".$gid[0];
					}
			}
		}
        $result = mysql_query($query) or die("<h4> You are Not Select Record Or Select More Then One, srvsid= $srvsid <br>
													 <a href=\"0708150365.php?ID=$srvsid&SID=$sid&rand=$adms\"> Try Again Please </a></h4>");
		$ids = mysql_result($result,0,'tprop_id');
		$DirAdvtSl = "Select * from prop_tmain where tprop_id='$ids' and prop_comp_type='2' ";
		$DirAdvtRd = mysql_query($DirAdvtSl);
		while($inst = mysql_fetch_array($DirAdvtRd)) 
				{
				$type_id		= $inst['prop_type'];
				$pwt			= $inst['prop_want_to'];
				$pprice			= $inst['prop_price'];
				$parea			= $inst['prop_area'];
				$pareat			= $inst['prop_area_type'];
				$powner			= $inst['prop_owner_type'];
				$plocation		= $inst['prop_location'];
				$padd1			= $inst['prop_add1'];
				$padd2			= $inst['prop_add2'];
				$pcity_id		= $inst['prop_city'];
				$pdist_id		= $inst['prop_dist'];
				$prop_day		= $inst['prop_ad_day'];
				$prop_fr_dt		= $inst['prop_fr_dt'];				
				$prop_to_dt		= $inst['prop_to_dt'];
				$pstat_id		= $inst['prop_state'];
				$pcompid		= $inst['prop_comp_id'];
				$rcddir 		=2;
				
				$slreg = "select prop_comp_id from prop_main where prop_comp_id='$srvsid'";
				$rdreg = mysql_query($slreg);
				$advtcount = mysql_num_rows($rdreg);
				$advtnum = abs(10);
				$advtbal = $advtnum-$advtcount;
				if($advtbal==0)
					{
						print "<h4>Record Limit Is Over <br>
	 							Company Id = $srvsid <br>
								<a href=\"0708150339.php?ID=$srvsid&SID=$sid&rand=$adms\"> Click Here </a></h4></center>" ;

					}
					else
					{
					
					
					
				$inssql = "insert into prop_main
						(prop_comp_type, 
						prop_comp_id, 
						prop_location, 
						prop_add1, 
						prop_add2, 
						prop_city,
						prop_state,
						prop_want_to, 
						prop_price, 
						prop_area, 
						prop_area_type, 
						prop_owner_type, 
						prop_dist, 
						prop_ad_day, 
						prop_fr_dt, 
						prop_to_dt, 
						prop_type)
						values ('$rcddir','$srvsid','$plocation','$padd1', '$padd2','$pcity_id','$pstat_id',
						'$pwt','$pprice','$parea','$pareat','$powner','$pdist_id', '$prop_day',
						'$prop_fr_dt', '$prop_to_dt','$type_id')";
					if (mysql_query($inssql)) 
							{
							$delrcd = "delete from prop_tmain where tprop_id='$ids'";
							$rcddel = mysql_query($delrcd);

							print "<h4>Record Successfuly Authorised <br>
					 							Company Id = $srvsid <br>
												<a href=\"0708150365.php?ID=$srvsid&SID=$sid&rand=$adms\"> Authorised Another One </a></h4></center>" ;
							} 
							else 
							{
							$display_block .= "<h4>Record Not Authorised, something went wrong <br>
												Company Id = $srvsid <br>";
							exit;
							}
							}
						}
					}
			
			   ?>            </td>
          </tr>
          <tr> 
            <td height="412"></td>
          </tr>
                </table>
    <td width="39">          </tr>
    <tr> 
      <td height="19" colspan="5" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td height="1"></td>
      <td></td>
      <td></td>
      <td width="727"></td>
      <td></td>
    </tr>
</table>
</body>
</html>
