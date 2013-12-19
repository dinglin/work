<?php
// read/write
$config['master'] = array (
'dsn'=>'mysql:host=10.20.3.80;dbname=anjuke_db',
'username' => 'anjuke_triger',
'password' => 'anjuke_triger',

'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8')
);

// readonly
$config['slave'] = array (
'dsn'=>'mysql:host=10.20.3.80;dbname=anjuke_db',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',

'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8')
);
//$config['slave'] = $config['master'];

//readonly for action feed
$config['slave_action_feed'] = array(
'dsn'=>'mysql:host=10.20.3.80;dbname=action_feed',
'username'=>'readonly_v2',
'password'=>'aNjuKe9dx1Pdw',

'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

'default_fetch_mode' => $default_fetch_mode

);

// forum
$config['forum_master'] = array(
'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=forum_db',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',

'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8')
);

$config['forum_slave'] = array(
'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=forum_db',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',

'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8')
);

// log, action_db
$config['log'] = array(
'dsn'=>'mysql:host=10.20.3.80;dbname=action_db',
'username' => 'anjuke_triger',
'password' => 'anjuke_triger',

'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

'default_fetch_mode' => $default_fetch_mode
);

// stats
$config['stats'] = array (
'dsn'=>'mysql:host=10.20.3.80;dbname=stats_db',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',
'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8')
);


$config['stats_master'] = $config['stats'];
$config['stats_slave'] = $config['stats'];

$config['action_master'] = $config['log'];
$config['action_slave'] = $config['log'];
$config['default'] = &$config['master'];
//user
$config['user_master'] = array(
'dsn'=>'mysql:host=10.20.3.80;dbname=user_db',
'username' => 'anjuke_triger',
'password' => 'anjuke_triger',
'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode' => $default_fetch_mode
);
$config['user_slave'] = array(
'dsn'=>'mysql:host=10.20.3.80;dbname=user_db',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',
'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode' => $default_fetch_mode
);

 //acenter
 $config['acenter_master'] = array(
 'dsn'=>'mysql:host=10.20.3.80;dbname=user_db',
 'username' => 'anjuke_triger',
 'password' => 'anjuke_triger',
 'init_attributes' => array(),
 'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
 'default_fetch_mode' => $default_fetch_mode
 );
 $config['acenter_slave'] = array(
 'dsn'=>'mysql:host=10.20.3.80;dbname=user_db',
 'username' => 'readonly_v2',
 'password' => 'aNjuKe9dx1Pdw',
 'init_attributes' => array(),
 'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
 'default_fetch_mode' => $default_fetch_mode
 );
$config['imagedb'] = array(
'dsn'=>'mysql:host=10.20.3.80;dbname=image_db',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',
'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode' => $default_fetch_mode
);
$config['image_ext_master'] = array(
'dsn'=>'mysql:host=10.20.3.80;dbname=image_ext_db',
'username' => 'anjuke_triger',
'password' => 'anjuke_triger',
'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode' => $default_fetch_mode
);

$config['image_ext_slave'] = array(
'dsn'=>'mysql:host=10.20.3.80;dbname=image_ext_db',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',
'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode' => $default_fetch_mode
);
$config['image_slave'] = array(
'dsn'=>'mysql:host=10.20.3.80;dbname=image_db',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',
'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode' => $default_fetch_mode
);
$config['stats_db'] = array(
'dsn'=>'mysql:host=10.20.3.80;dbname=ajk_dw_stats',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',
'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode' => $default_fetch_mode
);
// dw_stats
$config['dw_stats'] = array (
'dsn'=>'mysql:host=10.20.3.80;dbname=ajk_dw_stats',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',

'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

'default_fetch_mode' => $default_fetch_mode
);
$config['imagedb_master'] = array (
'dsn'=>'mysql:host=10.20.3.80;dbname=image_db',
'username' => 'anjuke_triger',
'password' => 'anjuke_triger',

'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

'default_fetch_mode' => $default_fetch_mode
);


// split
$config['prop_beijing_master']=array(
'dsn'=>'mysql:host=10.20.3.80;dbname=propertys_db',
'username'=>'anjuke_triger',
'password'=>'anjuke_triger',
'init_attributes'=>array(),
'init_statements'=>array(
'SET CHARACTER SET utf8',
'SET NAMES utf8'
),
'default_fetch_mode'=>$default_fetch_mode
);

