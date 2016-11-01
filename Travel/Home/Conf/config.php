<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	
	'DB_HOST'   => 'localhost', // 服务器地址
	
	'DB_NAME'   => 'tp', // 数据库名
	
	'DB_USER'   => 'root',// 用户名
	 
	 'DB_PWD'    => 'tong', //密码
	  
	  'DB_PORT'   => '3306', // 端口
	  
	  'DB_PREFIX' => 'tp_', // 数据库表前缀 
	  
	  'DB_CHARSET'=> 'utf8', // 字符集
	  
	  // 开启页面trace   必须用模板    不在页面显示 f12
	  'SHOW_PAGE_TRACE' =>true, 
	  'TMPL_FILE_DEPR'=>'_',    //常用

	  'DEFAULT_THEME'    =>    'one',   //更换主题
);