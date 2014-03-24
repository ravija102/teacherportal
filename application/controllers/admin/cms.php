<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Cms extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/cms_model');
        $this->load->helper('ckeditor');
        
         /* ---- BIGIN CKEDITOR --------------*/
            
            $this->load->library('ckeditor');
            $this->load->helper('ckeditor');

            $this->ckeditor->basePath = base_url().'public_html/ckeditor/';
            $this->ckeditor->config['toolbar'] = array(
                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
                      );
            $this->ckeditor->config['language'] = 'it';
            $this->ckeditor->config['width'] = '730px';
            $this->ckeditor->config['height'] = '300px'; 
            
            //Add Ckfinder to Ckeditor
            //$this->ckfinder->SetupCKEditor($this->ckeditor,'../../public_html/ckfinder/');
            
        /* -------- END CKEDITOR ---------*/
        
    }
    
    public function index() {
        
        $this->list_cms();
    }
    public function list_cms() {
        
        if($this->session->userdata('validated')) {
            
            $data['cms'] = $this->cms_model->get_cms();
            
            $this->load->view('admin/cms/cms_list',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_cms() {
        
        if($this->session->userdata('validated')) {
            
            /* ---- BIGIN CKEDITOR --------------*/
            
            $this->load->library('ckeditor');
            $this->load->helper('ckeditor');

            $this->ckeditor->basePath = base_url().'public_html/ckeditor/';
            $this->ckeditor->config['toolbar'] = array(
                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-',		 						'NumberedList','BulletedList' )
                      );
            $this->ckeditor->config['language'] = 'it';
            $this->ckeditor->config['width'] = '730px';
            $this->ckeditor->config['height'] = '300px'; 
            
            //Add Ckfinder to Ckeditor
            //$this->ckfinder->SetupCKEditor($this->ckeditor,'../../public_html/ckfinder/');
            /* -------- END CKEDITOR ---------*/

            $this->form_validation->set_rules('name','Plan Name','trim|required|max_length[50]');
            $this->form_validation->set_rules('content','Content','trim|required|max_length[50]');
            $this->form_validation->set_rules('url','Url','trim|required|max_length[200]');
            $this->form_validation->set_rules('meta_title','Meta Title','trim|required|max_length[50]');
            $this->form_validation->set_rules('meta_description','Meta Description','trim|required|max_length[200]');
            $this->form_validation->set_rules('template','Template','trim|required');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/cms/add_cms');
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                $query = $this->cms_model->add_cms($post);
                //echo $query; exit;
                if($query == 0) {
                    
                    $data['error'] = 'Plan Name Allready Exist';
                    $this->load->view('admin/cms/add_cms',$data);
                }
                else {
                    
                    redirect('admin/cms/');
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_cms($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('name','Plan Name','trim|required|max_length[50]');
            $this->form_validation->set_rules('content','Content','trim|required|max_length[50]');
            $this->form_validation->set_rules('url','Url','trim|required|max_length[200]');
            $this->form_validation->set_rules('meta_title','Meta Title','trim|required|max_length[50]');
            $this->form_validation->set_rules('meta_description','Meta Description','trim|required|max_length[200]');
            $this->form_validation->set_rules('template','Template','trim|required');
            
            if($this->form_validation->run() == false) {
                
                $data['cms_data'] = $this->cms_model->get1_cms(array('id' => $i));
                $this->load->view('admin/cms/edit_cms',$data);
            }
            else {
                
                $post = $this->input->post();
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                
                $query = $this->cms_model->update_cms($i,$post);
                //print_r($query); exit;
                if($query == 0) {
                    
                    $data['error'] = $post['name'].' '.'Allready Exist';
                    $data['cms_data'] = $this->cms_model->get1_cms(array('id' => $i));
                    $this->load->view('admin/cms/edit_cms',$data);
                }
                else {
                
                    redirect('admin/cms');
                }
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_cms($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->cms_model->delete_cms(array('id' => $i));
            redirect('admin/cms');
        }
        else {
            
            redirect('/');
        }
    }
    
}