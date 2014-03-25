<?php  
if ( ! defined('BASEPATH')) 
          exit('No direct script access allowed');
/*
 * Created on 25-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once (APPPATH . 'controllers/home.php');

    class Gradeweight extends Home {
        
        Public function __construct() {
            
            parent::__construct();
            $this->load->database();
        }
        public function gradeweight_list() {
            
            
        }
        
    }
    
?>