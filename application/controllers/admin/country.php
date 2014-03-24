<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Country extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/country_model');
    }
    
    public function index() {
        
        $this->list_country();
    }
    public function list_country() {
        
        if($this->session->userdata('validated')) {
            
            $data['country'] = $this->country_model->get_country();
            
            $this->load->view('admin/country/country_list',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_country() {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Country Name','trim|required|max_length[20]');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/country/add_country');
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                $query = $this->country_model->add_country($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'Country Name Allready Exist';
                    $this->load->view('admin/country/add_country',$data);
                }
                else {
                    
                    redirect('admin/country/');
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_country($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Country Name','trim|required|max_length[20]');
            
            if($this->form_validation->run() == false) {
                
                $data['id_data'] = $this->country_model->get1_country(array('id' => $i));
                $this->load->view('admin/country/edit_country',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                
                $query = $this->country_model->update_country($i,$post);
                //print_r($query); exit;
                if($query == 0) {
                    
                    $data['error'] = $post['name'].' '.'Allready Exist';
                    $data['id_data'] = $this->country_model->get1_country(array('id' => $i));
                    $this->load->view('admin/country/edit_country',$data);
                }
                else {
                
                    redirect('admin/country');
                }
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_country($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->country_model->delete_country(array('id' => $i));
            redirect('admin/country');
        }
        else {
            
            redirect('/');
        }
    }
    
}