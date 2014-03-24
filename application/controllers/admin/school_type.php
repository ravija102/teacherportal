<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class School_type extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/schooltype_model');
    }
    
    public function index() {
        
        $this->list_school();
    }
    public function list_school() {
        
        if($this->session->userdata('validated')) {
            
            $data['school'] = $this->schooltype_model->get_school();
            
            $this->load->view('admin/schooltype/schooltype_list1',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_school() {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','School Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/schooltype/add_schooltype');
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                $query = $this->schooltype_model->add_school($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'School Name Allready Exist';
                    $this->load->view('admin/schooltype/add_schooltype',$data);
                }
                else {
                    
                    redirect('admin/school_type/');
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_school($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','School Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $data['id_data'] = $this->schooltype_model->get1_school(array('id' => $i));
                $this->load->view('admin/schooltype/edit_schooltype',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                
                $query = $this->schooltype_model->update_school($i,$post);
                //print_r($query); exit;
                if($query == 0) {
                    
                    $data['error'] = $post['name'].' '.'Allready Exist';
                    $data['id_data'] = $this->schooltype_model->get1_school(array('id' => $i));
                    $this->load->view('admin/schooltype/edit_schooltype',$data);
                }
                else {
                
                    redirect('admin/school_type/list_school');
                }
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_school($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->schooltype_model->delete_school(array('id' => $i));
            redirect('admin/school_type/list_school');
        }
        else {
            
            redirect('/');
        }
    }
    
}