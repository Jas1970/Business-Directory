<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include "Connections/db.inc.php";
include "class/countclass.php";
include "class/diradd.php";
include "class/srvsmain.php";
include "class/cityclass.php";
include "class/distclass.php";
include "class/statclass.php";
include "class/catclass.php";
include "class/jobGrpClass.php";
include "class/jobIndsClass.php";
include "class/jobQualclass.php";
include "class/jobTypeClass.php";
include "class/prodclass.php";
include "class/propTypeClass.php";
include "class/srvsClass.php";
include "class/srvsSubClass.php";



//************** Country Functon ***************************** 
function country($cntid)
{
$db= new DB();
$db->open();

if($cntid==0) 
	{
    $sql = "select * from country";
    }
 else 
 	{
    $sql = "select * from country";    
    }
$result = mysql_query($sql);

$cid =0;
$contryData;
while ($row = mysql_fetch_array($result))
        {
            $contid = $row['cntid'];
            $cntname = $row['cntname'];
        
        $contclass = new countclass();
        $contclass->setCntid($contid);
        $contclass->setCntname($cntname);
        
        $contryData[$cid] = $contclass;
	$cid = $cid+1;
        }
      
        return $contryData;   
                
         }
		 		
//************** Directory Address Functon ***************************** 
         
function diradds($rstid)
    {
  //  $db= new DB();
   // $db->open();
    if($rstid==0)
    {
        $sql = "Select dir_add.dir_id, dir_add.dir_add1, dir_add.dir_add2, city.citname,
                district.dstname, state.stname, country.cntname, dir_add.dir_tel,
                dir_add.dir_fax, dir_add.dir_mob,dir_add.dir_mail, dir_add.dir_web, dir_add.dir_pin,
                dir_add.dir_amail from dir_add, city, district, state, country
                where dir_add.dir_id='$rstid' and
                dir_add.dir_city=city.citid and
                dir_add.dir_dist=district.dstid and
                dir_add.dir_stat=state.stid and
                dir_add.dir_cont=country.cntid";
    }
     else
     {
    $sql = "Select dir_add.dir_id, dir_add.dir_add1, dir_add.dir_add2, city.citname,
                district.dstname, state.stname, country.cntname, dir_add.dir_tel,
                dir_add.dir_fax, dir_add.dir_mob,dir_add.dir_mail, dir_add.dir_web, dir_add.dir_pin,
                dir_add.dir_amail from dir_add, city, district, state, country
                where dir_add.dir_id='$rstid' and
                dir_add.dir_city=city.citid and
                dir_add.dir_dist=district.dstid and
                dir_add.dir_stat=state.stid and
                dir_add.dir_cont=country.cntid";
    }
   $result1 = mysql_query($sql);

    $ciadd =0;
    $addData;
    while($row = mysql_fetch_array($result1))
         {
            $dirid      = $row['dir_id'];
            $diradd1    = $row['dir_add1'];
            $diradd2    = $row['dir_add2'];
            $dircity    = $row['citname'];
            $dirdist    = $row['dstname'];
            $dirstat    = $row['stname'];
            $dircont    = $row['cntname'];
            $dirtel     = $row['dir_tel'];
            $dirfax     = $row['dir_fax'];
            $dirmob     = $row['dir_mob'];
            $dirmail    = $row['dir_mail'];
            $dirweb     = $row['dir_web'];
            $dirpin     = $row['dir_pin'];
            $diramail   = $row['dir_amail'];
    
        $diradd  = new diradd();
        $diradd->setDirid($dirid);
        $diradd->setDiradd1($diradd1);
        $diradd->setDiradd2($diradd2);
        $diradd->setDircity($dircity);
        $diradd->setDirdist($dirdist);
        $diradd->setDirstat($dirstat);
        $diradd->setDircont($dircont);
        $diradd->setDirtel($dirtel);
        $diradd->setDirfax($dirfax);
        $diradd->setDirmob($dirmob);
        $diradd->setDirmail($dirmail);
        $diradd->setDirweb($dirweb);
        $diradd->setDirpin($dirpin);
        $diradd->setDiramail($diramail);
        
        $addData[$ciadd]  = $diradd;
        $ciadd = $ciadd+1;
        
        return $addData;
        
         }
       }

