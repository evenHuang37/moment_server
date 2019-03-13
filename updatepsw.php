<?php
	$value = $_POST['value'];
	printf($value);
	$obj=json_decode($value);
	    $userid = $obj->userId;
        $upass = $obj->uPass;
       
	$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
   	mysql_query('set names utf8');
	$sql="UPDATE `quser` SET UPASS='".$upass."' WHERE USERID='".$userid."';";
    	
	$res = mysql_query($sql);
	printf($sql);
	printf($res);