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
<style>
    .table1{ border-top: #ddd solid 1px; }
    .table1 tr:hover{ background-color:#fafafa;}
    .table1 th {
        border-right: 1px solid #E5E3E3;
        font-weight: 100;
        line-height: 24px;
        padding: 5px 10px 7px;
        text-align:right;
    }
    .table1 td {
        line-height: 24px;
        padding: 5px 10px 7px;
    }
    .tab {
        margin: 15px 0;
        border-width: 1px;
        border-style: solid;
        border-color: #ddd #ddd #fff #fff;
        text-shadow: 0 1px 0 #FFFFFF;
        border-collapse: separate;
    }
    .tab td {
        padding: 5px 10px;
        margin: 15px 0;
        line-height: 24px;
        border-width: 1px;
        border-style: solid;
        border-color: #fff #fff #ddd #ddd;
    }
    .tab thead td { text-align: center; }
    .tab tbody tr:hover { background: #fff; }
    input{ vertical-align: middle;}
    .input { height: 18px; }
    .input, textarea, select {
        background-color: #FFFFFF;
        border: 1px solid #CCCCCC;
        box-shadow: 2px 2px 2px #F0F0F0 inset;
        font-family: inherit;
        font-size: 100%;
        line-height: 18px;
        padding: 4px;
        margin: 0;
        vertical-align: middle;
    }
    option{ height: 16px;}
    .clear { clear:both; }
    .fr{ float: right;}
    .line {
        height:2px;
        overflow:hidden;
        margin:5px 0px;
    }
    .btn {
        margin-right: 10px;
        min-width: 80px;
        background: #1b75b6;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        color:#fff;
        border: 1px solid #106bab;
        border-radius: 3px;
        padding:4px 5px 4px 10px;
        display: inline-block;
        cursor: pointer;
        font-size:100%;
        line-height: normal;
        text-decoration:none;
        overflow:visible;
        vertical-align: middle;
        text-align:center;
        zoom: 1;
        white-space:nowrap;
        font-family:inherit;
        letter-spacing:5px;
    }
</style>
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
        <h3 class='title'><?php echo (L("T_MESSAGE")); ?></h3>
        <div class="active" id="sidebar" data-csnow="42" data-class3="0" data-jsok="2">
            <?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl class="list-none navnow"> <dt id='part_<?php echo ($vo["unique_id"]); ?>'><a href='<?php echo U("page/index",array("name"=>$vo["unique_id"]));?>'  title='<?php echo ($vo["page_name"]); ?>' class="zm"><span><?php echo ($vo["page_name"]); ?></span></a></dt></dl><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="clear"></div></div>
    </div>
    <div class="sb_box" >
        <h3 class="title">
            <div class="position" id="ny_navx"><?php echo (L("T_POSSTION")); ?>：<a href="<?php echo U('index/index');?>" title="Home"><?php echo (L("T_HOME")); ?></a> &gt; <a href='#' ><?php echo (L("T_MESSAGE")); ?></a></div>
            <span><?php echo (L("T_MESSAGE")); ?></span>
        </h3>
        <div class="clear"></div>

        <div class="editor active" id="showtext">

            <form action="<?php echo U('message/add');?>" method="post">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
                    <tr>
                        <th width="120"><?php echo (L("T_NAME")); ?>：</th>
                        <td><input name="username" type="text" class="input" size="40" value="" /></td>
                    </tr>
                    <tr>
                        <th><?php echo (L("T_EMAIL")); ?>：</th>
                        <td><input name="email" type="text" class="input" size="40" value="" /></td>
                    </tr>
                    <tr>
                        <th><?php echo (L("T_MOBILE")); ?>：</th>
                        <td><input class="input" name="moblie" type="text" size="40" value="" /></td>
                    </tr>
                    <tr>
                        <th><?php echo (L("T_MESSAGE_CONTENT")); ?>：</th>
                        <td><textarea name="content" style="width: 280px; height: 80px;"></textarea></td>
                    </tr>
                    <tr>
                        <th><?php echo (L("T_CODE")); ?>：</th>
                        <td><input class="input" name="verify_code" id="verify_code" type="text" size="20" value="" />
                            <img src="<?php echo U('Base/verify_code');?>"  title="看不清？单击此处刷新" onclick="this.src+='?rand='+Math.random();"  style="cursor: pointer; vertical-align: middle;"/>
                        </td>
                    </tr>
                </table>
                <div style="text-align: center;margin-top: 30px;">
                    <button class="btn submit">提交</button>
                </div>
            </form>
            <div class="clear"></div>
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