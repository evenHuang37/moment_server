<?php
	$valuer = $_POST['value'];
	$obj=json_decode($valuer);
        $uid = $obj->uid;
        $pbeginTime = $obj->pbeginTime;
		$pendTime = $obj->pendTime;
		$pstartAddress = $obj->pstartAddress;
		$ptravalAddress = $obj->ptravalAddress;
		$psaying = $obj->psaying;
	date_default_timezone_set("PRC");
	$ptime = date("Y年m月d日H:i");
	$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
   	mysql_query('set names utf8');
	$sql="INSERT INTO `post`( UID, PTIME, PBEGINTIME, PENDTIME, PSTARTADDRESS, PTRAVALADDRESS, PSAYING) VALUES (".$uid.",'".$ptime."','".$pbeginTime."','".$pendTime."','".$pstartAddress."','".$ptravalAddress."','".$psaying."');";
    	$res = mysql_query($sql);
   	printf($sql);