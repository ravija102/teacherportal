<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class City extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/city_model');
        $this->load->model('admin/state_model');
        $this->load->model('admin/country_model');
    }
    
    public function index() {
        
        $this->list_city();
    }
    public function list_city() {
        
        if($this->session->userdata('validated')) {
            
            $data['navigation'] = 'City List';
            $data['city'] = $this->city_model->get_city();
            
            $this->load->view('admin/city/city_list',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_city() {
        
        if($this->session->userdata('validated')) {
            
            $data['navigation'] = 'Add City';
            $data['country_data'] = $this->country_model->get_country();
            $this->form_validation->set_message('is_natural','Please select %s');
            $this->form_validation->set_rules('country_id','Country','required|max_length[50]|is_natural');
            $this->form_validation->set_rules('state_id','State','required|max_length[50]|is_natural');
            $this->form_validation->set_rules('name','City Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/city/city',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['CreatedOn'] = date('Y-m-d H:i:s');
                $post['isActive'] = 1;
                $query = $this->city_model->add_city($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'City Name Allready Exist';
                    $this->load->view('admin/city/city',$data);
                }
                else {
                    
                    redirect('/admin/city/');
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_city($i,$c_id = 0) {
        
        if($this->session->userdata('validated')) {
            
            $data['navigation'] = 'Edit City';
            $data['country_data'] = $this->country_model->get_country();
            $data['state_data'] = $this->state_model->get1_state(array('country_id' => $c_id));
            $this->form_validation->set_message('is_natural','Please select %s');
            $this->form_validation->set_rules('country_id','Country Name','required|max_length[50]|is_natural');
            $this->form_validation->set_rules('name','State Name','trim|required|max_length[50]');
            
            if($this->form_validation->run() == false) {
                
                $data['id_data'] = $this->city_model->get_city(array('id' => $i));
                $this->load->view('admin/city/city',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['CreatedOn'] = date('Y-m-d H:i:s');
                $post['isActive'] = 1;
                
                $query = $this->city_model->update_city($i,$post);
                //print_r($query); exit;
                if($query == 0) {
                    
                    $data['error'] = $post['name'].' '.'Allready Exist';
                    $data['id_data'] = $this->city_model->get_city(array('id' => $i));
                    $this->load->view('admin/city/city',$data);
                }
                else {
                
                    redirect('admin/city');
                }
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_city($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->city_model->delete_city(array('id' => $i));
            redirect('admin/city');
        }
        else {
            
            redirect('/');
        }
    }
    
}