<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Logout extends CI_Controller {
    
    public function logout() {
        
		$this->load->library('session');
        $this->session->sess_destroy();
        redirect('/');
    }
    
}