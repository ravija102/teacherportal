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
        public function studentgrouping_list($start=0) {
            
            //if($this->session->userdata('isLoggedIn')) {
            
                $condition = '';
            
                /*  Pagination - start  */
                $config['base_url'] = base_url('/index.php/studentmgmt/studentgrouping_list/');
                $config['total_rows'] = $this->studentmgmt_model->record_count($condition);
                $config['per_page'] = 5;
                $this->pagination->initialize($config);
                $data['pagination'] = $this->pagination->create_links();
                /*  Pagination - end  */

                $gradeweight_list = $this->gradeweight_model->get_studentgrouping($config['per_page'], $start);
                $data['gradeweight_list'] = $gradeweight_list;
//              print_r($gradeweight_list); exit;
            
                $this->load->view('dashboard',$data);
            /*}
            else {
                
                redirect('/');
            }*/
        }
        
    }