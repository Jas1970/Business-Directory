<?php require_once('Connections/abc.php'); ?>
<?php
mysql_select_db($database_abc, $abc);
$sname 	= $_POST['sname'];
$regfy	= $_POST['regfyear'];
$cid	= $_POST['cid'];
$slindx = "select left(cname,1) as cname, city from srvs_main where sr_id='$cid'";
$rdindx = mysql_query($slindx,$abc)or die ("some thing wrong");
$sindx = mysql_result($rdindx,0,'cname');
$cityindx = mysql_result($rdindx,0,'city');
$slservs = "select * from dir_srvs where srvs_name='$sname'";
$rdservs = mysql_query($slservs,$abc);
$srvsid = mysql_result($rdservs,0,'srvs_id');
$selcsrvs = "select * from srvs_advts where mids='$cid' and srvsid='$srvsid'";
$prodrcd = mysql_query($selcsrvs, $abc);
//$profid = mysql_result($prodrcd,0,'ids');
$profnum = mysql_num_rows($prodrcd);
if($profnum > 0)
	{
	 $display_block = "<center> Record Already Registered  <br>
	 					<a href=\"srvsAdvtReg.php?cid=$cid\"> Select Another One </a> </center>" ;
	}
	else
	{
				$dyear = date("Y", mktime())+$regfy;
				$dmon  = date("m", mktime());
				$dday  = date("d", mktime());
				$curdate = date("$dyear-$dmon-$dday", mktime(0,0,0,$dmon,$dday,$dyear));
	$AdvtSl = "insert into srvs_advts(mids,srvsid,city,rfyear,rgfdate,rgtdate,authtag,sidx)
				values
				('$cid','$srvsid','$cityindx','$regfy',now(),'$curdate','Y','$sindx')";	
	 
	 if($AdvtRd = mysql_query($AdvtSl,$abc))
	 		{
		 	
			$display_block .= "<center><h3> Record Sucessfully Registered With Database  <br>
	 						<a href=\"srvsAdvtReg.php?cid=$cid\"> Registered Another One </a> </center><h3>" ;

			$display_block .= "<center><b3> Record Sucessfully Registered With Database  <br>
	 						<a href=\"srvsAdvtSl.php\"> Registered Another Company </a> </center> </h3>" ;


			}
			else
			{
				$display_block .= "Something Wrong with Programe";
			}
	}
	
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php print $display_block; ?>  
</body>
</html>
