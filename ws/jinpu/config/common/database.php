<?php
$default_fetch_mode = PDO::FETCH_ASSOC;

$config['jinpu_db_master']['dsn'] = 'mysql:host=10.20.3.80;port=3307;dbname=jinpu_db';
$config['jinpu_db_master']['username'] = 'anjuke_triger';
$config['jinpu_db_master']['password'] = 'anjuke_triger';
$config['jinpu_db_master']['init_attributes'] = array();
$config['jinpu_db_master']['init_statements'] = array();
$config['jinpu_db_master']['default_fetch_mode'] = $default_fetch_mode;
$config['jinpu_db_master']['extends_object'] = 'DB_DataObject';

$config['jinpu_db_slave']['dsn'] = 'mysql:host=10.20.3.80;port=3307;dbname=jinpu_db';
$config['jinpu_db_slave']['username'] = 'anjuke_triger';
$config['jinpu_db_slave']['password'] = 'anjuke_triger';
$config['jinpu_db_slave']['init_attributes'] = array();
$config['jinpu_db_slave']['init_statements'] = array();
$config['jinpu_db_slave']['default_fetch_mode'] = $default_fetch_mode;
$config['jinpu_db_slave']['extends_object'] = 'DB_DataObject';

//jinpu log
$config['jinpu_log_master']['dsn'] = 'mysql:host=10.20.3.80;port=3307;dbname=jinpu_log';
$config['jinpu_log_master']['username'] = 'anjuke_triger';
$config['jinpu_log_master']['password'] = 'anjuke_triger';
$config['jinpu_log_master']['init_attributes'] = array();
$config['jinpu_log_master']['init_statements'] = array();
$config['jinpu_log_master']['default_fetch_mode'] = $default_fetch_mode;
$config['jinpu_log_master']['extends_object'] = 'DB_LogObject';

$config['jinpu_log_slave']['dsn'] = 'mysql:host=10.20.3.80;port=3307;dbname=jinpu_log';
$config['jinpu_log_slave']['username'] = 'anjuke_triger';
$config['jinpu_log_slave']['password'] = 'anjuke_triger';
$config['jinpu_log_slave']['init_attributes'] = array();
$config['jinpu_log_slave']['init_statements'] = array();
$config['jinpu_log_slave']['default_fetch_mode'] = $default_fetch_mode;
$config['jinpu_log_slave']['extends_object'] = 'DB_LogObject';

$config['jinpu_stats_slave']['dsn'] = 'mysql:host=10.20.3.80;port=3306;dbname=jp_dw_stats';
$config['jinpu_stats_slave']['username'] = 'anjuke_triger';
$config['jinpu_stats_slave']['password'] = 'anjuke_triger';
$config['jinpu_stats_slave']['init_attributes'] = array();
$config['jinpu_stats_slave']['init_statements'] = array();
$config['jinpu_stats_slave']['default_fetch_mode'] = $default_fetch_mode;
$config['jinpu_stats_slave']['extends_object'] = 'DB_StatsObject';

$config['jinpu_report']['dsn'] = 'mysql:host=10.20.3.80;port=3307;dbname=jinpu_report';
$config['jinpu_report']['username'] = 'anjuke_triger';
$config['jinpu_report']['password'] = 'anjuke_triger';
$config['jinpu_report']['init_attributes'] = array();
$config['jinpu_report']['init_statements'] = array();
$config['jinpu_report']['default_fetch_mode'] = $default_fetch_mode;
$config['jinpu_report']['extends_object'] = 'DB_ReportDataObject';

$config['jinpu_analysis_slave']['dsn'] = 'mysql:host=10.20.3.80;port=3307;dbname=jinpu_db';
$config['jinpu_analysis_slave']['username'] = 'anjuke_triger';
$config['jinpu_analysis_slave']['password'] = 'anjuke_triger';
$config['jinpu_analysis_slave']['init_attributes'] = array();
$config['jinpu_analysis_slave']['init_statements'] = array();
$config['jinpu_analysis_slave']['default_fetch_mode'] = $default_fetch_mode;
$config['jinpu_analysis_slave']['extends_object'] = 'DB_JPDsDataObject';

// read/write
$config['anjuke_db_master']=array(
        'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=anjuke_db',
        'username'=>'anjuke_triger',
        'password'=>'anjuke_triger',
        'init_attributes'=>array(),
        'init_statements'=>array(
                'SET CHARACTER SET utf8',
                'SET NAMES utf8'
        ),
        'default_fetch_mode'=>$default_fetch_mode,
        'extends_object' => 'DB_AnjukeObject'
);

// readonly
$config['anjuke_db_slave']=array(
        'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=anjuke_db',
        'username'=>'anjuke_triger',
        'password'=>'anjuke_triger',
        'init_attributes'=>array(),
        'init_statements'=>array(
                'SET CHARACTER SET utf8',
                'SET NAMES utf8'
        ),
        'default_fetch_mode'=>$default_fetch_mode,
        'extends_object' => 'DB_AnjukeObject'
);


$config['anjuke_stats_slave']=array(
        'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=ajk_dw_stats',
        'username'=>'anjuke_triger',
        'password'=>'anjuke_triger',
        'init_attributes'=>array(),
        'init_statements'=>array(
                'SET CHARACTER SET utf8',
                'SET NAMES utf8'
        ),
        'default_fetch_mode'=>$default_fetch_mode,
        'extends_object' => 'DB_AnjukeStatsObject'
);


// read/write
$config['action_db_master']=array(
        'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=action_db',
        'username'=>'anjuke_triger',
        'password'=>'anjuke_triger',
        'init_attributes'=>array(),
        'init_statements'=>array(
                'SET CHARACTER SET utf8',
                'SET NAMES utf8'
        ),
        'default_fetch_mode'=>$default_fetch_mode,
        'extends_object' => 'DB_ActionObject'
);

// readonly
$config['action_db_slave']=array(
        'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=action_db',
        'username'=>'anjuke_triger',
        'password'=>'anjuke_triger',
        'init_attributes'=>array(),
        'init_statements'=>array(
                'SET CHARACTER SET utf8',
                'SET NAMES utf8'
        ),
        'default_fetch_mode'=>$default_fetch_mode,
        'extends_object' => 'DB_ActionObject'
);

// readonly bbs_db
$config['bbs_db_slave']=array(
        'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=bbs_db',
    	'username' => 'anjuke_triger',
   	 	'password' => 'anjuke_triger',

    	'init_attributes' => array(),
    	'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    	'default_fetch_mode' => $default_fetch_mode,
		'extends_object' => 'DB_BBSDataObject'
);

// write bbs_db
$config['bbs_db_master']=array(
        'dsn'=>'mysql:host=10.20.3.80;port=3306;dbname=bbs_db',
    	'username' => 'anjuke_triger',
    	'password' => 'anjuke_triger',

    	'init_attributes' => array(),
    	'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    	'default_fetch_mode' => $default_fetch_mode,
		'extends_object' => 'DB_BBSDataObject'
);


// read/write
$config['queue_db_master'] = array (
    'dsn'				 => 'mysql:host=10.20.3.80;port=3306;dbname=queue_db',
    'username' 			 => 'anjuke_triger',
    'password' 			 => 'anjuke_triger',
    'init_attributes' 	 => array(),
    'init_statements' 	 => array('SET CHARACTER SET utf8','SET NAMES utf8'),
    'default_fetch_mode' => $default_fetch_mode
);

