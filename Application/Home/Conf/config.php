<?php
return array(
	//'配置项'=>'配置值'
    'SHOW_PAGE_TRACE' =>false,
    'URL_HTML_SUFFIX'=>'',
    //'URL_CASE_INSENSITIVE'  =>  true,       //url中controller名大小写不敏感
    //'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),  //可访问模块
    'DEFAULT_MODULE'        =>  'Home',    //默认模块
    'DEFAULT_CONTROLLER'    =>  'Public',
    'DEFAULT_ACTION'    =>  'index',
    'URL_MODEL'             =>  '2',       //URL模式
    'SESSION_AUTO_START'    =>  true,      //是否开启session
    'USER_AUTH_KEY'         =>  'id',
    'DEFAULT_FILTER'        =>  'strip_tags,stripslashes',
    'DEFAULT_CHARSET'       =>  'utf-8',    // 默认输出编码
    'LANG_SWITCH_ON'        =>   true,    //开启语言包功能
    'LANG_AUTO_DETECT'      =>     true, // 自动侦测语言
    'DEFAULT_LANG'          =>    'zh-cn', // 默认语言
    'LANG_LIST'             =>    'en-us,zh-cn', //必须写可允许的语言列表
    'VAR_LANGUAGE'          =>    'l', // 默认语言切换变量

    'LANGUAGE'              =>'cn',//当前是中文版本

    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'wl', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PORT' => 3306, // 端口
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

   /* 'DB_CONFIG1' => array(
        'DB_TYPE'               =>  'mysql',     // 数据库类型
        'DB_HOST'               =>  '127.0.0.1',    // 服务器地址
        'DB_NAME'               =>  'wl',          // 数据库名
        'DB_PARAMS'             =>  array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),
        'DB_USER'               =>  'root',             // 用户名
        'DB_PWD'                =>  '',          // 密码
        //'DB_PREFIX'             =>  '',                    // 数据库表前缀
        'DB_CHARSET'            =>  'utf8',
    ),*/
    //'DB_CONFIG3'            => 'mysql://smmuser:123456@172.16.5.60:3306/smmdb#utf8',

    /* 数据缓存设置 */
    'DATA_CACHE_TIME'       =>  60,      // 数据缓存有效期 0表示永久缓存
    'DATA_CACHE_COMPRESS'   =>  false,   // 数据缓存是否压缩缓存
    'DATA_CACHE_CHECK'      =>  false,   // 数据缓存是否校验缓存
    //'DATA_CACHE_PREFIX'     =>  'hyk_',     // 缓存前缀
    'DATA_CACHE_TYPE'       =>  'Memcache',  // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
    'MEMCACHE_HOST'         =>  'localhost',
    'MEMCACHE_PORT'         =>  '11211',

    /* cookie设置 */
    'COOKIE_EXPIRE'         =>  86400 * 20,     // Cookie有效期
    'COOKIE_DOMAIN'         =>  '',//'.devsmm.cn',      // Cookie有效域名   .smm.cn
    'COOKIE_PATH'           =>  '/',           // Cookie路径
    'COOKIE_PREFIX'         =>  '',      // Cookie前缀 避免冲突
    'APP_URL'				=>	'http://localhost/',
);
