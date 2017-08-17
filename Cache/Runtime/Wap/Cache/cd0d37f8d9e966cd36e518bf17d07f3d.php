<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="author" content="AakrutiThemes" />
    <meta name="description" content="Get the products easy." />
    <meta name="keywords" content="premium css templates, premium themes, aakruti themes, themeforest" />
    <title>手机版-<?php echo ($site["SITE_INFO"]["name"]); ?>-Powered by Conist-Powerwd by Conist</title>
    <link rel="stylesheet" href="__ROOT__/Wap/Tpl/default/Public/css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="__ROOT__/Wap/Tpl/default/Public/css/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="__ROOT__/Wap/Tpl/default/Public/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="__ROOT__/Wap/Tpl/default/Public/css/jscourselite.css" type="text/css" media="screen" />
    <script type="text/javascript" src="__ROOT__/Wap/Tpl/default/Public/js/jquery-1.6.2.js"></script>
    <script type="text/javascript" src="__ROOT__/Wap/Tpl/default/Public/js/script_jcarousellite.js"></script>
    <script type="text/javascript" src="__ROOT__/Wap/Tpl/default/Public/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="__ROOT__/Wap/Tpl/default/Public/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
        var $j = jQuery.noConflict();
        $j(window).load(function() {
            $j('#slider').nivoSlider();

        });
    </script>
</head>
<body>
<div id="container">
    <!--HEADER START-->
    <div id="header">
    <!--TOP START-->
    <div id="top">
        <div class="logo l"><a href="index.html" title="ABC Products"><img src="__UPLOAD__/image/images/logo.png" style="height: 57px; width: 87px;"  alt="logo" /></a></div>
        <div class="search-or-call r">
            <div>
                <?php if($site['SITE_INFO']['LANG_SWITCH_ON']){ ?>
                [<a href="__ACTION__?l=zh-cn" style='cursor:pointer;' title='简体中文'>简体中文</a>]
                [<a href="__ACTION__?l=zh-en" style='cursor:pointer;' title='English'>English</a>]
                <?php } ?>
            </div>
            <!--Search box for optional<div class="sbox l"><input name="search" type="text" class="searchbox" /></div>
            <div class="sbtn l"><input name="searchbtn" type="image" src="images/searchbtn.png"  /></div>
            <div class="c"></div>-->
        </div>
        <div class="c"></div>
    </div>
    <!--TOP END-->
    <!--NAV START-->
    <?php ?>
    <div id="nav">
        <ul>
            <li><a title="<?php echo (L("T_HOME")); ?>" href="__APP__" <?php if('index'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_HOME")); ?></a></li>
            <li   ><a href="<?php echo U('about/index');?>" title='<?php echo (L("T_ABOUT")); ?>' <?php if('about'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_ABOUT")); ?></a></li>
            <li   ><a href="<?php echo U('product/index');?>" title='<?php echo (L("T_PRODUCT")); ?>' <?php if('product'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_PRODUCT")); ?></a></li>
            <li   ><a href="<?php echo U('message/index');?>" title='<?php echo (L("T_MESSAGE")); ?>' <?php if('message'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_MESSAGE")); ?></a></li>
            <li   ><a href="<?php echo U('contact/index');?>" title='<?php echo (L("T_CONTACT")); ?>' <?php if('contact'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_CONTACT")); ?></a></li>

        </ul>
        <div class="c"></div>
    </div>
    <!--NAV END-->
</div>
<!--SLIDER START-->
<div id="slider_container">
    <div class="theme-default">
        <div id="slider" class="nivoSlider">
            <?php if(is_array($adlist)): $i = 0; $__LIST__ = $adlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><img src="__UPLOAD__/pictures/<?php echo ($vo["ad_img"]); ?>" alt="" width="310" height="190"/><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<!--SLIDER START-->
    <!--HEADER END-->
    <!--CONTENT START-->
    <div id="content">
        <div class="contentbg">
            <div class="contenttop">
                <div class="contentbottom">
                    <h1><?php echo (L("T_CONTACT_US")); ?></h1>
                   <span style="line-height:1.5;">地址:广东省广州市天河区&nbsp;</span><br>Phone:123456789&nbsp;<br>Fax:123456789&nbsp;<br>Mobile:123456789<br>
                </div>
            </div>
        </div>
    </div>
    <!--CONTENT END-->
<!--FOOTER START-->
<div id="footer">
    <div id="fnav">
        <ul>
            <li><a title="<?php echo (L("T_HOME")); ?>" href="wap.php" <?php if('index'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_HOME")); ?></a></li>
            <li   ><a href="<?php echo U('about/index');?>" title='<?php echo (L("T_ABOUT")); ?>' <?php if('about'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_ABOUT")); ?></a></li>
            <li   ><a href="<?php echo U('product/index');?>" title='<?php echo (L("T_PRODUCT")); ?>' <?php if('product'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_PRODUCT")); ?></a></li>
            <li   ><a href="<?php echo U('message/index');?>" title='<?php echo (L("T_MESSAGE")); ?>' <?php if('message'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_MESSAGE")); ?></a></li>
            <li   ><a href="<?php echo U('contact/index');?>" title='<?php echo (L("T_CONTACT")); ?>' <?php if('contact'==strtolower(MODULE_NAME)){ ?>class='active'<?php } ?>><?php echo (L("T_CONTACT")); ?></a></li>
            <li   ><a href="<?php echo ($site["SITE_INFO"]["url"]); ?>" title='PC端'>PC端</a></li>
        </ul>
        <div class="c"></div>
    </div>
    <div id="copyright">
        &copy; 2013 Conist, All Rights Reserved
    </div>
</div>
<!--FOOTER END-->
</div>

</body>
</html>