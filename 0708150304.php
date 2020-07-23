<?php
include 'include/masterdatasrvs.php'; 
$db  = new DB();
$db->open();
$srvsid = $_GET['ID'];
		$line_num = 7;  
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
?>
<html>
<head>
<title>Service Catalouge</title>
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
                          <td width="600" height="49" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="499" height="29"  valign="middle" class="title4"><?php print "$cname"; ?></td>
                              </tr>
                              <tr> 
                                <td height="19"  valign="top" class="bluenote">(<?php print "$pdet"; ?>)                                </td>
                              </tr>
                              <tr> 
                                <td height="1"></td>
                              </tr>
                            </table></td>
                          <td width="197">&nbsp;</td>
                          <td width="265" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr> 
                                <td width="264" height="57" valign="top"><div align="right"><img src="images/img_bst/b2b.gif" width="263" height="57"></div></td>
                                <td width="1"></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="8"></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td height="27"></td>
                          <td></td>
                          <td>&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td height="22" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <!--DWLayoutTable-->
                              <tr>
                                <td width="100%" height="22" valign="top" class="bluenote"><div align="right"><?php include 'include/hlink.php';  ?></div></td>
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
      <td height="20" valign="top"> <table class="tbbdrcol" width="100%" border="0"cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr> 
            <td width="110" height="20" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150301.php?ID=<?php print"$srvsid"; ?>" target="_parent">Home</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>"; ><div align="center"><a href="0708150302.php?ID=<?php print"$srvsid"; ?>">Branch 
                List</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>"; ><div align="center"><a href="0708150303.php?ID=<?php print"$srvsid"; ?>">Service 
                List</a></div></td>
            <td width="138" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>"; ><div align="center"><a href="0708150304.php?ID=<?php print"$srvsid"; ?>">Service 
                Catalouge</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150305.php?ID=<?php print"$srvsid"; ?>">Feed 
                Back</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150306.php?ID=<?php print"$srvsid"; ?>">Contact 
                Us</a></div></td>
            <td width="110" valign="center" class="menu" onMouseOver= style.backgroundColor="<?php print "$mocol"; ?>"; onMouseOut=style.backgroundColor="<?php print "$mcol"; ?>";><div align="center"><a href="0708150307.php?ID=<?php print"$srvsid"; ?>" target="_parent">Admin 
                Site</a></div></td>
          </tr>
        </table></td>
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
            <td height="20" colspan="3" align="center" valign="top" class="grncel_LIT title">Service
              List </td>
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
			  
				  $recd = mysql_query("SELECT ids FROM srvs_sadvts 
					 where mids='$srvsid'") or die("Query failed a");
					$num_rows = mysql_num_rows($recd);
			  		if($num_rows==0)
						{	
						print "Not any Record Exist";
						exit;
						}
								
					$query = "SELECT ids FROM srvs_sadvts 
					 where mids='$srvsid'";

					
			
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
								$prodid = "select * from srvs_sadvts where ids ='$guest_rec[$count]'";
								$prodrcd = mysql_query($prodid);
								$rcount = mysql_num_rows($prodrcd);
								$sname		= mysql_result($prodrcd,0,'sname');
								$city       = mysql_result($prodrcd,0,'city');
								$pids	   = mysql_result($prodrcd,0,'ids');
								$msg	   = mysql_result($prodrcd,0,'msg');
								$desc = substr($msg,0,200);
								
								$citysl = "select * from city where citid='$city'";
								$cityrd = mysql_query($citysl);
								$citname = mysql_result($cityrd,0,'citname');
										
					print  "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
							<tr>
								<td colspan=\"4\" class=\"org_border_t_cell\" height=\"25\">
								<a href=\"#\" onClick=\"MM_openBrWindow('0708150313.php?ID=$srvsid&PDNO=$pids','terms','scrollbars=yes,resizable=no,minimize=no, width=650,height=300')\">
								 <b>$sname</b></a></td>
							</tr>
							<tr>
								<td width=\"250\" class=\"org_border_l_cell\"><u>City</u></td>
								<td width=\"10\" class=\"org_border_no_cell\">:</td>
								<td colspan=\"1\" width=\"150\" class=\"org_border_r_cell\"><b>$citname</b></td>	 
							</tr>
							<tr>
								<td colspan=\"4\" height=\"90\" valign=\"top\" class=\"org_border_c_cell\"><div align=\"justify\"><br>$desc
								<a href=\"#\" onClick=\"MM_openBrWindow('0708150313.php?ID=$srvsid&PDNO=$pids','terms','scrollbars=yes,resizable=no,minimize=no, width=650,height=300')\">
								[.....]</a> </div> </td>
							</tr>
							<tr>
									<td colspan=\"4\" class=\"org_border_b_cell\" >&nbsp;</td>
							</tr>
							<tr>
								<td colspan=\"4\">&nbsp;</td>
							</tr>
							</table>";
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
							<td width=%15 align=left></td>
							<td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print(" <a href=srvs_A_scat.php?ID=$srvsid&id=0&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=srvs_A_scat.php?ID=$srvsid&id=0&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a srvs_A_scat.php?ID=$srvsid&id=0&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
		print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font> </td></tr></table></tr>");
			
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
            <td  width="100%" height="19" valign="top"><?php include "include/footer.php"; ?></td>
          </tr>
        </table></td>
    </tr>
</table>
</body>
</html>
