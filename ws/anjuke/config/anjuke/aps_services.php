<?php
// 服务版本
$config['version'] = array(
    'job_monitor' => '0.1.0',
    'hps'=>'0.1.0'
);


$config['mysql'] = array(
    'client' => array('ipc:///tmp/mysql-client.ipc'),
    'server' => 'ipc:///tmp/mysql-server.ipc'
);

$config['pinyin'] = array(
    'client' => array('tcp://10.10.6.219:50000')
);
$config['mss'] = array(
    'client' => array('tcp://10.10.3.46:6000')
);

$config['mss2'] = array(
    'client' => array('tcp://10.10.3.46:5000')
);

$config['aifang_home'] = array(
    'client' => array('tcp://192.168.1.24:9227')
);
/* //user favorite
$config['user_favorite'] = array(
    'client' => array('tcp://192.168.190.139:9227')
    //'client' => array('tcp://192.168.1.24:19227')
    //'client' => array('tcp://10.20.3.82:1850')
); */

$config['aifang_home_type'] = 2;//1为正式，2为测试


$config['trigger'] = 'zmq'; // 开关变量名
$config[$config['trigger']] = class_exists('ZMQContext'); // 默认关闭ZMQ true打开 false关闭