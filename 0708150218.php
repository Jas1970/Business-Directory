<?php 
include 'include/masterdata.php'; 
include 'include/sess.php';

$msg   = $_REQUEST['msg'];
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
	$rdmarq = mysql_query($slmarq,$abc);
	$count_rcd = mysql_num_rows($rdmarq);
	if($count_rcd<>0)
			{
				$marqs  = mysql_result($rdmarq,0,'comp_marque');
			}

*/

if($_POST['chk']=="99")
	{
	}
			
			
function findexts ($filename)
	{
	$filename = strtolower($filename) ;
	$exts = split("[/\\.]", $filename) ;
	$n = count($exts)-1;
	$exts = $exts[$n];
	return $exts;
	}
if ($_POST['chk'] == "99")	
	{

	$pid   = $_REQUEST['pid'];
	$msg   = $_REQUEST['msg'];
	$slcomp = "select * from dir_compprod where ids='$pid'";
	$rdcomp = mysql_query($slcomp);
	$catid  = mysql_result($rdcomp,0,'cat_id');
	$compids = mysql_result($rdcomp,0,'ids');
	$prodid =  mysql_result($rdcomp,0,'prod_id');
	
	$slimgs = "Select * from dir_prodimg where ids='$compids'";
	$rdimgs = mysql_query($slimgs)or die(mysql_error());
	$rnumber = mysql_num_rows($rdimgs);
	if($rnumber==0)
		{

	$ext = findexts ($_FILES['uploaded']['name']) ; 
    $ran = rand();
    $ran2 = $ran.".".$exts ;
    $target = "prodimg/$catid/";
    $target = $target. $ran2.$ext; 
	$size = $_FILES["uploaded"]["size"];
	if($size<=307200)
		{
		if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
			{
				$fname = "".$ran2.$ext;
				$chkdupsl = "select * from dir_prodimg where prod_id='$prodid' and mdir_id = '$rstid'";
				$ckduprd  = mysql_query($chkdupsl);
				$ckcount  = mysql_num_rows($ckduprd);
				if($ckcount==0)
					{
					$mySql = "Insert into dir_prodimg(imagename,imagesize, prod_id, mdir_id, cat_id, ids) 
		  					  values 
							 ('$fname', '$size', '$prodid', '$rstid', '$catid', '$pid')";
						if($abc = mysql_query($mySql))
							{
							$msg = "Image Upload Sucessfully, Please select another one to upload &catid";
							header("Location: 0708150218.php?ID=$rstid&SID=$sid&rand=$adms&catid=$catid&msg=$msg");
							}
							else
							{	
								 Print "Something Wrong Please Contact Site Manager";
							}
					}
					else
					{
						$msg = "Duplicate Image Upload, Please choose uniqe Product Name then upload new one ";
					}	
			}		
			else
			{
			$msg = "Duplicate Image Upload, Please choose uniqe Product Name then upload new one ";
			}
			
		}
		else
		{
			$msg = "Image Size is under 300kb only uploadable ";		
		}	
			
		
		}
		else
		{
		$msg = "Duplicate Image Upload, Product Image Already upload";		
		}
		
		}
		else
		{
			
		}
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/<?php print "$css"; ?>" rel="stylesheet" type="text/css">
<script language="javascript">
function check(tdata) 
	{
	if(vdata.uploaded.value=="")
		{
		alert("please Press Browse Button to Select Image To upload");
		vdata.uploaded.focus();
		return (false);
		}
	//if(vdata.uploaded.value!="")
	//	{
	//	alert("This Facility Available as urgent as possible");
	//	vdata.uploaded.focus();
	//	return (false);
	//	}
	
	
	
	}	
