<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_MODULE'     => 'Home', //默认模块
    'URL_MODEL'          => '1', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session

    // 显示页面Trace信息
    'SHOW_PAGE_TRACE' =>true,

    'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'shop', // 数据库名
	'DB_USER'   => 'root', // 用户名
 	  'DB_PWD'    => '123456', // 密码
//	'DB_PWD'    => '',
  	'DB_PORT'   => 3306, // 端口
  	'DB_PREFIX' => 'shop_', // 数据库表前缀
  	'DB_CHARSET'=> 'utf8', // 字符集
  	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
);
