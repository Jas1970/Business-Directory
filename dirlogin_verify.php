<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();

	$rst = $_REQUEST['ID'];
	$login = $_REQUEST['login'];
	$password = $_REQUEST['password'];
	$mpp = base64_encode($password);
//	base64_decode($password)
		$tmpsl = "select * from dir_admin where dlogin_id='$login'";
		$temprd = mysql_query($tmpsl) or die("Query Failed");
		$rcht	= mysql_num_rows($temprd);
		$rpass = mysql_result($temprd,0,'dlogin_pwd');
		$rmpp = base64_decode($rpass);


		$query = "select dlogin_cno, dlogin_id, dlogin_pwd from dir_admin where dlogin_id= '$login' 
				  and dlogin_auth = 'Y'
				  and '$password' = '$rmpp'";
		$result = mysql_query($query) or die("Query failed");
		$count = mysql_num_rows($result);
		if ($count==1)       // login check
	        {
			$compid = mysql_result($result,0,'dlogin_cno');
			session_start();
			$sid = session_id();
			$_SESSION['Adm']	= $mpp;
			$_SESSION['Sess']	= $sid;
			$_SESSION['IDS']	= $compid;
	//		setcookie("auth", "1", 0, "/", "haanzee.com", 0);
			header("Location: 0708150214.php?ID=$compid&SID=$sid&rand=$mpp");
    		unset($login);
			unset($password);
			exit;
			}
			else
			{
				header("Location: 0708150208.php?ID=$rst&Password=$password&database=$rmpp&ct=$count ");
				   exit;
			}
				
		$access = FALSE;		
		mysql_close($abc);
	?>
