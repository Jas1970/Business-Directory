<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc,$abc) or die("unable to Open database");


	$login=$_REQUEST['login'];
	$password=$_REQUEST['password'];

		$query = "select ulogin, upwd from usr_login where ulogin= '$login' and upwd= '$password'";
		$result = mysql_query($query,$abc) or die("Query failed");

		$count = mysql_num_rows($result);
		
	

		if (mysql_num_rows($result) == 1)       // login check
	        {
			session_start();
			$_SESSION[userid]=$login;

			$sid = session_id();
			
	//		setcookie("auth", "1", 0, "/", "haanzee.com", 0);
			header("Location: dmain.php?userid=$login&sid=$sid");
    		unset($login);
			unset($password);
			exit;
			}
			else
			{
				header("Location: adminlgf.php");
				   exit;
			}
				
		$access = FALSE;		
		mysql_close($abc);
	?>
