<?php
	$values = $_POST['value'];
	printf($values);
	$obj=json_decode($values);
	    $userid = $obj->userId;
        $uname = $obj->uName;
        $uage = $obj->uAge;
		$uhobbies = $obj->uHobbies;
		$uplace = $obj->uPlace;
		$uexplain = $obj->uExplain;
		$usex = $obj->uSex;

	$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
   	mysql_query('set names utf8');
	$sql="UPDATE `quser` SET UNAME='".$uname."',UAGE='".$uage."',UHOBBIES='".$uhobbies."',UPLACE='".$uplace."',UEXPLAIN='".$uexplain."',USEX='".$usex."' WHERE USERID='".$userid."';";
    	
	$res = mysql_query($sql);
	printf($sql);
	printf($res);