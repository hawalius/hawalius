<?php
/**
 * Hawalius
 *
 * @copyright Copyright (c) 2013, Thomas lekanger
 * @version 1.0
 */

if(!defined('HAWALIUS_PATH')){
	define('HAWALIUS_PATH', dirname(__FILE__));
}
define('ENV', 'development');
define('VERSION', '0.2.0');

require HAWALIUS_PATH . '/app/index.php';
