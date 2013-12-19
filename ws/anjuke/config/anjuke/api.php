<?php
/**
 * 金铺或新房频道针对2345获得数据的接口
 */
$config['2345_city']=array(
    'fang' => 'http://api.fp16.dev.aifang.com/2345/get_cities',
    'xzl' => 'http://shanghai.fp02.dev.jinpu.com/api/citys_bytab',
    'sp' => 'http://shanghai.fp02.dev.jinpu.com/api/citys_bytab',
);

$config['2345_filter']=array(
    'fang' => 'http://api.fp16.dev.aifang.com/2345/get_filters_by_city',
    'xzl' => 'http://shanghai.fp02.dev.jinpu.com/api/xzl_bycity/',
    'sp' => 'http://shanghai.fp02.dev.jinpu.com/api/sp_bycity/',
);

$config['2345_search_url']=array(
    'fang' => 'http://api.fp16.dev.aifang.com/2345/buildurl',
    'xzl' => 'http://shanghai.fp02.dev.jinpu.com/api/buildurl',
    'sp' => 'http://shanghai.fp02.dev.jinpu.com/api/buildurl',
);
