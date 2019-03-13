<?php 
	 $mstart = $_GET['start'];
	 $mend = $_GET['end'];
	 $auser = $_GET['auser'];
	 $link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
	 mysql_query('set names utf8');
     $sql = "SELECT `QVALUE`.*,`QUSER`.`USERID`,`QUSER`.`UNAME`,`QUSER`.`UHEAD` FROM `QVALUE` ,`QUSER`, `FOLLOW` WHERE `QVALUE`.`UID`=`QUSER`.`USERID` AND `QVALUE`.`UID`=`FOLLOW`.`BUSER` AND `FOLLOW`.AUSER=".$auser." order by `QVALUE`.`QID` desc limit ".$mstart.",5";
	 $res = mysql_query($sql);
	 $arr = array();
	 while($row = mysql_fetch_assoc($res)){
			$arr[] = $row;
	 }
	 die(json_encode($arr));


