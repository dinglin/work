<?php
// aifang sms send config
$config['sms'] = array(
    'username' => 'anjukeaifang',
    'password' => 'aifang2010',
    'api_key' => 'G9DUASP489MT1',
    'api_url' => 'http://http.asp.sh.cn/MT.do'
);

//$config['opt_image_url'] = "pic1.ajkimg.com";
$config['upload_image_url'] = "upd1.ajkimg.com";
$config['file_root_path'] = "/data1/map_tmp/";

$config['base_domain'] = "dinglin.dev.aifang.com";
$config['aifang_base_domain'] = "dinglin.dev.aifang.com";
$config['sitemap_path'] = "/tmp/sitemap/";
$config['360api_path']='/tmp/';

$config['nh_loupan_index_updater'] = array(
    //"http://192.168.1.24:8984/aifang-loupan/update",
    "http://192.168.1.24:8986/aifang-loupan-new/update"
);
$config['nh_loupan_index_new_updater'] = array(
    "http://192.168.1.24:8986/aifang-loupan-new/update"
);
$config['nh_properties_index_updater'] = array(
    "http://192.168.1.24:8984/aifang-property/update"
);

$config['nh_loupan_admin_index_updater'] = array(
    "http://192.168.1.24:8984/aifang-loupan-admin/update"
);
$config['nh_inform_index_updater'] = array(
    "http://192.168.1.24:8986/aifang-inform/update"
);

//问答是否使用新接口 [新接口走的是线上的solr和好租分词]
$config['wenda_search_type'] = 1;//1:使用新接口;0:使用老接口
$config['scws_url'] = 'http://192.168.1.57:52002/seg/pkuseg';
//问答是否使用新接口 [新接口走的是线上的solr和好租分词]
$config['wenda_search_type'] = 1; //1:使用新接口;0:使用老接口
//相关推荐问答
$config['solr_url_recommquestions'] = "http://192.168.1.57:52006/qa-recommend";
