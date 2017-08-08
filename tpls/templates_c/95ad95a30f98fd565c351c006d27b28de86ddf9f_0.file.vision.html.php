<?php
/* Smarty version 3.1.30, created on 2016-09-06 09:30:11
  from "D:\wamp\AppServ\www\simovision\tpls\templates\vision.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ce8ca3b45ec8_43573782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ad95a30f98fd565c351c006d27b28de86ddf9f' => 
    array (
      0 => 'D:\\wamp\\AppServ\\www\\simovision\\tpls\\templates\\vision.html',
      1 => 1473154208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head-index.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57ce8ca3b45ec8_43573782 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title>思威观点</title>
  <meta name="keywords" content="设计网站,原创,创意，网页设计,网站设计,设计素材,佳作欣赏,经验,教程,高清图片。" />
  <meta name="description" content="专注高品质网站设计，为您的品牌缔造经典，让营销更具价值，良好的用户体验，全面提升您的企业形象，响应式的页面布局，交互式的设计体验，多元化的设计风格，优秀的设计团队，优化的设计流程，施工管理流程，品类丰富，管理科学的材料集采平台，便捷高效的客户服务体系。我们将竭力提供设计导航服务!" />

  <link rel="icon" href="http://static.simovision.cn/favicon.png"/>
  <!--    css   -->
  <link rel="stylesheet" href="tpls/templates/css/style.min.css">
  <!--Main Script-->
  <?php echo '<script'; ?>
 src="tpls/templates/js/index.min.js"><?php echo '</script'; ?>
>

</head>
<body class="vision">
<?php $_smarty_tpl->_subTemplateRender("file:head-index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--静态banner-->
<div class="staticBanner">
      <img src="http://static.simovision.cn/tpls/templates/images/banner-guandian.jpg" alt="思威观点">

</div>


<div id="visionContent">
  <div class="container">


    <div class="row visionCnt">

      <h3 class="detail-til">
        <span>FULL SERVICE</span>
        <strong>全方位服务</strong>
      </h3>

      <div class="vision_img animate scaleIn" style="background-image: url(tpls/templates/images/vision-back.png);-webkit-background-size: cover;background-size: cover;">
        <img class="animate scaleIn delay-3" src="tpls/templates/images/vision-front.png" alt="服务展示">
      </div>


    </div>

    <div class="row advantage">
      <h3 class="detail-til">
        <span>ADVANTAGE</span>
        <strong>思威优势</strong>
      </h3>

      <div class="span4">
        <h4 class="sideTil">
          快速解决方案
        </h4>

        <img src="http://static.simovision.cn/tpls/templates/images/show_img1.jpg" alt="解决方案">

        <p>
          我们专业的设计团队为您量身定做属于您自己的产品，为您提供业内最优质的品牌服务体验。
        </p>
      </div>

      <div class="span4">
        <h4 class="sideTil">
          提升品牌价值
        </h4>

        <img src="http://static.simovision.cn/tpls/templates/images/show_img2.jpg" alt="提升品牌价值">

        <p>
          我们专业的设计团队为您量身定做属于您自己的产品，为您提供业内最优质的品牌服务体验。
        </p>
      </div>

      <div class="span4">
        <h4 class="sideTil">
          追随行业趋势
        </h4>

        <img src="http://static.simovision.cn/tpls/templates/images/show_img3.jpg" alt="追随行业趋势">

        <p>
          我们专业的设计团队为您量身定做属于您自己的产品，为您提供业内最优质的品牌服务体验。
        </p>
      </div>
    </div>

  </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
