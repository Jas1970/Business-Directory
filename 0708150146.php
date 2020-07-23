<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();

$cname 		= $_POST['cname'];
$cpname		= $_POST['cpname'];
$mno		= $_POST['mno'];
$add1		= $_POST['add1'];
$add2		= $_POST['add2'];

$city		= $_POST['city_dropdown'];
$district	= $_POST['district_dropdown'];
$state		= $_POST['state_dropdown'];
$country	= $_POST['country_dropdown'];

$zip		= $_POST['zip'];
$tel		= $_POST['tel'];
$fax		= $_POST['fax'];
$email		= $_POST['email'];
$aemail		= $_POST['aemail'];
$web		= $_POST['web'];
$capcha		= $_POST['capitacha'];




// Registration Details

$srvs_id	= $_POST['category_dropdown'];
$subsrvs_id	= $_POST['sub_service_dropdown'];
$ryears		= $_POST['years'];


		$countsel = "select * from country where cntid='$country'";
		$countrcd = mysql_query($countsel);
		$count_name = mysql_result($countrcd,0,'cntname');

		$statsel = "select * from state where stid='$state'";
		$statrcd = mysql_query($statsel);
		$state_name = mysql_result($statrcd,0,'stname');

		$distsel = "select * from district where dstid='$district'";
		$distrcd = mysql_query($distsel);
		$dist_name = mysql_result($distrcd,0,'dstname');

		$dcitsel = "select * from city where citid='$city'";
		$dcitrcd = mysql_query($dcitsel);
		$city_name = mysql_result($dcitrcd,0,'citname');


		$srvssl = "select * from dir_srvs where srvs_id='$srvs_id'";
		$srvsrs = mysql_query($srvssl);
		$srvs_name = mysql_result($srvsrs,0,'srvs_name');

		$ssrvssl	= "select * from dir_subsrvs where sn_id='$subsrvs_id'";
		$ssrvsrs	= mysql_query($ssrvssl);
		$sname		= mysql_result($ssrvsrs,0,'sname');
		

		
		
		
		

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
<title>Registration (Service Provider Directory)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tbody>
    <tr> 
      <td height="111" colspan="4" valign="top"> <table  class="aas" width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="263" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr>
                  <td width="197" height="53" valign="top"><img src="images/img_bst/b2b.gif" width="263" height="57"></td>
                </tr>
              </table>              </td>
              <td width="372" height="22">&nbsp;</td>
              <td width="412" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="412" height="22" valign="top" class="bluenote"><div align="right"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                    Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                      Provider</a> || <a href="0708150116.php">Property 
                                Directory</a></div></td>
                              </tr>
                              
              </table></td>
            </tr>
            <tr>
              <td height="35">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
            
            <tr>
              <td height="54">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
      </table></td>
    </tr>
    <tr> 
      <td width="249" height="1"></td>
      <td width="20"></td>
      <td width="670"></td>
      <td width="108"></td>
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
      <td rowspan="3" valign="top"><?php include 'include/sidebar.php'; ?></td>
      <td height="13"></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="643"></td>
      <td valign="top">                             <form name="tdata" id="tdata" method="post" action="0708150148.php">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr> 
              <td width="11" height="20">&nbsp;</td>
              <td width="537" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td width="14">&nbsp;</td>
            </tr>
            <tr> 
              <td height="19">&nbsp;</td>
              <td valign="top"><strong>1 - Create a New Registration (Service 
                Provider Directory)</strong></td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="19">&nbsp;</td>
              <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="103"></td>
              <td valign="top"> <fieldset>
                <legend><strong>01. Registration Main Detail </strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="131" height="6"></td>
                    <td width="15"></td>
                    <td width="391"></td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><div align="right"><strong>Company 
                        Name</strong></div></td>
                    <td height="21" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td height="21" valign="top"> <?php print "$cname"; ?> <input name="cname" id="cname" value="<?php print "$cname"; ?>" type="hidden"> 
                      &nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><div align="right"><strong>Contact 
                        Person</strong></div></td>
                    <td height="21" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td height="21" valign="top"> <?php print "$cpname"; ?> <input name="cpname" id="cpname" value="<?php print "$cpname"; ?>" type="hidden"> 
                      &nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><div align="right"><strong>Mobile 
                        No.</strong></div></td>
                    <td height="21" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td height="21" valign="top"> <?php print "$mno"; ?> <input name="mno" id="mno" value="<?php print "$mno"; ?>" type="hidden"> 
                      &nbsp;</td>
                  </tr>
                  <tr> 
                    <td height="12"></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
                </fieldset></td>
              <td></td>
            </tr>
            <tr> 
              <td height="27"></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="366"></td>
              <td valign="top"> <fieldset>
                <legend><strong>02. Contact Detail </strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="133" height="22" valign="top"><div align="right"><strong>Address</strong></div></td>
                    <td width="15" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td width="386" valign="top"> <?php print "$add1"; ?> <input name="add1" id="add1" value="<?php print "$add1"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td width="3"></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"> <?php print "$add2"; ?> <input name="add2" id="add2" value="<?php print "$add2"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="24" valign="top"><div align="right"><strong>City</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$city_name"; ?> <input name="city" id="city" value="<?php print "$city"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="24" valign="top"><div align="right"><strong>District</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$dist_name"; ?> <input name="district" id="district" value="<?php print "$district"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="24" valign="top"><div align="right"><strong>State</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$state_name - ($count_name)"; ?> 
                      <input name="state" id="state" value="<?php print "$state"; ?>" type="hidden"> 
                      <input name="country" id="country" value="<?php print "$country"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right"><strong>Zip 
                        Code</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$zip"; ?> <input name="zip" id="zip" value="<?php print "$zip"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right"><strong>Tel.No.</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$tel"; ?> <input name="tel" id="tel" value="<?php print "$tel"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right"><strong>Fax. 
                        No.</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$fax"; ?> <input name="fax" id="fax" value="<?php print "$fax"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right"><strong>E-Mail</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$email"; ?> <input name="email" id="email" value="<?php print "$email"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right"><strong>Alternative E-Mail</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$aemail"; ?> <input name="aemail" id="aemail" value="<?php print "$aemail"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
				   <tr> 
                    <td height="22" valign="top"> <div align="right"><strong>Web Site</strong></div></td>
                    <td valign="top"> <div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$web"; ?> <input name="web" id="web" value="<?php print "$web"; ?>" type="hidden"> &nbsp; </td>
                    <td></td>
                  </tr>
					<tr> 
                    <td height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
                  
                  <tr> 
                    <td height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
				   <tr> 
                    <td height="22" valign="top"> <div align="right"><strong>Service Category Name</strong></div></td>
                    <td valign="top"> <div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$srvs_name"; ?> <input name="srvs_id" id="srvs_id" value="<?php print "$srvs_id"; ?>" type="hidden"> &nbsp; </td>
                    <td></td>
                  </tr>
				   <tr> 
                    <td height="22" valign="top"> <div align="right"><strong>Sub Service Name</strong></div></td>
                    <td valign="top"> <div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$sname"; ?> <input name="subsrvs_id" id="subsrvs_id" value="<?php print "$subsrvs_id"; ?>" type="hidden"> &nbsp; </td>
                    <td></td>
                  </tr>

				   <tr> 
                    <td height="22" valign="top"> <div align="right"><strong>Registration For Years</strong></div></td>
                    <td valign="top"> <div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$ryears"; ?> <input name="ryears" id="ryears" value="<?php print "$ryears"; ?>" type="hidden"> &nbsp; </td>
                    <td></td>
                  </tr>
				<tr> 
                    <td height="22" valign="top"> <div align="right"><strong>Security Code</strong></div></td>
                    <td valign="top"> <div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$capcha"; ?> <input name="capcha" id="capcha" value="<?php print "$capcha"; ?>" type="hidden"> &nbsp; </td>
                    <td></td>
                  </tr>
	           <tr> 
                    <td height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="20" colspan="3"  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="24" colspan="3"  valign="top" class="grncel_DRK_tb"><div align="center"> 
                        <input name="Cancel" id="Cancel" value="Cancel/Modify" onClick="history.back()" type="button">
                        <input type="submit" name="Submit2" value="       Confirm     ">
                      </div></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="13"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
                </fieldset></td>
              <td></td>
            </tr>
            <tr> 
              <td height="66"></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
          </table>
      </form>
      
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="152">&nbsp;</td>
      <td>&nbsp;</td>
      <td>      
    </tr>
    <tr>
      <td height="57" colspan="4" valign="top">    <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td  height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
      </table></td>
    </tr>
</table>
</body>
</html>
