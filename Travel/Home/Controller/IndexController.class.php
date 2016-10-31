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

    	$this->display();
    }
}