<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加编辑图片-网站设置-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
    <?php $addCss=""; $addJs=""; $currentNav ='网站设置 > 添加编辑图片'; ?>
    <base href="<?php echo ($site["WEB_ROOT"]); ?>"/>
<link rel="stylesheet" type="text/css" href="../Public/Css/base.css" />
<link rel="stylesheet" type="text/css" href="../Public/Css/layout.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Js/asyncbox/skins/default.css<?php echo ($addCss); ?>" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.lazyload.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/functions.js"></script>
<script type="text/javascript" src="../Public/Js/base.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.form.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/asyncbox/asyncbox.js<?php echo ($addJs); ?>"></script>
</head>
<body>
<div class="wrap"> <div id="Top">
    <div class="logo"><a href="<?php echo ($site["WEB_ROOT"]); ?>"><img src="../Public/Img/logo.png" style="border: 0" /></a></div>
    <div class="help"><a href="<?php echo U('Index/simplemap');?>">后台地图</a><span><a href="http://www.conist.com" target="_blank">关于</a></span></div>
    <div class="menu">
        <ul> <?php echo ($menu); ?> </ul>
    </div>
</div>
<div id="Tags">
    <div class="userPhoto"><img src="../Public/Img/userPhoto.png" /> </div>
    <div class="navArea">
        <div class="userInfo"><div><a href="<?php echo U('Webinfo/index');?>" class="sysSet"><span>&nbsp;</span>系统设置</a> <a href="<?php echo U("Public/loginOut");?>" class="loginOut"><span>&nbsp;</span>退出系统</a></div>欢迎您，<?php echo ($my_info["email"]); ?> | <a target="_blank" href="<?php echo C('SITE_INFO.url');?>">网站首页</a></div>
        <div class="nav"><font id="today"><?php echo date("Y-m-d H:i:s"); ?></font>您的位置：<?php echo ($currentNav); ?></div>
    </div>
</div>
<div class="clear"></div>
    <div class="mainBody"> <div id="Left">
    <div id="control" class=""></div>
    <div class="subMenuList">
        <div class="itemTitle"><?php if(MODULE_NAME == 'Index'): ?>常用操作<?php else: ?>子菜单<?php endif; ?> </div>
        <ul>
            <?php if(is_array($sub_menu)): foreach($sub_menu as $key=>$sv): ?><li><a href="<?php echo ($sv["url"]); ?>"><?php echo ($sv["title"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <?php if(C('QRCODE')){ ?><div class="QRcode">移动设备访问本页：<br/><br/><img src="<?php echo ($QRcodeUrl); ?>"/></div><?php } ?>
</div>
        <div id="Right">
            <div class="contentArea">
                <div class="Item hr">
                    <div class="current">添加编辑图片</div>
                </div>
                <form action="<?php echo U('Siteinfo/add_ad');?>" method="post" enctype="multipart/form-data">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
                        <?php if($site['SITE_INFO']['LANG_SWITCH_ON']=='1'){ ?>
                        <tr>
                            <th>语言选择：</th>
                            <td><select name="info[lang]" style="width: 80px;">
                                <option value="zh-cn" <?php if($info['lang'] == 'zh-cn'): ?>selected<?php endif; ?>>简体中文</option>
                                <option value="zh-en" <?php if($info['lang'] == 'zh-en'): ?>selected<?php endif; ?>>English</option>
                            </select></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <th width="120">广告名称：</th>
                            <td><input name="info[ad_name]" type="text" class="input" size="40" value="<?php echo ($info["ad_name"]); ?>" /> </td>
                        </tr>
                        <tr>
                            <th width="120">文字内容：</th>
                            <td><textarea class="input" style="height: 60px; width: 600px;" name="info[summary]"><?php echo ($info["summary"]); ?></textarea></td>
                        </tr>
                        <tr>
                            <th>投放位置：</th>
                            <td><select name="info[position]" style="width: 140px;">
                                <option value="all" <?php if($info['position'] == 'all'): ?>selected<?php endif; ?>>全局-除首页</option>
                                <option value="index" <?php if($info['position'] == 'index'): ?>selected<?php endif; ?>>首页</option>
                                <option value="indexwe" <?php if($info['position'] == 'indexwe'): ?>selected<?php endif; ?>>首页-我们的服务</option>
                            <option value="enterprise" <?php if($info['position'] == 'enterprise'): ?>selected<?php endif; ?>>企业综合医疗服务</option>
                            <option value="personal" <?php if($info['position'] == 'personal'): ?>selected<?php endif; ?>>个人综合医疗服务</option>
                            <option value="indexwe" <?php if($info['position'] == 'indexwe'): ?>selected<?php endif; ?>>首页-我们的服务</option>
                                <option value="news" <?php if($info['position'] == 'news'): ?>selected<?php endif; ?>>新闻页</option>
                                <option value="product" <?php if($info['position'] == 'product'): ?>selected<?php endif; ?>>产品页</option>
                                <option value="message" <?php if($info['position'] == 'message'): ?>selected<?php endif; ?>>留言板页</option>
                                <?php if(is_array($pagelist)): $i = 0; $__LIST__ = $pagelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["unique_id"]); ?>" <?php if($info['position'] == $vo['unique_id']): ?>selected<?php endif; ?>><?php echo ($vo["fullname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select></td>
                        </tr>
                        <tr id="hidetr">
                            <th width="120">上传图片：</th>
                            <td><input type="file" class="input" size="60" name="ad_img" value=""/></td>
                        </tr>
                        <tr>
                            <th>链接地址：</th>
                            <td><input class="input" name="info[ad_link]" type="text" size="50" value="<?php echo ($info["ad_link"]); ?>" /> 请加上http://</td>
                        </tr>
                        <tr>
                            <th>显示排序：</th>
                            <td><input class="input" name="info[sort]" type="text" size="20" value="<?php echo ($info["sort"]); ?>" /> </td>
                        </tr>
                        <?php if($info['ad_img']){ ?>
                        <tr>
                            <th>图片显示：</th>
                            <td><a href="__UPLOAD__/pictures/<?php echo ($info["ad_img"]); ?>" target="_blank"><img src="__UPLOAD__/pictures/<?php echo ($info["ad_img"]); ?>" border="0" height="40" width="200"></a></td>
                        </tr>
                        <?php } ?>

                    </table>
                    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>"/>
                </form>
                <div class="commonBtnArea" >
                    <button class="btn submit">提交</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<script type="text/javascript">
    $(window).resize(autoSize);
    $(function(){
        autoSize();
        $(".loginOut").click(function(){
            var url=$(this).attr("href");
            popup.confirm('你确定要退出吗？','你确定要退出吗',function(action){
                if(action == 'ok'){ window.location=url; }
            });
            return false;
        });

        var time=self.setInterval(function(){$("#today").html(date("Y-m-d H:i:s"));},1000);


    });
</script>
<script type="text/javascript">
    $(function(){
        $(".submit").click(function(){
            commonAjaxSubmit();
        });
    });
</script>
</body>
</html>