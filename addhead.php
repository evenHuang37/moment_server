<?php
	$value = $_POST('value');
	$inputfile = $_POST['img'];
	printf($value);
    $obj=json_decode($value);
	$uid = $obj->uid;
    $uhead = $obj->uhead; 
	
	if(!empty($uhead)){
        $file = fopen("./Userimg/".$uhead , "w");  	  
        $fwflag = fwrite( $file, base64_decode( $inputfile ) );  
        fclose($file);  
	}
	
    if ($fwflag > 0) {
    	  //把这条数据添加到图片数据库中去
    	$link = mysql_connect('localhost','root','123456');
	mysql_select_db('moment',$link);
        mysql_query('set names utf8');
	    $sql="UPDATE `quser` SET `UHEAD`= `".$obj->uhead."` WHERE `quser`.`userid`='".$uid."';";
        $res = mysql_query($sql);
        printf("ok");
    }else{
    	printf("no");
    }