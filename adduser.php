<?php
    
$value = $_POST['value'];
	  
$obj=json_decode($value);
	  
$uname = $obj->uname;
	
$upassword = $obj->upassword;

date_default_timezone_set("PRC");
$ctime = date("Y/m/d");	
$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link); 
mysql_query('set names utf8');
	  
$mselect="select * from `quser` where uname = '".$uname."'";
  
$res = mysql_query($mselect);
   
$row   = mysql_num_rows($res); 
if(empty($row)){

	$sql="INSERT INTO `quser`( uname, upass, utime) VALUES ('".$uname."','".$upassword."','".$ctime."');";
	$res = mysql_query($sql);
  
	printf("ok");      
}else{

	printf("no");
	  
}
	  
die();

