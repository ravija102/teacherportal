<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __Construct() {
	
            parent::__Construct();
            $this->check_isvalidated();
	}
	public function index() {
	
            $this->viewForm();
	}	
	private function check_isvalidated(){
            
            if(! $this->session->userdata('validated')) {
                
                redirect('admin/login');
            }
        }	
	private function viewForm($data=''){
            
            //print_r($data); exit;			
            $this->load->view('admin/table_createble', $data);			
	}
	
}

?>