//************** Service Directory Address Functon ***************************** 
       
 function srvsadd($srvsid)
 {
    $db= new DB();
    $db->open();
    if($srvsid==0)
    {
        $sql = "Select srvs_main.sr_id, srvs_main.cname, srvs_main.cpname, srvs_main.add1, srvs_main.add2, 
                city.citname,
                district.dstname, 
                state.stname, 
                country.cntname, 
                srvs_main.pin,
                srvs_main.tel,
                srvs_main.fax, 
                srvs_main.mob,
                srvs_main.mail,
                srvs_main.web,
                srvs_main.cno,
                srvs_main.amail,
				srvs_main.srvs_auth

                from srvs_main, city, district, state, country
                where srvs_main.sr_id='$srvsid' and
                srvs_main.city=city.citid and
                srvs_main.dist=district.dstid and
                srvs_main.stat=state.stid and
                srvs_main.cout=country.cntid";
        }
 else {
        $sql = "Select srvs_main.sr_id, srvs_main.cname, srvs_main.cpname, srvs_main.add1, srvs_main.add2, 
                city.citname,
                district.dstname, 
                state.stname, 
                country.cntname, 
                srvs_main.pin,
                srvs_main.tel,
                srvs_main.fax, 
                srvs_main.mob,
                srvs_main.mail,
                srvs_main.web,
                srvs_main.cno,
                srvs_main.amail,
				srvs_main.srvs_auth
           
		        from srvs_main, city, district, state, country
                where srvs_main.sr_id='$srvsid' and
                srvs_main.city=city.citid and
                srvs_main.dist=district.dstid and
                srvs_main.stat=state.stid and
                srvs_main.cout=country.cntid";
     
 }    
        
        $result2 = mysql_query($sql);

             $cisrvs =0;
             $srvsData;
            while($row = mysql_fetch_array($result2))
            {
                   $srid    = $row['sr_id'];
                   $cname   = $row['cname'];
                   $cpname  = $row['cpname'];   
                   $add1    = $row['add1'];
                   $add2    = $row['add2'];
                   $city    = $row['citname'];
                   $dist    = $row['dstname'];
                   $stat    = $row['stname'];
                   $cont    = $row['cntname'];
                   $pin     = $row['pin'];
                   $tel     = $row['tel'];  
                   $fax     = $row['fax'];
                   $mob     = $row['mob'];
                   $mail    = $row['mail'];   
                   $web     = $row['web'];
                   $cno     = $row['cno'];
                   $amail   = $row['amail'];
                   $srvs_auth = $row['srvs_auth'];
				   
                   $srvsmain = new srvsmain();
                   $srvsmain->setSrvsid($srid);
                   $srvsmain->setCname($cname);
                   $srvsmain->setCpname($cpname);
                   $srvsmain->setAdd1($add1);
                   $srvsmain->setAdd2($add2);
                   $srvsmain->setCity($city);
                   $srvsmain->setDist($dist);
                   $srvsmain->setStat($stat);
                   $srvsmain->setCont($cont);
				   $srvsmain->setPin($pin);
                   $srvsmain->setTel($tel);
                   $srvsmain->setFax($fax);
                   $srvsmain->setMob($mob);
                   $srvsmain->setMail($mail);
                   $srvsmain->setWeb($web);
                   $srvsmain->setCno($cno);
                   $srvsmain->setAmail($amail);
                   $srvsmain->setSrvs_auth($srvs_auth);
				   
                   $srvsData[$cisrvs]  = $srvsmain;
                   $cisrvs = $cisrvs+1;
                  
                   return $srvsData;
                   
                   
            }
     
} 