</script>
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
              <td width="100%" height="107" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                  <!--DWLayoutTable-->
                  <tr> 
                    <td width="100%" height="106" valign="top"> <table class="aas" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                        <!--DWLayoutTable-->
                        <tr> 
                          <td width="341" height="38" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="415" height="22" valign="top" class="bluenote"><a href="index.php" target="_parent">Home</a> 
                                  ||<a href="0708150114.php" target="_parent"> 
                                  Business Directory</a> || <a href="0708150144.php" target="_parent">Service 
                                  Provider</a> || <a href="0708150137.php">Property 
                                  Directory</a></td>
                              </tr>
                            </table></td>
                          <td width="304">&nbsp;</td>
                          <td width="266" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
                                <td width="911" height="29" align="center" valign="middle" class="title4"><?php print "$cname"; ?></td>
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
            <td width="10" height="11"></td>
            <td width="170"></td>
            <td width="14"></td>
          </tr>
          <tr> 
            <td height="99"></td>
            <td valign="top"><table width="170px" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="167" height="20" valign="top" class="org_border_box title"><div align="center">Directory 
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
              </table></td>
            <td></td>
          </tr>
          <tr> 
            <td height="11"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height="99"></td>
            <td valign="top"><table width="170" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="167" height="20" valign="top" class="org_border_box title"><div align="center">Admin 
                      Entry</div></td>
                </tr>
                <tr> 
                  <td height="10" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150216.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Add 
                    Product</a> </td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150217.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Delete 
                    Product</a> </td>
                </tr>
                <tr>
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150218.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> ">Upload 
                    Product Image </a></td>
                </tr>
                <tr> 
                  <td height="20" valign="top" class="org_border_box bluenote bgimg"><a href="0708150261.php?ID=<?php print"$rstid"; ?>&SID=<?php print"$sid";?> &rand=<?php print"$adms";?> ">Delete 
                    Product Image </a></td>
                </tr>
              </table></td>
            <td></td>
          </tr>
          <tr>
            <td height="438"></td>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table></td>
      <td height="19" colspan="3" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="569" height="19" valign="top"><div align="center"><font color="#FF0000"><blink><?php print "$msg"; ?></blink> 
                </font></div></td>
          </tr>
        </table></tr>
    <tr> 
      <td width="22" height="218"></td>
      <td  valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="ttable" >
          <!--DWLayoutTable-->
 <form enctype="multipart/form-data" name="vdata" id="vdata" method="post" action="0708150218.php?ID=<?php print "$rstid"; ?>&SID=<?php print"$sid";?>&rand=<?php print"$adms";?> " onSubmit="return check(this)" >
            <tr> 
              <td width="36" height="18"></td>
              <td width="155"></td>
              <td width="314"></td>
              <td width="32"></td>
            </tr>
            <tr> 
              <td height="25"></td>
              <td colspan="2" valign="top" class="org_border_t_cell"><div align="center">Upload 
                  Product Image</div></td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td colspan="2" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="22"></td>
              <td valign="top" class="org_border_l_cell">
<div align="right">Product 
                  Name :</div></td>
              <td valign="top"  class="org_border_r_cell"> <select name="pid" id="pid">
               <?php
											 			
									$slprod = "SELECT dir_compprod.ids, dir_compprod.prod_id, dir_compprod.cat_id, catg.catid, prod.prodid, prod.prodnam
											   FROM dir_compprod,  prod, catg 
											    WHERE dir_compprod.prod_id=prod.prodid and 
												dir_compprod.cat_id=catg.catid";
												
									$rdslprod = mysql_query($slprod);
									
										while($pinfo = mysql_fetch_array($rdslprod))
											{

												$prodid = $pinfo['prodid'];				
												$prodname = $pinfo['prodnam'];
												$ids  = $pinfo['ids'];
																											
						 						print "<option value=\"$ids\">";
												print "$prodname</option>";
		 									}				
										
				?>
           
                </select>
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td valign="top" class="org_border_l_cell"><div align="right">Product 
                  Image :</div></td>
              <td valign="top" class="org_border_r_cell"><input name="uploaded" type="file" width="80"></td>
              <td></td>
            </tr>
            <tr> 
              <td height="26"></td>
              <td colspan="2" valign="top" class="org_border_c_cell"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td></td>
            </tr>
            <tr> 
              <td height="24"></td>
              <td colspan="2" valign="top" class="org_border_b_cell" >
<div align="center"> 

				  <input name = "ID" type="hidden" value="<?php print "$rstid"; ?>">
                  <input name = "SID" type="hidden" value="<?php print "$sid"; ?>">	
                  <input name = "catid" type="hidden" value="<?php print "$catid"; ?>">	
                  <input name = "rand" type="hidden" value="<?php print "$adms"; ?>">
				  <input name = "chk" type="hidden" value="99">
                  <input type="submit" name="Submit" value="Upload">
                </div></td>
              <td></td>
            </tr>
            <tr> 
              <td height="82"></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td></td>
            </tr>
          </form>
        </table></td>
      <td width="10"></td>
    </tr>
    <tr> 
      <td height="24"></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="200"></td>
      <td valign="top"> <table id="dashed1" width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="537" height="198">&nbsp;</td>
          </tr>
        </table></td>
      <td></td>
    </tr>
    <tr> 
      <td height="104"></td>
      <td>&nbsp;</td>
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
<?php
mysql_free_result($prodname);
?>
