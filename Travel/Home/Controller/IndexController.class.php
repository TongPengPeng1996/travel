<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       /**
       *    查询tp_info
       *	关于我们表
       */
    	$info = M('info')->find();
      
        $info_content = M('info_content')->where('fid = '.$info['id'])->select();
      
      // dump($info_content);
    	// dump($info[0]['id']);
      // dump($info);
    	$this->assign('info',$info);
      $this->assign('info_content',$info_content);

      /*
      *   服务
      *   查询tp_service 表
      */
      $service = M('service')->find();
      $service_content = M('service_content')->where('fid = '.$service['id'])->select();
      $this->assign('service',$service);
      $this->assign('service_content',$service_content);
      /*
      *   联系
      *   查询tp_contact表  tp_contact_type
      */
      $contact_type = M('contact_type')->find();
      $contact = M('contact')->where('fid = '.$contact_type['id'])->select();
      // $this->assign('content',$contact);
      $this->assign('contact_type',$contact_type);

    	$this->display();
    }
    public function _empty()
    {
      // 空操作
      $this->redirect('Index/index');
    }

    //提交内容写入
    public function sub()
    {
      $list = I('post.');
      $m = M('contact');
      $m->create();
      $m->add($list);
      $this->redirect('/home/Index/index/');
    }
}