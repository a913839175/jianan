<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title><?php echo ($webtitle); ?>-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
    <meta name="keywords" content="<?php if($info['keywords']){ echo ($info['keywords']); }else{ echo ($webtitle); ?>,<?php echo ($site["SITE_INFO"]["keyword"]); } ?>">
    <meta name="description" content="<?php if($info['description']){ echo ($info['description']); }else{ echo ($webtitle); ?>-<?php echo ($site["SITE_INFO"]["description"]); } ?>">
    <link rel="stylesheet" type="text/css" href="__ROOT__/Home/Tpl/default/Public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Home/Tpl/default/Public/css/jquery.jslides.css" />
    <script type="text/javascript" src="__ROOT__/Home/Tpl/default/Public/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="__ROOT__/Home/Tpl/default/Public/js/jquery.jslides.js"></script>
    <!--[if IE]>
    <script src="__ROOT__/Home/Tpl/default/Public/js/html5.js" type="text/javascript"></script>
    <![endif]-->
</head>
<?php if($site['LISTNUM']['tempcolor']){ ?>
<style>
    header,header .inner,footer,footer .inner{ background:<?php echo ($site["LISTNUM"]["tempcolor"]); ?> }
</style>
<?php } ?>

<body>
<header>
    <div class="inner clear">
        <div class="logo">
            <a href="" title="Website Name" id="web_logo">
                <img src="__UPLOAD__/image/images/logo.png" alt="Website Name" title="Website Name" style="margin:13px 0px 0px 10px;" />
            </a>
        </div>
        <div class="otr-nav">
            <div class="top-nav">
                <?php $_m_nav=M("nav");$__list__=$_m_nav->where("lang='zh-cn'  AND type='top' AND parent_id=0")->order('sort DESC')->select();foreach($__list__ as $_k1=>$_v1):$cid=$_v1['id'];$child=$_m_nav->where('parent_id='.$cid)->order('sort DESC')->select();extract($_v1);?><a href="<?php echo U('nav/index',array('id'=>$id));?>" style='cursor:pointer;' title='<?php echo ($nav_name); ?>' <?php if($target == 1): ?>target="_blank"<?php endif; ?> ><?php echo ($nav_name); ?></a><?php endforeach; ?>
                <?php if($site['SITE_INFO']['LANG_SWITCH_ON']){ ?>
                [<a href="__ACTION__?l=zh-cn" style='cursor:pointer;' title='简体中文'>简体中文</a>]
                [<a href="__ACTION__?l=zh-en" style='cursor:pointer;' title='English'>English</a>]
                <?php } ?>
            </div>
            <nav><ul class="list-none" id="jsddm">
                <li id="nav_10001"  <?php if('index'==strtolower(MODULE_NAME)){ ?>class='navdown'<?php } ?>><a href='/' title='<?php echo (L("T_HOME")); ?>' class='nav'><span><?php echo (L("T_HOME")); ?></span></a></li>
                <?php $_m_nav=M("nav");$__list__=$_m_nav->where("lang='zh-cn'  AND type='middle' AND parent_id=0")->order('sort DESC')->select();foreach($__list__ as $_k1=>$_v1):$cid=$_v1['id'];$child=$_m_nav->where('parent_id='.$cid)->order('sort DESC')->select();extract($_v1);?><li class="line"></li>
                    <li <?php if($module==strtolower(MODULE_NAME)){ ?>class='navdown'<?php } ?>  ><a href="<?php echo U('nav/index',array('id'=>$id));?>" title='<?php echo ($nav_name); ?>' <?php if($target == 1): ?>target="_blank"<?php endif; ?>  class='hover-none nav'><span><?php echo ($nav_name); ?></span></a></li><?php endforeach; ?>
            </ul></nav>
        </div>
    </div>
</header>
<div class="sidebar inner">
    <?php if($ad_info != ''): ?><style>
        #pagination{ display: none;}
        #slides{height: 300px;}
    </style>
    <div id="marquee">
        <ul id="slides" class="list-none">
            <?php if(is_array($ad_info)): $i = 0; $__LIST__ = $ad_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url('__UPLOAD__/pictures/<?php echo ($vo["ad_img"]); ?>') no-repeat center top"><a href="<?php echo ($vo["ad_link"]); ?>" target="_blank"><?php echo ($vo["ad_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div><?php endif; ?>
    <div class="sb_nav">
        <h3 class='title'><?php echo (L("T_NEWS")); ?></h3>
        <div class="active" id="sidebar" data-csnow="43" data-class3="0" data-jsok="2">
            <?php $__m_cat=M("category");$__cat_list=$__m_cat->where("lang='zh-cn'  AND type='n'")->limit()->select();foreach($__cat_list as $_ck=>$_cv):$cid=$_cv['cid'];$child=$__m_cat->where('pid='.$cid)->order('cid DESC')->select();extract($_cv);?><dl class="list-none navnow">
                <dt id='part<?php echo ($cid); ?>'><a href='<?php echo U("news/index",array("cid"=>$cid));?>'  title='<?php echo ($name); ?>' class="zm"><span><?php echo ($name); ?></span></a></dt>

            </dl><?php endforeach; ?>
                <div class="clear"></div></div>
    </div>
    <div class="sb_box" style="min-height: 550px;" >
        <h3 class="title">
            <div class="position" id="ny_navx"><?php echo (L("T_POSSTION")); ?>：<a href="<?php echo U('index/index');?>" title="<?php echo (L("T_HOME")); ?>"><?php echo (L("T_HOME")); ?></a> &gt; <a href='<?php echo U("news/index");?>' ><?php echo (L("T_NEWS")); ?></a></div>
            <span><?php echo (L("T_NEWS")); ?></span>
        </h3>
        <div class="clear"></div>
        <div class="active" id="newslist">
            <ul class='list-none metlist'>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='list top'><span>[<?php echo date('Y/m/d',$vo['published']);?>][<?php echo (L("T_VIEWTIMES")); ?>:<?php echo ($vo["click"]); ?>]</span><a href="<?php echo U('news/read',array('id'=>$vo['id']));?>" title='<?php echo ($vo["title"]); ?>' target='_self'><?php echo msubstr($vo['title'],0,35,'utf-8',false);?></a><p><?php echo msubstr($vo['summary'],0,100);?></p></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div id="flip"><style>.digg4  { padding:3px; margin:3px; text-align:center; font-family:Tahoma, Arial, Helvetica, Sans-serif;  font-size: 12px;}.digg4  a { border:1px solid #ddd; padding:2px 5px 2px 5px; margin:2px; color:#aaa; text-decoration:none;}.digg4  a:hover { border:1px solid #a0a0a0; }.digg4  a:hover { border:1px solid #a0a0a0; }.digg4  span.current {border:1px solid #e0e0e0; padding:2px 5px 2px 5px; margin:2px; color:#aaa; background-color:#f0f0f0; text-decoration:none;}.digg4  span.disabled { border:1px solid #f3f3f3; padding:2px 5px 2px 5px; margin:2px; color:#ccc;} </style>
                <div class='digg4'><?php echo ($page); ?></div></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<footer data-module="10001" data-classnow="10001">
    <div class="inner">
        <div class="foot-nav">
            <!--以下版权信息，未授权请勿删除-->
            Powered by <a href="http://www.conist.com" target="_blank">Conist</a> X1.0 © 2001-2013 <a href="http://www.conist.com" target="_blank">Lysily.</a>
        </div>
        <div class="foot-text">
        </div>
        <div class="clear"></div>
    </div>
</footer>
<?php echo ($site["SITE_INFO"]["tongji"]); ?>
</body>
</html>