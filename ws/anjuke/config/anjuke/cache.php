<?php
//房源的cache配置
$config['prop_search_mem_servers'] = array (
    array('host'=>'192.168.1.97', 'port'=>'11211' , 'persistent' => true)
);

$config['redis'] = false;

//redis for guid白名单 master
$config['redis_guid_white_list_master'] = array(
    'host' => '10.10.3.13',
    //'host' => '127.0.0.1',
    'port' => '6379',
    'timeout' => 0,
    'persistent' => TRUE,
    'auth' => 'ajkRedisMasterAn2jU3ke'
);
//redis for guid白名单 slaver
$config['redis_guid_white_list_slaver'] = array(
    'host' => '10.10.3.14',
    //'host' => '127.0.0.1',
    'port' => '6379',
    'timeout' => 0,
    'persistent' => TRUE,
    'auth' => 'ajkRedisSlaverAn2jU3ke'
);

//mongodb for aalog master
$config['mongodb_aalog_master'] = array(
    'dbname' => 'anjuke_aalog_db',
    //'host' => '10.10.3.48',
    'host' => '127.0.0.1',
    'port' => '27017',
    'timeout' => 0,
    'persistent' => TRUE,
    'auth' => ''
);
