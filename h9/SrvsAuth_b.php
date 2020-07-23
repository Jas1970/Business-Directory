<?php require_once('Connections/abc.php'); ?>
<?php

 function GenPass($length=8, $strength=4){
        $vowels = 'aeuy';
        $consonants = 'bdghjmnpqrstvz';
        if($strength >= 1) $consonants .= 'BDGHJLMNPQRSTVWXZ';
        if($strength >= 2) $vowels .= 'AEUY';
        if($strength >= 3) $consonants .= '12345';
        if($strength >= 4) $consonants .= '67890';
        if($strength >= 5) $vowels .= '@#$%';
     
        $password = '';
        $alt = time() % 2;
        for($i = 0; $i < $length; $i++){
            if($alt == 1){
                $password .= $consonants[(rand() % strlen($consonants))];
                $alt = 0;
            }else{
                $password .= $vowels[(rand() % strlen($vowels))];
                $alt = 1;
            }
        }
        return $password;
    }


mysql_select_db($database_abc,$abc) or die("unable to Open database");

$slcomp = "select distinct(ids) from tsrvs_main";

$rcdcomp = mysql_query($slcomp,$abc);
$numrows = mysql_num_rows($rcdcomp);
if ($numrows < 1)
	{
		print "<h4><font color=\"#006600\"><strong> There Not Any Temp Company Record For Authorisation</strong></font></h4>";
		exit;
	}
if ($_POST['op'] != "del") 
	{
	$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<table width=\"100%\">";
	while ($pinfo = mysql_fetch_array($rcdcomp))
	 {
   		// category  code (cat id)
  		$dirid	= $pinfo['ids'];
		$dirmainsl = "select * from tsrvs_main where ids='$dirid'";
		$dirmainrd = mysql_query($dirmainsl,$abc);
		$dircname = mysql_result($dirmainrd,0,'cname');
		$DirCitIds = mysql_result($dirmainrd,0,'city'); 
		$Diradd1 = mysql_result($dirmainrd,0,'add1'); 
		$Diradd2 = mysql_result($dirmainrd,0,'add2'); 

		$dcitsel = "select * from city where citid='$DirCitIds'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
	
		$advtsl = "select * from tsrvs_advts where mids='$dirid'";
		$advtrs = mysql_query($advtsl,$abc);
		$srvsid = mysql_result($advtrs,0,'srvsid');
		$srid	= mysql_result($advtrs,0,'srid');
		$rgfyear = mysql_result($advtrs,0,'rfyear');
		$rgfdate = mysql_result($advtrs,0,'rgfdate');
		$rgtdate = mysql_result($advtrs,0,'rgtdate');
		
		$srvssl	= "select * from dir_srvs where srvs_id ='$srvsid'";
		$srvsrs = mysql_query($srvssl,$abc);
		$srvs_name = mysql_result($srvsrs,0,'srvs_name');
		
		
		$subsrvssl = "select * from dir_subsrvs where srvs_id='$srvsid'";
		$subsrvsrs = mysql_query($subsrvssl,$abc);
		$sname = mysql_result($subsrvsrs,0,'sname');
	
	
	
		$display_block .= " 
		<tr>
		 		<td colspan=\"4\"> <hr> </td>	
		</tr>
		<tr>
		   	<td width=\"25%\"><font color=\"#FF0000\"><strong>$dircname</strong></font> </td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
			<td width=\"25%\" align=center><input type=checkbox value=false name=cbox-$dirid><font face=arial size=1.5 color=navy>ID : $dirid</font></td>
		</tr>
		<tr>
			<td> <font color=\"#FF0000\"> $Diradd1 </font></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">$Diradd2 </font></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
		</tr>
		<tr>
			<td><font color=\"#FF0000\">City : $dcitname</font></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
			<td width=\"25%\"></td>
		</tr>
				<tr>
		 		<td colspan=\"3\">  </td>	
		</tr>
		<tr>
			<td align=\"right\"><font color=\"#FF0000\">Registration : </font></td>
			<td width=\"25%\">$srvs_name</td>
			<td width=\"25%\">$sname</td>
			<td width=\"25%\">$rgtdate</td>
		</tr>

		";
		
   }
		$display_block .= " <tr>
		 				<td colspan=\"4\"> <hr> </td>	
					</tr>";  
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<center>
					<input type=submit name= Authorised value=Authorised>
					<input type=reset name= reset value=Reset>
					</center>";

$display_block .= "</FORM>";
	}
	else if ($_POST['op'] == "del") 
	{
	
	$result=mysql_query("SELECT distinct(ids) FROM tsrvs_main ORDER BY ids") or die("Query failed");
	
	$query = "select distinct(ids) from tsrvs_main where ids=";
		$flag=TRUE;
		while($lines = mysql_fetch_array($result, MYSQL_ASSOC))
		{   
			foreach($lines as $gid[0])
			{
				if($_REQUEST["cbox-$gid[0]"]=="false")
					if($flag==TRUE)
					{
						$query=$query.$gid[0];
						$flag=FALSE;
					}
					else
					{
						$query=$query." OR ids=".$gid[0];
					}
			}
		}
        $result = mysql_query($query, $abc) or die("<center><h4> You are Not Select Record Or Select More Then One,  <br>
		 <a href=\"DirCatPrdAddM.php\"> Try Again Please </a></center></h4>");
		$dirid = mysql_result($result,0,'ids');

// ========================Temp Registration to Directory =====================================================================
//
//=============================================================================================================================

		$DirTmainSl = "select * from tsrvs_main where ids='$dirid'";
		$DirTmainRd = mysql_query($DirTmainSl,$abc);

		$DirCname 	= mysql_result($DirTmainRd,0,'cname');
		$Dircpnam	= mysql_result($DirTmainRd,0,'cpname');
		$DirAdd1	= mysql_result($DirTmainRd,0,'add1');
		$DirAdd2	= mysql_result($DirTmainRd,0,'add2');
		$DirCity	= mysql_result($DirTmainRd,0,'city');
		$DirDist	= mysql_result($DirTmainRd,0,'dist');
		$DirStat	= mysql_result($DirTmainRd,0,'stat');
		$DirCout	= mysql_result($DirTmainRd,0,'cout');
		$DirPin		= mysql_result($DirTmainRd,0,'pin');
		$DirTel		= mysql_result($DirTmainRd,0,'tel');
		$DirFax		= mysql_result($DirTmainRd,0,'fax');
		$DirMob		= mysql_result($DirTmainRd,0,'mob');
		$DirMail	= mysql_result($DirTmainRd,0,'mail');	
		$DirWeb		= mysql_result($DirTmainRd,0,'web');
		$DirAmail	= mysql_result($DirTmainRd,0,'amail');
		$compid		=0;
		$srvsAuth	= 'Y';
			
/// =========================================== select maximum ID Number from main ========================================
//
//==========================================================================================================================
//  								Main Table Data Insert
//==========================================================================================================================

	
		$addins = "insert into srvs_main(cname, cpname, add1, add2, city, dist, stat, cout, 
					pin, tel, fax, mob, mail, web, tid, cno, amail,srvs_auth)
					values 
					('$DirCname','$Dircpnam','$DirAdd1', '$DirAdd2', '$DirCity', '$DirDist', 
					 '$DirStat', '$DirCout', '$DirPin', '$DirTel', '$DirFax', '$DirMob', 
					 '$DirMail', '$DirWeb', '$dirid', '$compid', '$DirAmail','$srvsAuth')";
								
		$addrds = mysql_query($addins,$abc);
			
