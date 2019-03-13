<?php
    
$value = $_POST['value'];
	  
$obj=json_decode($value);
	  
$uname = $obj->uname;
	
$upassword = $obj->upassword;
	
$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
mysql_query('set names utf8');
	  
$mselect="select * from `quser` where uname = '".$uname."'";
  
$res = mysql_query($mselect);
   
$row   = mysql_num_rows($res); 
if(!empty($row)){

	$mselect="select * from `quser` where uname = '".$uname."' and upass = '".$upassword."'";
  
	$res = mysql_query($mselect);
   
	$row   = mysql_num_rows($res); 
	if(!empty($row)){
		$arr = array();
		 while($row = mysql_fetch_assoc($res)){
			$arr[] = $row;
		 }
		 die(json_encode($arr));
	}else{
		printf("nopass");
	}
}else{

	printf("nouser");
	  
}
	  
die();

