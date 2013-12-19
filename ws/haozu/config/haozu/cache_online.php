<?php
/**********************************
*create from app-config-cloud
*2011-08-15 13:11:41
**********************************/
/*********template********/
$config['test']='test';
/*****template config*****/
/******configs*******/
$config['servers'] = array (
        array('host'=>'10.10.3.51', 'port'=>'11212' , 'persistent' => true),
	array('host'=>'10.10.3.51', 'port'=>'11311' , 'persistent' => true),
	array('host'=>'10.10.3.31', 'port'=>'11311' , 'persistent' => true)
);

$config['orm_servers'] = array (
	array('host'=>'10.10.3.51', 'port'=>'11213' , 'persistent' => true),
	array('host'=>'10.10.3.54', 'port'=>'11213' , 'persistent' => true)
);

$config['redis'] = array(
	'host'       => '10.10.3.4',
	'port'       => '6379',
	'timeout'    => 0,
	'persistent' => TRUE
);

$config['prop_redis'] = array(
        'host'       => '10.10.6.31',
        'port'       => '6380',
        'timeout'    => 0.5,
        'persistent' => TRUE
);

$config['prop_recommend_redis'] = array(
        'host'       => '10.10.6.31',
        'port'       => '6390',
        'timeout'    => 0.5,
        'persistent' => TRUE
);

