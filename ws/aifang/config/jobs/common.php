<?php
$config['luceneNewHomeUpdateLogFile'] = "/home/www/logs/newhome/update_newhome_index.log";
$config['luceneNewHomeUpdateLogIng']  = "/home/www/logs/newhome/log_newhome_update.log";
$config['memcache_log_dir'] = "/home/www/log/memcache/";
$config['cache_updater_primary_idc'] = 1;

$config['nh_loupan_index_updater'] = array(
    "http://192.168.1.24:8984/aifang-loupan/update",
);
$config['nh_properties_index_updater'] = array(
    "http://192.168.1.24:8984/aifang-property/update",
);

//问答是否使用新接口 [新接口走的是线上的solr和好租分词]
$config['wenda_search_type'] = 1;//1:使用新接口;0:使用老接口
$config['scws_url'] = 'http://192.168.1.57:52002/seg/pkuseg';
//问答是否使用新接口 [新接口走的是线上的solr和好租分词]
$config['wenda_search_type'] = 1; //1:使用新接口;0:使用老接口
//相关推荐问答
$config['solr_url_recommquestions'] = "http://192.168.1.57:52006/qa-recommend";