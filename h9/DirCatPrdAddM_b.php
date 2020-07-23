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
$slcomp = "select * from dir_tmain";
$rcdcomp = mysql_query($slcomp,$abc);
$numrows = mysql_num_rows($rcdcomp);
if($numrows == "0")
	{
		$display_block = "<h4><font color=\"#006600\"><strong> There Not Any Temp Company Record For Authorisation</strong></font></h4>";
	}
  else
   {
if($_POST['op'] != "del") 
	{
	$display_block = "<form method=post action=\"$_SERVER[PHP_SELF]\">";
	$display_block .= "<table width=\"100%\">";
	while ($pinfo = mysql_fetch_array($rcdcomp))
	 {
  		$dirid	= $pinfo['dir_id'];
		$dirmainsl 	= "select * from dir_tmain where dir_id='$dirid'";
		$dirmainrd 	= mysql_query($dirmainsl,$abc);
		$dircname 	= mysql_result($dirmainrd,0,'dir_cname');
		$DirCitIds 	= mysql_result($dirmainrd,0,'dir_city'); 
		$Diradd1 	= mysql_result($dirmainrd,0,'dir_add1'); 
		$Diradd2 	= mysql_result($dirmainrd,0,'dir_add2'); 
		


		$dcitsel = "select * from city where citid='$DirCitIds'";
		$dcitrcd = mysql_query($dcitsel,$abc);
		$dcitname = mysql_result($dcitrcd,0,'citname');
		
		$display_block .= " 
		<tr>
		 		<td colspan=\"3\"> <hr> </td>	
		</tr>
		<tr>
		   	<td width=\"50%\"><font color=\"#FF0000\"><strong>$dircname</strong></font> </td>
			<td width=\"25%\" align=center>: </td>
			<td width=\"25%\"><input type=checkbox value=false name=cbox-$dirid><font face=arial size=1.5 color=navy>ID : $dirid</font></td>
		</tr>
		<tr>
			<td colspan=\"3\"><font color=\"#FF0000\"> $Diradd1 </font></td>
		</tr>
		<tr>
			<td colspan=\"3\"><font color=\"#FF0000\">$Diradd2 </font></td>
		</tr>
		<tr>
			<td colspan=\"3\"><font color=\"#FF0000\">City : $dcitname</font></td>
		</tr>";		
		
		
		$cdsel = "select distinct(dir_cat_id)  from dir_tadvts where dir_id='$dirid'";
		$cdrcd = mysql_query($cdsel,$abc);
		
		while ($nfo = mysql_fetch_array($cdrcd))
			{
			$catid = $nfo['dir_cat_id'];
//			// category code (cat name)
			$catnmsl = "select catname from catg where catid='$catid'";
			$catnmrd = mysql_query($catnmsl,$abc);
			$catname = mysql_result($catnmrd,0,'catname');
	   		$display_block .=	"<tr>
					<td colspan=\"3\"><font color=\"#000099\"><strong> Category    : $catname </strong></font> </td>   
					</tr>";
		
			$prodidsl = "select dir_catprodid, dir_prod_id, rgtdate from dir_tadvts where dir_id='$dirid' and dir_cat_id='$catid'";		
			$prodidrd = mysql_query($prodidsl, $abc);

				$rownum = abs(1);
				while($pinfos = mysql_fetch_array($prodidrd))
					{
					$prodid = $pinfos['dir_prod_id'];
					$catporddid = $pinfos['dir_catprodid'];
					$rgtdate	= $pinfos['rgtdate'];			
		
					$prodsell = "select prodnam from prod where prodid = '$prodid'";
					$prodsellrcd = mysql_query($prodsell,$abc);
					$prodname = mysql_result($prodsellrcd,0,'prodnam');	
	
					$display_block .= "
							<tr>
								<td colspan=\"3\"></td>
							</tr>
							<tr>
								<td>$rownum </td> 
								<td>$prodname </td>
								<td>$rgtdate</td>
						</tr>";
					$rownum++;
			}
			
		}
   }
   
$display_block .=	"<tr>
		 				<td colspan=\"3\"> <hr> </td>	
					</tr>";
$display_block .= "</table>";   
$display_block .= "<input type=hidden name=op value=del>";
$display_block .= "<center><input type=submit name= Authorised value=Authorised>
					</center>";

$display_block .= "</FORM>";
	}
	else if ($_POST['op'] == "del") 
	{
//
//$slcomp = "select distinct(dir_id) from dir_tadvts";
	
	$result=mysql_query("SELECT dir_id FROM dir_tmain ORDER BY dir_id") or die("Query failed");
	
	$query = "select dir_id from dir_tmain where dir_id=";
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
						$query=$query." OR dir_id=".$gid[0];
					}
			}
		}
        $result = mysql_query($query, $abc) or die("<center><h4> You are Not Select Record Or Select More Then One,  <br> <a href=\"DirCatPrdAddM.php\"> Try Again Please </a></center></h4>");
		$dirid = mysql_result($result,0,'dir_id');
		
		$tdirid = $dirid;

