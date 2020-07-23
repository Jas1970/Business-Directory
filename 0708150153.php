<html
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><head>
<link href="css/org_02.css" rel="stylesheet" type="text/css">
</head>
<body>
</body>
</html>

<?php

//         Main business directory select

//include 'Connections/db.inc.php';
include 'include/functionProcess.php'; 
?>
<?php
$db  = new DB();
$db->open();	
	
		$pg = 1;
		$line_num = 15;  

	$country="-1";
	$state ="-1";
	$district ="-1";
	$city="-1";

	if($country=="")
		{
		$country = "-1";
		}
	if($state =="")
		{
		$state	 = "-1";
		}
	if($district=="")
		{
		$district = "-1";
		}
	if($city=="")
		{
		$city	 = "-1";
		}

		$catid  = $_REQUEST['CID'];
		$prodid = $_REQUEST['PID'];

		$country = $_POST['country_dropdown'];
		$state	 = $_POST['state_dropdown'];
		$district = $_POST['district_dropdown'];
		$city	 = $_POST['city_dropdown'];
		$prdid = $_REQUEST['product_dropdown'];

		if($prodid=="")
			{
				$prodid=$prdid;
			}

	
		$max = $line_num;	// configure how many rows of message display per page
		if($pg=="")
                    {
                    $pg=1;
                    }
                    else
                    {
                     $pg = $_REQUEST['pg'];   
                    }
                
		$cur_rows = 0;
		$max_rows = $max;
		$count=0;
		$sname="";

if($catid=="")
		{
			$catid= $_GET['CID'];
		}
if($prdid=="")
		{
			$prdid= $_GET['PID'];
		}

if($country=="")
	{
		$country=$_GET['country'];
	}

if($state=="")
	{
		$state =  $_GET['state'];
	}
if($district=="")
	{
		$district= $_GET['district'];
	}

if($city=="")
		{
			$city= $_GET['city'];
		}
	
	if($pg!=1)
	{
		for($i=1;$i<$pg;$i++)
		{
			$cur_rows=$cur_rows+$max;
			$max_rows=$max_rows+$max;
		}
	}


//=========================First Loop=============================
		
