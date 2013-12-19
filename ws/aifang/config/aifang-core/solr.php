<?php
$config['solr_option']['modbbs']= array(
    'hostname' => '192.168.1.73',
    'port'     => '8983',
	'path'	   => '/bbsthread'
);
$config['solr_option']['slave_bbs_tags']= array(
    'hostname' => '192.168.1.73',
    'port'     => '8983',
	'path'	   => 'bbs-tags'
);
$config['solr_option']['master_bbs_tags']= array(
    'hostname' => '192.168.1.73',
    'port'     => '8983',
	'path'	   => 'bbs-tags'
);

$config['use_solr_threads_list']=false;

$config['solr_option']['forum'] = array(
	'hostname' => '192.168.201.47',
	'port'	   => '8983',
	'path'     => '/group-forum'
);

$config['solr_option']['thread'] = array(
	'hostname' => '192.168.201.47',
	'port'	   => '8983',
	'path'     => '/group-thread'
);

// for SDK using
$config['default']['host'] = '192.168.1.73';
$config['default']['port'] = 8983;
$config['default']['path'] = '/group-forum';

