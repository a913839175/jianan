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
            <div class="small">
            <div class="boxtop" >
                <div class="boxmiddle clearfix">
                    <p class="boxleft  fl">迦南集团欢迎您</p>
                    <p class="boxright fr">
                        <img src="__IMG__/index/index01.png" alt="photo">
                        <span>紧急救援电话 <?php echo ($site["SITE_INFO"]["tel"]); ?></span>
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
            </div>
            <div class="padd110" ></div>

<link rel="stylesheet" href="__CSS__/industry.css"/>
<!-- banner -->
<div class="nbanner">
    <div class="nbannerimg">
        <div class="nabnnerbo">
            <?php $__m_product=M("product"); $_m_product_list=$__m_product ->field("id,cid,title,update_time,status,published,image,psize,summary") ->where("`cid`=81 and `is_recommend`=1 AND status=1 AND lang='zh-cn'") ->order("`id` desc") ->limit(1) ->select(); foreach ($_m_product_list as $key=>$pro):?><a href="__APP__/product/read/id/<?php echo ($pro["id"]); ?>"><p><?php echo ($pro["title"]); ?></p></a><?php endforeach;?>
        </div>
    </div>
</div>
<!-- 标题 -->
<div class="btxq">您的位置：首页 > 行业动态 > 更多</div>
<!-- 了解详情 -->
<div class="details mt20">
    <p class="detailsbt">行业动态</p>
    <ul class="detailsul clearfix">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="detailsli clearfix">
            <img src="__UPLOAD__/product/<?php echo ($vo["image"]); ?>" class="detailslileft fl">
            <div class="detailsliright fr">
                <a href="__APP__/product/read/id/<?php echo ($vo["id"]); ?>"><p class="detailsliright1"><?php echo ($vo["title"]); ?></p></a>
                <a href="__APP__/product/read/id/<?php echo ($vo["id"]); ?>"><p class="detailsliright2"><?php echo ($vo["summary"]); ?></p></a>
                <a href="__APP__/product/read/id/<?php echo ($vo["id"]); ?>" class="detailsgd">了解详情></a>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <div class="page mtb50">
        <div class="list_table_page">
            <?php echo ($page); ?></div>
    </div>
</div>
<script src="__JS__/jquery.min.1.10.2.js"></script>
<script src="__JS__/slider.js"></script>
<script type="text/javascript">
    // 文字轮播
    $(function() {
        var bannerSlider = new Slider($('#banner_tabs'), {
            time: 5000,
            delay: 400,
            event: 'hover',
            auto: true,
            mode: 'fade',
            controller: $('#bannerCtrl'),
            activeControllerCls: 'active'
        });
    })
    // 核心价值的切换
    $('.hexinli').on('click',function(){
        $('.hexinli').css('background','#0cd8f1');
        $(this).css('background','#fc92b5');

    })
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
            		<div class="ibfloatright fr clearfix">
            		<ul class="ibottombt6 fl">
            			<p class="ibottombt6_1">关于我们</p>
            			<li><a href="__APP__/index/about?id=0">企业简介</a></li>
            			<li><a href="__APP__/index/about?id=1">社会责任</a></li>
            			<li><a href="__APP__/index/about?id=2">历史剪影</a></li>
            			<li><a href="__APP__/index/about?id=3">企业优势</a></li>
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
            			<li><a href="__APP__/index/contact?id=0">联系我们</a></li>
            			<li><a href="__APP__/index/contact?id=1">业务合作</a></li>
            			<li><a href="__APP__/index/contact?id=2">精英招聘</a></li>
            		</ul>
                        </div>
            	</div>
            	<div class="bottom2">
            		<p class="bottom2wz">2015 迦南集团 All rights reserved<span>迦南集团</span><span><?php echo ($site["SITE_INFO"]["icp"]); ?></span></p>
            	</div>
            </div>
        </div>
        <?php echo ($site["SITE_INFO"]["tongji"]); ?>
    </body>
</html>