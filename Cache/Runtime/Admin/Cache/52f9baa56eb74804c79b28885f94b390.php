<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加、编辑单页-后台管理-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
    <?php $addCss=""; $addJs=""; $currentNav ='单页管理 > 添加编辑单页'; ?>
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
<div class="wrap">
    <div id="Top">
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
    <div class="mainBody">
        <div id="Left">
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
            <div class="Item hr">
                <div class="current">添加编辑单页</div>
            </div>
            <form>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">

                    <?php if($site['SITE_INFO']['LANG_SWITCH_ON']=='1'){ ?>
                    <tr>
                        <th>语言选择：</th>
                        <td>
                            <select name="info[lang]">
                                <option value="zh-cn" <?php if($info['lang'] == 'zh-cn'): ?>selected<?php endif; ?> >简体中文</option>
                                <option value="zh-en" <?php if($info['lang'] == 'zh-en'): ?>selected<?php endif; ?> >English</option>
                                </volist>
                            </select></td>
                    </tr>
                    <?php } ?>

                    <tr>
                        <th width="100">单页标题：</th>
                        <td><input id="title" type="text" class="input" size="60" name="info[page_name]" value="<?php echo ($info["page_name"]); ?>"/> <a href="javascript:void(0)" id="checkPageTitle">检测是否重复</a></td>
                    </tr>
                    <tr>
                        <th width="100">别名(字母)：</th>
                        <td><input id="unique_id" type="text" class="input" size="60" name="info[unique_id]" value="<?php echo ($info["unique_id"]); ?>"/> <a href="javascript:void(0)" id="checkPageUnique">检测是否重复</a></td>
                    </tr>

                    <tr>
                        <th width="100">单页状态：</th>
                        <td><label><input type="radio" name="info[display]" value="1" <?php if($info["display"] == 1): ?>checked="checked"<?php endif; ?> />显示状态</label>
                            &nbsp;<label><input type="radio" name="info[display]" value="0" <?php if($info["display"] == 0): ?>checked="checked"<?php endif; ?> /> 隐藏状态</label>
                        </td>
                    </tr>
                    <tr>
                        <th>单页级别：</th>
                        <td>
                            <select name="info[parent_id]">
                                <option value="0">顶级</option>
                                <?php if(is_array($pagelist)): $i = 0; $__LIST__ = $pagelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo[id] == $info[parent_id]): ?><option value="<?php echo ($vo["id"]); ?>" selected="selected"><?php echo ($vo["fullname"]); ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["fullname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </select></td>
                    </tr>
                    <tr>
                        <th>关键词：</th>
                        <td><input type="text" class="input" size="60" name="info[keywords]" value="<?php echo ($info["keywords"]); ?>"/> 多关键词间用半角逗号（,）分开，可用于做文章关联阅读条件</td>
                    </tr>
                    <tr>
                        <th>描述：</th>
                        <td><textarea class="input" style="height: 60px; width: 600px;" name="info[description]"><?php echo ($info["description"]); ?></textarea> 用于SEO的description</td>
                    </tr>
                    <tr>
                        <th>内容：</th>
                        <td><textarea id="content" class="" style="height: 300px; width: 80%;" name="info[content]"><?php echo ($info['content']); ?></textarea></td>
                    </tr>
                </table>
                <input type="hidden" name="info[id]" value="<?php echo ($info["id"]); ?>" />
            </form>
            <div class="commonBtnArea" >
                <button class="btn submit">提交</button>
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
<script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.config.js"></script><script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    UE.getEditor('content')
</script>
<script type="text/javascript">
    $(function(){
        $("#checkPageTitle").click(function(){
            if($('#title').val()==''){
                popup.error('标题不能为空！');
                return false;
            }
            $.getJSON("__URL__/checkPageTitle", { title:$("#title").val(),id:"<?php echo ($info["id"]); ?>"}, function(json){
                $("#checkPageTitle").css("color",json.status==1?"#0f0":"#f00").html(json.info);
            });
        });
        $("#checkPageUnique").click(function(){
            if($('#unique_id').val()==''){
                popup.error('别名不能为空！');
                return false;
            }
            $.getJSON("__URL__/checkPageUnique", { title:$("#unique_id").val(),id:"<?php echo ($info["id"]); ?>"}, function(json){
                $("#checkPageUnique").css("color",json.status==1?"#0f0":"#f00").html(json.info);
            });
        });
        $(".submit").click(function(){
            commonAjaxSubmit();
            return false;
        });
    });
</script>
</body>
</html>