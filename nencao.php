<?php 
	 $mstart = $_GET['start'];
	 $mend = $_GET['end'];
$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
	 mysql_query('set names utf8');
     $sql = "SELECT `QVALUE`.*,`QUSER`.`USERID`,`QUSER`.`UNAME`,`QUSER`.`UHEAD`,`QTYPE`.* FROM `QVALUE` ,`QUSER`,`QTYPE` WHERE `QVALUE`.`UID`=`QUSER`.`USERID` AND `QVALUE`.`TID` = 
	 `QTYPE`.`TID` AND `QTYPE`.TID = 2  AND `QVALUE`.ISCHECKDE = 1 order by `QVALUE`.`QID` desc limit ".$mstart.",5";
	 $res = mysql_query($sql);
	 $arr = array();
	 while($row = mysql_fetch_assoc($res)){
			$arr[] = $row;
	 }
	 die(json_encode($arr));


