<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc);
$dirid		= "$_POST[dirid]";
$mail		= "$_POST[mail]";

$dirupdate  = "update srvs_main set
					mail ='$mail'
					where sr_id = '$dirid'";					
		if($dirup = mysql_query($dirupdate,$abc))
			{
			$display_block = "<center><h3> Record Sucessfully Updated<br>
				   <br>
				   <br><center>
	   			   <a href=\"srvs_update_mail.php\"> Update Another address</a>
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
