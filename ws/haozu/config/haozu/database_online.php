<?php
$config["member_master"] = array(
    "dsn"=>"mysql:host=10.20.8.35;port=3306;dbname=anjuke_db",
    "username" => "readonly_v2",
    "password" => "aNjuKe9dx1Pdw",
    "init_attributes" => array(),
    "init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
    "default_fetch_mode" => 2
);
$config["member_slave"] = array(
    "dsn"=>"mysql:host=10.20.8.35;port=3306;dbname=anjuke_db",
    "username" => "readonly_v2",
    "password" => "aNjuKe9dx1Pdw",
    "init_attributes" => array(),
    "init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
    "default_fetch_mode" => 2
);
//生成的时间：2013-07-15 10:22:22

$config["ajk_dw_stats.slave"] = array(
"dsn"=>"mysql:host=10.20.8.32;port=3306;dbname=ajk_dw_stats",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["ajk_property_beijing_slave"] = array(
"dsn"=>"mysql:host=10.10.8.48;port=3306;dbname=propertys_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["ajk_property_four_slave"] = array(
"dsn"=>"mysql:host=10.10.8.19;port=3306;dbname=propertys_db_04",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["ajk_property_other_slave"] = array(
"dsn"=>"mysql:host=10.10.8.19;port=3306;dbname=propertys_other_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["ajk_property_shanghai_slave"] = array(
"dsn"=>"mysql:host=10.20.8.35;port=3306;dbname=propertys_sh_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["anjuke_db.slave"] = array(
"dsn"=>"mysql:host=10.20.8.35;port=3306;dbname=anjuke_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["anjuke_slave"] = array(
"dsn"=>"mysql:host=10.20.8.35;port=3306;dbname=anjuke_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["ark_master"] = array(
"dsn"=>"mysql:host=10.10.8.54;port=3306;dbname=ark_db",
"username" => "ark_rx",
"password" => "qQw4K3Aj2x17k",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["ark_slave"] = array(
"dsn"=>"mysql:host=10.10.8.59;port=3306;dbname=ark_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["bbs_master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_forum_db",
"username" => "rent_job",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["bbs_slave"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_forum_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["crm_master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_crm_db",
"username" => "rent_crm",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["crm_slave"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_crm_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["default"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["hzstats_db.master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=hzstats_db",
"username" => "rent_stats",
"password" => "GM5aU3W4",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["hzstats_db.slave"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=hzstats_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["hz_dw_stats.slave"] = array(
"dsn"=>"mysql:host=10.20.8.32;port=3306;dbname=hz_dw_stats",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["image_db.slave"] = array(
"dsn"=>"mysql:host=10.20.8.23;port=3306;dbname=image_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["image_ext_slave"] = array(
"dsn"=>"mysql:host=10.20.8.23;port=3306;dbname=image_ext_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["master_jobs"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_jobs_db",
"username" => "rent_monitor",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["master_logs"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_logs_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["master_stats"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=hzstats_db",
"username" => "rent_stats",
"password" => "GM5aU3W4",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["ppc_master"] = array(
"dsn"=>"mysql:host=10.10.8.54;port=3306;dbname=ppc_db",
"username" => "ppc_rx",
"password" => "ff33b206fefa6",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["ppc_slave"] = array(
"dsn"=>"mysql:host=10.10.8.59;port=3306;dbname=ppc_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["propertys_db.slave"] = array(
"dsn"=>"mysql:host=10.10.8.48;port=3306;dbname=propertys_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["propertys_db_04.slave"] = array(
"dsn"=>"mysql:host=10.10.8.19;port=3306;dbname=propertys_db_04",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["propertys_other_db.slave"] = array(
"dsn"=>"mysql:host=10.10.8.19;port=3306;dbname=propertys_other_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["propertys_sh_db.slave"] = array(
"dsn"=>"mysql:host=10.20.8.35;port=3306;dbname=propertys_sh_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["queue_master"] = array(
"dsn"=>"mysql:host=10.10.8.23;port=3306;dbname=queue_db",
"username" => "que_rx",
"password" => "3ITSVOBL1HRgo",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["queue_slave"] = array(
"dsn"=>"mysql:host=10.10.8.48;port=3306;dbname=queue_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_crm_db.master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_crm_db",
"username" => "rent_crm",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_crm_db.slave"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_crm_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_db.master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_db",
"username" => "rent_job",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_db.slave"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_jobs_db.master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_jobs_db",
"username" => "rent_monitor",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_jobs_db.slave"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_jobs_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_logs_db.master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_logs_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_logs_db.slave"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_logs_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_stats_db.master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_stats_db",
"username" => "rent_stats",
"password" => "GM5aU3W4",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["rent_stats_db.slave"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_stats_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["slave"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["slave_aah_dw_stats"] = array(
"dsn"=>"mysql:host=10.20.8.32;port=3306;dbname=aah_dw_stats",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["slave_action_db"] = array(
"dsn"=>"mysql:host=10.10.8.48;port=3306;dbname=action_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["slave_ajk_dw_stats"] = array(
"dsn"=>"mysql:host=10.20.8.32;port=3306;dbname=ajk_dw_stats",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["slave_hz_dw_stats"] = array(
"dsn"=>"mysql:host=10.20.8.32;port=3306;dbname=hz_dw_stats",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["slave_images"] = array(
"dsn"=>"mysql:host=10.20.8.23;port=3306;dbname=image_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["slave_stats"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=hzstats_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["slave_user_db"] = array(
"dsn"=>"mysql:host=10.10.8.48;port=3306;dbname=user_db",
"username" => "readonly_v2",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

$config["zf_master"] = array(
"dsn"=>"mysql:host=10.10.8.69;port=3306;dbname=rent_zufang_db",
"username" => "rent_zf",
"password" => "aNjuKe9dx1Pdw",
"init_attributes" => array(),
"init_statements" => array("SET CHARACTER SET utf8","SET NAMES utf8"),
"default_fetch_mode" => 2
);

