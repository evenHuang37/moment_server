<?php
	$values = $_POST['value'];
	printf($values);
	$obj=json_decode($values);
		$qlike=$obj->qlike;
		printf($qlike);
		$qunlike=$obj->qunlike;
		printf($qunlike);
		$uid=$obj->uid;
		printf($uid);
	$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
   	mysql_query('set names utf8');
	$sql="UPDATE `qvalue` SET QLIKE='".$qlike."',QUNLIKE=".$qunlike." WHERE UID=".$uid.";";
	
	$res = mysql_query($sql);
	printf($sql);
	printf($res);