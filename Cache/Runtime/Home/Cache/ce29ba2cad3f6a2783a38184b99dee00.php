<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo ($webtitle); ?>-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
        <meta charset="UTF-8">
        <meta name="keywords" content="<?php if($info['keywords']){ echo ($info['keywords']); }else{ echo ($webtitle); ?>,<?php echo ($site["SITE_INFO"]["keyword"]); } ?>">
        <meta name="description" content="<?php if($info['description']){ echo ($info['description']); }else{ echo ($webtitle); ?>-<?php echo ($site["SITE_INFO"]["description"]); } ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="renderer" content="webkit"/>
        
        <link rel="stylesheet" href="__CSS__/public.css"/>
    </head>
    <body>
        <div class="bigbox">
            <div class="boxtop" >
                <div class="boxmiddle clearfix">
                    <p class="boxleft  fl">迦南集团欢迎您</p>
                    <p class="boxright fr">
                        <img src="__IMG__/index/index01.png" alt="photo">
                        <span>紧急救援电话 <?php echo ($site["SITE_INFO"]["tel"]); ?></span>
                        <span class="pl10">010-50000000</span>
                    </p>
                </div>
            </div>
            <!-- nav -->
            <div class="header">
                <div class="headermiddle clearfix">
                    <a href="__APP__/index.php"><img src="__IMG__/index/index02.jpg" class="fl headerimg1"></a>
                    <ul class="headerright fr clearfix">
                        <li><a href="__APP__/" <?php if($webtitle=='首页' || $webtitle2=='首页'): ?>class="headeractive"<?php endif; ?> >首页</a></li>
                        <li><a href="__APP__/index/about" <?php if($webtitle=='关于我们'): ?>class="headeractive"<?php endif; ?>>关于我们</a></li>
                        <li><a href="__APP__/index/group" <?php if($webtitle=='集团业务'|| $webtitle2=='集团业务'): ?>class="headeractive"<?php endif; ?>>集团业务</a></li>
                        <li><a href="__APP__/product/index" <?php if($webtitle=='行业动态' || $webtitle2=='行业动态'): ?>class="headeractive"<?php endif; ?>>行业动态</a></li>
                        <li><a href="__APP__/index/contact" <?php if($webtitle=='联系我们'): ?>class="headeractive"<?php endif; ?>>联系我们</a></li>
                    </ul>	
                </div>
            </div>
<link rel="stylesheet" href="__CSS__/groupbus.css"/>
<!-- banner -->
            <div class="jbanner">
                <img src="__IMG__/groupbus/group02.png" class="jbanner01">
            </div>
            <p class="jlocation ">您的位置：首页 > 集团业务 > <?php echo ($info["title"]); ?></p>
            <!-- 具体的详情页 -->
            <div class="juti mt40">
                <p class="jutibt"><?php echo ($info["title"]); ?></p>
                <div class="jutiwenzi pt36">
                    <?php echo ($info["content"]); ?>
                </div>
            </div>
            
            <script src="__JS__/jquery.min.1.10.2.js"></script>
<script src="__JS__/slider.js"></script>
<script type="text/javascript">
    // tab切换
    $(function() {
        $('.businessleft2 li').on('click',function(){
            busindex=$(this).index();
            $('.businessleft2 li').find('.businessleft2_1').css('background','#f5f5f5');
            $('.businessleft2 li').find('.businessleft2_2').css('background','#f5f5f5');
            $(this).find('.businessleft2_1').css('background','#5dc6e2');
            $(this).find('.businessleft2_2').css('background','#e7f9fc');
            $('.biaos').css('display','none');
            $('.business'+busindex).css('display','block');
        })
    })
    $('.businessright5 p').eq(4).css('margin-top','30px')
</script>
<div class="ibottom">
            	<div class="ibottomcontent clearfix">
            		<a href="__APP__/index.php"><img src="__IMG__/index/index12.png" class="ibottombt1 fl"></a>
            		<img src="__IMG__/index/index18.png" class="ibottombt2 fl">
            		<div class="ibottombt3 fl">
            			<p class="ibottombt3_1">服务热线</p>
            			<p class="ibottombt3_2"><?php echo ($site["SITE_INFO"]["tel"]); ?></p>
            			<p class="ibottombt3_3">服务时间：09:00-18:30</p>
            			<p class="ibottombt3_4">品牌邮箱</p>
            			<p class="ibottombt3_5"><?php echo ($site["SITE_INFO"]["service"]); ?></p>
            		</div>
            		<div class="ibottombt4 fl">
            			<p class="ibottombt4_1">官网微信</p>
            			<img src="__IMG__/index/index13.png" class="ibottombt4_2">
            		</div>
            		<div class="ibottombt5 fl">
            			<p class="ibottombt4_1">官网微博</p>
            			<img src="__IMG__/index/index14.png" class="ibottombt4_2">
            		</div>
            		<ul class="ibottombt6 fl">
            			<p class="ibottombt6_1">关于我们</p>
            			<li><a href="__APP__/index/about">企业简介</a></li>
            			<li><a href="__APP__/index/about">社会责任</a></li>
            			<li><a href="__APP__/index/about">历史剪影</a></li>
            			<li><a href="__APP__/index/about">企业优势</a></li>
            			<li><a href="__APP__/index/contact">合作伙伴</a></li>
            		</ul>
            		<ul class="ibottombt6 fl">
            			<p class="ibottombt6_1">集团业务</p>
            			<li><a href="__APP__/index/group">迦南环球医疗服务</a></li>
            			<li><a href="__APP__/index/group">迦南医疗科技</a></li>
            			<li><a href="__APP__/index/group">迦南学术及培训</a></li>
            			<li><a href="__APP__/index/group">迦南金融服务</a></li>
            		</ul>
            		<ul class="ibottombt6 fl">
            			<p class="ibottombt6_1">行业动态</p>
            			<li><a href="__APP__/product/index">行业动态</a></li>
            		</ul>
            		<ul class="ibottombt6 fl">
            			<p class="ibottombt6_1">联系我们</p>
            			<li><a href="__APP__/index/contact">联系我们</a></li>
            			<li><a href="__APP__/index/contact">业务合作</a></li>
            			<li><a href="__APP__/index/contact">精英招聘</a></li>
            		</ul>
            	</div>
            	<div class="bottom2">
            		<p class="bottom2wz">2015 迦南集团 All rights reserved<span>迦南集团</span><span><?php echo ($site["SITE_INFO"]["icp"]); ?></span></p>
            	</div>
            </div>
        </div>
        <?php echo ($site["SITE_INFO"]["tongji"]); ?>
    </body>
</html>