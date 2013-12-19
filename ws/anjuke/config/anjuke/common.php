<?php
$config['anjuke_base_domain'] = 'dinglin.dev.anjuke.com';
$config['base_domain'] = "dinglin.dev.anjuke.com";
//好租分词访问地址
$config['scws_url'] = "http://10.10.3.46:8999/seg/pkuseg";
//$config['scws_url'] = "http://10.11.6.28:8999/seg/pkuseg";
//playground
//$config['JavaAPIHost'] = "http://10.11.6.22:8080/";
//online
$config['JavaAPIHost'] = "http://xapp10-049.i.ajkdns.com:8080/";


$config['xinfang_base_domain']          = 'dinglin.dev.xinfang.anjuke.com';
$config['zu_base_domain']           = 'dinglin.zu.dev.anjuke.com';
$config['xzl_base_domain']             = 'dinglin.xzl.dev.anjuke.com';
$config['sp_base_domain']              = 'dinglin.sp.dev.anjuke.com';

$config['pad_web_cookie_service'] = 'http://service.dev.aifang.com/cookie';

//伪装IPAD设备
if(!defined('PAD_SWITCH')){
    define('PAD_SWITCH', 1);
}
//pad web 灰度发布比例
$config['ipad_point'] = 100;
//$config['map_point'] = 100;
