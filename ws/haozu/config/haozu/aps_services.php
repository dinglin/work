<?php
$config['pinyin'] = array(
    'client' => array('tcp://10.10.6.219:50000')
);
$config['bayes'] = array(
    'client' => array('tcp://10.10.3.46:51000')
);

$config['mysql'] = array(
    'client' => array('tcp://10.10.3.7:52100'),
    'server' => 'tcp://*:52101'
);
$config['solr']  = array(
    'client' => array('ipc:///tmp/solr-client.ipc'),
    'server' => 'ipc:///tmp/solr-server.ipc'
);
$config['redis'] = array(
    'client' => array('ipc:///tmp/redis-client.ipc'),
    'server' => 'ipc:///tmp/redis-server.ipc'
);
$config['torrent'] = array(
    'client' => array('tcp://app10-003.i.ajkdns.com:56564')
);

$config['device'] = array(
    'mysql' => array(
        'frontend' => 'tcp://*:52100',
        'backend'  => 'tcp://*:52101'
    ),
    'solr'  => array(
        'frontend' => 'ipc:///tmp/solr-client.ipc',
        'backend'  => 'ipc:///tmp/solr-server.ipc'
    ),
    'redis' => array(
        'frontend' => 'ipc:///tmp/redis-client.ipc',
        'backend'  => 'ipc:///tmp/redis-server.ipc'
    )
);
$config['mss'] = array(
    'client' => array('tcp://10.10.3.46:6000')
);

$config['aifang_mss_switch'] = false;

$config['aifang_mss'] = array(
    'client' => array('tcp://10.10.3.151:52007')
);

$config['trigger'] = 'zmq'; // 开关变量名
$config[$config['trigger']] = true; // 默认关闭ZMQ
//订阅aps接口
$config['subscribe'] = array(
    'client' => array('tcp://10.10.3.152:1850','tcp://10.10.3.22:1850')
);
?>
