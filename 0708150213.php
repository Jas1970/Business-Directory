<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();

$rstid = $_GET['ID'];
$prodid = $_GET['PDNO'];

$prodsl = "select * from dir_compprod where ids='$prodid'";
$prodrd = mysql_query($prodsl);
$prodcnt = mysql_num_rows($prodrd);
if($prodcnt<>"0")
	{
		$prodid = mysql_result($prodrd,0,'prod_id');
		$produm	  = mysql_result($prodrd,0,'prod_um');
		$prodrt	  = mysql_result($prodrd,0,'prod_rt');
		$proddesc = mysql_result($prodrd,0,'prd_desc');
		
		$slprod = "select * from prod where prodid='$prodid'";
		$rdprod = mysql_query($slprod);
		$prodname = mysql_result($rdprod,0,'Prodnam');
		
		
	}
$prodimgsl = "select * from dir_prodimg where prod_id='$prodid'";
$prodimgrd = mysql_query($prodimgsl);
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
	$marq  = mysql_result($rdmoto,0,'comp_marque');		
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
<title>Complete Details of Products</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">

<script type="text/javascript">
<!--


//function MM_exitWindow(this) { //v2.0
//  window.exit(this);
//}
var message="Permission Denied!!";
function click(e) {
if (document.all) {
if (event.button==2||event.button==3) {
alert(message);
return false;
}
}
if (document.layers) {
if (e.which == 3) {
alert(message);
return false;
}
}
}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown=click;




//-->
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

</head>

<body>

							<table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                
    <td  width="100%" height="29" align="center" valign="middle" class="title4"><div align="center"><?php print "$cname"; ?></div></td>
                              </tr>
                              <tr> 
	                               <td height="19" align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>)</td>
	                          </tr>
                              <tr> 
	                               <td height="19" align="center" valign="top" class="small"><marquee><?php print "$marq"; ?></marquee></td>
	                          </tr>
    
	                        </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
							  <!--DWLayoutTable-->
												<tr>
													
    <td height="25" colspan="4" class="org_border_t_cell" align="center"><div align="left"><font size="3"><blink><strong><?php print "$prodname"; ?></strong></blink></font></div></td>
												</tr>
												
												<tr>
													<td width="488" height="21" class="org_border_l_cell">Rates(Rs.)</td>
													<td width="120" class="org_border_no_cell">:</td>
													<td width="244" class="org_border_no_cell"><?php print "$prodrt / $produm"; ?></td>	 
													
    <td width="367"  rowspan="3" align="centre" valign="middle" class="org_border_r_cell"><a href="javascript:self.close()"> 
      <img src= <?php  print "prodimg/$catid/$prodimg"; ?> width="250" height="200"></a></td>
												</tr>
												<tr>
													<td height="21" class="org_border_l_cell"><u>Product Description</u></td>
													<td class="org_border_no_cell">:</td>
													<td class="org_border_no_cell">&nbsp;</td>	 
												</tr>
												<tr>
													<td colspan="3" height="190" valign="top" class="org_border_l_cell"><div align="justify"><br> <?php print "$proddesc"; ?> </div> </td>
												</tr>
												<tr>
													<td height="42" class="org_border_l_cell">&nbsp;</td>
												    <td class="org_border_no_cell">&nbsp;</td>
												    <td class="org_border_no_cell">&nbsp;</td>
												    <td class="org_border_r_cell">&nbsp;</td>
											    </tr>
												<tr>
												  <td height="21" colspan="4" valign="top"  align="center" class="org_border_b_cell" >
                                               	    <div align="centre"><a href="javascript:self.close()"> <blink>Close Window</blink> </a></div></td>
                                                </tr>
</table>
							
							
							
							
							
</body>
</html>
