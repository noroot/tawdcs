<?php
define('WP_ENV_CONFIG_PATH', dirname(__FILE__) . '/');
$env = getenv('WP_ENV');

define('WP_ENV', WP_ENV);

require_once WP_ENV_CONFIG_PATH . "./config/$env.php";

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


require_once(ABSPATH . 'wp-settings.php');
?>
