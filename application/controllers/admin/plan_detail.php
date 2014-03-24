<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Plan_detail extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/plandetail_model');
    }
    
    public function index() {
        
        $this->list_plandetail();
    }
    public function list_plandetail() {
        
        if($this->session->userdata('validated')) {
            
            $data['plan'] = $this->plandetail_model->get_plan();
            
            $this->load->view('admin/plandetail/plandetail_list',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_plan() {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Plan Name','trim|required|max_length[50]');
            $this->form_validation->set_rules('price','Price','trim|required|max_length[10]');
            $this->form_validation->set_rules('description','Description','trim|required|max_length[200]');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/plandetail/add_plan');
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                $query = $this->plandetail_model->add_plan($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'Plan Name Allready Exist';
                    $this->load->view('admin/plandetail/add_plan',$data);
                }
                else {
                    
                    redirect('admin/plan_detail/');
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_plan($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Plan Name','trim|required|max_length[50]');
            $this->form_validation->set_rules('price','Price','trim|required|max_length[10]');
            $this->form_validation->set_rules('description','Description','trim|required|max_length[200]');
            
            if($this->form_validation->run() == false) {
                
                $data['plan_detail'] = $this->plandetail_model->get1_plan(array('id' => $i));
                $this->load->view('admin/plandetail/edit_plan',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                
                $query = $this->plandetail_model->update_plan($i,$post);
                //print_r($query); exit;
                 if($query == 0) {
                    
                    $data['error'] = $post['name'].' '.'Allready Exist';
                    $data['plan_detail'] = $this->plandetail_model->get1_plan(array('id' => $i));
                    $this->load->view('admin/plandetail/edit_plan',$data);
                }
                else {
                
                    redirect('admin/plan_detail');
                }
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_plan($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->plandetail_model->delete_plan(array('id' => $i));
            redirect('admin/plan_detail/list_plandetail');
        }
        else {
            
            redirect('/');
        }
    }
    
}