// ========================Temp Registration to Directory ==============================================================================
//
//=======================================================================================================================================
	
		$DirTmainSl 	= "select * from dir_tmain where dir_id='$tdirid'";
		$DirTmainRd	= mysql_query($DirTmainSl,$abc);
		$DirCname 	= mysql_result($DirTmainRd,0,'dir_cname');
		$DirCPname 	= mysql_result($DirTmainRd,0,'dir_cpname');
		$diradd1  	= mysql_result($DirTmainRd,0,'dir_add1');
		$diradd2  	= mysql_result($DirTmainRd,0,'dir_add2');
		$dircity  	= mysql_result($DirTmainRd,0,'dir_city');
		$dirdist  	= mysql_result($DirTmainRd,0,'dir_dist');
		$dirst  	= mysql_result($DirTmainRd,0,'dir_stat');
		$dircnt  	= mysql_result($DirTmainRd,0,'dir_cont');
		$dirzip		= mysql_result($DirTmainRd,0,'dir_zip');
		$dirtel  	= mysql_result($DirTmainRd,0,'dir_tel');
		$dirfax  	= mysql_result($DirTmainRd,0,'dir_fax');
		$dirmob  	= mysql_result($DirTmainRd,0,'dir_mob');
		$dirmail  	= mysql_result($DirTmainRd,0,'dir_mail');
		$dirweb  	= mysql_result($DirTmainRd,0,'dir_web');
		$diramail	= mysql_result($DirTmainRd,0,'dir_amail');
		$compid		=	0;
		$dirAuth	= 'Y';


//================================================================================================================================
//              update Dir_main table Company id
//================================================================================================================================
//				$upmainsl = "update dir_main set dir_cno='$compid'
//									where dir_id='$dirmid'";
//				$upmainrd = mysql_query($upmainsl,$abc);
// ========================= select Dir_id Main ==================================================================================
//  			Main Table Data Insert
//=================================================================================================================================

		$DirMainIns = "insert into dir_main(dir_cname,dir_cpname,dir_tag,dir_tid, dir_cno, dir_auth)
						values ('$DirCname','$DirCPname','A','$tdirid', '$compid', '$dirAuth')";
		$DirMainRd =  mysql_query($DirMainIns, $abc);	




//===================================================================================================================================
//=============================Max dir_id===========================================================================================

	
		$diridsl = "select max(dir_id) from dir_main";
		$diridrd = mysql_query($diridsl, $abc) or die ("there is something wrong 01");
		$dirmids = mysql_result($diridrd,0);
		$dirmid=$dirmids;		
