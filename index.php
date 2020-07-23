<?php
include("Connections/db.inc.php");
$db  = new DB();
$db->open();

$slcat = "select distinct(catprd.catid) as catid, catg.catname as catname from catprd, catg where catprd.catid=catg.catid order by catname";
$db->query($slcat);
//$rdcat = mysql_query($slcat) or die(mysql_error());
$dataprn = "";
while ($posts_info = $db->fetchArray())
		{
			$catid = $posts_info['catid'];
			$cname = $posts_info['catname'];
			//$prodid  = $posts_info['prodid'];
			$dataprn .= "<li><a href=\"0708150156.php?CATID=$catid\"><font class=\"smally\"> $cname</font> </a>";
			$dataprn .= "<br>";
			$slprod = "select catprd.catid, catprd.prodid, prod.prodnam from catprd, prod where catprd.catid='$catid' and catprd.prodid=prod.prodid order by prodnam";
			//$db->query($slprod);
			$rdprod = mysql_query($slprod);
			$numr = abs(1);
			while($p_info = mysql_fetch_array($rdprod))
				{
				$prod_name = $p_info['prodnam'];
				$prodid 	= $p_info['prodid'];
				$dataprn .= "&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;$numr.<a href=\"0708150114.php?CID=$catid&PID=$prodid\"><font class=\"smallz\"> $prod_name</font> </a><br>";
				$numr++;
				if($numr=="6")
					{
						$dataprn .= "&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<a href=\"0708150156.php?CATID=$catid\"><font class=\"smallz\">& Many More. . . . . .</font> </a><br>";
						break;
					}
				} 
			}

$slsrvs = "select * from dir_srvs order by srvs_name";
$rdsrvs = mysql_query($slsrvs)or die("Error to Open Table Service Master");
//$db->query($slsrvs);
//$db->fetchArray()
$datprn = "<br>";
while ($ps_info = mysql_fetch_array($rdsrvs))
		{
		$srvs_id = $ps_info['srvs_id'];
		$srvs_name = $ps_info['srvs_name'];
		$datprn .= "<li><a href=\"0708150162.php?SRVSID=$srvs_id\"><font class=\"smally\"> $srvs_name</font> </a>";
		$datprn .= "<br>";

		$slsubsrvs = "select * from dir_subsrvs where srvs_id = '$srvs_id' order by sname";
		$db->query($slsubsrvs);
		$rdsubsrvs = mysql_query($slsubsrvs);
//$db->fetchArray()
		$nmr = abs(1);
		while($pinfo = mysql_fetch_array($rdsubsrvs))
				{
				$sname = $pinfo['sname'];
				$sn_id = $pinfo['sn_id'];
				$datprn .= "&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;$nmr. <a href=\"0708150157.php?SID=$srvs_id&SSID=$sn_id\"><font class=\"smallz\"> $sname</font> </a><br>";
				$nmr++;
				if($nmr=="6")
					{

					$datprn .= "&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<a href=\"0708150162.php?SRVSID=$srvs_id\"><font class=\"smallz\">& Many More . . . . . . . . . </font> </a><br>";
					break;
					}
				}

	}
	$db->close();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Business Directory</title>

<link href=css/default.css rel="stylesheet" type="text/css">

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {font-style: italic}
.style2 {font-size: 11px}

