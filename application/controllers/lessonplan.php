<?php  
if ( ! defined('BASEPATH')) 
          exit('No direct script access allowed');
/*
 * Created on 04-Apr-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once (APPPATH . 'controllers/home.php');

    class Lessonplan extends Home {
        
        Public function __construct() {
            
            parent::__construct();
            $this->load->database();
        }
        public function lesson_plan() {
            
            if($this->session->userdata('isLoggedIn')) {
                
                $this->form_validation->set_rules('subject','Subject','trim|required');
                
                
                if($this->form_validation->run() == FALSE) {
                    
                    $data['gradelevel'] = $this->gradelevel_model->get_gradelevel();
                    $this->load->view('usermgmt/lessonplan',$data);
                }
                else {
                    
                    
                }
            }
            else {
                
                redirect('/');
            }
        }
    }