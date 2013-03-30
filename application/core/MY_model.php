<?php

class MY_model extends CI_Model {

    function __construct() {
        parent::__construct();

        
    }
    
     protected function user_ID() {
        return $_SERVER["REMOTE_ADDR"];
    }
    
    
}