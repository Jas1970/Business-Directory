<?php require_once('Connections/db.inc.php'); ?>
<?php
$db  = new DB();
$db->open();

$cname		= $_POST['cname'];
$cpname		= $_POST['cpname'];
$add1		= $_POST['add1'];	
$add2		= $_POST['add2'];	
$countryid	= $_POST['country_dropdown'];
$stateid	= $_POST['state_dropdown'];
$districtid	= $_POST['district_dropdown'];
$cityid		= $_POST['city_dropdown'];
$zip	 	= $_POST['zip'];
$tel	 	= $_POST['tel'];	
$fax 	 	= $_POST['fax'];
$mno	 	= $_POST['mno'];	
$email		= $_POST['email'];	
$aemail		= $_POST['aemail'];
$web	 	= $_POST['web'];
$capcha		= $_POST['capitacha'];

// Registration 

$category	 	= $_POST['category_dropdown'];
$product		= $_POST['product_dropdown'];
$ryear			= $_POST['years'];

//

		$catgsl	=	"select * from catg where catid='$category'";
		$catgrs	=	mysql_query($catgsl);
		$catname = mysql_result($catgrs,0,'catname');
		
		$prodsl	=	"select * from prod where prodid = '$product'";
		$prodrs	=	mysql_query($prodsl);
		$prodname = mysql_result($prodrs,0,'prodnam');


		$countsel = "select * from country where cntid='$countryid'";
		$countrcd = mysql_query($countsel);
		$count_name = mysql_result($countrcd,0,'cntname');

		$statsel = "select * from state where stid='$stateid'";
		$statrcd = mysql_query($statsel);
		$state_name = mysql_result($statrcd,0,'stname');


		$distsel = "select * from district where dstid='$districtid'";
		$distrcd = mysql_query($distsel);
		$dist_name = mysql_result($distrcd,0,'dstname');



		$dcitsel = "select * from city where citid='$cityid'";
		$dcitrcd = mysql_query($dcitsel);
		$city_name = mysql_result($dcitrcd,0,'citname');


		

		
		
		
		

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
$db->close();
?>
<html>
<head>
<title>Registration (Business Directory)</title>
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
                  <td width="257" height="59" valign="top"><img src="images/img_bst/b2b.gif" width="263" height="57"></td>
                </tr>
              </table>              </td>
              <td width="373" height="19">&nbsp;</td>
              <td width="411" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="411" height="19" valign="top" class="bluenote"><div align="right"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                    Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                      Provider</a> || <a href="0708150116.php">Property 
                                Directory</a></div></td>
                              </tr>
                              
                              
                              
              </table></td>
            </tr>
            <tr>
              <td height="40">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
            
            <tr>
              <td height="48">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
      </table></td>
    </tr>
    <tr> 
      <td width="249" height="1"></td>
      <td width="39"></td>
      <td width="664"></td>
      <td width="95"></td>
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
      <td height="1"></td>
      <td></td>
      <td rowspan="2" valign="top">                                                 
        <form name="tdata" id="tdata" method="post" action="0708150104.php">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr> 
              <td   height="20">&nbsp;</td>
              <td  valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td  >&nbsp;</td>
            </tr>
            <tr> 
              <td height="19">&nbsp;</td>
              <td valign="top"><strong>1 - Create a New Registration (Business 
                Directory)</strong></td>
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
                    <td height="21" valign="top"><div align="right"><strong> 
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
              <td height="384"></td>
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
                    <td valign="top"> <?php print "$city_name"; ?> <input name="city" id="city" value="<?php print "$cityid"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="24" valign="top"><div align="right"><strong>District</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$dist_name"; ?> <input name="dist" id="dist" value="<?php print "$districtid"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="24" valign="top"><div align="right"><strong>State</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$state_name - ($count_name)"; ?> 
                      <input name="state" id="state" value="<?php print "$stateid"; ?>" type="hidden"> 
                      <input name="country" id="country" value="<?php print "$countryid"; ?>" type="hidden"> 
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
                    <td valign="top"> <?php print "$email"; ?> <input name="email" id="email" value="<?php print "$email"; ?>" type="hidden"></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right"><strong>Alternate E-Mail</strong></div></td>
                    <td valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$aemail"; ?> <input name="aemail" id="aemail" value="<?php print "$aemail"; ?>" type="hidden"></td>
                    <td></td>
                  </tr>
                  
                  <tr> 
                    <td height="22" valign="top"> <div align="right"><strong>Web 
                        Site</strong></div></td>
                    <td valign="top"> <div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$web"; ?> <input name="web" id="web" value="<?php print "$web"; ?>" type="hidden"> 
                      &nbsp; </td>
                    <td></td>
                  </tr>
                </table>
                 </fieldset> 
                 <fieldset>
                <legend><strong>02. Contact Detail </strong></legend>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->

                  <tr> 
                    <td width="327" height="22" valign="top"><div align="right"><strong> Business Category </strong></div></td>
                    <td width="24" valign="top"><div align="center"><strong>:</strong></div></td>
                    <td valign="top"> <?php print "$catname"; ?> <input name="catid" id="catid" value="<?php print "$category"; ?>" type="hidden"></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right"><strong>Product Name </strong></div></td>
                    <td valign="top"><div align="center"><strong> : </strong></div></td>
                    <td valign="top"> <?php print "$prodname"; ?> <input name="prodid" id="prodid" value="<?php print "$product"; ?>" type="hidden"></td>
                    <td></td>
                  </tr>
                  <tr> 
                    <td height="22" valign="top"><div align="right"><strong>Registration For </strong></div></td>
                    <td valign="top"><div align="center"><strong> : </strong></div></td>
                    <td valign="top"> <?php print "$ryear"; ?> Years <input name="ryear" id="ryear" value="<?php print "$ryear"; ?>" type="hidden"></td>
                    <td></td>
                  </tr>
                  
                  
                  
                  
                  
                  
                  <tr> 
                    <td height="21" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td></td>
                  </tr>
                  
                  <tr> 
                    <td height="21" valign="top"><div align="right">Validation Code</div></td>
                    <td valign="top">: </td>
                    <td valign="top"><?php print "$capcha"; ?> <input name="capcha" id="capcha" value="<?php print "$capcha"; ?>" type="hidden"></td>
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
                    <td height="32">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                  </tr>
                </table>
                </fieldset></td>
              <td></td>
            </tr>
            <tr> 
              <td height="29"></td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
          </table>
        </form>
      
      <td></td>
    </tr>
    <tr>
      <td rowspan="2" valign="top"><?php include 'include/sidebar.php'; ?> </td>
      <td height="711"></td>
      <td></td>
    </tr>
    <tr>
      <td height="184"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
        <tr>
      <td height="57" colspan="4" valign="top">      <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td  height="19" valign="top" ><?php include "include/footer.php"; ?></td>
          </tr>
      </table></td>
    </tr>
</table>
</body>
</html>
