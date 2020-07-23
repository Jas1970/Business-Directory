<?php
include 'include/functionProcess.php'; 
$db  = new DB();
$db->open();

$loadType=$_POST['loadType'];
$loadId=$_POST['loadId'];

if($loadType=="state"){
	$sql="select stid as id,stname as state_name from state where cntid='".$loadId."' order by stname asc";
}elseif($loadType=="district"){
	$sql="select dstid as id, dstname as district_name from district where stid='".$loadId."' order by dstname asc";
}elseif($loadType=="product"){
	$sql="select catprd.prodid as id , prod.prodnam from catprd, prod where catprd.prodid=prod.prodid and catprd.catid ='".$loadId."' order by prodnam asc";
}elseif($loadType=="sub_service"){
	$sql="select sn_id as id, sname from dir_subsrvs where srvs_id ='".$loadId."' order by sname asc";
}else{
	$sql="select citid as id,citname as city_name from city where dstid='".$loadId."' order by citname asc";
}
$res=mysql_query($sql);
$check=mysql_num_rows($res);
if($check > 0){
	$HTML="";
	while($row=mysql_fetch_array($res)){
		$HTML.="<option value='".$row['id']."'>".$row['1']."</option>";
	}
	echo $HTML;
}
?>