//************** Property Detail Functon ***************************** 

 function propdet($compid)
 {
     $db= new DB();
    $db->open();
    if($compid==0)
    {
        $sql = "Select prop_main.prop_id,
                prop_main.prop_comp_type,
                prop_main.prop_comp_id,
                prop_main.prop_location,
                prop_main.prop_add1,
                prop_main.prop_add2,
                city.citname,
                district.dstname, 
                state.stname, 
                country.cntname, 
                prop_main.prop_want_to,
                prop_main.prop_price,
                prop_main.prop_area,
                prop_main.prop_area_type,
                prop_main.prop_owner_type,
                prop_main.prop_ad_day,
                prop_main.prop_fr_dt,
                prop_main.prop_to_dt,
                prop_type.type_name
                from prop_main, city, district, state,country, prop_type
                where prop_main.prop_comp_id='$compid' and
                prop_main.prop_city=city.citid and
                prop_main.prop_dist=district.dstid and
                prop_main.prop_state=state.stid and
                prop_main.prop_type=prop_type.type_id";
    }
    else
    {
      $sql = "Select prop_main.prop_id,
                prop_main.prop_comp_type,
                prop_main.prop_comp_id,
                prop_main.prop_location,
                prop_main.prop_add1,
                prop_main.prop_add2,
                city.citname,
                district.dstname, 
                state.stname, 
                country.cntname, 
                prop_main.prop_want_to,
                prop_main.prop_price,
                prop_main.prop_area,
                prop_main.prop_area_type,
                prop_main.prop_owner_type,
                prop_main.prop_ad_day,
                prop_main.prop_fr_dt,
                prop_main.prop_to_dt,
                prop_main.prop_type
                from prop_main, city, district, state,country
                where prop_main.prop_comp_id='$compid' and
                prop_main.prop_city=city.citid and
                prop_main.prop_dist=district.dstid and
                prop_main.prop_state=state.stid";
            }
            $result3 = mysql_query($sql);

             $ciprop =0;
             $propData;
            while($row = mysql_fetch_array($result3))
            {
                $prop_id        = $row['prop_id'];
                $prop_comp_type = $row['prop_comp_type'];
                $prop_comp_id   = $row['prop_comp_id'];
                $prop_location  = $row['prop_location'];
                $prop_add1      = $row['prop_add1'];
                $prop_add2      = $row['prop_add2'];
                $prop_city      = $row['citname'];
                $prop_dist      = $row['dstname'];
                $prop_state     = $row['stname'];
                $prop_want_to   = $row['prop_want_to'];  
                $prop_price     = $row['prop_price'];
                $prop_area      = $row['prop_area'];
                $prop_area_type = $row['prop_area_type'];
                $prop_owner_type= $row['prop_owner_type'];
                $prop_ad_day    = $row['prop_ad_day'];
                $prop_fr_dt     = $row['prop_fr_dt'];
                $prop_to_dt     = $row['prop_to_dt'];
                $prop_type      = $row['prop_type'];
                
                $propclass  = new propclass();
                $propclass->getPropid($prop_id);
                $propclass->getPropcid($prop_comp_id);
                $propclass->getProploc($prop_location);
                $propclass->getPropadd1($prop_add1);
                $propclass->getPropadd2($prop_add2);
                $propclass->getPropcity($prop_city);
                $propclass->getPropdist($prop_dist);
                $propclass->getPropstat($prop_state);
                $propclass->getPropwto($prop_want_to);
                $propclass->getPropprice($prop_price);
                $propclass->getProparea($prop_area);
                $propclass->getPropareatype($prop_area_type);
                $propclass->getPropotype($prop_owner_type);
                $propclass->getPropadday($prop_ad_day);
                $propclass->getPropfrdt($prop_fr_dt);  
                $propclass->getProptodt($prop_to_dt);
                $propclass->getProptype($prop_type);
                
                $propData[$ciprop]  = $propclass;
                $ciprop = $ciiprop+1;
        
                return $propData;
                
                
            }
        
 }    


 //************** City Functon ***************************** 
 
function dircity($citid)
    {
    $db= new DB();
    $db->open();
    if($citid==0)
    {
        $sql = "Select * from city";
    }
     else
     {
        $sql = "Select * from city";
    }
   $result2 = mysql_query($sql);

    $citadd =0;
    $addCityData;
    while($row = mysql_fetch_array($result2))
         {
            $citid      = $row['citid'];
            $citname    = $row['citname'];
            $distid    = $row['dstid'];
         
        $cityclass   = new cityclass();
        $cityclass->setCitid($citid);
        $cityclass->setCitname($citname);
        $cityclass->setDistid($distid);
        
        $addCityData[$citadd]  = $cityclass;
        $citadd = $citadd+1;
         }

        return $addCityData;
        
         
     
    }

//************** District Functon ***************************** 
    
    function dirdist($distid)
    {
    $db= new DB();
    $db->open();
    if($distid==0)
    {
        $sql = "Select * from district";
    }
     else
     {
        $sql = "Select * from district";
    }
   $result3 = mysql_query($sql);

    $distadd =0;
    $addDistData;
    while($row = mysql_fetch_array($result3))
         {
        
            $distid   = $row['dstid'];
            $distname = $row['dstname'];
            $stid     = $row['stid'];
            
        $distclass   = new distclass();
        $distclass->setDistid($distid);
        $distclass->setDistname($distname);
        $distclass->setStid($stid);
                
        $addDistData[$distadd]  = $distclass;
        $distadd = $distadd+1;
         }
      
        return $addDistData;
        
         
     
    }

