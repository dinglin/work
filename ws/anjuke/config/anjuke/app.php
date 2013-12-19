<?php
/*
 * APP配置
 * */

//业主委托对应PARENTID
$config['Delegation'] = 1;

//SNS房源分享对应PARENTID
$config['PropertySns'] = 2;

//自定义背景对应PARENTID
$config['CustomBg'] = 'custombg';

//合作开单对应PARENTID
$config['OpenOrder'] = 4;

//好租app的PARENTID
$config['HaoZu'] = 129;

/*
 * app支付价钱
 * $config :key   ：对应的是app应用的名称
 *          value ：money价钱，单位为元，paycenter_id:支付中心私钥的编号
 *          OrderName :"订单名称"
 *          appid ：应用id
 *          useTime：针对手拉手房源的使用天数。单位为天
 */
$config['app_handinhand']=array(
       "money"=>100,	//按城市分配需要单独列出,详见multicity.php::app_handinhand_money
       "paycenter_id"=>1,
       "paycenter_key"=>"12qwzxer",
       "OrderName" =>"30天个人房源推荐",
       "appid" =>125,
       "usedTime"=>30
);

$config['app_extratag']=array(
		"A001"=>5,
		"A002"=>5
);

//线上沟通RMOnline
$config['IMOnline'] = 133;
$config['ExtraTag'] = 172;

// 房源视频
$config['AppVideo'] = 'appvideo';
// 给他的个数
$config['AppVideo_URL_Num'] = 10;
// 视频
$config['AppVideo_Config'] = array(
    'default' => array(
        'width' => 480,
        'height' => 400,
    ),
    'www.tudou.com' => array(
        'width' => 480,
        'height' => 400,
    ),
    'player.youku.com' => array(
        'width' => 480,
        'height' => 400,
    ),
    'you.video.sina.com.cn' => array(
        'width' => 480,
        'height' => 370,
    ),
);
//问答专家
$config['Ask'] = 'ask';
$config['HpRank'] = 'hprank';

$config['propSpread']=array(
	"paycenter_id"=>22,
    "paycenter_key"=>"123456",
	"OrderName" =>"在线充值",
);//好盘数据分析

$config['propSpread2']=array(
	"paycenter_id"=>23,
    "paycenter_key"=>"345678",
	"OrderName" =>"好盘",
);//好盘数据分析

apf_require_class('Const_MultiCity');
//业主委托 可抢次数
$config['DelegationAppCount'] = array(
    'default' => 1,  //pmt6483 除上海北京以外的城市开通(大于1表示增加到X次)
    //Const_MultiCity::CITY_ID_SHANGHAI => 1,
	//Const_MultiCity::CITY_ID_BEIJING => 1,
);

//业主委托积分兑换查看次数需要的分数
$config['DelegationGradeScore'] = array(
    'default' => 500,
    //Const_MultiCity::CITY_ID_SHANGHAI => 1000,
	//Const_MultiCity::CITY_ID_BEIJING => 1000,
);

//积分兑换余额
$config['pointExchange']=array(
	"paycenter_id"=>24,
    "paycenter_key"=>"jf23dh8902",
	"OrderName" =>"积分换余额",
);
