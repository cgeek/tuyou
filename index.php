<?php
/**
 *
 * 
 * @author cgeek <cgeek.share@gmail.com>
 */

/**
 * application environment
 * @value  development | testing | production
 *
 */
define('DS', DIRECTORY_SEPARATOR);
define('ENVIRONMENT', 'development');

if (defined('ENVIRONMENT')) {
	switch(ENVIRONMENT) {
		case 'development':
			error_reporting(E_ALL);
			break;
		case 'testing':
			error_reporting(E_ALL);
			break;
		case 'production':
			error_reporting(0);
		default:
			exit('app\'s environment defined error. useage: development | testing | production');
	}
}

//system path 
$system_path = 'system';

//application path
$app_path = 'app';

if(realpath($system_path) !== FALSE) {
	$system_path = realpath($system_path).DS; 
}

$system_path = rtrim($system_path, DS).DS;

if( ! is_dir($system_path)) {
	exit('system path set error.');
}

define('BASE_PATH', str_replace("\\", DS, $system_path));

if (is_dir($app_path)) {
	define('APP_PATH',$app_path);
} else {
	exit('do not set application path !');
}

require_once BASE_PATH . 'Talkphp.php';
$talkphp = Talkphp::getInstance();
$talkphp->init();
