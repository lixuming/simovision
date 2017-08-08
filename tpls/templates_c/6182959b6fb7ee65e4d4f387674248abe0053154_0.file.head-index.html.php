<?php
/* Smarty version 3.1.30, created on 2017-03-13 09:38:26
  from "D:\phpStudy\WWW\simovision\tpls\templates\head-index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c5f8126555b0_22915918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6182959b6fb7ee65e4d4f387674248abe0053154' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\simovision\\tpls\\templates\\head-index.html',
      1 => 1471590118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c5f8126555b0_22915918 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!--顶部导航-->
<div id="header" class='header'>
  <div class="container">
          <div class="navbar">

            <a class="brand" href="index.php"></a>

            <div class="btnBox">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active">
                        <a href="index.php">思威主页
                            <br />
                            <span>Home</span>
                        </a>

                    </li>
                    <li>
                        <a href="index.php?a=honor">思威荣誉
                            <br />
                            <span>Honor</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?a=vision">思威观点
                            <br />
                            <span>Vision</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?a=invitation">招贤纳士
                            <br />
                            <span>Invitation</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?a=contact">联系思威
                            <br />
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
                <div class="lastLi"></div>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<!--顶部导航 结束-->
<?php }
}
