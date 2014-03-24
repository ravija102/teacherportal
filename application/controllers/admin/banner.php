<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Banner extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/banner_model');
    }
    
    public function index() {
        
        $this->list_banner();
    }
    public function list_banner() {
        
        if($this->session->userdata('validated')) {
            
            $data['banner'] = $this->banner_model->get_banner();
            
            $this->load->view('admin/banner/banner_list',$data);
        }
        else {
            
            redirect('/');
        }
    }
    public function add_banner() {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('description','Description','trim|required|max_length[200]');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/banner/add_banner');
            }
            else {
                //print_r($_POST); echo '</br>'; print_r($_FILES); exit;
                $config['upload_path'] = './public_html/banner/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '20480';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
                
                $this->load->library('upload', $config);
                
                if(! $this->upload->do_upload('banner_name')) {
                    
                    $data['error_file'] = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/banner/add_banner',$data);
                }
                else {
                    
                    $post = $this->input->post();
                    unset($post['banner_name']);
                    $post['banner_name'] = $_FILES['banner_name']['name'];
                    $post['createdon'] = date('Y-m-d H:i:s');
                    $post['is_active'] = 1;
                    $query = $this->banner_model->add_banner($post);
                    //echo $query; exit;
                    if($query == 0) {
                    
                    $data['error'] = 'Banner Allready Exist';
                    $this->load->view('admin/banner/add_banner',$data);
                    }
                    else {

                        redirect('admin/banner/');
                    }
                }
                
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function edit_banner($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('description','Description','trim|required|max_length[200]');
            
            if($this->form_validation->run() == false) {
                
                $data['banner_data'] = $this->banner_model->get1_banner(array('id' => $i));
                $this->load->view('admin/banner/edit_banner',$data);
            }
            else {
                
                $post = $this->input->post();
                unset($post['banner_name']);
                
                
                if(isset($_FILES['banner_name']['name']) && $_FILES['banner_name']['name'] != '') {
                    
                    move_uploaded_file($_FILES['banner_name']['tmp_name'],'./public_html/banner/'.$_FILES['banner_name']['name']);
                    $post['banner_name'] = $_FILES['banner_name']['name'];
                    
                    $name = $post['hidden_name'];
                    @unlink("./public_html/banner/".$name);
                }
                else {
                    
                    $post['banner_name'] = $post['hidden_name'];
                }
                
                $post['createdon'] = date('Y-m-d H:i:s');
                $post['is_active'] = 1;
                unset($post['hidden_name']);
                
                $query = $this->banner_model->update_banner($i,$post);
                //print_r($query); exit;
                redirect('admin/banner');
            }
        }
        else {
            
            redirect('/');
        } 
    }
    public function delete_banner($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->banner_model->delete_banner(array('id' => $i));
            redirect('admin/banner');
        }
        else {
            
            redirect('/');
        }
    }
    
}