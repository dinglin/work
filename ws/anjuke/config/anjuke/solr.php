<?php apf_require_class('Const_MultiCity');

// 独立房源搜索中conditionlinks查询
$config['solr_index_url_property'] = array(
Const_MultiCity::CITY_ID_SHANGHAI => "http://10.20.6.106:8983/prop11",
Const_MultiCity::CITY_ID_BEIJING => "http://10.20.6.106:8983/prop14",
);

$config['solr_index_url_property_other'] = "http://10.20.6.106:8983/prop00";

$config['solr_url_property_rank'] = array(
0 => "http://10.20.6.106:8983/prop00",
Const_MultiCity::CITY_ID_SHANGHAI => "http://10.20.6.106:8983/prop11",
Const_MultiCity::CITY_ID_BEIJING => "http://10.20.6.106:8983/prop14",
42 => "http://10.20.6.106:8983/prop04",
43 => "http://10.20.6.106:8983/prop04",
44 => "http://10.20.6.106:8983/prop04",
45 => "http://10.20.6.106:8983/prop04",
46 => "http://10.20.6.106:8983/prop04",
47 => "http://10.20.6.106:8983/prop04",
48 => "http://10.20.6.106:8983/prop04",
49 => "http://10.20.6.106:8983/prop04",
50 => "http://10.20.6.106:8983/prop04",
51 => "http://10.20.6.106:8983/prop04",
52 => "http://10.20.6.106:8983/prop04",
53 => "http://10.20.6.106:8983/prop04",
54 => "http://10.20.6.106:8983/prop04",
55 => "http://10.20.6.106:8983/prop04",
56 => "http://10.20.6.106:8983/prop04",
57 => "http://10.20.6.106:8983/prop04",
58 => "http://10.20.6.106:8983/prop04",
59 => "http://10.20.6.106:8983/prop04",
60 => "http://10.20.6.106:8983/prop04",
61 => "http://10.20.6.106:8983/prop04",
62 => "http://10.20.6.106:8983/prop04",
63 => "http://10.20.6.106:8983/prop04",
64 => "http://10.20.6.106:8983/prop04",
65 => "http://10.20.6.106:8983/prop04",
66 => "http://10.20.6.106:8983/prop04",
67 => "http://10.20.6.106:8983/prop04",
68 => "http://10.20.6.106:8983/prop04",
69 => "http://10.20.6.106:8983/prop04",
70 => "http://10.20.6.106:8983/prop04",
71 => "http://10.20.6.106:8983/prop04",
72 => "http://10.20.6.106:8983/prop04",
73 => "http://10.20.6.106:8983/prop04",
74 => "http://10.20.6.106:8983/prop04",
75 => "http://10.20.6.106:8983/prop04",
);
$config['solr_url_property_other_rank'] = "http://10.20.6.106:8983/prop00";
$config['new_solr_url_property_other_rank'] = "http://10.20.6.106:8983/ajk-saleprop00";
$config['rankon'] = true;
$config['proplist_cache'] = true;
$config['solr_url_related'] = "http://10.20.6.106:8983/ajkrelated";
$config['solr_url_related_enable'] = true;
$config['solr_url_school'] = 'http://10.20.6.106:8983/school';

//Date 2011-08-12  Ticket:21737
#$config['solr_url_questions'] = "http://10.20.6.106:8983/questions";
$config['solr_url_questions'] = "http://solr.anjuke.test:8983/ajk-qa41";
//新分词问答solr/////线上环境地址
#$config['solr_url_questions_new'] = "http://sc10-001.a.ajkdns.com:8983/ajk-qa41";
$config['solr_url_questions_new'] = "http://solr.anjuke.test:8983/ajk-qa41";
//$config['solr_url_questions_new'] = "http://10.20.6.106:8983/ajk-qa";
$config['solr_url_recommquestions'] = "http://solr.anjuke.test:8983/qa-recommend";

