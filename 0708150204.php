<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();
		$rstid = $_GET['ID'];
		$compid = abs($rstid);
		if($rstid=="")
			{
				$rstid= $_GET['ID'];
				$compid=$rstid;
			}
		$line_num = 6;  
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
$select_rcd = "select *  from dir_main where dir_id='$rstid'";
$result_rcd = mysql_query($select_rcd);
$count_rcd = mysql_num_rows($result_rcd);
$cname = mysql_result($result_rcd,0,'dir_cname');
$slmoto = "select * from dir_home where mdirid = '$rstid'";
$rdmoto = mysql_query($slmoto);
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
	$rdmarq = mysql_query($slmarq);
	$count_rcd = mysql_num_rows($rdmarq);
	if($count_rcd<>0)
			{
				$marqs  = mysql_result($rdmarq,0,'comp_marque');
			}
			
mysql_free_result($result_rcd);
mysql_free_result($rdmoto);

?>
<html>
<head>
<title>Product Catalouge</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script type="text/javascript">
<!--
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
      <td width="100%" height="107" valign="top"> <table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
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
                          <td width="290" >&nbsp;</td>
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
                                <td width="131"></td> 
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
      <td height="20" valign="top"> <?php include 'include/bsbar.php';  ?></td>
    </tr>
    <tr> 
      <td height="19" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="763" height="19" valign="top" class="smallLink"><marquee>
              <?php print "$marqs"; ?></marquee></td>
          </tr>
        </table></tr>
    <tr> 
      <td height="100" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <tr> 
            <td height="20" colspan="3" align="center" valign="top" class="grncel_LIT title">Product 
              Catalouge </td>
          </tr>
          <tr> 
            <td width="18" height="14"></td>
            <td width="732"></td>
            <td width="13"></td>
          </tr>
          <tr>
            <td height="66"></td>
            <td align="center" valign="top"> 
              <!--DWLayoutTable-->
              <?php 
			  
				  $recd = mysql_query("SELECT ids FROM dir_compprod 
					 where mdirid='$rstid'") or die("Query failed a");
					$num_rows = mysql_num_rows($recd);
			  		if($num_rows==0)
						{	
						print "Not any Record Exist";
						exit;
						}
						
					$query = "SELECT ids FROM dir_compprod 
					 where mdirid='$rstid'";

					$result = mysql_query($query) or die("Query failed b");

					$recnum = mysql_num_rows($result);	
					
					if ($recnum<=0)
							{
							print " There is not any Record Exist";		
							exit;	
							}
							
					$listed=0;
					$count=0;
					while($line = mysql_fetch_array($result, MYSQL_ASSOC))
						{	
						if($listed>=$cur_rows && $listed< $max_rows)
							{
							foreach($line as $guest_rec[$count])
								{
								if($count==0) 
									{		
								
								$prodidsl = "select * from dir_compprod where ids ='$guest_rec[$count]'";
								$prodrcd = mysql_query($prodidsl);
								
								$prodid = mysql_result($prodrcd,0,'prod_id');
								$produm   = mysql_result($prodrcd,0,'prod_um');
								$prdrt	  = mysql_result($prodrcd,0,'prod_rt');
								$prddesc  = mysql_result($prodrcd,0,'prd_desc');
								$pids	  = mysql_result($prodrcd,0,'ids');
								$mids	= mysql_result($prodrcd,0,'mdirid');	
								
								$slprod = "select * from prod where prodid='$prodid'";
								$rdprod = mysql_query($slprod);
								$prodname = mysql_result($rdprod,0,'Prodnam');		
										
								$desc = substr($prddesc,0,200);
								
								
								$prodimgsl = "select * from dir_prodimg where mdir_id = '$rstid' and prod_id='$prodid'";
								$prodimgrd = mysql_query($prodimgsl)or die(mysql_error());
								$rcount = mysql_num_rows($prodimgrd);
								
								if($rcount<>"0")
									{
									$prodimg = mysql_result($prodimgrd,0,'imagename');
									$catid = mysql_result($prodimgrd,0,'cat_id');
									}
								else
									{
									$prodimg = "default.gif";
									}

								
								
print  "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
				<tr>
					<td  colspan=\"4\"  height=\"25\" class=\"org_border_t_cell\" align=\>
					<a href=\"#\" onClick=\"MM_openBrWindow('0708150213.php?ID=$rstid&PDNO=$pids','terms','scrollbars=yes,resizable=no,minimize=no, width=990,height=520')\"> $prodname</a></td>
													
				</tr>
					
				<tr>
													<td width=\"550\" class=\"org_border_l_cell\">Rates(Rs.)</td>
													<td width=\"40\" class=\"org_border_no_cell\">:</td>
													<td width=\"100\" class=\"org_border_no_cell\">$prdrt / $produm</td>	 
													<td  rowspan=\"3\" class=\"org_border_r_cell\" align=\"center\" valign=\"middle\">
													<a href=\"#\" onClick=\"MM_openBrWindow('0708150213.php?ID=$rstid&PDNO=$pids','terms','scrollbars=yes,resizable=no,minimize=no, width=990,height=550')\">
													<img src=prodimg/$catid/$prodimg width=\"175\" height=\"125\"></a></td>
												</tr>
												<tr>
													<td width=\"550\" class=\"org_border_l_cell\"><u>Product Description</u></td>
													<td width=\"40\" class=\"org_border_no_cell\">:</td>
													<td width=\"100\" class=\"org_border_no_cell\">&nbsp;</td>	 
												</tr>											<tr>
													<td width=\"550\" height=\"90\" valign=\"top\" class=\"org_border_l_cell\"><div align=\"justify\"><br>$desc
													<a href=\"#\" onClick=\"MM_openBrWindow('0708150213.php?ID=$rstid&PDNO=$pids','terms','scrollbars=yes,resizable=no,minimize=no, width=990,height=520')\">
								 				 [.....]</a>  		
													
													</div> </td>
													<td class=\"org_border_no_cell\" > </td>
													<td class=\"org_border_no_cell\" > </td>
													
												</tr>
												<tr>
													<td colspan=\"4\" class=\"org_border_b_cell\" >&nbsp;</td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>

												</tr>
												</table>
												
												
												";
						
										$count++;
										}
								}	 
							}
						$listed++;
					$count=0;
					}
			
			print(" 
				
					<table align=center border=0 width=547 cellspacing=0 valign=\"top\">
						<tr>
							<td width=15% align=left></td>
							<td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150204.php?ID=$compid&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150204.php?ID=$compid&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150204.php?ID=$compid&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	
			   ?>
            </td>
            <td></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td height="19" valign="top"><table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td  width="100%" height="19" valign="top" ><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
