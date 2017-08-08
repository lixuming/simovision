<?php

// 引入配置文件
include_once('main.php');


// 思威荣誉
 if(!empty($_GET) && $_GET['a'] == 'honor'){
 	$smarty->display('honor.html');
 }

 // 思威观点
 else if(!empty($_GET) && $_GET['a'] == 'vision'){
 	$smarty->display('vision.html');
 }

 // 招贤纳士
 else if(!empty($_GET) && $_GET['a'] == 'invitation'){
 	$smarty->display('invitation.html');
 }

 // 联系思威
 else if(!empty($_GET) && $_GET['a'] == 'contact'){
 	$smarty->display('contact.html');
 }

 // 思威主页
 else{
	$smarty->display('index.html');
 }
