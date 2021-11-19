<?php

if (!defined('DS')){
    define('DS' , DIRECTORY_SEPARATOR);
}
define('APP_PATH', realpath(dirname(__FILE__)));
define('VIEW_PATH' , APP_PATH . DS . 'view' . DS);


define("DB_HOST","Localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","mvc");