//=======================================Get Max Srvs Id ======================================================================



		$srvssl = "select max(sr_id) from srvs_main";
		$srvsrd = mysql_query($srvssl, $abc) or die ("there is something wrong");
		$srvsmids = mysql_result($srvsrd,0);
		$srvsid=$srvsmids;



//==========================================================================================================================		
//				insert record into Admin Login table
//===========================================================================================================================			
			
				$dyfyear = abs(5);
				$dyear = date("y", mktime());
				$rdyear = date("y", mktime())+$dyfyear;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());

				
				$curdate = date("$rdyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$rdyear));
				
				$dirtype = "SRVS";


//==========================================insert into sitemanager Table =====================================================
				
				$stmgr = "insert into sitemgr(year,month,day,type,num,sadd,fdate,todate) values
					('$dyear','$dmon','$dday','$dirtype','$srvsid','$compid',now(), '$curdate')";
		
				$stmgrrd = mysql_query($stmgr,$abc);


				
///===========================================================================================================================


				$stmgrsl = "select max(ids) from sitemgr";
				$stmgrrd = mysql_query($stmgrsl, $abc) or die ("there is something wrong");
				$stmgrid = mysql_result($stmgrrd,0);
				$stid    = $stmgrid;
				

//				$mpass  = "$dyear$dmon$dday$stid";
//				$compid = "$dyear$dmon$dday/$stid";
//				$pass	= base64_encode($mpass);	



				//$mpass  = "$dyear$dmon$dday$stid";
				$compid = "$dyear$dmon$dday/$stid";
				
				$mainpass = GenPass();
				
				$pass	= base64_encode($mainpass);




				
//==============================update srvs main table ========================================================================
//
//========================================================================================================================					

				$upmainsl = "update srvs_main set cno='$compid'
									where sr_id='$srvsid'";
				$upmainrd = mysql_query($upmainsl,$abc);


//=====================================================Upadate Site Manger=============================================


				$upsitemgr	= "update sitemgr set sadd = '$compid' where ids='$stid'";
				$upsitemgrrd 	= mysql_query($upsitemgr,$abc);


//============================== Login table data insert ========================================================================
//
//========================================================================================================================					

				
				$ins_login = "insert into srvs_admin(dlogin_cno, dlogin_id, dlogin_pwd, dlogin_auth)
							  values ( '$srvsid','$compid','$pass','$srvsAuth')";
		
				$rcd_login = mysql_query($ins_login,$abc);


///======================================================================================================================		
///				  srvs_home page insert basic
//=======================================================================================================================
		
				$comp_home 		= "Yet Not Define";		
				$comp_marque 		= "Yet Not Define";		
				$comp_moto	 	= "Yet Not Define";		
				$comp_css	 	= "grn_01.css";		
				
				$ins_home = "insert into srvs_home(mdirid, comp_home, comp_marque, comp_moto, comp_css)
							 values
							 ('$srvsid','$comp_home','$comp_marque','$comp_moto','$comp_css')";	

				$rcd_home = mysql_query($ins_home,$abc);	
				
///====================================================================================================================		
///				  					srvs_address book setup insert 
//=====================================================================================================================
				
				
				$instrcd = "insert into srvs_addbksetup(dlogin_cno, cname, cpname, add1, city,
									dist, state, country, pin, tel, fax, mail, web, hid, hweb, hmail)
									values 
									('$srvsid','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1')";
						$rdrcd	= mysql_query($instrcd,$abc)or die(mysql_error());
						
