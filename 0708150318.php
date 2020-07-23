<?php
include 'include/masterdatasrvs.php'; 
include 'include/srsess.php';
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">

<script language="javascript">
function check(frmbasic) 
	{
	if(frmbasic.cpname.value=="")
		{
		alert("Please Enter Contact Person Name");
		frmbasic.cpname.focus();
		return (false);
		}
		
	if(frmbasic.add1.value=="")
		{
		alert("Please Enter Vaild Mailing Address");
		frmbasic.add1.focus();
		return (false);
		}		

	if(frmbasic.add2.value=="")
		{
		alert("Please Enter Vaild Mailing Address");
		frmbasic.add2.focus();
		return (false);
		}		

	if(frmbasic.city.value=="")
		{
		alert("Please Select Your City");
		frmbasic.city.focus();
		return (false);
		}

	if(frmbasic.dist.value=="")
		{
		alert("Please Select Your District");
		frmbasic.dist.focus();
		return (false);
		}

	if(frmbasic.state.value=="")
		{
		alert("Please Select Your State");
		frmbasic.state.focus();
		return (false);
		}
	if(frmbasic.count.value=="")
		{
		alert("Please Select Your Country Name");
		frmbasic.count.focus();
		return (false);
		}

	if(frmbasic.zip.value=="")
		{
		alert("Please Enter Your Pin Code");
		frmbasic.zip.focus();
		return (false);
		}
	if(frmbasic.tel.value=="")
		{
		alert("Please Enter Your Telephone Number");
		frmbasic.tel.focus();
		return (false);
		}
		
	if(frmbasic.mob.value=="")
		{
		alert("Please Enter Your Mobile Number");
		frmbasic.mob.focus();
		return (false);
		}
		
	if(frmbasic.mail.value=="")
		{
		alert("please Enter Confirmed and Operative E-Mail Id");
		frmbasic.mail.focus();
		return (false);
		}
		
	if(frmbasic.mail.value=="")
			{
			alert("please enter your email");
			frmbasic.mail.focus();
			return (false);
			}
	if(frmbasic.mail.value!="")
			{
			pass = frmbasic.mail.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmbasic.mail.focus();
				return (false);
				}
			}
	if(frmbasic.mail.value!="")
			{
			pass = frmbasic.mail.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("not a valid email address");
				frmbasic.mail.focus();
				return (false);
				}
			}
	
	
	if(frmbasic.amail.value=="")
		{
		alert("Please Enter Confirmed and Operative Alternate E-Mail Id");
		frmbasic.amail.focus();
		return (false);
		}
		
	if(frmbasic.amail.value=="")
			{
			alert("Please Enter Your Alternate E-Mail ID");
			frmbasic.amail.focus();
			return (false);
			}
	if(frmbasic.amail.value!="")
			{
			pass = frmbasic.amail.value.indexOf('@',0);
			if(pass==-1)
				{
				alert("Not a Valid Alternate E-Mail ID");
				frmbasic.amail.focus();
				return (false);
				}
			}
	if(frmbasic.amail.value!="")
			{
			pass = frmbasic.amail.value.indexOf('.',0);
			if(pass==-1)
				{
				alert("Not a Valid Alternate E-Mail ID");
				frmbasic.amail.focus();
				return (false);
				}
			}
	
	
	
	}
</script>	

</head>

