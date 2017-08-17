<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends BaseAction {

    public function index() {
        $this->assign("ad_info", M('Ad')->where("`position`='index'")->limit(3)->select());
        $this->assign("ad_info_we", M('Ad')->where("`position`='indexwe'")->order("sort desc")->limit(2)->select());
        $this->assign('webtitle',L('T_HOME'));
        $this->display();
    }
    public function about(){
        $this->assign("qyjj", M('page')->where("`page_name`='企业简介' and `display`=1")->order("id desc")->find());
        $this->assign("shzr", M('page')->where("`page_name`='社会责任' and `display`=1")->order("id desc")->find());
        $this->assign("lsjy", M('page')->where("`page_name`='历史剪影' and `display`=1")->order("id desc")->find());
        $this->assign("qyys", M('page')->where("`page_name`='企业优势' and `display`=1")->order("id desc")->find());
        $this->assign('webtitle',"关于我们");
        $this->display();
    }
    public function contact(){
        $this->assign("lxwm", M('page')->where("`page_name`='联系我们' and `display`=1")->order("id desc")->find());
        $this->assign("ywhz", M('page')->where("`page_name`='业务合作' and `display`=1")->order("id desc")->find());
        $this->assign("jyzp", M('page')->where("`page_name`='精英招聘' and `display`=1")->order("id desc")->find());
        $this->assign('webtitle',"联系我们");
        $this->display();
    }
    public function group(){
        $this->assign("ad_enterprise", M('Ad')->where("`position`='enterprise'")->order("sort desc")->limit(3)->select());
        $this->assign("ad_personal", M('Ad')->where("`position`='personal'")->order("sort desc")->limit(63)->select());
        $this->assign('webtitle',"集团业务");
        $this->display();
    }
    public function medical(){
        $this->assign("jjyljy", M('page')->where("`page_name`='紧急医疗救援' and `display`=1")->order("id desc")->find());
        $this->assign('webtitle',"集团业务");
        $this->display();
    }
    public function intserver(){
        $this->assign("zhylfw", M('page')->where("`page_name`='综合医疗服务' and `display`=1")->order("id desc")->find());
        $this->assign('webtitle',"集团业务");
        $this->display();
    }

}