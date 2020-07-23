<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();
$srvsid = $_GET['ID'];

			

$slmoto = "select * from srvs_home where mdirid = '$srvsid'";
$rdmoto = mysql_query($slmoto);
$rdcount = $db->numRows($rdmoto);
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
	
	
		$srvsData = srvsadd($srvsid);
                 for($index=0;$index < count($srvsData);$index++)
                    {
                     $srvsmain = $srvsData[$index];
                                $cid    = $srvsmain->getSrvsid();
                                $cname  = $srvsmain->getCname();
                                $cpname = $srvsmain->getCpname();
                                $add1   = $srvsmain->getAdd1();
                                $add2   = $srvsmain->getAdd2();
                                $mail   = $srvsmain->getMail();
                                $web    = $srvsmain->getWeb();
								$mob	= $srvsmain->getMob();
                                $tel    = $srvsmain->getTel();
                                $fax    = $srvsmain->getFax();
                                $pin    = $srvsmain->getPin();
                                $citname = $srvsmain->getCity();
                                $stname  = $srvsmain->getStat();    
                                $ctname = $srvsmain->getCont();
                                $cno     = $srvsmain->getCno();
                 		}
?>