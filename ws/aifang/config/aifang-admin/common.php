<?php
$config['host_id'] = 99;
$config['enable_auto_router'] = TRUE;

//后台dev登陆
$config['login_service_url'] = "http://dev.aifang.com:50081/RoleService/roleService/login?userName=%s&userPass=%s";
$config['user_model_service_url'] = "http://dev.aifang.com:50081/RoleService/roleService/rights?mId=%s&siteType=2";
$config['attachments_split_service_url'] = "http://dev.aifang.com:50081/service-attachmentSplit-dev-SNAPSHOT";
$config['user_view_team_users'] = "http://dev.aifang.com:50081/RoleService/roleService/viewTeamUsers?mId=%s&cityId=%s";
$config['user_number_info'] = "http://dev.aifang.com:50081/CRMRoleService/roleService/getUserInfo?userId=%d";

$config['lastest_cookie_name'] = 'afalastestcityid';
$config['city_cookie_domain'] = $_SERVER['SERVER_NAME'];

$config['admin_base_domain'] = 'one.dinglin.fang.anjuke.test';
$config['cookie_domain'] = $config['admin_base_domain'];