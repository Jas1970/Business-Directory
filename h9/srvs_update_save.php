<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc);

$dirid		= "$_POST[dirid]";
$cnpname	= "$_POST[cnpname]";
$city 		= "$_POST[city]";
$dist 		= "$_POST[dist]";
$stat 		= "$_POST[stat]";
$count 		= "$_POST[count]";
$add1 		= "$_POST[add1]";
$add2 		= "$_POST[add2]";
$tel 		= "$_POST[tel]";
$fax 		= "$_POST[fax]";
$mob 		= "$_POST[mob]";
$web		= "$_POST[web]";
$pinc		= "$_POST[pin]";


$dirupdate  = "update srvs_main set
					add1 ='$add1',
					add2 ='$add2',
					city ='$city',
					dist ='$dist',
					stat ='$stat',
					cout ='$count',
					tel  ='$tel',
					fax  ='$fax',
					mob  ='$mob',
					web  ='$web',
					pin  ='$pinc',
					cpname = '$cnpname'
					where sr_id = '$dirid'";					
		if($dirup = mysql_query($dirupdate,$abc))
			{
			$display_block = "<center><h3> Record Sucessfully Updated<br>
				   <br>
				   <br><center>
	   			   <a href=\"srvs_update_sl.php\"> Update Another address</a>
				   </center>  ";					    	
				}
				else
				{
					die(mysql_error());
				}		

?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php Print $display_block; ?>
<p>&nbsp;</p></body>
</html>
