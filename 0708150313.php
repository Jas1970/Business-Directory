<?php require_once('h9/Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");
$srvsid = $_GET[ID];
$sr_id = $_GET[PDNO];

$prodsl = "select * from srvs_sadvts where ids='$sr_id' and mids='$srvsid'";
$prodrd = mysql_query($prodsl,$abc);
$prodcnt = mysql_num_rows($prodrd);
if($prodcnt<>"0")
	{
		$srvsn	 = mysql_result($prodrd,0,'sname');
		$city_id = mysql_result($prodrd,0,'city');
		$desc 	 = mysql_result($prodrd,0,'msg');
		
	}
	
			$citysl = "select * from city where citid='$city_id'";
			$cityrd = mysql_query($citysl,$abc);
			$city_name = mysql_result($cityrd,0,'citname'); 
	 
	 		
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
?>
<html>
<head>
<title>Complete Details of Products</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">

<script type="text/javascript">
<!--


//function MM_exitWindow(this) { //v2.0
  //window.exit(this);
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

							<table width="600px" border="0" cellpadding="0" cellspacing="0" align="center" >
                              <!--DWLayoutTable-->
                              <tr> 
                                
    <td width="529" height="29" align="center" valign="middle" class="title4"><div align="center"><?php print "$cname"; ?></div></td>
                              </tr>
                              <tr> 
	                               <td height="19" align="center" valign="top" class="bluenote">(<?php print "$pdet"; ?>)</td>
	                          </tr>
                              <tr> 
	                               <td height="19" align="center" valign="top" class="small"><marquee><?php print "$marq"; ?></marquee></td>
	                          </tr>
    
	                        </table>
							
<table width="600px" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr> 
    <td height="25" colspan="3" class="org_border_t_cell" align="center"><div align="left"><font size="3"><blink><strong><?php print "$srvsn"; ?></strong></blink></font></div></td>
  </tr>
  <tr> 
    <td width="353" height="19" valign="top" class="org_border_l_cell">City Name</td>
    <td width="30" valign="top" class="org_border_no_cell"><div align="center"><strong>:</strong></div></td>
    <td width="217" valign="top" class="org_border_r_cell"><?php print "$city_name"; ?></td>
  </tr>
  <tr> 
    <td height="19" colspan="3" valign="top" class="org_border_c_cell"><u>Product 
      Description</u></td>
  </tr>
  <tr> 
    <td height="117" colspan="3" valign="top" class="org_border_b_cell"><div align="justify"><br>
        <?php print "$desc"; ?> </div></td>
  </tr>
</table>
							<table align="center" width="600px">
								<tr>
									<td width="529" align="center" >
									<div align="center"><a href="javascript:self.close()"> <blink>Close Window</blink> </a></div>
									</td>
								</tr>
							</table>
							
							
							
							
</body>
</html>