#######new add rental
$config['rental_solr_url_property_rank'] = array(
0 => "http://10.20.6.106:8983/hzprop00",
Const_MultiCity::CITY_ID_SHANGHAI =>"http://10.20.6.106:8983/hzprop11",
Const_MultiCity::CITY_ID_BEIJING =>"http://10.20.6.106:8983/hzprop14",
42 => "http://10.20.6.106:8983/hzprop04",
43 => "http://10.20.6.106:8983/hzprop04",
44 => "http://10.20.6.106:8983/hzprop04",
45 => "http://10.20.6.106:8983/hzprop04",
46 => "http://10.20.6.106:8983/hzprop04",
47 => "http://10.20.6.106:8983/hzprop04",
48 => "http://10.20.6.106:8983/hzprop04",
49 => "http://10.20.6.106:8983/hzprop04",
50 => "http://10.20.6.106:8983/hzprop04",
51 => "http://10.20.6.106:8983/hzprop04",
52 => "http://10.20.6.106:8983/hzprop04",
53 => "http://10.20.6.106:8983/hzprop04",
54 => "http://10.20.6.106:8983/hzprop04",
55 => "http://10.20.6.106:8983/hzprop04",
56 => "http://10.20.6.106:8983/hzprop04",
57 => "http://10.20.6.106:8983/hzprop04",
58 => "http://10.20.6.106:8983/hzprop04",
59 => "http://10.20.6.106:8983/hzprop04",
60 => "http://10.20.6.106:8983/hzprop04",
61 => "http://10.20.6.106:8983/hzprop04",
62 => "http://10.20.6.106:8983/hzprop04",
63 => "http://10.20.6.106:8983/hzprop04",
64 => "http://10.20.6.106:8983/hzprop04",
65 => "http://10.20.6.106:8983/hzprop04",
66 => "http://10.20.6.106:8983/hzprop04",
67 => "http://10.20.6.106:8983/hzprop04",
68 => "http://10.20.6.106:8983/hzprop04",
69 => "http://10.20.6.106:8983/hzprop04",
70 => "http://10.20.6.106:8983/hzprop04",
71 => "http://10.20.6.106:8983/hzprop04",
72 => "http://10.20.6.106:8983/hzprop04",
73 => "http://10.20.6.106:8983/hzprop04",
74 => "http://10.20.6.106:8983/hzprop04",
75 => "http://10.20.6.106:8983/hzprop04",
);
$config['new_solr_url_property_rank'] = array(
0 => "http://10.20.6.106:8983/ajk-saleprop00",
Const_MultiCity::CITY_ID_SHANGHAI => "http://10.20.6.106:8983/ajk-saleprop11",
Const_MultiCity::CITY_ID_BEIJING => "http://10.20.6.106:8983/ajk-saleprop14",
42 => "http://10.20.6.106:8983/ajk-saleprop04",
43 => "http://10.20.6.106:8983/ajk-saleprop04",
44 => "http://10.20.6.106:8983/ajk-saleprop04",
45 => "http://10.20.6.106:8983/ajk-saleprop04",
46 => "http://10.20.6.106:8983/ajk-saleprop04",
47 => "http://10.20.6.106:8983/ajk-saleprop04",
48 => "http://10.20.6.106:8983/ajk-saleprop04",
49 => "http://10.20.6.106:8983/ajk-saleprop04",
50 => "http://10.20.6.106:8983/ajk-saleprop04",
51 => "http://10.20.6.106:8983/ajk-saleprop04",
52 => "http://10.20.6.106:8983/ajk-saleprop04",
53 => "http://10.20.6.106:8983/ajk-saleprop04",
54 => "http://10.20.6.106:8983/ajk-saleprop04",
55 => "http://10.20.6.106:8983/ajk-saleprop04",
56 => "http://10.20.6.106:8983/ajk-saleprop04",
57 => "http://10.20.6.106:8983/ajk-saleprop04",
58 => "http://10.20.6.106:8983/ajk-saleprop04",
59 => "http://10.20.6.106:8983/ajk-saleprop04",
60 => "http://10.20.6.106:8983/ajk-saleprop04",
61 => "http://10.20.6.106:8983/ajk-saleprop04",
62 => "http://10.20.6.106:8983/ajk-saleprop04",
63 => "http://10.20.6.106:8983/ajk-saleprop04",
64 => "http://10.20.6.106:8983/ajk-saleprop04",
65 => "http://10.20.6.106:8983/ajk-saleprop04",
66 => "http://10.20.6.106:8983/ajk-saleprop04",
67 => "http://10.20.6.106:8983/ajk-saleprop04",
68 => "http://10.20.6.106:8983/ajk-saleprop04",
69 => "http://10.20.6.106:8983/ajk-saleprop04",
70 => "http://10.20.6.106:8983/ajk-saleprop04",
71 => "http://10.20.6.106:8983/ajk-saleprop04",
72 => "http://10.20.6.106:8983/ajk-saleprop04",
73 => "http://10.20.6.106:8983/ajk-saleprop04",
74 => "http://10.20.6.106:8983/ajk-saleprop04",
75 => "http://10.20.6.106:8983/ajk-saleprop04",
);
$config['rental_solr_url_property_other_rank'] ="http://10.20.6.106:8983/hzprop00";
//不要乱改！！
$config['prop_solr_url_mapping'] = array(
	0 => "http://solr.anjuke.test:8983/ajk-saleprop11/",
	4 => "http://solr.anjuke.test:8983/ajk-saleprop11/",
	11 => "http://solr.anjuke.test:8983/ajk-saleprop11/",
	14 => "http://solr.anjuke.test:8983/ajk-saleprop11/"
);
//二手房竞价solr地址
$config['sale_solr_url_auction'] ="http://solr.anjuke.test:8983/ajk-saleprop14/";
//租房竞价solr地址
$config['rental_solr_url_auction'] ="http://idx.anjuke.test:8983/hzpropauction/";
include_once(dirname(__FILE__).'/solr-online.php');
