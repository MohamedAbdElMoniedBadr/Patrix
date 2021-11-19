<?php
namespace PHPMVC\Controllers;
use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\DataBase;
class Abstractcontroller {

    protected $_controller;
    protected $_action;
    protected $_params;
    protected $_data = [];

    // public function model($model){
    //    require_once '../app/model/' . $model . '.php';
    //     return new $model();
    // }

    public function notFoundAction(){
        $this->_view();
    }
    public function setController ($controllername){
        $this->_controller = $controllername;
    }
    public function setAction ($actionname){
        $this->_action = $actionname;
    }
    public function setParams ($paramsname){
        $this->_params = $paramsname;
    }
    protected function _view(){
        
        
        if($this->_action == FrontController::NOT_FOUND_ACTION){
            require_once VIEW_PATH . 'notfound' . DS . 'notfound.view.php';
        }else{
            $view = VIEW_PATH . $this->_controller . DS . $this->_action . '.view.php';
            if(file_exists($view)){
               
                require_once $view;
                
            }else {
                require_once VIEW_PATH . 'notfound' . DS . 'notview.view.php';
            }
        }
    }

}