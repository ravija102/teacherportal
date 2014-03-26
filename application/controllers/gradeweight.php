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
        public function gradeweight_list($start = 0, $data=array()) {
            
            $condition = '';
            
            
            $gradeweight_list = $this->gradeweight_model->get_gradeweight($condition, $start);
            
            $data['gradeweight_list'] = $gradeweight_list;
            
            /*  Pagination - start  */
            $config['base_url'] = base_url('/index.php/gradeweight/gradeweight_list/');
            $config['total_rows'] = $this->gradeweight_model->record_count($condition);
            $config['per_page'] = 'RECORDS_PER_PAGE';
            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            /*  Pagination - end  */
            
            $this->load->view('dashboard',$data);
        }
        public function add_gradeweight() {
            
            
            $post = print_r($this->input->post());
            echo $post; exit;
        }
        
    }
    
?>