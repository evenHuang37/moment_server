<?php 
	 $mstart = $_GET['start'];
	 $mend = $_GET['end'];
        $link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
	 mysql_query('set names utf8');
       $sql = "SELECT `QVALUE`.*,`QUSER`.`USERID`,`QUSER`.`UNAME`,`QUSER`.`UHEAD` FROM `QVALUE` ,`QUSER` WHERE `QVALUE`.`UID`=`QUSER`.`USERID` order by `QVALUE`.`QID` desc limit ".$mstart.",5";
         
	 $res = mysql_query($sql);
	 $arr = array();
	 while($row = mysql_fetch_assoc($res)){
			$arr[] = $row;
	 }
	 die(json_encode($arr));


