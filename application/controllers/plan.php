<?php  
if ( ! defined('BASEPATH')) 
          exit('No direct script access allowed');
/*
 * Created on 14-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once (APPPATH . 'controllers/home.php');

    class Plan extends Home {
        
        Public function __construct() {
            
            parent::__construct();
            $this->load->database();
        }
        public function select_plan() {
            
            if($_GET) {
                
                echo 'das'; exit;
            }
        }
    }