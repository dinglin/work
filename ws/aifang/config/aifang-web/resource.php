<?php
if (defined("RELEASE_VERSION")) {
    $config['version'] = str_replace("_", "", RELEASE_VERSION);
}
//$config['expires'] = strtotime("2008-06-01 00:00:00") + 3600 * 24 *3650;
//$config['last_modified'] = strtotime("2008-06-04 00:00:00");

//$config['yuicompressor_host'] = 'dinglinhost';
//$config['yuicompressor_port'] = 9999;

$config['cdn_host'] = "include.dinglin.dev.aifcdn.com";
$config['cdn_path'] = "/aifang";
$config['cdn_boundable_host'] = "include.dinglin.dev.aifcdn.com";
$config['cdn_boundable_path'] = "/aifang";
$config['cdn_pure_static_host'] = "pages.dinglin.dev.aifcdn.com";
$config['cdn_pure_static_path'] = "";
$config['cdn_v1_static_host'] = "static.dinglin.dev.anjuke.com";
$config['cdn_v1_static_path'] = "";

$config['boundable_resources'] = TRUE;

$config['prefix_uri'] = '/res';
$config['resource_type_single'] = 's';
$config['resource_type_boundable'] = 'b';

$config['enabled_inline_styles'] = false;
$config['js_domain'] = "http://include.aifcdn.com";