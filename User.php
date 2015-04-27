<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author victor.munoz
 */
class User {
    
        public $nombre="";
        public $username="";
        public $password="";
        public $prile_slug="";
        
        public function User(){
             $this->nombre="Usuario";
             $this->username="user";
             $this->password="cursophp";
             $this->prile_slug="user_default";  
        }
        public function loadProfile(){
            
        }
        public function loadData(){
            
        }
    
}
