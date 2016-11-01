<?php
namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller{ 
	public function index(){  
		//当访问不存在的控制器时，会自动执行空控制器
		$this->redirect('Index/index');
	}   
}