//************** State Functon ***************************** 
    
    function dirstate($stid)
    {
    $db= new DB();
    $db->open();
    if($stid==0)
    {
        $sql = "Select * from state";
    }
     else
     {
        $sql = "Select * from state";
    }
   $result4 = mysql_query($sql);

    $statadd =0;
    $addStateData;
    while($row = mysql_fetch_array($result4))
         {
        
            $sitid   = $row['stid'];
            $stname = $row['stname'];
            $cntid     = $row['cntid'];
            
            $statclass = new statclass();
          
            $statclass->setSitid($sitid);
            $statclass->setStname($stname);
            $statclass->setCntid($cntid);
                
        $addStateData[$statadd]  = $statclass;
        $statadd = $statadd+1;
         }

        return $addStateData;

    }

    //************** Product Category Functon ***************************** 
    
    function dircat($catid) {
    $db= new DB();
    $db->open();
    if($catid==0)
    {
        $sql = "Select * from catg";
    }
     else
     {
        $sql = "Select * from catg";
    }
   $result5 = mysql_query($sql);
   
   $catadd =0;
   $addCatData;
   while($row = mysql_fetch_array($result5))
         {
        
            $catid   = $row['catid'];
            $catname = $row['catname'];
            
            $catclass = new catclass();
            $catclass->setCatid($catid);
            $catclass->setCatname($catname);

            $addCatData[$catadd] = $catclass;
            $catadd = $catadd+1;
         }
            

        return $addCatData;
    }
    
    //************** Product Functon ***************************** 
    
    
    function dirprod($catid) {
    $db= new DB();
    $db->open();
    if($catid==0)
    {
        $sql = "Select catprd.prodid, prod.prodnam from catprd, prod
                where catprd.prodid=prod.prodid and 
                catprd.catid= $catid";
    }
     else
     {
        $sql = "Select catprd.prodid, prod.prodnam from catprd, prod
                where catprd.prodid=prod.prodid and 
                catprd.catid= $catid";
    }
       $result6 = mysql_query($sql);
    
   $prodadd =0;
   $addProdData;
   while($row = mysql_fetch_array($result6))
         {
        
            $prodid   = $row['prodid'];
            $prodnam = $row['prodnam'];
            
            $prodclass = new prodclass();
            $prodclass->setProdid($prodid);
            $prodclass->setProdnam($prodnam);
            
            $addProdData[$prodadd] = $prodclass;
            $prodadd = $prodadd+1;
         }
            

        return $addProdData;
     }

    //************** Job Type Functon ***************************** 
     
    function jobtype($jtype_id) {
    $db= new DB();
    $db->open();
    if($jtype_id==0)
    {
        $sql = "Select * from job_type";
    }
     else
     {
        $sql = "Select * from job_type";
    }
       $result7 = mysql_query($sql);
    
   $jobtypeadd =0;
   $addJobTypeData;
   while($row = mysql_fetch_array($result7))
         {
        
            $jtype_id = $row['jtype_id'];
            $jtype_name = $row['jtype_name'];
            
            $jobTypeClass = new jobTypeClass();
            $jobTypeClass->setJtype_id($jtype_id);
            $jobTypeClass->setJtype_name($jtype_name);
                    
            $addJobTypeData[$jobtypeadd] = $jobTypeClass;
            $jobtypeadd = $jobtypeadd+1;
         }
            
  
        return $addJobTypeData;
     }
     
    //************** Job Group Functon ***************************** 
 
    function jobgrp($grp_id) {
    $db= new DB();
    $db->open();
    if($grp_id==0)
    {
        $sql = "Select * from job_grp";
    }
     else
     {
        $sql = "Select * from job_grp";
    }
       $result8 = mysql_query($sql);
    
   $jobgrpadd =0;
   $addGrpData;
   while($row = mysql_fetch_array($result8))
         {
        
            $jobgrp_id = $row['grp_id'];
            $jobgrp_name = $row['grp_name'];
            
            $jobGrpClass = new jobGrpClass();
            $jobGrpClass->setJobgrp_id($jobgrp_id);
            $jobGrpClass->setJobgrp_name($jobgrp_name);
            

            $addGrpData[$jobgrpadd] = $jobGrpClass;
            $jobgrpadd = $jobgrpadd+1;
         }
            
      
        return $addGrpData;
     }
     
     
     //************** Job Industries Functon ***************************** 
 
    function jobinds($inds_id) {
    $db= new DB();
    $db->open();
    if($inds_id==0)
    {
        $sql = "Select * from job_inds";
    }
     else
     {
        $sql = "Select * from job_inds";
    }
       $result9 = mysql_query($sql);
    
   $jobindsadd =0;
   $addIndsData;
   while($row = mysql_fetch_array($result9))
         {
        
            $jobinds_id = $row['inds_id'];
            $jobinds_name = $row['inds_name'];

            $jobIndsClass = new jobIndsClass();
            $jobIndsClass->setJobinds_id($jobinds_id);
            $jobIndsClass->setJobinds_name($jobinds_name);
             

            $addIndsData[$jobindsadd] = $jobIndsClass;
            $jobindsadd = $jobindsadd+1;
         }
            
   
        return $addIndsData;
     }
     
 //************** Job Qualification Functon ***************************** 
 
    function jobqual($jobqual_id) {
    $db= new DB();
    $db->open();
    if($jobqual_id==0)
    {
        $sql = "Select * from job_qual";
    }
     else
     {
        $sql = "Select * from job_qual";
    }
       $result10 = mysql_query($sql);
    
   $jobqualadd =0;
   $addQualData;
   while($row = mysql_fetch_array($result10))
         {
        
            $jobqual_id = $row['jqual_id'];
            $jobqual_name = $row['jqual_name'];
            
            $jobQualclass = new jobQualclass();
            
            $jobQualclass->setJobqual_id($jobqual_id);
            $jobQualclass->setJobqual_name($jobqual_name);
            
            $addQualData[$jobqualadd] = $jobQualclass;
            $jobqualadd = $jobqualadd+1;
         }
            
       
        return $addQualData;
     }

 //************** property Type Functon ***************************** 
 
    function ptype($ptype_id) {
    $db= new DB();
    $db->open();
    if($ptype_id==0)
    {
        $sql = "Select * from prop_type";
    }
     else
     {
        $sql = "Select * from prop_type";
    }
       $result11 = mysql_query($sql);
    
   $proptypeadd =0;
   $addPropTypeData;
   while($row = mysql_fetch_array($result11))
         {
        
            $proptype_id = $row['type_id'];
            $proptype_name = $row['type_name'];
            
            $propTypeClass = new propTypeClass();
            $propTypeClass->setProptype_id($proptype_id);
            $propTypeClass->setProptype_name($proptype_name);
            
            $addPropTypeData[$proptypeadd] = $propTypeClass;
            $proptypeadd = $proptypeadd+1;
         }
            
      
        return $addPropTypeData;
     }
     
      //************** Service Functon ***************************** 
 
    function srvstype($srvs_id) {
    $db= new DB();
    $db->open();
    if($srvs_id==0)
    {
        $sql = "Select * from dir_srvs";
    }
     else
     {
        $sql = "Select * from dir_srvs";
    }
       $result12 = mysql_query($sql);
    
   $srvstypeadd =0;
   $addSrvsTypeData;
   while($row = mysql_fetch_array($result12))
         {
        
            $srvs_id = $row['srvs_id'];
            $srvs_name = $row['srvs_name'];
            
            $srvsClass = new srvsClass();
            $srvsClass->setSrvs_id($srvs_id);
            $srvsClass->setSrvs_name($srvs_name);
            
            $addSrvsTypeData[$srvstypeadd] = $srvsClass;
            $srvstypeadd = $srvstypeadd+1;
         }
            

        return $addSrvsTypeData;
     }
     
  //************** Service Sub Functon ***************************** 
 
    function srvssubtype($srvs_id) {
    $db= new DB();
    $db->open();
    if($srvs_id==0)
    {
        $sql = "Select * from dir_subsrvs where srvs_id = '$srvs_id'";
    }
     else
     {
        $sql = "Select * from dir_subsrvs where srvs_id = '$srvs_id'";
    }
       $result13 = mysql_query($sql);
    
   $srvssubtypeadd =0;
   $addSrvsSubTypeData;
   while($row = mysql_fetch_array($result13))
         {
            
            
            $srvs_id = $row['srvs_id'];
            $srvssub_id = $row['sn_id'];
            $srvssub_name = $row['sname'];
            
            $srvsSubClass = new srvsSubClass();
            $srvsSubClass->setSrvs_id($srvs_id);
            
            $srvsSubClass->setSrvssub_id($srvssub_id);
            $srvsSubClass->setSrvssub_name($srvssub_name);

            
            $addSrvsSubTypeData[$srvssubtypeadd] = $srvsSubClass;
            $srvssubtypeadd = $srvssubtypeadd+1;
         }
            
        
        return $addSrvsSubTypeData;
     }

     
 ?>
