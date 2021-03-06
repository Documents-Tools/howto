<?php

///////////////////////////////////////////////77
//
// SugarCRM Boosting Config
//
///////////////////////////////////////////////77

/***CONFIGURATOR***/

$sugar_config['oauth2']['refresh_token_lifetime'] = 1209600;
$sugar_config['oauth2']['access_token_lifetime'] = 3600;
$sugar_config['oauth2']['max_session_lifetime'] = 1800;
$sugar_config['oauth_token_expiry'] = 1800;
$sugar_config['oauth_token_life'] = 86400;

$sugar_config['disable_persistent_connections'] = false;
$sugar_config['dbconfigoption']['persistent'] = true;
$sugar_config['dbconfigoption']['autofree'] = false;
$sugar_config['dbconfigoption']['debug'] = false;
$sugar_config['dbconfigoption']['ssl'] = false;

$sugar_config['admin_access_control'] = false;
$sugar_config['admin_export_only'] = true;
$sugar_config['cache_dir'] = 'cache/';
$sugar_config['calculate_response_time'] = false;

$sugar_config['dbconfigoption']['persistent'] = false;
$sugar_config['dbconfigoption']['autofree'] = false;
$sugar_config['dbconfigoption']['debug'] = 0;
$sugar_config['dbconfigoption']['ssl'] = false;

$sugar_config['max_record_fetch_size'] = 1000;
$sugar_config['max_record_link_fetch_size'] = 5000;


$sugar_config['save_query'] = 'populate_only';
$sugar_config['verify_client_ip'] = false;
$sugar_config['disable_vcr'] = true;


/**
 * Memcache config
 */
$GLOBALS['sugar_config']['external_cache']['memcache']['host'] = '127.0.0.1'; // <<memcacheserveraddress>>
// Only need the next line if the memcache server port is different than the default of 11211
$GLOBALS['sugar_config']['external_cache']['memcache']['port'] = '11211'; // <<memcacheportnumber>>
/**
 * Redis config
 */
$GLOBALS['sugar_config']['external_cache']['redis']['host'] = '127.0.0.1'; // <<redisserveraddress>>
// Only need the next line if the redis server port is different than the default of 6379
$GLOBALS['sugar_config']['external_cache']['redis']['port'] = '6379'; // <<redisportnumber>>

// -----------------------------------

//$sugar_config['external_cache_disabled'] = true; // Disables all external caching
//$sugar_config['external_cache_disabled_apc'] = true; // Disables APC
//$sugar_config['external_cache_disabled_memcache'] = true; // Disables Memcache
//$sugar_config['external_cache_disabled_memcached'] = true; // Disables Memcached
//$sugar_config['external_cache_disabled_redis'] = true; // Disables Redis
//$sugar_config['external_cache_disabled_smash'] = true; // Disables sMash
//$sugar_config['external_cache_disabled_wincache'] = true; // Disables Wincache
//$sugar_config['external_cache_disabled_zend'] = true; // Disables Zend

$sugar_config['disable_count_query'] = true;


$sugar_config['full_text_engine']['Elastic']['host'] = 'localhost';
$sugar_config['full_text_engine']['Elastic']['port'] = '9200';
//$sugar_config['full_text_engine']['Elastic']['transport'] = 'Http';
//$sugar_config['full_text_engine']['Elastic']['curl'][CURLOPT_USERPWD] = 'user:password';
//$sugar_config['full_text_engine']['Elastic']['curl'][CURLOPT_SSL_VERIFYPEER] = false;
//$sugar_config['full_text_engine']['Elastic']['index_settings']['default']['index.number_of_shards'] = 1;


$sugar_config['hide_subpanels'] = false;
$sugar_config['hide_subpanels_on_login'] = false;
$sugar_config['external_cache_disabled'] = true;
$sugar_config['external_cache_disabled_apc'] = true;
$sugar_config['list_max_entries_per_page'] = '15';
$sugar_config['list_max_entries_per_subpanel'] = '3';
$sugar_config['default_module_favicon'] = false;
$sugar_config['show_download_tab'] = true;
$sugar_config['enable_action_menu'] = true;
$sugar_config['stack_trace_errors'] = false;
$sugar_config['developerMode'] = false;
$sugar_config['logger']['file']['maxSize'] = '1MB';
$sugar_config['max_record_fetch_size'] = 200;
$sugar_config['max_record_link_fetch_size'] = 5000;

// On Demand Custom Settings
$sugar_config['moduleInstaller']['packageScan'] = true;
//$sugar_config['moduleInstaller']['disableFileScan'] = false;
//$sugar_config['moduleInstaller']['validExt'] = array( 'log', 'htaccess' );
//$sugar_config['moduleInstaller']['blackList'] = array( 'strlen', 'strtolower' );
//$sugar_config['moduleInstaller']['blackListExempt'] = array( 'file_put_contents' );
//$sugar_config['moduleInstaller']['disableRestrictedCopy'] = true;

$sugar_config['email_xss'] = 'YourKey';
$sugar_config['dbconfigoption']['persistent'] = true;
$sugar_config['dbconfigoption']['autofree'] = true;
$sugar_config['dbconfigoption']['debug'] = 0;
$sugar_config['dbconfigoption']['ssl'] = false;
$sugar_config['http_referer']['list'][] = 'localhost';
$sugar_config['http_referer']['actions'][] = 'index';
$sugar_config['http_referer']['actions']['1'] = 'ListView';
$sugar_config['http_referer']['actions']['2'] = 'DetailView';
$sugar_config['http_referer']['actions']['3'] = 'EditView';
$sugar_config['http_referer']['actions']['4'] = 'oauth';
$sugar_config['http_referer']['actions']['5'] = 'Authenticate';
$sugar_config['http_referer']['actions']['6'] = 'Login';
$sugar_config['http_referer']['actions']['7'] = 'SupportPortal';
$sugar_config['http_referer']['actions']['8'] = 'ListViewGroup';
$sugar_config['http_referer']['actions']['9'] = 'ListViewHome';
$sugar_config['http_referer']['actions']['10'] = 'repair';
/***CONFIGURATOR***/


