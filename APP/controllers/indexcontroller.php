<?php
namespace PHPMVC\Controllers;
use PHPMVC\model\ProductModel;
class indexcontroller extends abstractcontroller{

        public function defaultAction()
        {
           $this->_view();
            
        }


}

?>