//=================================================================================================================================
			
		
		
				$dyfyear = abs(5);
				$dyear = date("y", mktime());
				$rdyear = date("y", mktime())+$dyfyear;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());
		
				$curdate = date("$rdyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$rdyear));
				
				$dirtype = "DIR";
				

//===================================================================================================================================


				$stmgr = "insert into sitemgr(year,month,day,type,num,sadd,fdate,todate) values
					('$dyear','$dmon','$dday','$dirtype','$dirmid','$compid',now(), '$curdate')";
		
				$stmgrrd = mysql_query($stmgr,$abc);
//===================================================================================================================================


				$stmgrsl = "select max(ids) from sitemgr";
				$stmgrrd = mysql_query($stmgrsl, $abc) or die ("there is something wrong 02  dirmid=$dirmid");
				$stmgrid = mysql_result($stmgrrd,0);
				$stid    = $stmgrid;
		



				//$mpass  = "$dyear$dmon$dday$stid";
				$compid = "$dyear$dmon$dday/$stid";
				
				$mainpass = GenPass();
				
				$pass	= base64_encode($mainpass);


//=================================================================================================================================
//=========================================update Main dir_id======================================================================
	
		
		$dircompid = "update dir_main set dir_cno='$compid' where dir_id='$dirmids'";
		$dircompidrd = mysql_query($dircompid,$abc);


//=====================================================Upadate Site Manger=============================================


		$upsitemgr	= "update sitemgr set sadd = '$compid' where ids='$stid'";
		$upsitemgrrd 	= mysql_query($upsitemgr,$abc);





// ======================== Insert in Address Table ==============================================================================
//
//================================================================================================================================
		
		$addins = "insert into dir_add(dir_id, dir_add1, dir_add2, dir_city, dir_dist,
				  dir_stat, dir_cont, dir_tel, dir_fax, dir_mob, dir_mail, dir_web,dir_pin, dir_amail)
				values 
				('$dirmid','$diradd1', '$diradd2', '$dircity', '$dirdist', '$dirst', '$dircnt',
				'$dirtel', '$dirfax', '$dirmob', '$dirmail', '$dirweb','$dirzip', '$diramail')";				

		$addrds = mysql_query($addins,$abc);

// ==================================== Temp Advertisement Table Entery ============================================================
//
//==================================================================================================================================		
/*		$DirAdvtSl = "Select * from dir_tadvts where dir_id='$dirid'";
		$DirAdvtRd = mysql_query($DirAdvtSl,$abc);
		
		while($inst = mysql_fetch_array($DirAdvtRd)) 
				{
				$Dirids = $inst['dir_id'];
				$DirCatid = $inst['dir_cat_id'];
				$DirPrdid = $inst['dir_prod_id'];
				$DirRfy   = $inst['dir_regfyear'];
				$idx 	= $inst['sidx'];
				
				
				$dyear = date("Y", mktime())+$DirRfy;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());
				$curdate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));

					
					
				$Advtins = "insert into dir_catprd(main_dirid,cat_id, prd_id,regfrdt,regtodt,aut_tag, sidx)
							values ('$dirmid', '$DirCatid', '$DirPrdid', now(),'$curdate','Y', '$idx')";		

				$Advtrds = mysql_query($Advtins,$abc) or die ("Unable to Insert");
				
				}
*/				


//==================================================================================================================		
//				insert record into Admin Login table
//==================================================================================================================				

				$ins_login = "insert into dir_admin(dlogin_cno, dlogin_id, dlogin_pwd, dlogin_auth)
							  values ( '$dirmid','$compid','$pass', '$dirAuth')";
		
				$rcd_login = mysql_query($ins_login,$abc);
					
		
				$comp_home 		= "Yet Not Define";		
				$comp_marque 	= "Yet Not Define";		
				$comp_moto	 	= "Yet Not Define";		
				$comp_css	 	= "grn_01.css";		

///================================================================================================================		
///				  dir_home page insert basic
//=================================================================================================================
						
				$ins_home = "insert into dir_home(mdirid, comp_home, comp_marque, comp_moto, comp_css)
							 values
							 ('$dirmid','$comp_home','$comp_marque','$comp_moto','$comp_css')";	

				$rcd_home = mysql_query($ins_home,$abc);		

