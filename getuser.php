<?php 
	$value = $_POST['value'];
	  
	$obj=json_decode($value);
	$userid=$obj->userid;
     $link = mysql_connect('localhost','root','123456');
	 mysql_select_db('moment',$link);
	 mysql_query('set names utf8');
     $sql = "SELECT `USERID`, `UNAME`, `UHEAD`, `UAGE`, `UHOBBIES`, `UPLACE`, `UEXPLAIN`, `UTIME`, `USEX` FROM `quser` where userid = ".$userid."";
	 $res = mysql_query($sql);
	 $arr = array();
	 while($row = mysql_fetch_assoc($res)){
			$arr[] = $row;
	 }
	 die(json_encode($arr));


			 