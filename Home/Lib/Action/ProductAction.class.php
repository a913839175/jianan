<?php
/**
 * Created by PhpStorm.
 * User: cony
 * Date: 13-11-7
 * Time: 下午12:01
 */

class ProductAction extends BaseAction {
    /**
     * 导航页
     */
    public function index(){
        $this->assign('webtitle',L('T_PRODUCT'));
        $this->assign("ad_info_we", M('Ad')->where("`position`='indexwe'")->order("sort desc")->limit(1)->select());
        $this->display();
    }
    /**
     * 列表页
     */
    public function index2(){
        $P = M("Product");
        $C = M("Category");
        //$cid=$this->_get('cid');
        $cid=81;
        if($cid){
            $map['p.cid']=$cid;
        }
        $map['p.status']=1;
        $map['p.lang']=LANG_SET;
        $count = $P->table($P->getTableName().' p')
            ->join($C->getTableName().' c on c.cid=p.cid')
            ->field('p.id')
            ->where($map)->count();
        import("ORG.Util.Page"); //载入分页类
        $page = new Page($count,C('LISTNUM.prolist'));
        $page -> setConfig('prev','&lt;');
        $page -> setConfig('next','&gt;');
        $page ->setConfig('theme',"%upPage% %linkPage% %downPage%");
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $list=$P->table($P->getTableName().' p')
            ->join($C->getTableName().' c on c.cid=p.cid')
            ->field('p.id,p.cid,p.image,p.price,p.psize,p.title,p.summary,p.update_time,p.click,c.name as cname')
            ->where($map)->order('id desc')->limit("$page->firstRow, $page->listRows")->select();
        $this->assign("list", $list);
        $this->assign("ad_info", $this->getAd());
        $this->assign('webtitle',L('T_PRODUCT'));
        $this->display();
    }    
    /**
     * 详情页
     */
    public function read(){
        $id=$this->_get('id');
        $m_product=M('product');
        if(!$id){$this->redirect('product/index2');}
        $map['id']=$id;
        if($info=$m_product->where($map)->find()){
            if($info['status']==0){
                $this->redirect('product/index2');
            }
            $C = M("Category");
            $map2['cid']=$info['cid'];
            $info['cname']=$C->where($map2)->getField('name');
            $this->assign('info',$info);
            $m_product->where($map)->setInc('click',1);
            $this->assign('webtitle',$info['title'].'-'.L('T_PRODUCT'));
            $this->assign('webtitle2',L('T_PRODUCT'));
            $this->display();
        }else{
            $this->redirect('product/index2');
        }
    }
     /**
     * 详情页
     */
    public function read2(){
        $id=$this->_get('id');
        $m_product=M('product');
        if(!$id){$this->redirect('index/group');}
        $map['id']=$id;
        if($info=$m_product->where($map)->find()){
            if($info['status']==0){
                $this->redirect('index/group');
            }
            $C = M("Category");
            $map2['cid']=$info['cid'];
            $info['cname']=$C->where($map2)->getField('name');
            $this->assign('info',$info);
            $m_product->where($map)->setInc('click',1);
            $this->assign('webtitle',$info['title'].'-'."集团业务");
            $this->assign('webtitle2',"集团业务");
            $this->display();
        }else{
            $this->redirect('index/group');
        }
    }

} 