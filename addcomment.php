<?php
	$valuer = $_POST['value'];
        printf($valuer);
	    $obj=json_decode($valuer);
        $uid = $obj->uid;
        $qid = $obj->qid;
	    $cvalue = $obj->cvalue;
	    printf($uid);
        printf($qid);
	date_default_timezone_set("PRC");
	$ctime = date("Y年m月d日H:i");
printf($ctime);
	$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
   	mysql_query('set names utf8');
	$sql="INSERT INTO `qcomments`( UID, QID, CVALUE, CTIME) VALUES (".$uid.",
        ".$qid.",'".$cvalue."','".$ctime."');";
    	$res = mysql_query($sql);
   	printf($sql);