<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);


$dirid =  "$_POST[dirno]";


$selcsrvs = "select * from dir_main where dir_id = '$dirid' and dir_auth='Y'" ;
$prodrcd = mysql_query($selcsrvs, $abc);
$profnum = mysql_num_rows($prodrcd);

if($profnum == 0)
	{
	 $display_block = "<center> $dirid Record Not Found  <br>
	 					<a href=\"dirAdvtSl8.php\"> Enter Another One </a> </center>" ;
	
	}
	else
	{
	 
	 
	$AdvtS = "update dir_main set dir_auth = 'N' where dir_id = '$dirid'";	
	$AdvtRd = mysql_query($AdvtS,$abc) or mysql_error();

		 		$AdvtSl2  = "update dir_admin set dlogin_auth = 'N' where dlogin_cno = '$dirid'";
				$AdvtSl2Rd = mysql_query($AdvtSl2,$abc);	
					
				
			$display_block = "<center><h3> Record Sucessfully Updated With Database  <br>
	 						<a href=\"dirAdvtSl8.php\"> Registered Another One </a> </center><h3>" ;


			}
//			else
			{
	//			$display_block = "dir no. = $dirid  <br> Something Wrong with Programe";
		//	}
			
	 
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