<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tbody>
    <tr> 
      <td height="107" colspan="7" valign="top"> <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  >
          <!--DWLayoutTable-->
          <tbody>
            <tr> 
              <td width="100%" height="107" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"> <table align="center" class="aas" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="415" height="22" valign="top"> <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> Business 
                                  Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="426">&nbsp;</td>
                          <td width="267" rowspan="2" valign="top"> <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
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
                          <td height="56" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="1108"  height="37" align="center" valign="middle" class="title4"><div align="center"></div>                                  <div align="center"><?php print "$cname"; ?></div></td>
                              </tr>
                              <tr>
                                <td height="19" align="center" valign="top" class="bluenote"><div align="center">(<?php print "$pdet"; ?>)                                </div></td>
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
      <td height="20" colspan="7" valign="top"><?php include 'include/sbar.php';  ?></td>
    </tr>
    <tr> 
      <td width="194" rowspan="5" valign="top"><table class="tbbgcol" width="194px" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="10" height="11"></td>
            <td width="170"></td>
          </tr>
          <tr>
            <td height="119"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
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
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150359.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>">Home 
                    Page Entry</a></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td height="594"></td>
            <td>&nbsp;</td>
          </tr>
      </table></td>
      <td width="57" height="19">&nbsp;</td>
      <td width="73">&nbsp;</td>
      <td colspan="2" valign="top">                                                                                                                                                                                                                                                                                                                          &nbsp; 
      <td width="116">                        
      <td width="53">          </tr>
    <tr>
      <td height="473">&nbsp;</td>
      <td colspan="4" valign="top">                                                                                                            
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
          <form name="frmbasic" action="0708150319.php?ID=<?php print"$srvsid"; ?>&SID=<?php print"$sid"; ?>&rand=<?php print"$adms"; ?>" method="post" onSubmit="return check(this)">
            <tr>
              <td width="77" height="21"></td> 
              <td colspan="3" valign="top" class="org_border_box title"> 
                <div align="center">Update Basic Details</div></td>
              <td width="119"></td>
            </tr>
            <tr>
              <td height="23"></td>
              <td width="156">&nbsp;</td>
              <td width="10">&nbsp;</td>
              <td width="381">&nbsp;</td>
              <td></td>
            </tr>
            <tr>
              <td height="19"></td> 
              <td valign="top"> <div align="right">Name<strong> :</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top" class="title1"><?php print "$cname"; ?> 
              &nbsp;</td>
              <td></td>
            </tr>
            <tr>
              <td height="22"></td> 
              <td valign="top"><div align="right">Contact Person<strong> 
              :</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><input name="cpname" type="text" id="cpname" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr>
              <td height="6"></td> 
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="1"></td>
              <td></td>
              <td></td>
              <td rowspan="2" valign="top"><input name="add1" type="text" id="add1" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            
            <tr>
              <td height="21"></td>
              <td rowspan="2" valign="top"><div align="right">Address 
              <strong>:</strong></div></td>
              <td></td>
              <td></td>
            </tr>
            
            <tr>
              <td height="1"></td> 
              <td></td>
              <td rowspan="2" valign="top"><input name="add2" type="text" id="add2" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr>
              <td height="21"></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="14"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            
            <tr>
              <td height="24"></td> 
              <td valign="top"><div align="right">City <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><select name="city" id="city">
               <?php

									$citid = 0;
        	        		        $addCityData = dircity($citid);
                            	    for($index=0;$index < count($addCityData);$index++)
                                    {
                                    $cityclass = $addCityData[$index];
                                    $citid = $cityclass->getCitid();
                                    $citname = $cityclass->getCitname();
                                    $dstname = $cityclass->getDistid();
                                    
	                                print "<option value=\"$citid\">";
								    print "$citname</option>";
                                  } 
                        	?>
              </select></td>
              <td></td>
            </tr>
            <tr>
              <td height="24"></td> 
              <td valign="top"><div align="right">District <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><select name="dist" id="dist">
              <?php
				  					$distid =0;	
	                               $addDistData = dirdist($distid);
    	                            for($index=0;$index < count($addDistData);$index++)
                                    {
                                    $distclass = $addDistData[$index];
                                    $distid = $distclass->getDistid();
                                    $dstname = $distclass->getDistname();
                                    $stid   = $distclass->getStid();
                                    print "<option value=\"$distid\">";
				    				print "$dstname</option>";
                                  } 
  				?>
              </select></td>
              <td></td>
            </tr>
            <tr>
              <td height="24"></td> 
              <td valign="top"><div align="right">State <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><select name="state" id="state">
                    <?php
                               	$stid=0;
                                $addStateData = dirstate($stid);
                                for($index=0;$index < count($addStateData);$index++)
                                    {
                                    $statclass = $addStateData[$index];
                                    $stid= $statclass->getSitid();
                                    $stname = $statclass->getStname();
                                    print "<option value=\"$stid\">";
								    print "$stname</option>";
                                  } 
                      ?>
              </select></td>
              <td></td>
            </tr>
            <tr>
              <td height="24"></td> 
              <td valign="top"><div align="right">Country <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><select name="count" id="count">
                 	<?php
								$cntid =0;
                                $countryData = country($cntid);
                                for($index=0;$index < count($countryData);$index++)
                                    {
                                    $countclass = $countryData[$index];
                                    $contid = $countclass->getCntid();
                                    $contname = $countclass->getCntname();

                                    print "<option value=\"$contid\">";
								    print "$contname</option>";
                                  } 
                      ?>
              	</select></td>
              <td></td>
            </tr>
            <tr>
              <td height="22"></td> 
              <td valign="top"><div align="right">Zip Code <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><input name="zip" type="text" id="zip" size="10" maxlength="6"></td>
              <td></td>
            </tr>
            <tr>
              <td height="15"></td> 
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="22"></td> 
              <td valign="top"><div align="right">Telephone No. <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><input name="tel" type="text" id="tel" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr>
              <td height="22"></td> 
              <td valign="top"><div align="right">Fax No. <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><input name="fax" type="text" id="fax" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr>
              <td height="22"></td> 
              <td valign="top"><div align="right">Mobile No. <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><input name="mob" type="text" id="mob" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr>
              <td height="16"></td> 
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="22"></td> 
              <td valign="top"><div align="right">E-Mail <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><input name="mail" type="text" id="mail" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr>
              <td height="22"></td> 
              <td valign="top"><div align="right">Alternate E-Mail ID<strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><input name="amail" type="text" id="amail" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            
            
            <tr>
              <td height="22"></td> 
              <td valign="top"><div align="right">Web Site <strong>:</strong></div></td>
              <td>&nbsp;</td>
              <td valign="top"><input name="web" type="text" id="web" size="50" maxlength="45"></td>
              <td></td>
            </tr>
            <tr>
              <td height="10"></td> 
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td height="24"></td>
              <td colspan="3" valign="top"><div align="center"> 
                  <input type="hidden" name="ID" value="<?php print "$srvsid"; ?>">
                  <input type="submit" name="Submit" value="   Upload  Your Basic Details">
              </div></td>
              <td></td>
            </tr>
            <tr>
              <td height="9"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </form>
        </table>
      
      <td>      
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>&nbsp;</td>
      <td width="537" valign="top">                                                                          &nbsp;
      <td width="17">      
      <td>                            
      <td>          </tr>
    <tr>
      <td height="184">&nbsp;</td>
      <td>&nbsp;</td>
      <td valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
          <!--DWLayoutTable-->
          <tr> 
            <td width="14" height="9"></td>
            <td width="511"></td>
            <td width="12"></td>
          </tr>
          <tr> 
            <td height="160"></td>
            <td valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="11" height="6"></td>
                  <td width="484"></td>
                  <td width="16"></td>
                </tr>
                <tr> 
                  <td height="28"></td>
                  <td valign="top" class="grncel_LIT title2" ><?php print "$cname "; ?>&nbsp;</td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="20"></td>
                  <td valign="top" class="grncel_DRK title"><?php print "$add1, $add2 "; ?> 
                    &nbsp;</td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"><?php print "$citname,$stname - $pin ($ctname)"; ?> 
                    &nbsp;</td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="23"></td>
                  <td valign="top" class="grncel_DRK title"><?php print"Tel.No. :$tel, Fax No. : $fax"; ?> 
                    &nbsp;</td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="21"></td>
                  <td valign="top" class="grncel_DRK title"><?php print "E-Mail : $mail, Web : $web"; ?> 
                    &nbsp;</td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="17"></td>
                  <td valign="top" class="grncel_DRK title" > <?php print "Contact Person : $cpname -($mob)"; ?>&nbsp;</td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="20"></td>
                  <td>&nbsp;</td>
                  <td></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="15"></td>
            <td></td>
            <td></td>
          </tr>
      </table></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr> 
      <td height="19" colspan="7" valign="top"> <table class="tbbgcolbot"  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr> 
            <td width="100%" height="19" valign="top"  align="center"><?php include "include/footer.php"; ?> </td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>

