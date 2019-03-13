<?php 
	 $mqid = $_GET['qid'];
	 $mstart = $_GET['start'];
	 $mend = $_GET['end'];
        $link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
	 mysql_query('set names utf8');
     $sql = "select `qcomments`.* , `QUSER`.`UNAME` , `QUSER`.`UHEAD` from `qcomments` , `quser` where `qcomments`.`uid` = `QUSER`.`USERID` and `Qcomments`.`qid` = ".$mqid." order by `qcomments`.`cid` desc LIMIT ".$mstart.",5";
	 $res = mysql_query($sql);
	 $arr = array();
	 while($row = mysql_fetch_assoc($res)){
			$arr[] = $row;
	 }
	 die(json_encode($arr));


