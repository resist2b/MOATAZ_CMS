<?php

/* App Data */
define('APP_TITLE', 'MOATAZ MVC');
define('DS', DIRECTORY_SEPARATOR);
define('TIMESTAMP', date('Y-m-d H:i:s')); /* date('Y-m-d H:i:s') */


/* Directories Constants */
define('ROOT_PATH', dirname(dirname(__FILE__)));
define('APP_PATH', ROOT_PATH . DS . 'app' . DS);
/* inside inc */
define('CORE_PATH', APP_PATH . 'core' . DS);
define('MODEL_PATH', APP_PATH . 'model' . DS);
define('CONTROLLER_PATH', APP_PATH . 'controller' . DS);
define('LIBERARY_PATH', APP_PATH . 'library' . DS);
define('cache', ROOT_PATH . 'cache' . DS);
define('templates', ROOT_PATH . DS . 'templates' . DS);
define('upload', ROOT_PATH . DS . 'upload' . DS);



require APP_PATH . 'config.php';
require_once APP_PATH . 'Autoloader.php';
spl_autoload_register(array('Autoloader', 'autoload'));
$db = new database();
