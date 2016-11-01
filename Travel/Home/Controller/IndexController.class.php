<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       /**
       *    查询tp_info关于我们表
       *	 $info
       */
    	$info = M('info')->find();
        /**
        *   查询info_content内容表
        *   $info_content 
        */
        $info_content = M('info_content')->where('fid = '.$info['id'])->select();
        /*
        *   查询event表  事件
        *   $enent
        */  
        $event = M('event')->select();
        /*
        *      图册表 $gallery
        *     
        */
        $gallery = M('gallery')->find();

    	$this->assign('info',$info);     //关于我们
      $this->assign('info_content',$info_content);   //关于我们 -》内容
      $this->assign('event',$event);   //事件  
      $this->assign('gallery',$gallery);   //图册  



    	$this->display();
    }
    public function _empty()
    {
      // 空操作
      $this->redirect('Index/index');
    }
}