<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Unit extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/unit_model');
    }
    
    public function index() {
        
        $this->list_unit();
    }
    public function list_unit() {
        
        if($this->session->userdata('validated')) {
            
            $data['unit'] = $this->unit_model->get_unit();
            
            $this->load->view('admin/unit/unit_list',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_unit() {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Unit Name','trim|required|max_length[150]|is_unique[unit.name]');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/unit/unit');
            }
            else {
                
                $post = $this->input->post();
                $post['CreatedOn'] = date('Y-m-d H:i:s');
                $post['isActive'] = 1;
                $query = $this->unit_model->add_unit($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'Unit Allready Exist';
                    $this->load->view('admin/unit/unit',$data);
                }
                else {
                    
                    redirect('/admin/unit/');
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_unit($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Unit Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $data['unit'] = $this->unit_model->get_unit(array('id' => $i));
                $this->load->view('admin/unit/unit',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['CreatedOn'] = date('Y-m-d H:i:s');
                $post['isActive'] = 1;
                
                $query = $this->unit_model->update_unit($i,$post);
                //print_r($query); exit;
                if($query == 0) {
                    
                    $data['error'] = $post['name'].' '.'Allready Exist';
                    $data['unit'] = $this->unit_model->get_unit(array('id' => $i));
                    $this->load->view('admin/unit/unit',$data);
                }
                else {
                
                    redirect('/admin/unit');
                }
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_unit($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->unit_model->delete_unit(array('id' => $i));
            redirect('admin/unit/list_unit');
        }
        else {
            
            redirect('/');
        }
    }
    
}