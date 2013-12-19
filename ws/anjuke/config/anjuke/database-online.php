<?php
$default_fetch_mode = PDO::FETCH_ASSOC;

// read/write

$config['master'] = array (
		'dsn'=>'mysql:host=10.20.8.35;dbname=anjuke_db',
		'username' => 'readonly_v2',
		'password' => 'aNjuKe9dx1Pdw',
		'init_attributes' => array(),
		'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
		'default_fetch_mode' => $default_fetch_mode
);


//readonly_v2 for action feed
$config['slave_action_feed'] = array(
    'dsn'=>'mysql:host=10.20.8.20;dbname=action_feed',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',
    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
    'default_fetch_mode' => $default_fetch_mode
);


// stats
$config['stats'] = array (
    'dsn'=>'mysql:host=10.20.8.35;dbname=stats_db',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);
$config['stats_master'] = array (
    'dsn'=>'mysql:host=10.20.8.35;dbname=stats_db',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);

// forum
$config['forum_master'] = array(
    'dsn'=>'mysql:host=192.168.1.103;dbname=forum_db',
    'username' => 'caixh',
    'password' => 'caixh123',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);

$config['forum_slave'] = array(
    'dsn'=>'mysql:host=192.168.1.103;dbname=forum_db',
    'username' => 'caixh',
    'password' => 'caixh123',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);

// action log
$config['action_master'] = array(
    'dsn'=>'mysql:host=192.168.1.103;dbname=action_db',
    'username' => 'caixh',
    'password' => 'caixh123',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);

$config['action_slave'] = array(
    'dsn'=>'mysql:host=10.20.8.20;dbname=action_db',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);
//crm
$config['crm_master'] = array(
    'dsn'=>'mysql:host=192.168.1.103;dbname=crm_db',
    'username' => 'caixh',
    'password' => 'caixh123',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);

$config['refresh_master'] = array(
    'dsn'=>'mysql:host=192.168.1.103;dbname=refresh_db',
    'username' => 'caixh',
    'password' => 'caixh123',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);

$config['manual_refresh_master'] = array(
    'dsn'=>'mysql:host=192.168.1.103;dbname=prop_refresh',
    'username' => 'job_refresh',
    'password' => '123456',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);
$config['nhmaster'] = array (
    'dsn'=>'mysql:host=192.168.1.103;dbname=newhome_db',
    'username' => 'job_newhome',
    'password' => '123456',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);
$config['nhslave'] = array (
    'dsn'=>'mysql:host=192.168.1.103;dbname=newhome_db',
    'username' => 'job_newhome',
    'password' => '123456',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);
$config['log'] = &$config['action_master'];

// default
$config['default'] = &$config['master'];

$config['mail'] = array (
    /*'dsn'=>'mysql:host=192.168.1.103;dbname=queue_db',
    'username' => 'caixh',
    'password' => 'caixh123',*/
    'dsn'=>'mysql:host=10.10.8.23;dbname=queue_db',
    'username' => 'que_rx',
    'password' => '3ITSVOBL1HRgo',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);


//online slave
$config['slave'] = array (
    'dsn'=>'mysql:host=10.20.8.35;dbname=anjuke_db',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);

$config['prop_other_slave']=array(
    'dsn'=>'mysql:host=10.20.8.28;dbname=propertys_other_db',
    'username'=>'readonly_v2',
    'password'=>'aNjuKe9dx1Pdw',
    'init_attributes'=>array(),
    'init_statements'=>array(
        'SET CHARACTER SET utf8',
        'SET NAMES utf8'
    ),
    'default_fetch_mode'=>$default_fetch_mode
);

$config['prop_beijing_slave']=array(
    'dsn'=>'mysql:host=10.20.8.20;dbname=propertys_db',
    'username'=>'readonly_v2',
    'password'=>'aNjuKe9dx1Pdw',
    'init_attributes'=>array(),
    'init_statements'=>array(
        'SET CHARACTER SET utf8',
        'SET NAMES utf8'
    ),
    'default_fetch_mode'=>$default_fetch_mode
);
$config['prop_shanghai_slave']=array(
    'dsn'=>'mysql:host=10.20.8.35;dbname=propertys_sh_db',
    'username'=>'readonly_v2',
    'password'=>'aNjuKe9dx1Pdw',
    'init_attributes'=>array(),
    'init_statements'=>array(
        'SET CHARACTER SET utf8',
        'SET NAMES utf8'
    ),
    'default_fetch_mode'=>$default_fetch_mode
);
$config['ark_slave'] = array(
    'dsn'=>'mysql:host=10.20.8.29;dbname=ark_db',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);

$config['ppc_slave'] = array(
    'dsn'=>'mysql:host=10.10.8.59;dbname=ppc_db',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);



$config['dw_stats'] = array (
    'dsn'=>'mysql:host=10.20.8.32;dbname=ajk_dw_stats;port=3306',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);
$config['imagedb'] = array(
    'dsn'=>'mysql:host=10.20.8.23;dbname=image_db',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);


$config['jinpu_db_slave'] = array(
    'dsn'=>'mysql:host=10.10.8.12;dbname=jinpu_db;port=3308',
    'username' => 'readonly_v2',
    'password' => 'aNjuKe9dx1Pdw',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);

