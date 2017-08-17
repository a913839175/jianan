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
                    <p class="boxleft  fl">迦南阳光集团欢迎您</p>
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

<link rel="stylesheet" href="__CSS__/index.css"/>
<!-- 文字轮播 -->
<div class="wzlb_z clearfix">
    <div id="banner_tabs" class="flexslider fl">
        <ul class="slides">
            <?php if(is_array($ad_info)): $i = 0; $__LIST__ = $ad_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <img src="__IMG__/index/index08.png" class="anaan">
                    <p class="slidems"><?php echo ($vo["ad_name"]); ?></p>
                    <div class="weizhi">
                        <?php echo ($vo["summary"]); ?>
                    </div>
                    <a href="<?php echo ($vo["ad_link"]); ?>" class="slidegd">了解更多</a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
        <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
            <?php if(is_array($ad_info)): $i = 0; $__LIST__ = $ad_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a><?php echo ($key); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ol>
    </div>
    <img src="__IMG__/index/index03.jpg" class="fl wzlb_right">
</div>
<!-- 我们的服务 -->
<div class="server">
    <div class="servermindd">
        <p class="serverbt">我们的服务</p>
        <p class="serverxian"></p>
        <ul class="serverul clearfix">
            <li class="serverli fl">
                <a href="__APP__/index/intserver">
                    <img src="__IMG__/index/index04.png" class="serverimg">
                    <p class="serverms">综合医疗服务</p>
                </a>
            </li>
            <li class="serverli fl">
                <a href="__APP__/index/medical">
                    <img src="__IMG__/index/index05.png" class="serverimg">
                    <p class="serverms">紧急医疗救援</p>
                </a>
            </li>
            <li class="serverli fl">
                <a href="__APP__/index/group#serliu">
                    <img src="__IMG__/index/index06.png" class="serverimg">
                    <p class="serverms">救援服务流程</p>
                </a>
            </li>
            <li class="serverli fl">
                <a href="__APP__/index/group#serliu">
                    <img src="__IMG__/index/index07.png" class="serverimg">
                    <p class="serverms">海外就医服务流程</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- 为什么选择我们 -->
<ul class="whychoose clearfix">
    <li class="whychoo1 fl">
        <p class="whychoos1">为什么</p>
        <p class="whychoos2">选择我们</p>
    </li>
    <li class="whychoo2 fl">
        <a class="whychoos3 blue" href="__APP__/index/group">具有医疗救援资质</a>
        <a class="whychoos4 hui" href="__APP__/index/group">多语种24小时客服</a>
    </li>
    <li class="whychoo2 fl">
        <a class="whychoos3 pink" href="__APP__/index/group">500以上城市救援网点</a>
        <a class="whychoos4 blue" href="__APP__/index/group">千名顶级医疗专家团队</a>
    </li>
    <li class="whychoo2 fl">
        <a class="whychoos3 blue" href="__APP__/index/group">标准医疗专用车救护团队</a>
        <a class="whychoos4 hui" href="__APP__/index/group">大数据风险测评</a>
    </li>
</ul>


<!-- 核心价值 -->
<div class="hexin" style="margin-top: 40px;">
    <img src="__IMG__/index/index15.jpg" class="hexinimg">
    <ul class="hexinul clearfix">
        <div class="hexindiv fl">
            <img src="__IMG__/index/index08.png" class="hexindivimg">
            <p class="heixinms">核心价值</p>
        </div>
        <li class="hexinli fl">
            <img src="__IMG__/index/index09.png" class="hexinliimg mart35">
            <p class="heixinlip1">VIP定制援助服务</p>
            <p class="heixinlip2">专业化的定制援助服务</p>
        </li>
        <li class="hexinli fl">
            <img src="__IMG__/index/index10.png" class="hexinliimg mart25">
            <p class="heixinlip1">提升服务价值</p>
            <p class="heixinlip2">个性化服务及全程跟踪</p>
        </li>
        <li class="hexinli fl">
            <img src="__IMG__/index/index11.png" class="hexinliimg mart35">
            <p class="heixinlip1">提升客户满意度</p>
            <p class="heixinlip2">沟通多方 提高效率 降低风险</p>
        </li>
    </ul>
</div>
<!-- 国际性学术研讨会和培训 -->
<div class="kej clearfix" style="margin-top: 20px;">
    <div class="kejleft fl">
        <p class="kejleftp1"><?php echo ($ad_info_we[1]['ad_name']); ?></p >
        <div class="kejleftp2">
            <?php echo ($ad_info_we[1]['summary']); ?>
        </div>
        <a href="<?php echo ($ad_info_we[1]['ad_link']); ?>" class="slidegd2">了解更多</a>
    </div>
    <div class="kejright fl">
        <p class="kejleftp5"><?php echo ($ad_info_we[0]['ad_name']); ?></p >

        <div class="kejleftp3">
            <?php echo ($ad_info_we[0]['summary']); ?>
        </div>
        <a href="<?php echo ($ad_info_we[0]['ad_link']); ?>" class="slidegd3">了解更多</a>
    </div>
</div>
<!-- 行业动态 -->
<div class="news clearfix">
    <div class="newleft fl">
        <?php $__m_product=M("product"); $_m_product_list=$__m_product ->field("id,cid,title,update_time,status,published,image,psize,summary") ->where("`cid`=81 and `is_recommend`=1 AND status=1 AND lang='zh-cn'") ->order("`id` desc") ->limit(1) ->select(); foreach ($_m_product_list as $key=>$pro):?><a href="__APP__/product/read/id/<?php echo ($pro["id"]); ?>"><div class="newms"><?php echo (mb_substr($pro["title"],0,17,utf8)); ?></div></a><?php endforeach;?>
    </div>
    <div class="newright fr">
        <div class="newrbt clearfix">
            <p class="newrbt1 fl">行业动态</p>
            <a class="newrbt2 fr" href="__APP__/product/index">更多></a>
        </div>
        <ul class="newcontent">
            <?php $__m_product=M("product"); $_m_product_list=$__m_product ->field("id,cid,title,update_time,status,published,image,psize,summary") ->where("`cid`=81 and `is_recommend`=1 AND status=1 AND lang='zh-cn'") ->order("`id` desc") ->limit(1,9) ->select(); foreach ($_m_product_list as $key=>$pro):?><li class="newcontentli">
                <a class="fl" href="__APP__/product/read/id/<?php echo ($pro["id"]); ?>"><?php echo (mb_substr($pro["title"],0,24,utf8)); ?></a>
                <p class="fr"><?php echo (date("Y.m.d",$pro["published"])); ?></p>
            </li><?php endforeach;?>
        </ul>
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
            			<p class="ibottombt3_3">服务时间：09:00-18:00</p>
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
            		</ul>
            		<ul class="ibottombt6 fl">
            			<p class="ibottombt6_1">集团业务</p>
            			<li><a href="__APP__/index/group">迦南阳光医疗服务</a></li>
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