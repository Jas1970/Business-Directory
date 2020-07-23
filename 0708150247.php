<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';


$slproduct = "select * from dir_compprod where mdirid= '$rstid'";
$rdproduct = mysql_query($slproduct)or die(mysql_error());
$rcdcount = mysql_num_rows($rdproduct);

    $slcatct = "select distinct(cat_id) from dir_catprd where main_dirid= '$rstid'";
	$rdcatct = mysql_query($slcatct)or die(mysql_error());
	$catcount = mysql_num_rows($rdcatct);
	$slprdct = "select * from dir_catprd where main_dirid= '$rstid'";
	$rdprdct = mysql_query($slprdct)or die(mysql_error());
	$prdcount = mysql_num_rows($rdprdct);


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
<title>Select Category</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
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
                          <td width="537" height="22" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="537" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                Directory</a></td>
                              </tr>
                          </table></td>
                          <td width="294">&nbsp;</td>
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
      <td width="194" rowspan="5" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="11"></td>
            <td width="170"></td>
            <td width="82"></td>
          </tr>
          <tr>
            <td height="138"></td>
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
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150242.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Property 
                    Directory Entry</a></td>
                </tr>
                <tr> 
                  <td height="1"></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box bluenote bgimg"><a href="0708150247.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Property 
                    Auth. Status</a></td>
                </tr>
                <tr> 
                  <td height="19" valign="top" class="org_border_box bluenote bgimg"><a href="0708150265.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Property 
                    Final Auth.</a></td>
                </tr>


                <tr> 
                  <td height="19" valign="top" class="org_border_box bluenote bgimg"><a href="0708150245.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Del. 
                    Property From Temp.</a></td>
                </tr>
            </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="507"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          
        </table></td>
      <td height="19" colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19">&nbsp;</td>
          </tr>
        </table></tr>
    <tr> 
      <td  height="253"></td>
      <td  valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="22" valign="top" colspan="2" class="org_border_t_cell"><div align="center"> 
                Property Directory Authorisation Pending</div></td>
          </tr>
          <?php
				$slreg = "select distinct(tprop_id) from prop_tmain where prop_comp_id='$rstid'";
				$rdreg = mysql_query($slreg);
				$advtcount = mysql_num_rows($rdreg);
			
				$numsr = abs(1);
				
				while ($posts_info = mysql_fetch_array($rdreg))
		 				{
							$propid = $posts_info['tprop_id'];

							$prop_sl 	= "select * from prop_tmain where tprop_id='$propid'";
							$proprd 	= mysql_query($prop_sl);
							$prop_type 	= mysql_result($proprd,0,'prop_type');
							$prop_loc   = mysql_result($proprd,0,'prop_location');
							$prop_area 	= mysql_result($proprd,0,'prop_area');
							$prop_price = mysql_result($proprd,0,'prop_price');
							$prop_areat = mysql_result($proprd,0,'prop_area_type');
							
							$prtypesl 	= "select type_name from prop_type where type_id='$prop_type'";
							$prtyperd 	= mysql_query($prtypesl);
							$type_name	= mysql_result($prtyperd,0,'type_name');


						print "<tr>
									<td width=\"100%\" colspan = \"2\" class=\"grncel_DRK\"><b>$numsr. $prop_loc ($type_name)</b></td> 
							   </tr>	
									<td width=\"65%\" class=\"grncel_DRK\">&nbsp;&nbsp;&nbsp;&nbsp;Area : $prop_area / $prop_areat</td>
									<td width=\"35%\" class=\"grncel_DRK\">Approx. Price : $prop_price.00</td>
							  </tr>";
					$numsr++;

						}			
			?>
          <tr> 
            <td height="231">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      <td width="10"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="200"></td>
      <td valign="top"> 
	  
	  <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="9"></td>
            <td width="511"></td>
            <td width="12"></td>
          </tr>
          <tr>
            <td height="143"></td>
            <td valign="top">
			
			 <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                <!--DWLayoutTable-->
                <tr> 
                  <td ></td>
                  <td ></td>
                  <td></td>
                </tr>
                <tr> 
                  <td colspan="3" valign="top" class="grncel_LIT title1" ><div align="center">Directory 
                      Listing Status &nbsp;</div></td>
                </tr>
            <?php
				$slreg = "select prop_comp_id from prop_main where prop_comp_id='$rstid'";
				$rdreg = mysql_query($slreg);
				$advtcount = mysql_num_rows($rdreg);
				$advtnum = abs(10);
				$advtbal = $advtnum-$advtcount;		
				print "<tr>
							<td class=\"grncel_DRK\" colspan=\"3\">&nbsp;</td> 
						</tr>";
				print "<tr>
							<td width=\"50%\" class=\"grncel_DRK\">Property Record Status In Directory</td>
							<td width=\"25%\" class=\"grncel_DRK\">Listing : $advtcount /Nos.</td>
							<td width=\"25%\" class=\"grncel_DRK\">Balance : $advtbal /Nos.</td>

					  </tr>";
			?>
			
			
			    <tr> 
                  <td colspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td></td>
                  <td></td>
                  <td></td>
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
      <td height="84"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="19" colspan="4" valign="top"> <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top" align="center"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
