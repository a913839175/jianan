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

<link rel="stylesheet" href="__CSS__/aboutus.css"/>
<!-- 关于我们tab -->
<div class="contact">
    <img src="__IMG__/contact/contact01.jpg" class="contactimg1">
</div>
<div class="business clearfix">
    <div class="businessleft fl">
        <div class="businessleft1">
            <img src="__IMG__/index/index08.png" class="anaan">
            <p class="businessleft1_1">迦南阳光医疗</p>
        </div>
        <ul class="businessleft2 clearfix">
            <li class="clearfix">
                <p class="businessleft2_1 fl businessleft2_01"></p>
                <p class="businessleft2_2 fl businessleft2_02"><span>企业简介</span></p>
            </li>
            <li class="clearfix">
                <p class="businessleft2_1 fl"></p>
                <p class="businessleft2_2 fl"><span>社会责任</span></p>
            </li>
            <li class="clearfix">
                <p class="businessleft2_1 fl"></p>
                <p class="businessleft2_2 fl"><span>历史剪影</span></p>
            </li>
            <li class="clearfix">
                <p class="businessleft2_1 fl"></p>
                <p class="businessleft2_2 fl"><span>企业优势</span></p>
            </li>
        </ul>
    </div>
    <!-- 企业简介 -->
    <div class="business0 fr biaos" style="display: block;">
        <p class="businessright1">您的位置：首页 > 关于我们</p>
        <p class="businessright2">企业简介</p>
        <div class="aboutxian mt10"></div>
        <?php echo ($qyjj['content']); ?>        
    </div>
    <!-- 社会责任 -->
    <div class="business1 fr biaos" >
        <p class="businessright1">您的位置：首页 > 关于我们</p>
        <p class="businessright2">社会责任</p>
        <div class="aboutxian mt10"></div>
        <?php echo ($shzr['content']); ?>
    </div>
    <!-- 历史剪影 -->
    <div class="business2 fr biaos" >
        <p class="businessright1">您的位置：首页 > 关于我们</p>
        <p class="businessright2">历史剪影</p>
        <div class="aboutxian mt10"></div>
            <?php echo ($lsjy['content']); ?>
    </div>
    <!-- 企业优势 -->
    <div class="business3 fr biaos" >
        <p class="businessright1">您的位置：首页 > 关于我们</p>
        <p class="businessright2">企业优势</p>
        <div class="aboutxian mt10"></div>
        <div class="businimgtx mt14">
            <div class="businimgtx1 busyx">
                <div class="busyy">
                    <div class="busyy1">
                        <div class="kuohao"><p>500位国内专家，国家级主任委员100名</p></div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="businimgbx clearfix">
            <div class="businimgbx01 fl busyx">
                <div class="busyy">
                    <div class="busyy5">
                        <p>国际医生组织网</p>
                    </div>
                </div>
            </div>
            <div class="businimgbxmidd fl">
                <div class="businimgbx02 fl busyx">
                    <div class="busyy">
                        <div class="busyy2">
                            <p>知名医院网络</p>
                        </div>
                    </div>
                </div>
                <div class="businimgbx03 fl busyx">
                    <div class="busyy">
                        <div class="busyy3">
                            <p>高端医疗包装团队</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="businimgbx04 fr busyx">
                <div class="busyy">
                    <div class="busyy4">
                        <p>医院信息化<br />及高端金融服务</p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<div class="aboutimg0 aboutimg">
    <img src="__IMG__/aboutus/aboutus01.jpg" class="aboutimg01">
</div>
<div class="aboutimg1 aboutimg">
    <img src="__IMG__/aboutus/aboutus01.jpg" class="aboutimg01">
</div>
<div class="aboutimg2 aboutimg">
    <img src="__IMG__/aboutus/aboutus01.jpg" class="aboutimg01">
</div>
<div class="aboutimg3 aboutimg">
    <img src="__IMG__/aboutus/aboutus01.jpg" class="aboutimg01">
</div>

<script src="__JS__/jquery.min.1.10.2.js"></script>
<script src="__JS__/slider.js"></script>
<script>
    $(document).ready(function(){
        var arr=location.href.split('?').pop().split('='); 
        if(arr[1] > -1){
           busindex=arr[1];
            $('.businessleft2 li').find('.businessleft2_1').css('background','#f5f5f5');
            $('.businessleft2 li').find('.businessleft2_2').css('background','#f5f5f5');
            $('.businessleft2 li').eq(busindex).find('.businessleft2_1').css('background','#5dc6e2');
            $('.businessleft2 li').eq(busindex).find('.businessleft2_2').css('background','#e7f9fc');
            $('.biaos').css('display','none');
            $('.aboutimg').css('display','none');
            $('.business'+busindex).css('display','block');
            $('.aboutimg'+busindex).css('display','block');
        }
    })
</script>
<script type="text/javascript">
    // 关于我们切换
    $(function() {
        $('.businessleft2 li').on('click',function(){
            busindex=$(this).index();
            $('.businessleft2 li').find('.businessleft2_1').css('background','#f5f5f5');
            $('.businessleft2 li').find('.businessleft2_2').css('background','#f5f5f5');
            $(this).find('.businessleft2_1').css('background','#5dc6e2');
            $(this).find('.businessleft2_2').css('background','#e7f9fc');
            $('.biaos').css('display','none');
            $('.aboutimg').css('display','none');
            $('.business'+busindex).css('display','block');
            $('.aboutimg'+busindex).css('display','block');
        })
    })
    $('.businessright5 p').eq(4).css('margin-top','30px');

    //企业优势的背景切换
    $('.busyx').on('mouseover',function(){
        $(this).find('.busyy').show();
    })
    $('.busyx').on('mouseout',function(){
        $(this).find('.busyy').hide();
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