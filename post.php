<?php 
	 $mstart = $_GET['start'];
	 $mend = $_GET['end'];
$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
	 mysql_query('set names utf8');
     $sql = "SELECT `POST`.*,`QUSER`.`USERID`,`QUSER`.`UNAME`,`QUSER`.`UHEAD`,`QUSER`.`UAGE` FROM `POST` ,`QUSER` WHERE `POST`.`UID`=`QUSER`.`USERID` order by `POST`.`PID` desc limit ".$mstart.",5";
	 $res = mysql_query($sql);
	 $arr = array();
	 while($row = mysql_fetch_assoc($res)){
			$arr[] = $row;
	 }
	 die(json_encode($arr));

  