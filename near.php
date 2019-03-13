<?php 
	 $mstart = $_GET['start'];
	 $mend = $_GET['end'];
	 $auser = $_GET['auser'];
     $link = mysql_connect('localhost','root','123456');
	 mysql_select_db('moment',$link);
	 mysql_query('set names utf8');
     $sql = "SELECT `USERID`, `UNAME`, `UHEAD`, `UAGE`, `UHOBBIES`, `UPLACE`, `UEXPLAIN`, `UTIME`, `USEX` FROM `quser` , `follow` WHERE `follow`.`BUSER`=`QUSER`.`USERID` AND `follow`.auser=".$auser." order by `QUSER`.`USERID` limit ".$mstart.",5";
	 $res = mysql_query($sql);
	 $arr = array();
	 while($row = mysql_fetch_assoc($res)){
			$arr[] = $row;
	 }
	 die(json_encode($arr));


			 