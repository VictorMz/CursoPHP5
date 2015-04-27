<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './config.php';

/*
function get_header(){
    require_once (CUR_PATH."/views/header.html");
}

function get_footer(){
    require_once (CUR_PATH."/views/footer.html");
}
*/
function getPageName($page=null){
    return CUR_NAME."-".$page;
}

function getWebPath(){
    return CUR_WEBPATH;
}

class Template{
    protected $_file;
    protected $_data = array();
    
    public function __construct($file=null) {
        $this->_file=$file;
    }
    
    public function set($key,$value){ //remplaza los valores encontrados
        $this->_data[$key] = $value;
        return $this;
    }
    
    public function render(){
        extract($this->_data);
        ob_start(); // retiene los datos en cache
        include ($this->_file);
        return ob_get_clean();
    }
    
}


?>