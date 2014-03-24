<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class State extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/state_model');
    }
    
    public function index() {
        
        $this->list_state();
    }
    public function list_state() {
        
        if($this->session->userdata('validated')) {
            
            $data['state'] = $this->state_model->get_state();
            
            $this->load->view('admin/state/state_list',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_state() {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','State Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/state/add_state');
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                $query = $this->state_model->add_state($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'State Name Allready Exist';
                    $this->load->view('admin/state/add_state',$data);
                }
                else {
                    
                    redirect('admin/state/');
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_state($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','State Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $data['id_data'] = $this->state_model->get1_state(array('id' => $i));
                $this->load->view('admin/state/edit_state',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                
                $query = $this->state_model->update_state($i,$post);
                //print_r($query); exit;
                if($query == 0) {
                    
                    $data['error'] = $post['name'].' '.'Allready Exist';
                    $data['id_data'] = $this->state_model->get1_state(array('id' => $i));
                    $this->load->view('admin/state/edit_state',$data);
                }
                else {
                
                    redirect('admin/state');
                }
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_state($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->state_model->delete_state(array('id' => $i));
            redirect('admin/state');
        }
        else {
            
            redirect('/');
        }
    }
    
}