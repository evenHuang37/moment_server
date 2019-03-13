<?php

     $valuer = $_POST['value'];
    $inputfile = $_POST['img'];
    $obj=json_decode($valuer);
    $uid = $obj->uid;
	$tid = $obj->tid;
	$qimg = $obj->qimg;
	$qvalue = $obj->qvalue;
	$qlike = $obj->qlike;
	$qunlike = $obj->qunlike;
	$address = $obj->address;
	printf("$address");
	date_default_timezone_set("PRC");
	$time = date("Y年m月d日H:i");
	if(!empty($qimg)){
 $file = fopen("./Valueimg/".$qimg , "w");  	  
         $fwflag = fwrite( $file, base64_decode( $inputfile ) );  
         fclose($file);  
	}
        $link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
    mysql_query('set names utf8');
	$sql="INSERT INTO `qvalue`( UID, TID, QIMG, QVALUE, QLIKE, QUNLIKE,QSHARE,ADDRESS,TIME) VALUES (".$uid.",".$tid.",'".$qimg."','".$qvalue."','".$qlike."','".$qunlike."','0','".$address."','".$time."');";
    $res = mysql_query($sql);
    printf("$sql");