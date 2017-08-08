<?php 

// 引入核心文件
include_once('./libs/Smarty.class.php');
// 定义常量
define('SMARTY_ROOT','./tpls/');
// 实例化对象
$smarty = new Smarty();

$smarty->template_dir = SMARTY_ROOT.'templates/';
$smarty->compile_dir = SMARTY_ROOT.'templates_c/';
$smarty->config_dir = SMARTY_ROOT.'configs/';
$smarty->cache_dir = SMARTY_ROOT.'cache/';
$smarty->caching = false;
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';

