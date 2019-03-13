<?php

	$valuer = $_POST['value'];
    $inputfile = $_POST['img'];
	printf($valuer);
	printf($inputfile);
    $obj=json_decode($valuer);
    $uid = $obj->uid;
	$uhead = $obj->uhead;

	if(!empty($uhead)){
 $file = fopen("./Userimg/".$uhead , "w");  	  
         $fwflag = fwrite( $file, base64_decode( $inputfile ) );  
         fclose($file);  
	}
        $link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
    mysql_query('set names utf8');
    $sql="UPDATE `quser` SET UHEAD='".$uhead."' WHERE USERID='".$uid."';";  	
	$res = mysql_query($sql);
    printf($sql);
	printf($res);