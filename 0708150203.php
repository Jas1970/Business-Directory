<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();
$rstid = $_GET['ID'];
$select_rcd = "select *  from dir_main where dir_id='$rstid'";
$result_rcd = mysql_query($select_rcd);
//$count_rcd = mysql_num_rows($result_rcd);
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
?>
<html>
<head>
<title>Products List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<script language="javascript">

function check(frm1) 
	{
	if(frm1.dirprod.value=="")
		{
		alert("Please Enter Web site Reference No. : ");
		frm1.dirprod.focus();
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
      <td height="107" colspan="4" valign="top"> <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
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
                          <td width="275" >&nbsp;</td>
                          <td width="269" rowspan="2" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                        </tr>
                        <tr> 
                          <td height="35">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr> 
                          <td height="49" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="127"></td> 
                                <td width="100%" height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
                                <td width="115"></td>
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
      <td height="20" colspan="4" valign="top"> <?php include 'include/bsbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="3" valign="top"><table class="tbbgcol" width="100%" border="0" cellpadding="0" cellspacing="0" valign="top" >
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
                <form name="frm1" action="0708150113.php" method="post" onSubmit="return check(frm1)">
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
            <td height="313"></td>
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
      <td width="22" height="508"></td>
      <td width="75%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="20" colspan="3" align="center" valign="top" class="grncel_LIT title">Product 
              List </td>
          </tr>
          <tr> 
            <td width="18" height="14"></td>
            <td width="698"></td>
            <td width="16"></td>
          </tr>
          <tr>
            <td height="66"></td>
            <td valign="top">
			
			<table width="100%" border="1" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                
				<?php 
					
					$slprd = "select distinct(cat_id) from dir_compprod where mdirid = '$rstid'";
					$rdprd = mysql_query($slprd); 
					$rcdcount = mysql_num_rows($rdprd);
					$rownum = abs(1);
					if($rcdcount<>0)
						{
					while ($posts_info = mysql_fetch_array($rdprd))
							 {
							$catid = $posts_info['cat_id'];
							$cat_st = "select catname from catg where catid='$catid'";
							$catnm = mysql_query($cat_st);
							$cat_name = mysql_result($catnm,0,'catname');
			
							print "<tr> 
				    			  <td width=\"10%\" class=\"grncel_LIT\">$rownum</td>	
					              <td width=\"55%\" height=\"19\" valign=\"top\" class=\"grncel_LIT\"><b>$cat_name</b></td>
                				  <td width=\"15%\" valign=\"top\" class=\"grncel_LIT\">Prod. Rate</td>
								  <td width=\"20%\" valign=\"top\" class=\"grncel_LIT\">As on Date</td>
				                </tr>";
	
							$slprod = "select dir_compprod.ids,dir_compprod.prod_id,mdirid,prod_um, prod_rt,date_format(asd,'%d-%m-%Y') as asd1 ,prd_desc, cat_id, prod.prodid, prod.prodnam from dir_compprod, prod 
										where dir_compprod.prod_id=prod.prodid and
										cat_id='$catid' and mdirid='$rstid'";
							$rdprod = mysql_query($slprod);


	//						$prodid = "select * from dir_compprod where cat_id= '$catid' and mdirid= '$rstid' order by comp_prod";
//							$prodrcd = mysql_query($prodid,$abc);
							$prdcount = mysql_num_rows($rdprod);
							$prodnum = abs(1);
							
							while ($postsinfo = mysql_fetch_array($rdprod))
								{
								
//								$slprod = "select dir_compprod.prod_id, prod.prodid, prod.prodnam from dir_compprod, prod where dir_compprod.prod_id=prod.prodid";
//								$rdprod = mysql_query($slprod,$abc);
//								$prodname = mysql_result($rdprod,0,'prodnam');
								
								$prodname = $postsinfo['prodnam'];
								$produm   = $postsinfo['prod_um'];
								$prdrt	  = $postsinfo['prod_rt'];
								$pids	  = $postsinfo['ids'];
								$pdate	  = $postsinfo['asd1'];
								
								//$fdate 	  = date('d-m-Y',$pdate);
								
				print  "
			<tr> 
	         <td width=\"10%\" class=\"grncel_DRK\" align=\"right\">$prodnum.</td>
	   		 <td width=\"55%\" class=\"grncel_DRK\">&nbsp;
			 <a href=\"#\" onClick=\"MM_openBrWindow('0708150213.php?ID=$rstid&PDNO=$pids','terms','scrollbars=yes,resizable=no,minimize=no, width=990,height=520')\">
				  $prodname</a>  </td>	
    		  <td width=\"15%\" valign=\"top\" class=\"grncel_DRK\"> $prdrt / $produm</td>
			  <td width=\"20%\" valign=\"top\" class=\"grncel_DRK\">$pdate</td>
				                </tr>";
								$prodnum++;

								}
								$rownum++;
							}	
						}	
						else
						{
							print "<tr>
										<td><center>There is not any Record exist</center></td>
									</tr>
										
										";
						}

$db->close();
			   ?>

			   </table>
			   
			   
			  </td>
            <td></td>
          </tr>
          <tr>
            <td height="408"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td width="10"></td>
    </tr>
    <tr>
      <td height="18"></td>
      <td></td>
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
