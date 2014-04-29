<?php  
if ( ! defined('BASEPATH')) 
          exit('No direct script access allowed');
/*
 * Created on 26-Apr-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once (APPPATH . 'controllers/home.php');

    class Student_master extends Home {
        
        Public function __construct() {
            
            parent::__construct();
            $this->load->database();
        }
        public function studentgrouping_list($start=0) {
            
            //if($this->session->userdata('isLoggedIn')) {
            
                $condition = '';
            
                /*  Pagination - start  */
                $config['base_url'] = base_url('/index.php/studentmgmt/studentgrouping_list/');
                $config['total_rows'] = $this->studentmgmt_model->record_count($condition);
                $config['per_page'] = 5;
                $this->pagination->initialize($config);
                $data['pagination'] = $this->pagination->create_links();
                /*  Pagination - end  */

                $gradeweight_list = $this->gradeweight_model->get_studentgrouping($config['per_page'], $start);
                $data['gradeweight_list'] = $gradeweight_list;
//              print_r($gradeweight_list); exit;
            
                $this->load->view('dashboard',$data);
            /*}
            else {
                
                redirect('/');
            }*/
        }
        public function add_student() {
            
            if($this->session->userdata('isLoggedIn')) {
                
                $this->session->unset_userdata('stdnt_id');
                $data['gradelevel'] = $this->gradelevel_model->get_gradelevel();
                
                $this->form_validation->set_error_delimiters('<div class="form_error" align="center" style="font-size:12px;margin:0 0 10px 0;">', '</div>');
                $this->form_validation->set_message('is_natural','Please select %s');
                $this->form_validation->set_rules('first_name','First Name','trim|required');
                $this->form_validation->set_rules('middle_name','Middle Name','trim|required');
                $this->form_validation->set_rules('last_name','Last Name','trim|required');
                $this->form_validation->set_rules('date','Date','');
                $this->form_validation->set_rules('month','Date','');
                $this->form_validation->set_rules('year','Date','');
                $this->form_validation->set_rules('email','Email','trim|required|valid_email');
                $this->form_validation->set_rules('gradelevel_id','Gradelevel','trim|required|is_natural');
                $this->form_validation->set_rules('is_fostercare','Foster care','');
                $this->form_validation->set_rules('is_transportation','Foster care','');
                $this->form_validation->set_rules('last_name','Last Name','trim|required');
                $this->form_validation->set_rules('parental_status','Parental status','required');
                
                if($this->form_validation->run() == FALSE) {
                    
                    $this->load->view('usermgmt/student_master',$data);
                }
                else {
                    
                    if($_POST) {
                        
                        $dob = $this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('date');
                        unset($_POST['date'],$_POST['month'],$_POST['year']);
                        $post = $this->input->post();
                        $post['DOB'] = $dob;
                        $post['isActive'] = 1;
                        $post['CreatedOn'] = date('Y-m-d h:i:s');
                        
                        $stdnt = $this->student_model->add_student($post);
                        
                        if($stdnt) {
                            
                            //$msg = "Student added successfully";
                            //redirect('/classsetup/gradeweight_list/?msg='.$msg);
                            $this->session->set_userdata('stdnt_id',$stdnt);
                            redirect('/student_master/add_motherinfo/');
                        }
                        else {
                            
                            $data['error'] = "Email Already Exist";
                            $this->load->view('usermgmt/student_master',$data);
                        }
                    }
                    else {
                        
                        redirect('/classsetup/gradeweight_list/');
                    }
                }
            }
            else {
                
                redirect('/');
            }
        }
        public function add_motherinfo() {
            
            if($this->session->userdata('isLoggedIn')) {

                if($this->session->userdata('stdnt_id')) {
                    
                    $data['country_data'] = $this->country_model->get_country();
                    $this->form_validation->set_error_delimiters('<div class="form_error" align="center" style="font-size:12px;margin:0 0 10px 0;">', '</div>');
                    $this->form_validation->set_message('is_natural','Please select %s');
                    $this->form_validation->set_rules('m_first_name','First Name','trim|required');
                    $this->form_validation->set_rules('m_last_name','Last Name','trim|required');
                    $this->form_validation->set_rules('m_email','Email','trim|required|valid_email');
                    $this->form_validation->set_rules('m_mobile_no','Mobile No','trim|required');
                    $this->form_validation->set_rules('m_home_no','Home No','trim|required');
                    $this->form_validation->set_rules('m_work_no','Work No','trim|required');
                    $this->form_validation->set_rules('m_address_1','Address Line1','');
                    $this->form_validation->set_rules('m_address_2','Address Line1','');
                    $this->form_validation->set_rules('m_address_3','Address Line1','');
                    $this->form_validation->set_rules('m_country_id','Country','trim|required|is_natural');
                    $this->form_validation->set_rules('m_state_id','State','trim|required|is_natural');
                    $this->form_validation->set_rules('m_city_id','City','trim|required|is_natural');
                    $this->form_validation->set_rules('m_ZipCode','Zipcode','trim|required');

                    if($this->form_validation->run() == FALSE) {

                        $this->load->view('usermgmt/mother_info',$data);
                    }
                    else {

                        if($_POST) {

                            $post = $this->input->post();

                            $add = $this->student_model->add_motherinfo(array('id' => $this->session->userdata('stdnt_id')),$post);
                            
                            if($add) {
                                
                                redirect('student_master/add_fatherinfo/');
                            }
                        }
                        else {

                            redirect('/classsetup/gradeweight_list/');
                        }
                    }
                }
                else {
                    
                    redirect('/');
                }
            }
            else {
                
                redirect('/');
            }
        }
        public function add_fatherinfo() {
            
            if($this->session->userdata('isLoggedIn')) {
                
                if($this->session->userdata('stdnt_id')) {
                    
                    $data['country_data'] = $this->country_model->get_country();
                    $this->form_validation->set_error_delimiters('<div class="form_error" align="center" style="font-size:12px;margin:0 0 10px 0;">', '</div>');
                    $this->form_validation->set_message('is_natural','Please select %s');
                    $this->form_validation->set_rules('f_first_name','First Name','trim|required');
                    $this->form_validation->set_rules('f_last_name','Last Name','trim|required');
                    $this->form_validation->set_rules('f_email','Email','trim|required|valid_email');
                    $this->form_validation->set_rules('f_mobile_no','Mobile No','trim|required');
                    $this->form_validation->set_rules('f_home_no','Home No','trim|required');
                    $this->form_validation->set_rules('f_work_no','Work No','trim|required');
                    $this->form_validation->set_rules('f_address_1','Address Line1','');
                    $this->form_validation->set_rules('f_address_2','Address Line1','');
                    $this->form_validation->set_rules('f_address_3','Address Line1','');
                    $this->form_validation->set_rules('f_country_id','Country','trim|required|is_natural');
                    $this->form_validation->set_rules('f_state_id','State','trim|required|is_natural');
                    $this->form_validation->set_rules('f_city_id','City','trim|required|is_natural');
                    $this->form_validation->set_rules('f_ZipCode','Zipcode','trim|required');

                    if($this->form_validation->run() == FALSE) {

                        $this->load->view('usermgmt/father_info',$data);
                    }
                    else {

                        if($_POST) {

                            $post = $this->input->post();

                            $add = $this->student_model->add_fatherinfo(array('id' => $this->session->userdata('stdnt_id')),$post);
                            
                            if($add) {
                                
                                redirect('student_master/add_allergies/');
                            }
                        }
                        else {

                            redirect('/student/listing/');
                        }
                    }
                }
                else {
                    
                    redirect('/student/listing/');
                }
            }
            else {
                
                redirect('/');
            }
        }
        public function add_allergies() {
            
            if($this->session->userdata('isLoggedIn')) {
                //echo "update running"; exit;
                if($this->session->userdata('stdnt_id')) {
                    
                    $this->form_validation->set_error_delimiters('<div class="form_error" align="center" style="font-size:12px;margin:0 0 10px 0;">', '</div>');
                    $this->form_validation->set_message('is_natural','Please select %s');
                    $this->form_validation->set_rules('reading_level','Reading Level','trim|required');

                    if($this->form_validation->run() == FALSE) {

                        $this->load->view('usermgmt/allergies');
                    }
                    else {

                        if($_POST) {
                            echo "<pre>"; print_r($_POST); print_r($_FILES);
                            unset($_POST['IEP_r'],$_POST['plan_504_r'],$_POST['BIP_r']);
                            $iepname = '';
                            $p504name = '';
                            $bipname = '';
                            foreach($_FILES as $key=>$value) {
                                
                                $ext = end(explode(".", $_FILES[$key]['name']));
                                $file_name = date('Ymdhis').random_string('numeric',6).'.'.$ext;
                                
                                //print_r($_POST); echo '</br>'; print_r($_FILES); exit;
                                $config['upload_path'] = './public_html/front/student';
                                $config['file_name'] = $file_name;
                                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                                $config['max_size']	= '20480';
                                $config['max_width']  = '10000';
                                $config['max_height']  = '10000';

                                $this->load->library('upload',$config);
                                $this->upload->initialize($config);
                                if(! $this->upload->do_upload($key)) {

                                    $error_file = array('error' => $this->upload->display_errors());
                                    //print_r($error_file);                                    exit();
                                    //$this->load->view('usermgmt/allergies',$data); break;
                                    redirect('student_master/add_allergies/?error='.$error_file);
                                }
                                $iepname .= $key == 'IEP' ? $file_name : '';
                                $p504name .= $key == 'plan_504' ? $file_name : '';
                                $bipname .= $key == 'BIP' ? $file_name : '';
                                 
                            }
                            echo "</br>";
                            echo $iepname."</br>"; echo $p504name."</br>"; echo $bipname."</br>";
                            exit;
                            $post = $this->input->post();
                            $post['IEP'] = $iepname;
                            $post['504_plan'] = $p504name;
                            $post['BIP'] = $bipname;

                            $add = $this->student_model->add_fatherinfo(array('id' => $this->session->userdata('stdnt_id')),$post);
                            
                            if($add) {
                                
                                redirect('student_master/add_allergies/');
                            }
                        }
                        else {

                            redirect('/student/listing/');
                        }
                    }
                }
                else {
                    
                    redirect('/student/listing/');
                }
            }
            else {
                
                redirect('/');
            }
        }
        
    }