<?php
namespace PHPMVC;
use PHPMVC\LIB\frontcontroller;

if (!defined('DS')){
    define ('DS' , DIRECTORY_SEPARATOR);
}
require_once '..' . DS . 'APP' . DS . 'config.php';
require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';
$fronter = new frontcontroller();
$fronter->dispatch();




