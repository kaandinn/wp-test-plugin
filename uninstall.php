
<?php

if(!defined('WP_UNINSTALL_PLUGIN')){
    exit;
}

delete_option('mysql_on');
delete_option('gorest_token');

global $wpdb;
$table_name = $wpdb->prefix .'todo';
$wpdb->query("DROP TABLE IF EXISTS {$table_name}");