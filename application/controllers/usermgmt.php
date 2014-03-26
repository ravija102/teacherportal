<?php  
if ( ! defined('BASEPATH')) 
          exit('No direct script access allowed');
/*
 * Created on 07-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once (APPPATH . 'controllers/home.php');

    class Usermgmt extends Home {
        
        Public function __construct() {
            
            parent::__construct();
            $this->load->database();
        }
        public function index() {
            
            $this->home();
        }
        public function home() {
            
            $this->load->view('index');
        }
        public function user_login() {
            
            $this->form_validation->set_rules('username','Username','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
            
            if($this->form_validation->run() == false) {
                
                $this->load->view('index');
            }
            else {
                
                $user_data = $this->users_model->get_user(array('email' => $_POST['username'])); // Call Model For Get Userdata From Database.
                // print userdata
                // print_r($user_data); exit;
                $username = $this->input->post('username');
                $password = $this->encrypt->sha1($this->input->post('password')); // Password MD5
                
                if(!isset($user_data[0])) {
                    
                    $data['error'] = "<script language=javascript> jAlert(\"Incorrect Username or Password.\",\"Alert Dialog\"); </script>";
                    $this->load->view('index',$data);
                }
                else if($user_data[0]->password != $password) {
                    
                    $data['error'] = "<script language=javascript> jAlert(\"Incorrect Password.\",\"Alert Dialog\"); </script>";
                    $this->load->view('index',$data);
                }
                else {
                    
                    $user_details = array (
                        
                        'user_id' => $user_data[0]->id,
                        'user_name' => $user_data[0]->user_first_name,
                        'user_email' => $user_data[0]->email,
                        'isLoggedIn' => 1,
                        'validated' => true
                    );
                    
                    $this->session->set_userdata($user_details);
                    redirect('usermgmt/login');
                } 
            }
        }
        public function login() {
            
            if($this->session->userdata('isLoggedIn')) {
                
                redirect("/gradeweight/gradeweight_list/");
            }
            else {
                
                redirect('/');
            }
        }
        public function logout() {
            
            $this->session->sess_destroy();
            redirect('/');
        }
        public function forgotpassword() {
            
            $data = array();
            if ($_POST) {
                $this->form_validation->set_rules('email', 'Email', 'trim|required');
                if ( $this->form_validation->run() != FALSE) {
                    $user = $this->Users_model->get_user(array('email' => $_POST['email']));

                    if(count($user) > 0)
                    {
                        $config = Array(
                          'protocol' => 'smtp',
                          'smtp_host' => 'ssl://smtp.googlemail.com',
                          'smtp_port' => 465,
                          'smtp_user' => 'nilesh.aseum@gmail.com', // change it to yours
                          'smtp_pass' => 'Nilesh@123', // change it to yours
                          'mailtype' => 'html',
                          'charset' => 'iso-8859-1',
                          'wordwrap' => TRUE
                        );
                        $this->load->library('email', $config);
                        $this->load->library('encrypt');

                        $message = 'You have requested for Reset Password.Please click on below link to reset your password.<br/><br/>';
                        $key = 'email='.$user[0]->email;
			// $encodedkey = $this->encrypt->encode($key);
                        $reseturl = $_SERVER['HTTP_HOST'].base_url('/index.php/usermgmt/resetpassword/?'.$key);
                        $message .= $reseturl;
                        $message .= '<br/><br/>Regards,<br/>CarRental Admin';
                        $this->email->set_newline("\r\n");
                        $this->email->from('teacherportal.test@gmail.com', 'Car Rental');
                        $this->email->to($user[0]->email);
                        $this->email->subject('Reset Password');
                        $this->email->message($message);
                        if($this->email->send())
                            $data['error'] = 'Email sent.';
                        else
                            $data['error'] = $this->email->print_debugger();
                    }
                    else
                        $data['error'] = 'Invalid Email.';
                }
            }
            $this->load->view('usermgmt/forgotpassword', $data);
	}
	public function resetpassword() {
            
            $data = array();
            if($_POST)
            {
                $post = $this->input->post();
                $data['email'] = $_POST['email'];
                $this->form_validation->set_rules('email', 'Email', 'trim|required');
                $this->form_validation->set_rules('password', 'New Password', 'trim|required|matches[password1]');
                $this->form_validation->set_rules('password1', 'Re-type Password', 'trim|required');
                if ( $this->form_validation->run() != FALSE)
                {
                    $this->load->library('encrypt');
                    $post['password'] = $this->encrypt->sha1($post['password']);
                    unset ($post['password1']);
                    $user = $this->Users_model->get_user(array('email' => $_POST['email']));
                    $res = $this->Users_model->update_user($user[0]->user_id, $post);
                    if($res)
                    {
                        $data['error'] = 'Password Reset successful';
                        $this->load->view('usermgmt/resetpassword', $data);
                    }
                }
                else
                    $this->load->view('/usermgmt/resetpassword', $data);
            }
            else if(isset($_GET['email']))
            {
                $user = $this->Users_model->get_user(array('email' => $_GET['email']));
                if(count($user) > 0)
                {
                    $data['email'] = $_GET['email'];
                    $this->load->view('/usermgmt/resetpassword', $data);
                } 
                    // $this->load->library('encrypt');
                    // $decoded = $this->encrypt->decode($_GET['key']);
                    // var_dump($decoded);
            }
	}
        public function add_user() {
            
            $post = $this->input->post();
            $get = $this->input->get();
//          var_dump($post);
            $this->form_validation->set_rules('user_first_name','First Name','trim|required|max_length[100]');
            $this->form_validation->set_rules('user_last_name','Last Name','trim|required|max_length[100]');
            $this->form_validation->set_rules('email','Email','trim|required|max_length[100]|valid_email');
//          is_unique[tablename.email];
            $this->form_validation->set_rules('password','Password','trim|required|max_length[50]');
            $this->form_validation->set_rules('cpassword','Retype Password','trim|required|matches[password]');
//          var_dump($this->form_validation->run());
            
            if($this->form_validation->run() == FALSE) {
                
                echo validation_errors(); exit;
                
//              $html = $this->load->view('header', $data, true); // View render.
//              echo $html;
//              exit;    
            }
            else {
                
                $post['password'] = $this->encrypt->sha1($post['password']);
                $post['is_active'] = 1 ;
                $post['createdon'] = date('Y-m-d h:i:s');
                unset($post['cpassword']);
                
                $user_add = $this->users_model->add_user($post); 
                
                if($user_add != 0) {
                    
                    $config = Array(
                          'protocol' => 'smtp',
                          'smtp_host' => 'ssl://smtp.googlemail.com',
                          'smtp_port' => 465,
                          'smtp_user' => 'nilesh.aseum@gmail.com', // change it to yours
                          'smtp_pass' => 'Nilesh@123', // change it to yours
                          'mailtype' => 'html',
                          'charset' => 'iso-8859-1',
                          'wordwrap' => TRUE
                        );
                        $this->load->library('email');
                        $this->load->library('encrypt');

                        $message = 'You have ragisterd successfulley.Please click on below link to select plan.'."\n";
                        $key = 'email='.$post['email'];
			// $encodedkey = $this->encrypt->encode($key);
                        $reseturl = base_url('/index.php/usermgmt/select_plan/?'.$key);
                        $message .= $reseturl;
                        $message .= "\n\n".'Regards,'."\n".'Teacher Portal Admin';
                        $this->email->set_newline("\r\n");
                        $this->email->from('nilesh.aseum@gmail.com', 'Teacher portal');
                        $this->email->to($post['email']);
                        $this->email->subject('Registration successful');
                        $this->email->message($message);
                        //var_dump($this->email->send()); exit;
                        if($this->email->send()) {
                             
                            echo true ; exit;
                        }
                        else {
                            
                            echo $this->email->print_debugger(); exit;
                        }
                }
                else {
                            
                    echo false; exit;
                }
            }
        }
        public function select_plan() {
            
            if($_GET) {
                
                $this->load->view('plan'); 
            }
            else {
                
                if($_POST) {
                
                    $price = print_r($this->input->post('price'));
                
                }
            }
            
        }

    }

?>