<?php

/**
 *	system init file;
 *
 *
 *
 */

if (!defined('BASE_PATH')) exit('No direct access allowed');

class Talkphp 
{

	private static $_instance = null;

	private static $config = null;
	
	private function __construct() 
	{
		$config['_class'] = array (
			'Talk_Router' => BASE_PATH . 'Router.php'
		);

		self::$config = $config;

	}

	public static function getInstance() {
		if ( null == self::$_instance) {
			self::$_instance = new self();
		}
		
		return self::$_instance;
	}
	
	public function init() {
		spl_autoload_register(array($this,'loadClass'));
		$router = new Router();
	}

	public function findfile($className) {
		$sysFile = BASE_PATH . $className . '.php';
		if (file_exists($sysFile)) {
			return $sysFile;
		} else {
			return false;
		}
	}

	public static function loadClass($className) {
		if ($file = self::findfile($className)) {
			include $file;
			return true;
		} else {
			return false;
		}
	}
}
