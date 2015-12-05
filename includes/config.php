<?php
/**
 * Some general settings
 */
date_default_timezone_set('Europe/Belgrade');
set_time_limit(0);
ini_set("memory_limit","-1");
/**
 * Error reporting settings
 */
ini_set('display_errors', 'On');
error_reporting(E_ALL);
/**
 * Database related configuration
*/
$db = parse_url(getenv('CLEARDB_DATABASE_URL'));

define('DB_DRIVER',	'MySQL');

if ($db) {
	define('DB_HOST',	$db['host']);
	define('DB_USERNAME',	 $db['user']);
	define('DB_PASSWORD', 	$db['pass']);
	define('DB_DATABASE', 	substr($db["path"], 1));
} else {
	define('DB_HOST',	'localhost');
	define('DB_USERNAME',	'masscan');
	define('DB_PASSWORD', 	'changem3');
	define('DB_DATABASE', 	'masscan');
}

/**
 * Include the db class
 */
require dirname(__FILE__).'/../lib/class.db.php';
