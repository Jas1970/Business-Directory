<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();
$msg = $_GET['msg'];

if($msg=="1")
	{
		$contd = "Your Registration Has Been Confirmed <br> <br> Please Clear Your Payment <br> <br> Tempraory Login Id & Password mail and Sms you in 24 Hours";
	}
	else
	{
		$contd = "Your Recode Has Been Not Registered <br> <br> Please Send Feed Back <href=\"dirfback.php\"> Click Here </a>";
	}
	

$css="org_02.css";
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
<title>Registration Confirmation</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="1047" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tbody>
    <tr> 
      <td height="107" colspan="4" valign="top"> <table  class="aas" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="263" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr>
                  <td width="213" height="60" valign="top"><img src="images/img_bst/b2b.gif" width="263" height="57"></td>
                </tr>
              </table>              </td>
              <td width="374" height="22">&nbsp;</td>
              <td width="410" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="410" height="22" valign="top" class="bluenote"><div align="right"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                    Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                      Provider</a> || <a href="0708150116.php">Property 
                                Directory</a></div></td>
                              </tr>
                              
                              
              </table></td>
            </tr>
            <tr>
              <td height="38">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
            
            <tr>
              <td height="47">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
      </table></td>
    </tr>
    <tr> 
      <td width="249" height="1"></td>
      <td width="36"></td>
      <td width="690"></td>
      <td width="72"></td>
    </tr>
    <tr>
      <td height="20" colspan="4" valign="top"> <table class="tbbdrcol" width="100%" border="0"cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="110" height="20" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150115.php">Haanzee</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>"; ><div align="center"><a href="0708150116.php">Business 
                Dir. </a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150117.php">Placement 
                Dir. </a></div></td>
            <td width="138" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150118.php">Real 
                Estate Dir.</a> </div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150119.php">Service 
                Dir. </a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150122.php">Help</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150123.php" target="_parent"> 
                Site Map</a></div></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="808" valign="top"><?php include 'include/sidebar.php'; ?></td>
      <td>&nbsp;</td>
      <td valign="top">                                                                                                             <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="18" height="21">&nbsp;</td>
            <td width="537">&nbsp;</td>
            <td width="14">&nbsp;</td>
          </tr>
          <tr> 
            <td height="267">&nbsp;</td>
            <td valign="top"> <fieldset>
              <legend><strong>Registration Confirmation</strong></legend>
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="60" height="12"></td>
                  <td width="440"></td>
                  <td width="37"></td>
                </tr>
                <tr>
                  <td height="217"></td>
                  <td align="center" valign="top" class="title2"><?php print "$contd"; ?>&nbsp;</td>
                  <td></td>
                </tr>
                <tr>
                  <td height="19"></td>
                  <td>&nbsp;</td>
                  <td></td>
                </tr>
              </table>
              </fieldset></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td height="211">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
      </table>
      
      <td>&nbsp;</td>
    </tr>
    
    
    
    
    <tr>
      <td height="57" colspan="4" valign="top">      <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td  height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
      </table></td>
    </tr>
</table>
</body>
</html>
