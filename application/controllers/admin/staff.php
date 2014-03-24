<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Staff extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/staff_model');
    }
    
    public function index() {
        
        $this->list_staff();
    }
    public function list_staff() {
        
        if($this->session->userdata('validated')) {
            
            $data['staff'] = $this->staff_model->get_staff();
            
            $this->load->view('admin/staff/staff_list',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_staff() {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Staff Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/staff/add_staff');
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                $query = $this->staff_model->add_staff($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'Staff Name Allready Exist';
                    $this->load->view('admin/staff/add_staff',$data);
                }
                else {
                    
                    redirect('admin/staff/');
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_staff($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Staff Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $data['staff_data'] = $this->staff_model->get1_staff(array('id' => $i));
                $this->load->view('admin/staff/edit_staff',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                
                $query = $this->staff_model->update_staff($i,$post);
                //print_r($query); exit;
                if($query == 0) {
                    
                    $data['error'] = $post['name'].' '.'Allready Exist';
                    $data['staff_data'] = $this->staff_model->get1_staff(array('id' => $i));
                    $this->load->view('admin/staff/edit_staff',$data);
                }
                else {
                
                    redirect('admin/staff');
                }
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_staff($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->staff_model->delete_staff(array('id' => $i));
            redirect('admin/staff');
        }
        else {
            
            redirect('/');
        }
    }
    
}