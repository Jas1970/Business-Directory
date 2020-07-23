<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);


$dirid =  "$_POST[dirid]";
$cname  = "$_POST[catname]";
$pname 	= "$_POST[pname]";
$regfy	= "$_POST[rfyear]";

$slcat = "select * from catg where catname='$cname'";
$rdservs = mysql_query($slcat,$abc);
$catid = mysql_result($rdservs,0,'catid');

$slprod = "select * from prod where prodnam='$pname'";
$rdservs = mysql_query($slprod,$abc);
$prodid = mysql_result($rdservs,0,'prodid');

$selcsrvs = "select * from dir_catprd where main_dirid='$dirid' and cat_id='$catid' and prd_id='$prodid'";
$prodrcd = mysql_query($selcsrvs, $abc);
$profid = mysql_result($prodrcd,0,'ids');
$profnum = mysql_num_rows($prodrcd);

if($profnum > 0)
	{
	 $display_block = "<center> $dirid Record Already Registered  <br>
	 					<a href=\"advts_CPAuthAdd.php\"> Select Another One </a> </center>" ;
	
	}
	else
	{
				$dyear = date("Y", mktime())+$regfy;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());
				$curdate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));

	 
	 
	$AdvtSl = "insert into dir_catprd(main_dirid, cat_id, prd_id, regfrdt, regtodt, aut_tag)
				values
				('$dirid','$catid','$prodid',now(),'$curdate','Y')";	
	 
	 if($AdvtRd = mysql_query($AdvtSl,$abc))
	 		{
		 	
			$display_block .= "<center><h3> Record Sucessfully Registered With Database  <br>
	 						<a href=\"advts_CPAuthAdd.php\"> Registered Another One </a> </center><h3>" ;

			$display_block .= "<center><b3> Record Sucessfully Registered With Database  <br>
	 						<a href=\"advts_CPAuthAddSl.php\"> Registered Another Company </a> </center> </h3>" ;


			}
			else
			{
				$display_block .= "dir no. = $dirid  <br> Cat No. = $catid <br> prod no = $prodid <br> $curdate Something Wrong with Programe";
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
