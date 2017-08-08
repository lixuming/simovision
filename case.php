<?php 

// 引入配置文件
include_once('main.php');

// 01
if($_GET['a'] == 'case_tongzhou'){
	$smarty->display('case_tongzhou.html');
}

// 02
else if($_GET['a'] == 'case_smart'){
	$smarty->display('case_smart.html');
}

// 03
else if($_GET['a'] == 'case_zmo'){
	$smarty->display('case_zmo.html');
}

// 04
else if($_GET['a'] == 'case_yuanzi'){
	$smarty->display('case_yuanzi.html');
}

// 05
else if($_GET['a'] == 'case_cha'){
	$smarty->display('case_cha.html');
}

// 06
else if($_GET['a'] == 'case_zhangp'){
	$smarty->display('case_zhangp.html');
}

// 07
else if($_GET['a'] == 'case_yangjia'){
	$smarty->display('case_yangjia.html');
}

// 08
else if($_GET['a'] == 'case_songzhuang'){
	$smarty->display('case_songzhuang.html');
}

// 09
else if($_GET['a'] == 'case_guangy'){
	$smarty->display('case_guangy.html');
}

// 10
else if($_GET['a'] == 'case_haimei'){
	$smarty->display('case_haimei.html');
}

// 11
else if($_GET['a'] == 'case_heijin'){
	$smarty->display('case_heijin.html');
}

// 12
else if($_GET['a'] == 'case_jiangshan'){
	$smarty->display('case_jiangshan.html');
}

// 13
else if($_GET['a'] == 'case_jiesen'){
	$smarty->display('case_jiesen.html');
}

// 14
else if($_GET['a'] == 'case_leslie'){
	$smarty->display('case_leslie.html');
}

// 15
else if($_GET['a'] == 'case_lanzhou'){
	$smarty->display('case_lanzhou.html');
}

// 16
else if($_GET['a'] == 'case_meijia'){
	$smarty->display('case_meijia.html');
}

// 17
else if($_GET['a'] == 'case_simo'){
	$smarty->display('case_simo.html');
}

// 18
else if($_GET['a'] == 'case_talent'){
	$smarty->display('case_talent.html');
}

// 19
else if($_GET['a'] == 'case_wm'){
	$smarty->display('case_wm.html');
}

// 20
else if($_GET['a'] == 'case_glass'){
	$smarty->display('case_glass.html');
}

// 21
else if($_GET['a'] == 'case_ysb'){
	$smarty->display('case_ysb.html');
}

// 22
else if($_GET['a'] == 'case_daoshi'){
	$smarty->display('case_daoshi.html');
}

// 23
else if($_GET['a'] == 'case_yibo'){
	$smarty->display('case_yibo.html');
}

// 24
else if($_GET['a'] == 'case_zijd'){
	$smarty->display('case_zijd.html');
}

// 所有案例
else{
	$smarty->display('all_case.html');
}
