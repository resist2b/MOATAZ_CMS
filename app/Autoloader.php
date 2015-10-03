<?php

class Autoloader {

    public static function autoload($class) {

        /* search for $class inside  LIBERARY_PATH,CONTROLLER_PATH and  MODEL_PATH */
        if (file_exists(APP_PATH . ucfirst($class) . '.php')) {
            require_once(APP_PATH . ucfirst($class) . '.php');
        } elseif (file_exists(CONTROLLER_PATH . ucfirst($class) . '.php')) {
            require_once(CONTROLLER_PATH . ucfirst($class) . '.php');
        } elseif (file_exists(MODEL_PATH . ucfirst($class) . '.php')) {
            require_once(MODEL_PATH . ucfirst($class) . '.php');
        } else {
            /* uo can redirect to baseUrl */

            die("<b>{$class}</b>  Not Found!");
        }
    }

}
