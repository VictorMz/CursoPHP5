<?php
/*
 * Controlador para la aplicacion - PHP Sesion 1
 */
require_once 'lib/template.php';
    class App {// objeto
    //put your code here
        
         public $url = null;
         public $filePath = null;
         
         public function App(){ // constructor del objeto 
             $this->url="";
             $this->filePath="";
         }
         
         public function loadConfig(){
             require_once 'config.php';
         }
         
         public function getUrl(){
            return $this->url; 
         }
         public function getPath(){
             return $this->filePath;
         }
         public function setUrl($urlSet=null){
             $this->url=$urlSet;
         }
         public function setPath($pathSet=null){
             $this->filePath=$pathSet;
         }
    }
    
    $app= new App();
    
    $tmpl = new Template('views/default.html');
    
    $tmpl->set('title', getPageName('PHP5'));
    $tmpl->set('box1', 'Alta User');
    $tmpl->set('box2', 'Baja User');
    $tmpl->set('box3', 'Configuracion');
    $tmpl->set('wpath', getWebPath());
    echo $tmpl->render();

?>

