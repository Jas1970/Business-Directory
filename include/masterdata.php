<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();

$rstid = $_GET['ID'];
$select_rcd = "select *  from dir_main where dir_id='$rstid'";
$result_rcd = mysql_query($select_rcd);
//1
$count_rcd = mysql_num_rows($result_rcd);
$cname = mysql_result($result_rcd,0,'dir_cname');
$dircno = mysql_result($result_rcd,0,'dir_cno');
$cpname = mysql_result($result_rcd,0,'dir_cpname');
$slmoto = "select * from dir_home where mdirid = '$rstid'";
$rdmoto = mysql_query($slmoto);
//2
$rdcount = mysql_num_rows($rdmoto);
if($rdcount<>"0")
	{
	$pdet  = mysql_result($rdmoto,0,'comp_moto');
	$chome = mysql_result($rdmoto,0,'comp_home');
	$css   = mysql_result($rdmoto,0,'comp_css');
	$marqs  = mysql_result($rdmoto,0,'comp_marque');	
	}
$slprofile = "select * from dir_profile where mdirid = '$rstid'";
$rdprofile = mysql_query($slprofile);
$profilecount = mysql_num_rows($rdprofile);
if($profilecount<>"0")
	{
		$profile = mysql_result($rdprofile,0,'prof');
	} 
	else
	{
		$profile = "Company profile Yet Not Define";
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
			
                              $addData = diradds($rstid);
                                for($index=0;$index < count($addData);$index++)
                                    {
                                $diraddclass = $addData[$index];
                                $dirid = $diraddclass->getDirid();
                                $diradd1 = $diraddclass->getDiradd1();
                                $diradd2 = $diraddclass->getDiradd2();
                                $citname = $diraddclass->getDircity();
                                $dirdist = $diraddclass->getDirdist();
                                $stname = $diraddclass->getDirstat();
                                $ctname = $diraddclass->getDircont();
                                $dirtel  = $diraddclass->getDirtel();
                                $dirfax = $diraddclass->getDirfax();
                                $dirmob = $diraddclass->getDirmob();
                                $dirmail = $diraddclass->getDirmail();
                                $diramail = $diraddclass->getDiramail();
                                $dirpin   = $diraddclass->getDirpin();
                                $dirweb  = $diraddclass->getDirweb();    
                               } 
  
?>