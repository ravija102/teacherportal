<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Grade_level extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/gradelevel_model');
    }
    
    public function index() {
        
        $this->list_gradelevel();
    }
    public function list_gradelevel() {
        
        if($this->session->userdata('validated')) {
            
            $data['gradelevel'] = $this->gradelevel_model->get_gradelevel();
            
            $this->load->view('admin/gradelevel/gradelevel_list',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_gradelevel() {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Gradelevel Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/gradelevel/add_gradelevel');
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                $query = $this->gradelevel_model->add_gradelevel($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'Gradelevel Allready Exist';
                    $this->load->view('admin/gradelevel/add_gradelevel',$data);
                }
                else {
                    
                    redirect('admin/grade_level/');
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_gradelevel($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Gradelevel Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $data['gradelevel_data'] = $this->gradelevel_model->get1_gradelevel(array('id' => $i));
                $this->load->view('admin/gradelevel/edit_gradelevel',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                
                $query = $this->gradelevel_model->update_gradelevel($i,$post);
                //print_r($query); exit;
                if($query == 0) {
                    
                    $data['error'] = $post['name'].' '.'Allready Exist';
                    $data['gradelevel_data'] = $this->gradelevel_model->get1_gradelevel(array('id' => $i));
                    $this->load->view('admin/gradelevel/edit_gradelevel',$data);
                }
                else {
                
                    redirect('admin/grade_level');
                }
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_gradelevel($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->gradelevel_model->delete_gradelevel(array('id' => $i));
            redirect('admin/grade_level/list_gradelevel');
        }
        else {
            
            redirect('/');
        }
    }
    
}