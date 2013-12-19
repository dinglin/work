<?php
$config['base_domain'] = "dinglin.dev.aifang.com";
$config['aifang_base_domain'] = $config['base_domain'];
$config['aifang_web_base_domain'] = $config['base_domain'];
$config['aifang_bbs_base_domain'] = "bbs.{$config['base_domain']}";
$config['aifang_sale_domain'] = "vip.{$config['base_domain']}";

$config['cookie_domain'] = $config['base_domain'];
$config['cookie_path'] = '/';

$config['anjuke_base_domain'] = 'anjuke.com';
$config['haozu_base_domain'] = 'haozu.com';
$config['display_error'] = true;


$config['debug_file'] = "/tmp/sql_error.txt";
$config['debug_enable'] = true;

//debug
$config['debug_allow_patterns'] = array('/^192\.168\.181\./', '/^192\.168\.201\.133$/', '/^192\.168\.2\./', '/^192\.168\.10\./', '/^10\.0\.0\./', '/^222\.66\.14\.14$/');

// aifang sms send config
$config['sms'] = array(
    'username' => 'anjukeaifang',
    'password' => 'aifang2010',
    'api_key' => 'G9DUASP489MT',
    'api_url' => 'http://http.asp.sh.cn/MT.do'
);
//$config['login_service_url'] = "http://java.dev.anjuke.com:8080/RoleService/roleService/login?userName=%s&userPass=%s";
//$config['user_model_service_url'] = "http://java.dev.anjuke.com:8080/RoleService/roleService/rights?mId=%s&siteType=2";
$config['attachments_split_service_url'] = "http://java.dev.anjuke.com:8080/service-attachmentSplit-dev-SNAPSHOT";
//$config['my_base_domain'] = "http://my.eddie.dev.aifang.com";
$config['my_base_domain'] = "http://my.{$config['aifang_base_domain']}";    //首页
$config['my_base_domain_marked'] = "http://my.{$config['aifang_base_domain']}/marked"; //我收藏的楼盘
//问答是否使用新接口 [新接口走的是线上的solr和好租分词]
$config['wenda_search_type'] = 1;//1:使用新接口;0:使用老接口
$config['scws_url'] = 'http://192.168.1.57:52002/seg/pkuseg';
//问答是否使用新接口 [新接口走的是线上的solr和好租分词]
$config['wenda_search_type'] = 1; //1:使用新接口;0:使用老接口
$config['solr_url_questions_new'] = "http://192.168.1.57:52006/ajk-qa";

$config['scws_url'] = "http://192.168.1.57:52002/seg/pkuseg";
$config['solr_url_recommquestions'] = "http://192.168.1.57:52006/qa-recommend";

$config['multi_string_search_host'] = array("tcp://192.168.1.57:52046");

$config['aifang_anjuke_base_domain'] = "dinglin.dev.xinfang.anjuke.com";
$config['aifang_anjuke_cookie_base_domain'] = $config['aifang_anjuke_base_domain'];
$config['debug_allow_patterns'] = array(
        '/127\.0\.0\.1/',
        '/^192\.168\.181\./',
        '/^192\.168\.180\./',
        '/^192\.168\.190\./',
        '/^192\.168\.1\./',
        '/^192\.168\.2\./',
        '/^192\.168\.10\./',
        '/^10\.0\.0\./',
        '/^222\.66\.14\.14$/',
        '/^221\.133\.228\.74$/',
        '/^58\.246\.59\.106$/',
        '/^58\.246\.210\.107$/'
);
$config['header_nav_api'] = 'http://sh.dinglin.dev.anjuke.com/api/nav/?cityId=';
$config['ajk_api_url'] = 'dinglin.dev.anjuke.com/ajax/member/center/api/';
$config['anjuke_base_domain'] = 'dinglin.dev.anjuke.com';
