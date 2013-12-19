<?php
$default_fetch_mode = PDO::FETCH_ASSOC;

/* // readonly
$config['nhslave'] = array (
    'dsn'=>'mysql:host=192.168.1.57:30012;dbname=newhome_db',

    'username' => 'readonly',
    'password' => 'aN2jU3ke',

    'init_attributes' => array(),
    'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

    'default_fetch_mode' => $default_fetch_mode
);
// readonly
$config['afuser_slave'] = array (
        'dsn'=>'mysql:host=192.168.1.57:30012;dbname=aifanguser_db',

        'username' => 'readonly',
        'password' => 'aN2jU3ke',

        'init_attributes' => array(),
        'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

        'default_fetch_mode' => $default_fetch_mode
); */
$config['nhslave'] = array (
        'dsn'=>'mysql:host=192.168.1.24;dbname=newhome_db',

        'username' => 'aifang',
        'password' => '123456',

        'init_attributes' => array(),
        'init_statements' => array('SET CHARACTER SET utf8','SET NAMES utf8'),

        'default_fetch_mode' => $default_fetch_mode
);
/*
// aifangcrm master
$config['ifcrm_master'] = array(
        'dsn' => 'mysql:host=dev.aifang.com;dbname=aifangcrm_t',
        'username' => 'aifang',
        'password' => '123456',

        'init_attributes' => array(),
        'init_statements' => array(
                'SET CHARACTER SET utf8',
                'SET NAMES utf8'
        ),

        'default_fetch_mode' => $default_fetch_mode
);
// aifangcrm slave
$config['ifcrm_slave'] = array(
        'dsn' => 'mysql:host=dev.aifang.com;dbname=aifangcrm_t',
        'username' => 'readonly',
        'password' => '123456',

        'init_attributes' => array(),
        'init_statements' => array(
                'SET CHARACTER SET utf8',
                'SET NAMES utf8'
        ),

        'default_fetch_mode' => $default_fetch_mode
);*/