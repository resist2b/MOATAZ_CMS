<?php

class Application {

    public function __construct() {

        /* 3.URL Processing
         * http://localhost/MVC/Mahmoud_Ashraf_MVC/user/show/1
         * http://localhost/MVC/Mahmoud_Ashraf_MVC/controller/method/param1/param2
         * controller-> user
         * method->login
         * params->1
         */
        /* trim to remove last /
         * explode to Split URL to (controller,method,params)
         */
        $URL = explode('/', trim($_GET['url'], '/'));
        /* i want to get this dynamicly */
        $controller = $URL[0];
        $method = $URL[1];
        /* parameters */
        if (isset($URL[2])) {
            $params1 = $URL[2];
        } else {
            $params1 = 1;
        }
        if (isset($URL[3])) {
            $params2 = $URL[3];
        } else {
            $params2 = 1;
        }

        /* create instance from (x) controller */
        $class = new $controller;
//        $class->show($this->params1);
        $class->$method($params1, $params2);
//        echo $this->method;
    }

}