#apDiv2 {
	position:absolute;
	left:493px;
	top:17px;
	width:296px;
	height:66px;
	z-index:2;
}
.style4 {color: #000000}
-->
</style>

<script language="javascript">

function check1(frm1) 
	{
	if(frm1.dirprod.value=="")
		{
		alert("Please Enter Business Directory & Service Provider ID");
		frm1.dirprod.focus();
		return (false);
		}
	}	
</script>



</head>

<body topmargin="0" background="img_bst/img01.gif">
<table  width="85%" height="950px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7F7F7">
  <!--DWLayoutTable-->
  <tr>
    <td height="154" colspan="8" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="33%" height="154" valign="top"><div align="center"><img src="images/img_bst/b2b.gif" width="263" height="57" /></div></td>
        <td width="34%" valign="top"><div align="center"><img src="images/Haanzee.gif" width="292" height="137" /></div></td>
        <td width="33%" valign="top"><div align="center">
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','273','height','71','src','images/img_bst/Haanzee','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/img_bst/Haanzee' ); //end AC code
        </script>
          <noscript>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="273" height="71">
              <param name="movie" value="images/img_bst/Haanzee.swf" />
              <param name="quality" value="high" />
              <embed src="images/img_bst/Haanzee.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="273" height="71"></embed>
            </object>
            </noscript>
        </div></td>
      </tr>
    </table>
    </td>
  </tr>
  
  
  <tr>
    <td height="69" colspan="8" valign="top"><table background="images/img_bst/mbar.jpg" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td class="org_border_r_cell" width="19" height="67">&nbsp;</td>
          <td class="org_border_r_cell" width="194" valign="middle" ><div align="center"><a href="0708150115.php"> Haanzee </a></div></td>
          <td class="org_border_r_cell" width="197" valign="middle" ><div align="center"><a href="search.php"> Business Directory </a></div></td>
          <td class="org_border_r_cell" width="197" valign="middle"><div align="center"><a href="0708150144.php">  Service Providor Directory </a></div></td>
          <td class="org_border_r_cell" width="198" valign="middle"><div align="center"><a href=" 0708150131.php"> HR Directory</a></div></td>
          <td class="org_border_r_cell" width="199" valign="middle"><div align="center"><a href=" 0708150137.php">Real Estate Directory</a></div></td>
          <td width="26">&nbsp;</td>
        </tr>
      
      
      
    </table></td>
  </tr>
  <tr>
    <td width="4" height="36">&nbsp;</td>
    <td width="4"></td>
    <td width="374"></td>
    <td width="4"></td>
    <td width="290"></td>
    <td width="53"></td>
    <td width="354"></td>
    <td width="8"></td>
  </tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  


    <tr>
    <td height="30"></td>
    <td colspan="2" rowspan="2" valign="top" >
      <table width="350px" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="350" height="24" class="org_border_box"><div align="left" class="style4">
            <div align="center"><strong>Products List With Category</strong></div>
          </div></td>
        </tr>
        <tr> 
          <td height="16" class="org_border_c_cell"> 
               <marquee id="HotNews" onmouseover=this.stop() onmouseout=this.start() scrollAmount=1 scrollDelay=40 truespeed=1 direction=up width=350 height=150>
              <?php print "$dataprn";  ?> 
              </marquee> </td>
        </tr>
        <tr> 
          <td height="17"  valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td height="37"></td>
        </tr>
      </table></td>
    <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="302" height="30" valign="top"><div align="center">
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','199','height','30','src','images/img_bst/Registration','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/img_bst/Registration' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="199" height="30">
            <param name="movie" value="images/img_bst/Registration.swf" />
            <param name="quality" value="high" />
            <embed src="images/img_bst/Registration.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="199" height="30"></embed>
          </object>
        </noscript></div></td>
        </tr>
      
    </table></td>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top"><table width="350px" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
       
          <tr> 
            <td width="350" height="24" valign="top"  class="org_border_box"><div align="center"><strong>Service 
            Provider with Category</strong></div></td>
          </tr>
          <tr> 
            <td height="18"  align="left" valign="top" class="org_border_c_cell"> 
                <marquee id="HotNews" onmouseover=this.stop() onmouseout=this.start() scrollAmount=1 scrollDelay=40 truespeed=1 direction=up width=350 height=150>
                <?php print "$datprn";  ?> 
            </marquee>                </td>
          </tr>
         <tr> 
          <td height="17"  valign="top" class="org_border_b_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td height="37"></td>
        </tr>
    </table></td>
  </tr>
    <tr>
      <td height="66"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  
    <tr>
    <td height="145" ></td>
    <td colspan="3" valign="top"><table width="350px" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="350" height="24" ><div align="center" class="style4"><strong>Search 
          For Products</strong></div></td>
        </tr>
        <tr> 
          <td height="65" ><p>
            <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','351','height','65','title','Directory Search','src','images/img_bst/Dirsearch','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/img_bst/Dirsearch' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="351" height="65" title="Directory Search">
              <param name="movie" value="images/img_bst/Dirsearch.swf" />
              <param name="quality" value="high" />
              <embed src="images/img_bst/Dirsearch.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="351" height="65"></embed>
            </object></noscript>
          </p></td>
        </tr>
        <tr> 
          <td height="34" align="center" > <a href="0708150114.php" target="_parent"><img src="images/img_bst/btn_srch_Bdir.gif" width="135" height="33" border="0"></a></td>
        </tr>
        <tr> 
          <td height="9"></td>
        </tr>
        <tr> 
          <td width="350" height="1"></td>
        </tr>
    </table></td>
    <td></td>
    <td>&nbsp;</td>
    <td rowspan="2" valign="top"><table width="350px" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="350" height="22" ><div align="center" class="style4"><strong>Search 
          For Service</strong></div></td>
        </tr>
        <tr> 
          <td height="21" ><p>
            <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','351','height','65','src','images/img_bst/Srvssearch','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/img_bst/Srvssearch' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="351" height="65">
              <param name="movie" value="images/img_bst/Srvssearch.swf" />
              <param name="quality" value="high" />
              <embed src="images/img_bst/Srvssearch.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="351" height="65"></embed>
            </object></noscript>
          </p></td>
        </tr>
        <tr> 
          <td height="21" align="center"> <a href="0708150114.php" target="_parent"><img src="images/img_bst/btn_srch_Bsrvs.gif" width="135" height="33" border="0"></a></td>
        </tr>
        <tr> 
          <td height="26"></td>
        </tr>
      </table></td>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1" ></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  
  
  
  
  
  
  <tr>
    <td height="119" ></td>
    <td></td>
    <td colspan="2" valign="top" >
    <form name="frm1" action="0708150113.php" method="post" onSubmit="return check1(frm1)">
    <table width="350px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="350" height="22" align="center" valign="top" class="org_border_box"><strong>Product Site &amp; Service  Site</strong></td>
    </tr>
                <tr> 
                    <td height="21" class="org_border_c_cell" align="center">&nbsp;</td>
                </tr>
                  
                <tr> 
                    <td height="21" class="org_border_c_cell" align="center"> <input name="dirprod" type="text" size="30" maxlength="20" class="list_border"></td>
                </tr>
                <tr> 
                    <td height="21" class="org_border_c_cell" align="center">&nbsp;</td>
                </tr>
                <tr> 
                  <td height="22" class="org_border_b_cell" align="center"><input type= "image"  src="images/img_bst/sign_in.gif" value="Submit">  </td>
                </tr>
    </table>
    </form>    </td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td height="29" ></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="272" colspan="8" valign="top" ><table  background="images/img_bst/footer.jpg" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="41" height="19">&nbsp;</td>
          <td width="949">&nbsp;</td>
          <td width="40">&nbsp;</td>
        </tr>
      <tr>
        <td height="188">&nbsp;</td>
          <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="169" height="20" valign="top" class="org_border_r_cell"><div align="right" class="smallLinkUnder"><span class="style2"><a href="">Home Page</a></span><img src="images/img_bst/larrow.gif" /></div></td>
                <td width="194" valign="top" class="org_border_r_cell"><div align="right"><span class="style1"><strong class="style2"><a href="0708150116.php">Business Directory</a></strong> <img src="images/img_bst/lrarrow.gif" width="13" height="13" /></span></div></td>
                <td width="194" valign="top" class="org_border_r_cell"> <div align="right"><span class="style2"><strong><em class="smallLinkUnder"><a href="0708150119.php">Service Provide</a></em>r</strong></span> <img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
                <td width="194" valign="top" class="org_border_r_cell"> <div align="right" class="style2"><em class="smallLinkUnder"><strong><a href="0708150118.php">Real Estate</a></strong></em> <img src="images/img_bst/lrarrow.gif" width="13" height="13" /></div></td>
                <td  width="198" valign="top" class="org_border_r_cell"><div align="right"><em class="style2"><strong><a href="0708150117.php">Placement (HR)</a></strong></em> <img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
              </tr>
              <tr>
                <td height="20" valign="top" class="org_border_r_cell"><div align="right" class="style2"><a href="0708150115.php"> About Us </a><img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="<a href="0708150116.php">About Business Directory</a></span> <img src="images/img_bst/lrarrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150119.php"> Service Directory</a></span> <img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150118.php"> Real Estate Directory</a></span> <img src="images/img_bst/lrarrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150117.php"> Placement Directory </a></span><img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
              </tr>
              <tr>
                <td height="21" valign="top" class="org_border_r_cell"><div align="right" class="smallLinkUnder"><span class="style2"><a href="0708150115.php"> Company Profie</a></span><img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150101.php"> Registration To Directory </a></span><img src="images/img_bst/lrarrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150145.php"> Registration to Directory </a></span><img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150101.php"> Registration </a></span> <img src="images/img_bst/lrarrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150145.php"> Registration</a></span> <img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
              </tr>
              <tr>
                <td height="22" valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150120.php"> Contact Us</a></span><img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150105.php"> Advertise With Us</a></span> <img src="images/img_bst/lrarrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><div align="right"></div> </td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr>
                <td height="23" valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><a href="0708150123.php"> Site Map</a></span> <img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr>
                <td height="21" valign="top" class="org_border_r_cell"><div align="right">&nbsp;</div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><strong class="style2"><a href=""> Business Offers </a></strong> <img src="images/img_bst/lrarrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><strong class="style2"><a href=""> Used Machinery</a></strong> <img src="images/img_bst/larrow.gif" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right" class="style2"><strong class="style2"><a href=""> Used Vehicle </a></strong><img src="images/img_bst/lrarrow.gif" alt="" width="13" height="13" /></div></td>
                <td valign="top" class="org_border_r_cell"><div align="right"><span class="style2"><strong><a href=""> Oppourtiunity &amp; Skill </a> <img src="images/img_bst/larrow.gif" alt="" width="13" height="13" /> </strong></span></div></td>
              </tr>
              <tr>
                <td height="24" valign="top" class="org_border_r_cell" ><div align="right">&nbsp;</div></td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr>
                <td height="22" valign="top" class="org_border_r_cell" ><div align="right"> &nbsp;</div></td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td valign="top" class="org_border_r_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
              <tr>
                <td height="15"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
              
          </table></td>
          <td>&nbsp;</td>
        </tr>
      <tr>
        <td height="45" colspan="3" valign="top">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td class="org_border_t_cell" width="1030" height="45"><?php include "include/footer.php"; ?></td>
              </tr>
          </table>        </td>
        </tr>
      
    </table></td>
  </tr>
  <tr>
    <td height="35" >&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>

