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

<link rel="stylesheet" href="__CSS__/groupbus.css"/>
<!-- banner -->
<div class="jbanner">
    <img src="__IMG__/groupbus/group02.png" class="jbanner01">
</div>
<p class="jlocation mb60">您的位置：首页 > 集团业务</p>
<!-- 综合医疗服务 -->
<div class="zhserver">
    <img src="__IMG__/groupbus/group03.png" class="zhserverimg01">
    <div class="zhserver01 clearfix">
        <div class="zhserver01left fl">
            <p class="zhserver01left_1"><?php echo ($ad_enterprise[0]['ad_name']); ?></p>
                            <div class="zhserver01left_2">
                            <?php echo ($ad_enterprise[0]['summary']); ?>
                            </div>
            <!-- <a href="<?php echo ($ad_enterprise[0]['ad_link']); ?>" class="zhserver01left_3">了解更多</a> -->
        </div>
        <div class="zhserver01right fr">
            <p class="zhserver01right_1"><?php echo ($ad_enterprise[1]['ad_name']); ?></p>
                        <div class="zhserver01right_2">
                            <?php echo ($ad_enterprise[1]['summary']); ?>
                        </div>
            <!-- <a href="<?php echo ($ad_enterprise[1]['ad_link']); ?>" class="zhserver01left_3">了解更多</a>  -->
        </div>
    </div>
    <div class="zhserver02">
        <p class="zhserver02_1"><?php echo ($ad_enterprise[2]['ad_name']); ?></p>
                    <div class="zhserver02_2">
                        <?php echo ($ad_enterprise[2]['summary']); ?>
                    </div>
        <!-- <a href="<?php echo ($ad_enterprise[2]['ad_link']); ?>" class="zhserver01left_4">了解更多</a>  -->
    </div>
</div>
<!-- 个人医疗服务 -->
<div class="perserver">
    <img src="__IMG__/groupbus/group04.png" class="zhserverimg02">
    <div class="zhserver01 clearfix">
        <div class="perserver01left fl">
            <p class="zhserver01left_1"><?php echo ($ad_personal[0]['ad_name']); ?></p>
                        <div class="zhserver01left_2">
                        <?php echo ($ad_personal[0]['summary']); ?>
                        </div>
            <!-- <a href="<?php echo ($ad_personal[0]['ad_link']); ?>" class="zhserver01left_3">了解更多</a> -->
        </div>
        <div class="zhserver01right fr">
            <p class="zhserver01right_1"><?php echo ($ad_personal[1]['ad_name']); ?></p>
                        <div class="perserver01right_2">
                             <?php echo ($ad_personal[1]['summary']); ?>
                        </div>
           <!--  <a href="<?php echo ($ad_personal[1]['ad_link']); ?>" class="zhserver01left_3">了解更多</a>  -->
        </div>
    </div>
    <div class="perserver02 clearfix">
        <div class="perserverf fl">
            <div class="perserverf_1">
                <p class="perserverf_1ms"><?php echo ($ad_personal[2]['ad_name']); ?></p>
                            <div class="perserverf_2ms">
                                <?php echo ($ad_personal[2]['summary']); ?>
                            </div>
                <!-- <a href="<?php echo ($ad_personal[2]['ad_link']); ?>" class="zhserver01left_4">了解更多</a>  -->
            </div>
            <div class="perserverf_2">
                <p class="perserverf_1ms"><?php echo ($ad_personal[3]['ad_name']); ?></p>
                            <div class="perserverf_3ms">
                                <?php echo ($ad_personal[3]['summary']); ?>
                            </div>
                <!-- <a href="<?php echo ($ad_personal[3]['ad_link']); ?>" class="zhserver01left_4">了解更多</a>  -->
            </div>
        </div>
        <div class="perservers fl">
            <p class="perservers_1"><?php echo ($ad_personal[4]['ad_name']); ?></p>
                        <div class="perservers_2">
                            <?php echo ($ad_personal[4]['summary']); ?>
                        </div>
            <!-- <a href="<?php echo ($ad_personal[4]['ad_link']); ?>" class="zhserver01left_4">了解更多</a> -->
        </div>
        <div class="perservert fl">
            <p class="perservers_1"><?php echo ($ad_personal[5]['ad_name']); ?></p>
                        <div class="perservers_2">
                            <?php echo ($ad_personal[5]['summary']); ?>
                        </div>
            <!-- <a href="<?php echo ($ad_personal[5]['ad_link']); ?>" class="zhserver01left_4">了解更多</a> -->
        </div>
    </div>
</div>
<!-- 救援和海外服务流程  -->
            <div class="serliu mt60 mb10" id="serliu">
    <p class="serliu01">救援服务流程 </p>
    <div class="serliuz clearfix">
        <p class="serliuz_1 fl">客户发生需求</p>
        <img src="__IMG__/groupbus/group05.png" class="serliuimg fl">
        <p class="serliuz_2 fl">拨打救援热线</p>
        <img src="__IMG__/groupbus/group05.png" class="serliuimg fl">
        <p class="serliuz_3 fl">核实客户信息</p>
        <img src="__IMG__/groupbus/group05.png" class="serliuimg fl">
        <p class="serliuz_2 fl">提供专业救援</p>
        <img src="__IMG__/groupbus/group05.png" class="serliuimg fl">
        <p class="serliuz_1 fl">跟踪回访客户</p>
    </div>
</div>
<div class="serliu mb60">
    <p class="serliu01">海外就医服务流程 </p>
    <div class="serliuz clearfix">
        <p class="serliuz_1 fl">客户咨询</p>
        <img src="__IMG__/groupbus/group05.png" class="serliuimg fl">
        <p class="serliuz_2 fl">远程会诊</p>
        <img src="__IMG__/groupbus/group05.png" class="serliuimg fl">
        <p class="serliuz_3 fl">出国前服务</p>
        <img src="__IMG__/groupbus/group05.png" class="serliuimg fl">
        <p class="serliuz_2 fl">国外就医服务</p>
        <img src="__IMG__/groupbus/group05.png" class="serliuimg fl">
        <p class="serliuz_1 fl">回国跟踪服务</p>
    </div>
</div>
<!-- 迦南科技新闻  -->
<ul class="jnnew">
    <?php $__m_product=M("product"); $_m_product_list=$__m_product ->field("id,cid,title,update_time,status,published,image,psize,summary") ->where("`cid`=82 AND status=1 AND lang='zh-cn'") ->order("`id` desc") ->limit() ->select(); foreach ($_m_product_list as $key=>$pro):?><li>
        <div class="jnnew_bt clearfix">
            <p class="fl jnnew_bt1"></p>
            <p class="fl jnnew_bt2"><?php echo ($pro["title"]); ?></p>
            <a href="__APP__/product/read2/id/<?php echo ($pro["id"]); ?>" class="fr jnnew_bt3" >更多></a>  
        </div>
        <div class="jnnewwz">
            <div class="jnnewwz1">
                <?php echo ($pro["summary"]); ?>
            </div>
        </div>
    </li><?php endforeach;?>
</ul>
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