if($prdid=="-1" and $city =="-1" and $district =="-1" and $state == "-1" and $country == '-1')
	{		

	$recd = mysql_query("SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' 
			 order by sidx") or die("Query failed a");
	
	
	
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Category ...........Thanks </font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' 
			 order by sidx";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Category ....... Thanks </h3>";
			exit;
		}

	$listed=0;

	print "<font color=\"Blue\">Search for Category <b>$catnm </b> Record Found <b> $recnum</font></b> "; 	
	print("<table border=0 bgcolor=#cccccc width=100% cellspacing=0>");
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
	{	
		if($listed>=$cur_rows && $listed< $max_rows)
		{
		print "<tr bgcolor=#fcfcfc><td>";
			foreach($line as $guest_rec[$count])
			{
			if($count==0) 
				$slmain = "select * from dir_main where dir_id='$guest_rec[$count]'";
				$rdmain = mysql_query($slmain);
				$cname = mysql_result($rdmain,0,'dir_cname');
				$dcno  = mysql_result($rdmain,0,'dir_cno');
				$dauth = mysql_result($rdmain,0,'dir_auth');
				$rstid = mysql_result($rdmain,0,'dir_id');
                
				$prodname = "select dir_compprod.prod_id, prod.prodnam from dir_compprod, prod where dir_compprod.mdirid = '$rstid' 
							and dir_compprod.prod_id=prod.prodid";
				$rdpname  = mysql_query($prodname);
				$rdnum    = mysql_num_rows($rdpname);
				if($rdnum<>"0")
					{
					while ($posts_info = mysql_fetch_array($rdpname))
						{
							$pname = $posts_info['prodnam'];
							$sname = $sname.' '."$pname, ";
						}
					}
					else
					{
				
				
				
				
				
					$catsel = "select * from catg where catid= '$catid'";
					$catrd  = mysql_query($catsel);
					$catname = mysql_result($catrd,0,'catname');
				
					$prodsel = "select * from prod where prodid = '$prodid'";
					$prodrd  = mysql_query($prodsel);
					$prodname = mysql_result($prodrd,0,'prodnam');
				
				
				
						$sname = "$catname : " . " ($prodname ) 1" ;				
				
					}
					$desc = substr($sname,0,139);
                                                                                        
				$slpdet = "select * from dir_home where mdirid = '$rstid'";
				$rdpdet = mysql_query($slpdet);
				$rdcount = mysql_num_rows($rdpdet);
				if($rdcount<>"")
					{
					$pdet  = mysql_result($rdpdet,0,'comp_moto');						
					}
                                        
                                $addData = diradds($rstid);
                                for($index=0;$index < count($addData);$index++)
                                    {
                                $diraddclass = $addData[$index];
                                $dirid = $diraddclass->getDirid();
                                $diradd1 = $diraddclass->getDiradd1();
                                $diradd2 = $diraddclass->getDiradd2();
                                $dircity = $diraddclass->getDircity();
                                $dirdist = $diraddclass->getDirdist();
                                $dirstat = $diraddclass->getDirstat();
                                $dircont = $diraddclass->getDircont();
                                $dirtel  = $diraddclass->getDirtel();
                                $dirfax = $diraddclass->getDirfax();
                                $dirmob = $diraddclass->getDirmob();
                                $dirmail = $diraddclass->getDirmail();
                                $diramail = $diraddclass->getDiramail();
                                $dirpin   = $diraddclass->getDirpin();
                                $dirweb  = $diraddclass->getDirweb();    
                      } 
						 
						 if($dauth=='Y')
						 	{
                               
	
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent><b>$cname - $dircity ($dirstat)</b></a></td><td class=\"grncel_DRK_tb bgimg\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent>Web Site : Yes </a></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\">$dirmail</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirweb </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirtel,  Fax : $dirfax </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dcno</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>

						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
					}
					else
					{
											 
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">$cname - $dircity ($dirstat)</b></td>
						<td class=\"grncel_DRK_tb bgimg\">Web Site : No </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">,  Fax :  </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
				}



			$count++;
			
			
			
			}
			$sname ="";
		}
		$listed++;
		$count=0;
		print "</td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#FFCC66><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	
	}
	
//==================================Second Loop ========================================

elseif($prdid<>"-1" and $city =="-1" and $district =="-1" and $state == "-1" and $country == "-1")
	{

	$recd = mysql_query("SELECT distinct(main_dirid) FROM dir_catprd 
			 where 
			 dir_catprd.cat_id='$catid' and
			 dir_catprd.prd_id='$prodid'
			 order by sidx") or die("Query failed a");
	
	
	
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Category ...........Thanks </font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' and
			 dir_catprd.prd_id='$prodid'
			 order by sidx";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Category ....... Thanks </h3>";
			exit;
		}

	$listed=0;

	print "<font color=\"Blue\">Search for Category <b></b> Record Found <b> $recnum</font></b> "; 	
	print("<table border=0 bgcolor=#cccccc width=100% cellspacing=0>");
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
	{	
		if($listed>=$cur_rows && $listed< $max_rows)
		{
		print "<tr bgcolor=#fcfcfc><td>";
			foreach($line as $guest_rec[$count])
			{
			if($count==0) 
				$slmain = "select * from dir_main where dir_id='$guest_rec[$count]'";
				$rdmain = mysql_query($slmain);
				$cname = mysql_result($rdmain,0,'dir_cname');
				$dcno  = mysql_result($rdmain,0,'dir_cno');
				$dauth = mysql_result($rdmain,0,'dir_auth');

				$rstid = mysql_result($rdmain,0,'dir_id');
                                
                                
                                
                          
               $prodname = "select dir_compprod.prod_id, prod.prodnam from dir_compprod, prod where dir_compprod.mdirid = '$rstid' 
							and dir_compprod.prod_id=prod.prodid";
				$rdpname  = mysql_query($prodname);
				$rdnum    = mysql_num_rows($rdpname);
				if($rdnum<>"0")
					{
					while ($posts_info = mysql_fetch_array($rdpname))
						{
							$pname = $posts_info['prodnam'];
							$sname = $sname.' '."$pname, ";
													}
					}
					else
					{
					
					
					
					
					$catsel = "select * from catg where catid= '$catid'";
					$catrd  = mysql_query($catsel);
					$catname = mysql_result($catrd,0,'catname');
				
					$prodsel = "select * from prod where prodid = '$prodid'";
					$prodrd  = mysql_query($prodsel);
					$prodname = mysql_result($prodrd,0,'prodnam');
				
				
						$sname = "$catname : " . " ($prodname ) 2" ;
					}
					$desc = substr($sname,0,139);
                                
                                
                                
			
				$slpdet = "select * from dir_home where mdirid = '$rstid'";
				$rdpdet = mysql_query($slpdet);
				$rdcount = mysql_num_rows($rdpdet);
				if($rdcount<>"")
					{
					$pdet  = mysql_result($rdpdet,0,'comp_moto');						
					}
                                        
                                $addData = diradds($rstid);
                                for($index=0;$index < count($addData);$index++)
                                    {
                                $diraddclass = $addData[$index];
                                $dirid = $diraddclass->getDirid();
                                $diradd1 = $diraddclass->getDiradd1();
                                $diradd2 = $diraddclass->getDiradd2();
                                $dircity = $diraddclass->getDircity();
                                $dirdist = $diraddclass->getDirdist();
                                $dirstat = $diraddclass->getDirstat();
                                $dircont = $diraddclass->getDircont();
                                $dirtel  = $diraddclass->getDirtel();
                                $dirfax = $diraddclass->getDirfax();
                                $dirmob = $diraddclass->getDirmob();
                                $dirmail = $diraddclass->getDirmail();
                                $diramail = $diraddclass->getDiramail();
                                $dirpin   = $diraddclass->getDirpin();
                                $dirweb  = $diraddclass->getDirweb();    
                               }   
						 
						 if($dauth=='Y')
						 	{
                               
	
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent><b>$cname - $dircity ($dirstat)</b></a></td><td class=\"grncel_DRK_tb bgimg\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent>Web Site : Yes </a></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\">$dirmail</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirweb </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirtel,  Fax : $dirfax </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dcno</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>

						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
					}
					else
					{
											 
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">$cname - $dircity ($dirstat)</b></td>
						<td class=\"grncel_DRK_tb bgimg\">Web Site : No </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">,  Fax :  </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
				}




			$count++;
			}
			$sname ="";
		}
		$listed++;
		$count=0;
		print "</td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#FFCC66><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
//==================================Third Loop ========================================

elseif($prdid<>"-1" and $country <>"-1" and $state == "-1" and $district =="-1" and $city =="-1")
	{

	$recd = mysql_query("SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' and 
			 dir_catprd.prd_id='$prdid'  and
			 dir_catprd.country='$country' 
			 order by dir_catprd.sidx") or die("Query failed a");
			$num_rows = mysql_num_rows($recd);
	
	
	
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Category ...........Thanks </font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' and
			 dir_catprd.prd_id='$prodid'
			 order by sidx";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Category ....... Thanks </h3>";
			exit;
		}

	$listed=0;

	print "<font color=\"Blue\">Search for Category <b></b> Record Found <b> $recnum</font></b> "; 	
	print("<table border=0 bgcolor=#cccccc width=100% cellspacing=0>");
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
	{	
		if($listed>=$cur_rows && $listed< $max_rows)
		{
		print "<tr bgcolor=#fcfcfc><td>";
			foreach($line as $guest_rec[$count])
			{
			if($count==0) 
				$slmain = "select * from dir_main where dir_id='$guest_rec[$count]'";
				$rdmain = mysql_query($slmain);
				$cname = mysql_result($rdmain,0,'dir_cname');
				$dcno  = mysql_result($rdmain,0,'dir_cno');
				$dauth = mysql_result($rdmain,0,'dir_auth');

				$rstid = mysql_result($rdmain,0,'dir_id');
                                
                                
                                
                          
               $prodname = "select dir_compprod.prod_id, prod.prodnam from dir_compprod, prod where dir_compprod.mdirid = '$rstid' 
							and dir_compprod.prod_id=prod.prodid";
				$rdpname  = mysql_query($prodname);
				$rdnum    = mysql_num_rows($rdpname);
				if($rdnum<>"0")
					{
					while ($posts_info = mysql_fetch_array($rdpname))
						{
							$pname = $posts_info['prodnam'];
							$sname = $sname.' '."$pname, ";
													}
					}
					else
					{
					
					
					
					
					$catsel = "select * from catg where catid= '$catid'";
					$catrd  = mysql_query($catsel);
					$catname = mysql_result($catrd,0,'catname');
				
					$prodsel = "select * from prod where prodid = '$prodid'";
					$prodrd  = mysql_query($prodsel);
					$prodname = mysql_result($prodrd,0,'prodnam');
				
				
						$sname = "$catname : " . " ($prodname ) 3" ;
					}
					$desc = substr($sname,0,139);
                                
                                
                                
			
				$slpdet = "select * from dir_home where mdirid = '$rstid'";
				$rdpdet = mysql_query($slpdet);
				$rdcount = mysql_num_rows($rdpdet);
				if($rdcount<>"")
					{
					$pdet  = mysql_result($rdpdet,0,'comp_moto');						
					}
                                        
                                $addData = diradds($rstid);
                                for($index=0;$index < count($addData);$index++)
                                    {
                                $diraddclass = $addData[$index];
                                $dirid = $diraddclass->getDirid();
                                $diradd1 = $diraddclass->getDiradd1();
                                $diradd2 = $diraddclass->getDiradd2();
                                $dircity = $diraddclass->getDircity();
                                $dirdist = $diraddclass->getDirdist();
                                $dirstat = $diraddclass->getDirstat();
                                $dircont = $diraddclass->getDircont();
                                $dirtel  = $diraddclass->getDirtel();
                                $dirfax = $diraddclass->getDirfax();
                                $dirmob = $diraddclass->getDirmob();
                                $dirmail = $diraddclass->getDirmail();
                                $diramail = $diraddclass->getDiramail();
                                $dirpin   = $diraddclass->getDirpin();
                                $dirweb  = $diraddclass->getDirweb();    
                               }   
						 
						 if($dauth=='Y')
						 	{
                               
	
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent><b>$cname - $dircity ($dirstat)</b></a></td><td class=\"grncel_DRK_tb bgimg\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent>Web Site : Yes </a></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\">$dirmail</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirweb </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirtel,  Fax : $dirfax </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dcno</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>

						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
					}
					else
					{
											 
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">$cname - $dircity ($dirstat)</b></td>
						<td class=\"grncel_DRK_tb bgimg\">Web Site : No </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">,  Fax :  </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
				}




			$count++;
			}
			$sname ="";
		}
		$listed++;
		$count=0;
		print "</td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#FFCC66><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
//==================================forth Loop ========================================

elseif($prdid<>"-1" and $country <>"-1" and $state <> "-1" and $district =="-1" and $city =="-1")
	{

	
	$recd = mysql_query("SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' and 
			 dir_catprd.prd_id='$prdid'  and
			 dir_catprd.country='$country' and
			 dir_catprd.state = '$state' 
			 order by dir_catprd.sidx") or die("Query failed a");

		$num_rows = mysql_num_rows($recd);
	
	
	
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Category ...........Thanks </font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' and
			 dir_catprd.prd_id='$prodid'
			 order by sidx";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Category ....... Thanks </h3>";
			exit;
		}

	$listed=0;

	print "<font color=\"Blue\">Search for Category <b></b> Record Found <b> $recnum</font></b> "; 	
	print("<table border=0 bgcolor=#cccccc width=100% cellspacing=0>");
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
	{	
		if($listed>=$cur_rows && $listed< $max_rows)
		{
		print "<tr bgcolor=#fcfcfc><td>";
			foreach($line as $guest_rec[$count])
			{
			if($count==0) 
				$slmain = "select * from dir_main where dir_id='$guest_rec[$count]'";
				$rdmain = mysql_query($slmain);
				$cname = mysql_result($rdmain,0,'dir_cname');
				$dcno  = mysql_result($rdmain,0,'dir_cno');
				$dauth = mysql_result($rdmain,0,'dir_auth');

				$rstid = mysql_result($rdmain,0,'dir_id');
                                
                                
                                
                          
               $prodname = "select dir_compprod.prod_id, prod.prodnam from dir_compprod, prod where dir_compprod.mdirid = '$rstid' 
							and dir_compprod.prod_id=prod.prodid";
				$rdpname  = mysql_query($prodname);
				$rdnum    = mysql_num_rows($rdpname);
				if($rdnum<>"0")
					{
					while ($posts_info = mysql_fetch_array($rdpname))
						{
							$pname = $posts_info['prodnam'];
							$sname = $sname.' '."$pname, ";
													}
					}
					else
					{
					
					
					
					
					$catsel = "select * from catg where catid= '$catid'";
					$catrd  = mysql_query($catsel);
					$catname = mysql_result($catrd,0,'catname');
				
					$prodsel = "select * from prod where prodid = '$prodid'";
					$prodrd  = mysql_query($prodsel);
					$prodname = mysql_result($prodrd,0,'prodnam');
				
				
						$sname = "$catname : " . " ($prodname ) 4" ;
					}
					$desc = substr($sname,0,139);
                                
                                
                                
			
				$slpdet = "select * from dir_home where mdirid = '$rstid'";
				$rdpdet = mysql_query($slpdet);
				$rdcount = mysql_num_rows($rdpdet);
				if($rdcount<>"")
					{
					$pdet  = mysql_result($rdpdet,0,'comp_moto');						
					}
                                        
                                $addData = diradds($rstid);
                                for($index=0;$index < count($addData);$index++)
                                    {
                                $diraddclass = $addData[$index];
                                $dirid = $diraddclass->getDirid();
                                $diradd1 = $diraddclass->getDiradd1();
                                $diradd2 = $diraddclass->getDiradd2();
                                $dircity = $diraddclass->getDircity();
                                $dirdist = $diraddclass->getDirdist();
                                $dirstat = $diraddclass->getDirstat();
                                $dircont = $diraddclass->getDircont();
                                $dirtel  = $diraddclass->getDirtel();
                                $dirfax = $diraddclass->getDirfax();
                                $dirmob = $diraddclass->getDirmob();
                                $dirmail = $diraddclass->getDirmail();
                                $diramail = $diraddclass->getDiramail();
                                $dirpin   = $diraddclass->getDirpin();
                                $dirweb  = $diraddclass->getDirweb();    
                               }   
						 
						 if($dauth=='Y')
						 	{
                               
	
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent><b>$cname - $dircity ($dirstat)</b></a></td><td class=\"grncel_DRK_tb bgimg\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent>Web Site : Yes </a></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\">$dirmail</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirweb </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirtel,  Fax : $dirfax </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dcno</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>

						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
					}
					else
					{
											 
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">$cname - $dircity ($dirstat)</b></td>
						<td class=\"grncel_DRK_tb bgimg\">Web Site : No </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">,  Fax :  </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
				}




			$count++;
			}
			$sname ="";
		}
		$listed++;
		$count=0;
		print "</td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#FFCC66><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
//==================================fifth Loop ========================================

elseif($prdid<>"-1" and $country <>"-1" and $state <> "-1" and $district <>"-1" and $city =="-1")
	{

	$recd = mysql_query("SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' and 
			 dir_catprd.prd_id='$prdid'  and
			 dir_catprd.country='$country' and
			 dir_catprd.state = '$state' and
			 dir_catprd.district='$district'  
			 order by dir_catprd.sidx") or die("Query failed a");

		$num_rows = mysql_num_rows($recd);
	
	
	
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Category ...........Thanks </font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' and
			 dir_catprd.prd_id='$prodid'
			 order by sidx";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Category ....... Thanks </h3>";
			exit;
		}

	$listed=0;

	print "<font color=\"Blue\">Search for Category <b></b> Record Found <b> $recnum</font></b> "; 	
	print("<table border=0 bgcolor=#cccccc width=100% cellspacing=0>");
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
	{	
		if($listed>=$cur_rows && $listed< $max_rows)
		{
		print "<tr bgcolor=#fcfcfc><td>";
			foreach($line as $guest_rec[$count])
			{
			if($count==0) 
				$slmain = "select * from dir_main where dir_id='$guest_rec[$count]'";
				$rdmain = mysql_query($slmain);
				$cname = mysql_result($rdmain,0,'dir_cname');
				$dcno  = mysql_result($rdmain,0,'dir_cno');
				$dauth = mysql_result($rdmain,0,'dir_auth');

				$rstid = mysql_result($rdmain,0,'dir_id');
                                
                                
                                
                          
               $prodname = "select dir_compprod.prod_id, prod.prodnam from dir_compprod, prod where dir_compprod.mdirid = '$rstid' 
							and dir_compprod.prod_id=prod.prodid";
				$rdpname  = mysql_query($prodname);
				$rdnum    = mysql_num_rows($rdpname);
				if($rdnum<>"0")
					{
					while ($posts_info = mysql_fetch_array($rdpname))
						{
							$pname = $posts_info['prodnam'];
							$sname = $sname.' '."$pname, ";
													}
					}
					else
					{
					
					
					
					
					$catsel = "select * from catg where catid= '$catid'";
					$catrd  = mysql_query($catsel);
					$catname = mysql_result($catrd,0,'catname');
				
					$prodsel = "select * from prod where prodid = '$prodid'";
					$prodrd  = mysql_query($prodsel);
					$prodname = mysql_result($prodrd,0,'prodnam');
				
				
						$sname = "$catname : " . " ($prodname ) 5" ;
					}
					$desc = substr($sname,0,139);
                                
                                
                                
			
				$slpdet = "select * from dir_home where mdirid = '$rstid'";
				$rdpdet = mysql_query($slpdet);
				$rdcount = mysql_num_rows($rdpdet);
				if($rdcount<>"")
					{
					$pdet  = mysql_result($rdpdet,0,'comp_moto');						
					}
                                        
                                $addData = diradds($rstid);
                                for($index=0;$index < count($addData);$index++)
                                    {
                                $diraddclass = $addData[$index];
                                $dirid = $diraddclass->getDirid();
                                $diradd1 = $diraddclass->getDiradd1();
                                $diradd2 = $diraddclass->getDiradd2();
                                $dircity = $diraddclass->getDircity();
                                $dirdist = $diraddclass->getDirdist();
                                $dirstat = $diraddclass->getDirstat();
                                $dircont = $diraddclass->getDircont();
                                $dirtel  = $diraddclass->getDirtel();
                                $dirfax = $diraddclass->getDirfax();
                                $dirmob = $diraddclass->getDirmob();
                                $dirmail = $diraddclass->getDirmail();
                                $diramail = $diraddclass->getDiramail();
                                $dirpin   = $diraddclass->getDirpin();
                                $dirweb  = $diraddclass->getDirweb();    
                               }   
						 
						 if($dauth=='Y')
						 	{
                               
	
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent><b>$cname - $dircity ($dirstat)</b></a></td><td class=\"grncel_DRK_tb bgimg\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent>Web Site : Yes </a></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\">$dirmail</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirweb </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirtel,  Fax : $dirfax </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dcno</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>

						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
					}
					else
					{
											 
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">$cname - $dircity ($dirstat)</b></td>
						<td class=\"grncel_DRK_tb bgimg\">Web Site : No </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">,  Fax :  </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
				}




			$count++;
			}
			$sname ="";
		}
		$listed++;
		$count=0;
		print "</td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#FFCC66><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}
//==================================Sixth Loop ========================================

elseif($prdid<>"-1" and $country <>"-1" and $state <> "-1" and $district <>"-1" and $city <>"-1")
	{

	$recd = mysql_query("SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' and 
			 dir_catprd.prd_id='$prdid'  and
			 dir_catprd.country='$country' and
			 dir_catprd.state = '$state' and
			 dir_catprd.district='$district' and 
			 dir_catprd.city = '$city' 
			 order by dir_catprd.sidx") or die("Query failed a");

		$num_rows = mysql_num_rows($recd);
	
	
	
	$num_rows = mysql_num_rows($recd);

	if($num_rows==0)
		{	
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Record Not Found Against This Category ...........Thanks </font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
		}



	$query = "SELECT distinct(main_dirid) FROM dir_catprd 
			 where dir_catprd.cat_id='$catid' and
			 dir_catprd.prd_id='$prodid'
			 order by sidx";

	$result = mysql_query($query) or die("Query failed b");

	$recnum = mysql_num_rows($result);
	
	if ($recnum<=0)
		{
			print "<center><h3>Record Not Found Against This Category ....... Thanks </h3>";
			exit;
		}

	$listed=0;

	print "<font color=\"Blue\">Search for Category <b></b> Record Found <b> $recnum</font></b> "; 	
	print("<table border=0 bgcolor=#cccccc width=100% cellspacing=0>");
	$listed=0;
	while($line = mysql_fetch_array($result, MYSQL_ASSOC))
	{	
		if($listed>=$cur_rows && $listed< $max_rows)
		{
		print "<tr bgcolor=#fcfcfc><td>";
			foreach($line as $guest_rec[$count])
			{
			if($count==0) 
				$slmain = "select * from dir_main where dir_id='$guest_rec[$count]'";
				$rdmain = mysql_query($slmain);
				$cname = mysql_result($rdmain,0,'dir_cname');
				$dcno  = mysql_result($rdmain,0,'dir_cno');
				$dauth = mysql_result($rdmain,0,'dir_auth');

				$rstid = mysql_result($rdmain,0,'dir_id');
                                
                                
                                
                          
               $prodname = "select dir_compprod.prod_id, prod.prodnam from dir_compprod, prod where dir_compprod.mdirid = '$rstid' 
							and dir_compprod.prod_id=prod.prodid";
				$rdpname  = mysql_query($prodname);
				$rdnum    = mysql_num_rows($rdpname);
				if($rdnum<>"0")
					{
					while ($posts_info = mysql_fetch_array($rdpname))
						{
							$pname = $posts_info['prodnam'];
							$sname = $sname.' '."$pname, ";
													}
					}
					else
					{
					
					
					
					
					$catsel = "select * from catg where catid= '$catid'";
					$catrd  = mysql_query($catsel);
					$catname = mysql_result($catrd,0,'catname');
				
					$prodsel = "select * from prod where prodid = '$prodid'";
					$prodrd  = mysql_query($prodsel);
					$prodname = mysql_result($prodrd,0,'prodnam');
				
				
						$sname = "$catname : " . " ($prodname ) 6" ;
					}
					$desc = substr($sname,0,139);
                                
                                
                                
			
				$slpdet = "select * from dir_home where mdirid = '$rstid'";
				$rdpdet = mysql_query($slpdet);
				$rdcount = mysql_num_rows($rdpdet);
				if($rdcount<>"")
					{
					$pdet  = mysql_result($rdpdet,0,'comp_moto');						
					}
                                        
                                $addData = diradds($rstid);
                                for($index=0;$index < count($addData);$index++)
                                    {
                                $diraddclass = $addData[$index];
                                $dirid = $diraddclass->getDirid();
                                $diradd1 = $diraddclass->getDiradd1();
                                $diradd2 = $diraddclass->getDiradd2();
                                $dircity = $diraddclass->getDircity();
                                $dirdist = $diraddclass->getDirdist();
                                $dirstat = $diraddclass->getDirstat();
                                $dircont = $diraddclass->getDircont();
                                $dirtel  = $diraddclass->getDirtel();
                                $dirfax = $diraddclass->getDirfax();
                                $dirmob = $diraddclass->getDirmob();
                                $dirmail = $diraddclass->getDirmail();
                                $diramail = $diraddclass->getDiramail();
                                $dirpin   = $diraddclass->getDirpin();
                                $dirweb  = $diraddclass->getDirweb();    
                               }   
						 
						 if($dauth=='Y')
						 	{
                               
	
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent><b>$cname - $dircity ($dirstat)</b></a></td><td class=\"grncel_DRK_tb bgimg\"><a href=0708150111.php?ID=$guest_rec[$count] target=_parent>Web Site : Yes </a></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\">$dirmail</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirweb </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dirtel,  Fax : $dirfax </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">$dcno</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>

						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
					}
					else
					{
											 
			print "<fieldset>
					<table border = 0 width=100% cellspacing=0 cellpadding=2>
					
						<tr>
							<td height=\"25\" class=\"grncel_DRK_tb bgimg\" colspan=5 align=\"left\">$cname - $dircity ($dirstat)</b></td>
						<td class=\"grncel_DRK_tb bgimg\">Web Site : No </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" colspan=6>($pdet)</td>
						</tr>
						<tr>
							<td class = \"grncel_DRK \" colspan=6><b>$desc [...]</b></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">Address</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"45%\">$diradd1 $diradd2 </td>
							<td class = \"grncel_DRK\" align=\"right\" width=\"10%\">E-Mail</td>
							<td class = \"grncel_DRK\" width=\"2%\"> <b> : </b></td>
							<td class = \"grncel_DRK\" width=\"31%\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">City  </td>
							<td class = \"grncel_DRK\">  <b> : </b></td>
							<td class = \"grncel_DRK\"> $dircity, $dirstat - $dirpin ($dircont)</td>
							<td class = \"grncel_DRK\" align=\"right\">Web Site </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"> </td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">Phone    </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\">,  Fax :  </td>
							<td class = \"grncel_DRK\" align=\"right\">Haanzee ID </td>
							<td class = \"grncel_DRK\"><b> : </b></td>
							<td class = \"grncel_DRK\"></td>
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>
						<tr>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							<td class = \"grncel_DRK\" align=\"right\">&nbsp;</td>
							<td class = \"grncel_DRK\"><b>&nbsp;</b></td>
							<td class = \"grncel_DRK\">&nbsp;</td>
							
						</tr>


									
						</table>
					</fieldset>";
				}




			$count++;
			}
			$sname ="";
		}
		$listed++;
		$count=0;
		print "</td></tr>";
	}
	print("</table><br><table border=0 width=100% cellspacing=0><tr bgcolor=#FFCC66><td width=%15 align=left></td><td><center><font face=arial size=2 color=white>");
	
	$pages = ceil($num_rows/$max);
	
	if($pg!=1)
	{
		print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg-1)." alt='Page ".($pg-1)."'>Previous</a><<&nbsp;");
	}
	for($i=1;$i<=$pages;$i++)		
	{
		if($pages>1)
			print("<a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=$i alt='Page $i'><u>$i</u></a>&nbsp;");
	}
	if($pg+1<=$pages)
	{
		print("&nbsp;>><a href=0708150153.php?CID=$catid&PID=$prodid&country=$country&state=$state&district=$district&city=$city&pg=".($pg+1)." alt='Page ".($pg+1)."'>Next</a>");
	}
	print("</font></td><td align=right width=%15><font face=arial size=2 color=Blue>Page $pg of ".(($pages==0)?1:$pages)."</font></td></tr></table>");
	}

	else
	{
			print "<br>";
			print "<br> <table align=\"left\" width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			print "<tr><td class=\"org_border_t_cell\">&nbsp;</td></tr> ";
			print "<tr><td class=\"org_border_c_cell\" align=\"center\"><font class=\"small\">Please Select Vaild Category ....Thanks</font></td></tr>";
			print "<tr><td class=\"org_border_b_cell\">&nbsp;</td></tr> ";
			exit;
	}


   $db->close();  
?>

