<?php  
if ( ! defined('BASEPATH')) 
          exit('No direct script access allowed');
/*
 * Created on 31-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once (APPPATH . 'controllers/home.php');

    class Teacher extends Home {
        
        Public function __construct() {
            
            parent::__construct();
            $this->load->database();
        }
        public function add_teacher() {
            
            $this->form_validation->set_rules('name','Gradelevel Name','trim|required|max_length[50]');
            $this->form_validation->set_rules('name','Gradelevel Name','trim|required|max_length[50]');
            $this->form_validation->set_rules('name','Gradelevel Name','trim|required|max_length[50]');
            $this->form_validation->set_rules('name','Gradelevel Name','trim|required|max_length[50]');
            $this->form_validation->set_rules('name','Gradelevel Name','trim|required|max_length[50]');
            $this->form_validation->set_rules('name','Gradelevel Name','trim|required|max_length[50]');
            
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/gradelevel/add_gradelevel');
            }
            else {
                
                $post = $this->input->post();
                $post['CreatedOn'] = date('Y-m-d H:i:s');
                $post['isActive'] = 1;
                $query = $this->teacher_model->add_teacher($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'Gradelevel Allready Exist';
                    $this->load->view('admin/gradelevel/add_gradelevel',$data);
                }
                else {
                    
                    redirect('/');
                }
                
            }
        }
        
    }
    
?>