///===============================================================================================================		
///				  				dir Address Book Setup Insert
//================================================================================================================

				$instrcd = "insert into dir_addbksetup(dir_id, cname, cpname, add1, city,
									dist, state, country, pin, tel, fax, mail, web, hid, hweb, hmail)
									values 
									('$dirmid','1','1','1','1','1','1','1',
									'1','1','1','1','1','1','1','1')";
						$rdrcd	= mysql_query($instrcd,$abc)or die(mysql_error());

				
///==============================================================================================================
///                             Address Book  First Record Insert
///==============================================================================================================				
				
								$rdins = "insert into dir_addbook(dir_id, add_id, dir_type, add_limit)
										  values
									  ('$dirmid','$dirmid','1','100')";
								$insrd = mysql_query($rdins,$abc) or die(mysql_error());
								
				
///==============================================================================================================
///                             select from Advts Temp
///==============================================================================================================				
					 
					 
		$DirTadvtSl 	= "select * from dir_tadvts where dir_id='$tdirid'";
		$DirTadvtRd		= mysql_query($DirTadvtSl,$abc);
		$DirCatid 		= mysql_result($DirTadvtRd,0,'dir_cat_id');
		$DirProdid 		= mysql_result($DirTadvtRd,0,'dir_prod_id');
		$dirRyear  		= mysql_result($DirTadvtRd,0,'dir_regfyear');
		$dirSindex		= mysql_result($DirTadvtRd,0,'sidx');
		$dircity		= mysql_result($DirTadvtRd,0,'city');
		$dirFdate		= mysql_result($DirTadvtRd,0,'rgfdate');
		$dirTdate		= mysql_result($DirTadvtRd,0,'rgtdate');
		$dirAuthtag		= mysql_result($DirTadvtRd,0,'authtag');
		$dirDirstrict	= mysql_result($DirTadvtRd,0,'district');
		$dirState		= mysql_result($DirTadvtRd,0,'state');
		$dirCountry		= mysql_result($DirTadvtRd,0,'country');
		
		
		$dirins	= "insert into dir_catprd(main_dirid, cat_id, prd_id, regfrdt, regtodt, aut_tag, sidx, rfyear, city, district, state, country)
					values
					('$dirmid','$DirCatid','$DirProdid','$dirFdate','$dirTdate','$dirAuthtag','$dirSindex','$dirRyear','$dircity', '$dirDirstrict', '$dirState','$dirCountry')";
		$dirinsq	= mysql_query($dirins,$abc) or die(mysql_error());
		
		
					
					
		$deladvtsl	= "delete from dir_tadvts where dir_id='$tdirid'"; 
		$deladvtrd	= mysql_query($deladvtsl, $abc);
					
					
// ==============================================================================================================
//                delete record from Temp main, Temp add, temp advertisement table
//===============================================================================================================				
				
				$delmaintsl = "delete from dir_tmain where dir_id='$tdirid'"; 
				//$deladdtsl  = "delete from dir_tadd where dir_id= '$dirid'";
				//$deladvtsl  = "delete from dir_tadvts where dir_id='$dirid'";

				$delmaintrd = mysql_query($delmaintsl,$abc);
				//$deladdtrd	= mysql_query($deladdtsl, $abc);
				//$deladvtrd	= mysql_query($deladvtsl, $abc);


				$msl = "select * from dir_main where dir_id = '$dirmid'";
				$msrd = mysql_query($msl,$abc);
				$dirid = mysql_result($msrd,0,'dir_id');
				$cname = mysql_result($msrd,0,'dir_cname');

				$display_block = "<h4>Record Successfuly Authorised <br>
										Company Id = $compid <br>
										Name = $cname <br>	   
							<a href=\"DirCatPrdAddM.php\"> Authorised Another One </a>
							<br>
							Open Web Site <a href=\"0708150201.php?ID=$dirid\" target=\"_blank\"> Click Here </a>
							</h4>
							
							
							" ;
		

		}
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