$config['prop_beijing_slave']=array(
'dsn'=>'mysql:host=10.20.3.80;dbname=propertys_db',
'username'=>'readonly_v2',
'password'=>'aNjuKe9dx1Pdw',
'init_attributes'=>array(),
'init_statements'=>array(
'SET CHARACTER SET utf8',
'SET NAMES utf8'
),
'default_fetch_mode'=>$default_fetch_mode
);

$config['prop_other_master']=array(
'dsn'=>'mysql:host=10.20.3.80;dbname=propertys_other_db',
'username'=>'anjuke_triger',
'password'=>'anjuke_triger',
'init_attributes'=>array(),
'init_statements'=>array(
'SET CHARACTER SET utf8',
'SET NAMES utf8'
),
'default_fetch_mode'=>$default_fetch_mode
);

$config['prop_other_slave']=array(
'dsn'=>'mysql:host=10.20.3.80;dbname=propertys_other_db',
'username'=>'readonly_v2',
'password'=>'aNjuKe9dx1Pdw',
'init_attributes'=>array(),
'init_statements'=>array(
'SET CHARACTER SET utf8',
'SET NAMES utf8'
),
'default_fetch_mode'=>$default_fetch_mode
);

$config['prop_shanghai_master']=array(
'dsn'=>'mysql:host=10.20.3.80;dbname=propertys_sh_db',
'username'=>'anjuke_triger',
'password'=>'anjuke_triger',
'init_attributes'=>array(),
'init_statements'=>array(
'SET CHARACTER SET utf8',
'SET NAMES utf8'
),
'default_fetch_mode'=>$default_fetch_mode
);

$config['prop_shanghai_slave']=array(
'dsn'=>'mysql:host=10.20.3.80;dbname=propertys_sh_db',
'username'=>'readonly_v2',
'password'=>'aNjuKe9dx1Pdw',
'init_attributes'=>array(),
'init_statements'=>array(
'SET CHARACTER SET utf8',
'SET NAMES utf8'
),
'default_fetch_mode'=>$default_fetch_mode
);

$config['bbs_slave'] = array(
'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=bbs_db',
'username' => 'readonly_v2',
'password' => 'aNjuKe9dx1Pdw',
'init_attributes' => array(),
'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode' => $default_fetch_mode
);

$config['prop_other_04_master']=array(
'dsn'=>'mysql:host=10.20.3.80;dbname=propertys_db_04',
'username'=>'anjuke_triger',
'password'=>'anjuke_triger',
'init_attributes'=>array(),
'init_statements'=>array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode'=>$default_fetch_mode
);


$config['prop_other_04_slave']=array(
'dsn'=>'mysql:host=10.20.3.80;dbname=propertys_db_04',
'username'=>'readonly_v2',
'password'=>'aNjuKe9dx1Pdw',
'init_attributes'=>array(),
'init_statements'=>array('SET CHARACTER SET utf8','SET NAMES utf8'),
'default_fetch_mode'=>$default_fetch_mode
);
$config['ark_master'] = array (
    'dsn'=>'mysql:host=10.20.3.80;dbname=ark_db',
        'username'=>'anjuke_triger',
	'password'=>'anjuke_triger',
	'init_attributes'=>array(),
	'init_statements'=>array(
	'SET CHARACTER SET utf8',
	'SET NAMES utf8'),
	'default_fetch_mode'=>$default_fetch_mode
);

$config['ark_slave']=array(
	'dsn'=>'mysql:host=10.20.3.80;dbname=ark_db',
	'username'=>'readonly_v2',
	'password'=>'aNjuKe9dx1Pdw',
	'init_attributes'=>array(),
	'init_statements'=>array(
	'SET CHARACTER SET utf8',																	'SET NAMES utf8'

	),
	'default_fetch_mode'=>$default_fetch_mode
);

