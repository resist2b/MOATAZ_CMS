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


if (!function_exists('base_url')) {

    function base_url($atRoot = FALSE, $atCore = FALSE, $parse = FALSE) {
        if (isset($_SERVER['HTTP_HOST'])) {
            $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
            $hostname = $_SERVER['HTTP_HOST'];
            $dir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

            $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
            $core = $core[0];

            $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
            $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
            $base_url = sprintf($tmplt, $http, $hostname, $end);
        } else
            $base_url = 'http://localhost/';

        if ($parse) {
            $base_url = parse_url($base_url);
            if (isset($base_url['path']))
                if ($base_url['path'] == '/')
                    $base_url['path'] = '';
        }

        return $base_url;
    }

}


define('BASE_URL', base_url(TRUE, TRUE));
