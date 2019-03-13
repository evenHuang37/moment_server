<?php
    
$value = $_POST['value'];
	  
$obj=json_decode($value);
	  
$auser = $obj->auser;
	
$buser = $obj->buser;

$link = mysql_connect('localhost','root','123456');
	    mysql_select_db('moment',$link); 
        mysql_query('set names utf8');
	  
$mselect="select * from `follow` where auser = ".$auser." AND buser = ".$buser."";
  
$res = mysql_query($mselect);
   
$row = mysql_num_rows($res); 

if(empty($row)){

	printf("no");      
}else{

	printf("yes");
	  
}
	  
die();