// slave  myisam引擎转innodb 测试
$config['innodb_slave']=array(
	'dsn'=>'mysql:host=10.20.3.80;dbname=anjuke_db',
        'username'=>'readonly_v2',
	'password'=>'aNjuKe9dx1Pdw',
	'init_attributes'=>array(),
	'init_statements'=>array(
	'SET CHARACTER SET utf8',
	'SET NAMES utf8'
				        ),
	'default_fetch_mode'=>$default_fetch_mode
);
//serv_slave 配置
$config['serv_slave'] = array(
	'dsn'=>'mysql:host=10.20.3.80;dbname=serv_db',
	'username'=>'readonly_v2',
	'password'=>'aNjuKe9dx1Pdw',
	'init_attributes'=>array(),
	'init_statements'=>array(
		'SET CHARACTER SET utf8',
		'SET NAMES utf8'
	),
	'default_fetch_mode'=>$default_fetch_mode
);
$config['serv_master'] = array(
    'dsn'=>'mysql:host=10.20.3.80;dbname=serv_db',
    'username'=>'anjuke_triger',
    'password'=>'anjuke_triger',
    'init_attributes'=>array(),
    'init_statements'=>array(
        'SET CHARACTER SET utf8',
        'SET NAMES utf8'
    ),
    'default_fetch_mode'=>$default_fetch_mode
);
$config['ppc_slave'] = array(
	 'dsn'=>'mysql:host=10.20.3.80;dbname=ppc_db',
	 'username'=>'readonly_v2',
         'password'=>'aNjuKe9dx1Pdw',
	 'init_attributes'=>array(),
	 'init_statements'=>array(
                'SET CHARACTER SET utf8',
      		'SET NAMES utf8'
		 ),
	'default_fetch_mode'=>$default_fetch_mode
);
$config['ppc_master'] = array(
	'dsn'=>'mysql:host=10.20.3.80;dbname=ppc_db',
	'username'=>'anjuke_triger',
        'password'=>'anjuke_triger',
	'init_attributes'=>array(),
	'init_statements'=>array(
	        'SET CHARACTER SET utf8',
	        'SET NAMES utf8'
          	),
        'default_fetch_mode'=>$default_fetch_mode
);
$config['anjuke_pay_master'] = array(
	'dsn'=>'mysql:host=10.20.3.80;dbname=ajk_pay_db',
	'username'=>'anjuke_triger',
        'password'=>'anjuke_triger',
	'init_attributes'=>array(),
	'init_statements'=>array(
	        'SET CHARACTER SET utf8',
	        'SET NAMES utf8'
          	),
        'default_fetch_mode'=>$default_fetch_mode
);
$config['anjuke_pay_slave'] = array(
	 'dsn'=>'mysql:host=10.20.3.80;dbname=ajk_pay_db',
	 'username'=>'readonly_v2',
         'password'=>'aNjuKe9dx1Pdw',
	 'init_attributes'=>array(),
	 'init_statements'=>array(
                'SET CHARACTER SET utf8',
      		'SET NAMES utf8'
		 ),
	'default_fetch_mode'=>$default_fetch_mode
);
$config['crm_slave'] = array(
    'dsn'=>'mysql:host=10.20.3.80;dbname=crm_db',
    'username'=>'readonly_v2',
    'password'=>'aNjuKe9dx1Pdw',
    'init_attributes'=>array(),
    'init_statements'=>array(
        'SET CHARACTER SET utf8',
        'SET NAMES utf8'
    ),
    'default_fetch_mode'=>$default_fetch_mode
);
$config['crm_master'] = array(
    'dsn'=>'mysql:host=10.20.3.80;dbname=crm_db',
    'username'=>'anjuke_triger',
    'password'=>'anjuke_triger',
    'init_attributes'=>array(),
    'init_statements'=>array(
        'SET CHARACTER SET utf8',
        'SET NAMES utf8'
    ),
    'default_fetch_mode'=>$default_fetch_mode
);

$config['ajk_ds_tmp_slave'] = array(
    'dsn'=>'mysql:host=10.20.3.80;dbname=ajk_ds_tmp',
    'username'=>'anjuke_triger',
    'password'=>'anjuke_triger',
    'init_attributes'=>array(),
    'init_statements'=>array(
        'SET CHARACTER SET utf8',
        'SET NAMES utf8'
    ),
    'default_fetch_mode'=>$default_fetch_mode
);
// queue_db read/write
$config['queue_master']=array(
        'dsn'=>'mysql:host=10.20.3.80;dbname=queue_db',
        'username'=>'readonly_v2',
        'password'=>'aNjuKe9dx1Pdw',
        'init_attributes'=>array(),
        'init_statements'=>array(
                'SET CHARACTER SET utf8',
                'SET NAMES utf8'
        ),
        'default_fetch_mode'=>$default_fetch_mode
);

// queue_db readonly
$config['queue_slave']=array(
        'dsn'=>'mysql:host=10.20.3.80;dbname=queue_db',
        'username'=>'anjuke_triger',
        'password'=>'anjuke_triger',
        'init_attributes'=>array(),
        'init_statements'=>array(
                'SET CHARACTER SET utf8',
                'SET NAMES utf8'
        ),
        'default_fetch_mode'=>$default_fetch_mode
);

