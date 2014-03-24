<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('url','form','array','string'));
        $this->load->library('form_validation');
//      $this->load->database();
        $this->load->library('session');
        $this->load->model('admin/login_model');
    }
    public function index() {
        
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        
        if($this->form_validation->run() == False) {
            
            $this->load->view('admin/login'); 
        }
        else {
//          print_r($_REQUEST); exit;
            $admin_detail = $this->login_model->validate(array ('email_id' => $this->input->post('username')));
//          print_r($admin_detail); 
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if(! isset($admin_detail[0])) {
                
                $data['error'] = 'Invalid User ID or Password';
                $this->load->view('admin/login',$data);
            }
            else if($admin_detail[0]->password !== $password) {
                
                $data['error'] = 'Incorrect Password';
                $this->load->view('admin/login',$data);
            }
            else {
                
                $admin_data = array(
                    
                    'admin_id' => $admin_detail[0]->id,
                    'admin_name' => $admin_detail[0]->first_name,
                    'email' => $admin_detail[0]->email_id,
                    'isLoggedIn' => 1,
                    'validated' => true
                );
                
                $this->session->set_userdata($admin_data);
                redirect('admin/login/data');
            }
        }
        
    }
    public function data() {
        if($this->session->userdata('validated')) {
            
            //$data['user_data'] = $this->login_model->get_user();
            $this->load->view('admin/index');
        }
        else {
           
            redirect('/');
        }
    }
    public function add_user() {
        
        if($this->session->userdata('validated')) {
            
                //echo 'das'; print_r($post); exit;
                $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha|max_length[50]');
                $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha|max_length[50]');
                $this->form_validation->set_rules('user_type', 'User Type', 'trim|required');
                $this->form_validation->set_rules('email_id', 'Email Id', 'trim|required|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[15]|matches[c_password]');
                $this->form_validation->set_rules('c_password', 'Retype Password', 'trim|required');
                
                if($this->form_validation->run() == false) {
                    
                    $this->load->view('admin/form_validation');
                }
                else {
                    
                    //echo 'das'; print_r($post); exit;
                    $post = $this->input->post();
                    unset($post['c_password']);
                    $post['is_active'] = 1;
                    $post['createdon'] = date('Y-m-d h:i:s');
                    $query = $this->login_model->add_user($post);
                    //echo $query; exit;
                    if($query == 0) {
                        
                        $data['error'] = 'Enter Email Already Exist';
                        $this->load->view('admin/form_validation',$data);
                    }
                    else {
                       
                        redirect('admin/login/data');
                    } 
                } 
        }
        else {
            
            redirect('/');
        }
    }
    public function js_edit_user($i) {
        
        if(! $this->session->userdata('validated')) {
            
            redirect('/');
        }
        $admin_email = $this->session->userdata('email');
        $data['u_data'] = $this->login_model->get_user(array('email_id' => $admin_email));
        //print_r($data); exit;
        $this->load->view('admin/extra_profile',$data);
        //$data = $this->login_model->update_user($i);
    }
    public function edit_user($i) {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('first_name','First Name','trim|required');
            $this->form_validation->set_rules('last_name','Last Name','trim|required');
            $this->form_validation->set_rules('user_type','Gender','trim|required');
            
            if($this->form_validation->run() == false) {
                
                $admin_email = $this->session->userdata('email');
                $data['u_data'] = $this->login_model->get_user(array('email_id' => $admin_email));
                //print_r($data); exit;
                $this->load->view('admin/edit_user',$data);
            }
            else {
                
                $post = $this->input->post();
                //unset($post['Save_Changes']);
                $data = $this->login_model->update_user($i,$post);
                redirect('admin/login/data');
            } 
        }
        else {
            
            redirect('/');
        }
        
        //$data = $this->login_model->update_user($i);
    }
    public function js_update_user($i) {
        //echo $i; exit;
        $post = $this->input->post();
        unset($post['Save_Changes']);
        $data = $this->login_model->update_user($i,$post);
        redirect('admin/login/data');
    }
    public function delete_user($i) {
        
        $this->load->view('admin/edit_user');
        $data = $this->login_model->delete_user($i);
        redirect('admin/login/data');
    }
    public function change_password() {
        
        if($this->session->userdata('validated')) {
            
            $this->form_validation->set_rules('current_password','Current Password','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[15]|matches[c_password]');
            $this->form_validation->set_rules('c_password','Retype Password','trim|required');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('admin/change_password');
            }
            else {
                
                $post = $this->input->post();
                $admin_email = $this->session->userdata('email');
                $data = $this->login_model->get_user(array('email_id' => $admin_email));
                //print_r($data); exit;
                $password = $data[0]->password;
                //echo $password; exit;
                $u_id = $data[0]->id;
                if($post['current_password'] != $password || $post['current_password'] == $post['password']) {
                    //echo 'das'; exit;
                    $data['error'] = 'Invalid Current Password Or Currentpassword And Newpassword Same';
                    $this->load->view('admin/change_password',$data);
                }
                else {
                    
                    unset($post['current_password']);
                    unset($post['c_password']);
                    $query = $this->login_model->update_password($u_id,$post);
                    //echo $query; exit;  
                    redirect('admin/login/data');
                }  
            }
        }
        else {
            
            redirect('/');
        }
    }
    public function logout() {
        
        $this->session->sess_destroy();
        $this->load->view('admin/login');
   
    }
    
}