///===================================================================================================================
///								Srvs Address Boook First Record Insert
///===================================================================================================================
						 
									$rdins = "insert into srvs_addbook(srvs_id, add_id, dir_type, add_limit)
											  values
									  		  ('$srvsid','$srvsid','2','100')";
									$insrd = mysql_query($rdins,$abc) or die(mysql_error());


///===================================================================================================================
///								Srvs advts Record Insert
///===================================================================================================================
							
							
							
		$srvsadvtSl 	= "select * from tsrvs_advts where mids='$dirid'";
		$srvsadvsrs		= mysql_query($srvsadvtSl,$abc);
		
		$mids			= mysql_result($srvsadvsrs,0,'mids');
		$srvsids		= mysql_result($srvsadvsrs,0,'srvsid');
		$city			= mysql_result($srvsadvsrs,0,'city');
		$rfyear			= mysql_result($srvsadvsrs,0,'rfyear');
		$rgfdate		= mysql_result($srvsadvsrs,0,'rgfdate');	
		$rgtdate		= mysql_result($srvsadvsrs,0,'rgtdate');
		$authtag		= mysql_result($srvsadvsrs,0,'authtag');
		$sidx			= mysql_result($srvsadvsrs,0,'sidx');
		$srid			= mysql_result($srvsadvsrs,0,'srid');
		$district		= mysql_result($srvsadvsrs,0,'district');
		$state			= mysql_result($srvsadvsrs,0,'state');
		$country		= mysql_result($srvsadvsrs,0,'country');
		
		$advtsins	= "insert into srvs_advts(mids, srvsid, city, rfyear, rgfdate, rgtdate, authtag, sidx, srid, district, state, country)
					values
					('$srvsid','$srvsids','$city','$rfyear','$rgfdate','$rgtdate','$authtag','$sidx','$srid', '$district', '$state','$country')";
		$advtsinsrd	= mysql_query($advtsins,$abc) or die(mysql_error());
		
		
					
					
		$deladvtsl	= "delete from tsrvs_advts where mids='$dirid'"; 
		$deladvtrd	= mysql_query($deladvtsl, $abc);
							
							

// ====================================================================================================================
//                delete record from Temp main, Temp add, temp advertisement table
//=====================================================================================================================				

				$deltsl = "delete from tsrvs_main where ids='$dirid'";
				$deltrcd = mysql_query($deltsl,$abc)or die(mysql_error());

					
				$display_block = "<h4>Record Successfuly Authorised <br>
									Company Host ID : <b> $compid </b> <br>
									company Temp ID = $dirid <br>
									<a href=\"SrvsAuth.php\"> Authorised Another One </a> <br>
									Opent Web Site <a href=\"0708150301.php?ID=$mids\" target=\"_blank\"> Click Here </a> <br>
									</h4>" ;
			
			
		
	}
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<?php print $display_block; ?>
</body>
</html>
