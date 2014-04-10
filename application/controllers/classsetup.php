<?php  
if ( ! defined('BASEPATH')) 
          exit('No direct script access allowed');
/*
 * Created on 25-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once (APPPATH . 'controllers/home.php');

    class Classsetup extends Home {
        
        Public function __construct() {
            
            parent::__construct();
            $this->load->database();
        }
        public function gradeweight_list($start = 0) {
            
            //if($this->session->userdata('isLoggedIn')) {
            
                $condition = '';
                $t_id = $this->session->userdata('user_id');
                /*  Pagination - start  */
                $config['base_url'] = base_url('/index.php/classsetup/gradeweight_list/');
                $config['total_rows'] = $this->classsetup_model->record_count($condition);
                $config['per_page'] = 5;
                $this->pagination->initialize($config);
                $data['pagination'] = $this->pagination->create_links();
                /*  Pagination - end  */

                $gradeweight_list = $this->classsetup_model->get_gradeweight($config['per_page'], $start,$t_id);
                $data['gradeweight_list'] = $gradeweight_list;
//              print_r($gradeweight_list); exit;
                $data['gradelevel'] = $this->gradelevel_model->get_gradelevel();
                $data['template'] = $this->cms_model->get_cms();
                $this->load->view('usermgmt/classsetup',$data);
            /*}
            else {
                
                redirect('/');
            }*/
        }
        public function get_gradeweight() {
            
            $id = $this->input->get();
            
            $grade = $this->classsetup_model->get_gradeweight1($id);
            $id = $grade[0]->id;
            $name = $grade[0]->name;
            $perc = $grade[0]->percentage;
            echo $id.','.$name.','.$perc; exit;
        }
        public function add_gradeweight() {
            
            $post = $this->input->post();
            $post['teacher_id'] = $this->session->userdata('user_id');
            $pot['isActive'] = true;
            $post['CreatedOn'] = date('Y-m-d h:i:s');
            $grade = $this->classsetup_model->add_gradeweight($post);
            
            if($grade) {
                
                echo true; exit;
            }
            else {
                
                echo 'Add Grade weight fail'; exit;
            }
        }
        public function edit_gradeweight() {
            
            $post = $this->input->post();
            $post['teacher_id'] = 1;
            $pot['isActive'] = true;
            $post['CreatedOn'] = date('Y-m-d h:i:s');
            $grade = $this->classsetup_model->update_gradeweight($post);
            
            if($grade) {
                
                echo true; exit;
            }
            else {
                
                echo 'Update Grade weight fail'; exit;
            }
        }
        public function delete_gradeweight($id) {
            
            $grade = $this->classsetup_model->delete_gradeweight(array('id' => $id));
            redirect('/classsetup/gradeweight_list/'); exit;
        }
        public function add_classsetup($start = 0) {
            
            if($this->session->userdata('isLoggedIn')) {
                
                        $condition = '';
                        $t_id = $this->session->userdata('user_id');
                
                        /*  Pagination - start  */
                        $config['base_url'] = base_url('/index.php/classsetup/gradeweight_list/');
                        $config['total_rows'] = $this->classsetup_model->record_count($condition);
                        $config['per_page'] = 5;
                        $this->pagination->initialize($config);
                        $data['pagination'] = $this->pagination->create_links();
                        /*  Pagination - end  */

                        $gradeweight_list = $this->classsetup_model->get_gradeweight($config['per_page'], $start,$t_id);
                        $data['gradeweight_list'] = $gradeweight_list;
                        $data['gradelevel'] = $this->gradelevel_model->get_gradelevel();
                        
                if($_POST) {
                    
                    $this->form_validation->set_error_delimiters('<div class="form_error" align="center" style="font-size:12px;margin:0 0 10px 0;">', '</div>');
                    $this->form_validation->set_message('is_natural','Please select %s');
                    $this->form_validation->set_message('min_length','Please select %s');
                    
                    $this->form_validation->set_rules('grade_level_id','Grade Level','trim|required|is_natural');
                    $this->form_validation->set_rules('subject_id','Subject','trim|required|is_natural');
                    $this->form_validation->set_rules('class','class','trim|required|max_length[10]');
                    $this->form_validation->set_rules('assistant_teacher','Assistance Teacher','trim|required|max_length[150]');
                    $this->form_validation->set_rules('comments','Comment','trim|required|max_length[2000]');
                    $this->form_validation->set_rules('grading_rubric','Grading Rubric','required');
                    $this->form_validation->set_rules('screen_view','Screen View','trim|required|min_length[3]');
                    $this->form_validation->set_rules('email_template_setup','Email Template Setup','trim|required');
                
                
                    if($this->form_validation->run() == FALSE) {
                    
                        $this->load->view('usermgmt/classsetup',$data);    
                    }
                    else {
                        
                        $grading_rubric = implode(',',$_POST['grading_rubric']);
                        unset($_POST['grading_rubric']);
                        $post = $this->input->post();
                        $post['teacher_id'] = $this->session->userdata('user_id');
                        $post['grading_rubric'] = $grading_rubric;
                        $post['isActive'] = 1;
                        $post['CreatedOn'] = date('Y-m-d h:i:s');
                        
                        $add_class = $this->classsetup_model->add_class($post);
                        
                        if($add_class) {
                            
                            $msg = "<script type='text/javascript'>jAlert(\"added successfully.\");</script>";
                            redirect('/classsetup/gradeweight_list/?msg='.$msg);
                        }
                        else {
                            
                            $data['error'] = "<script type='text/javascript'>jAlert(\"added Fail.\");</script>";
                            $this->load->view('usermgmt/classsetup',$data);
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
        public function get_emailtemplate_value() {
            
            $cms_id = $_POST['cms_id'];
            
            $data = $this->cms_model->get1_cms(array('id' => $cms_id));
            
            echo $data[0]->template; exit;
        }
        public function get_students() {
            
            $gradelevel_id = $this->input->post('gradelevel_id');
            
            $students = $this->classsetup_model->get_students($gradelevel_id);
            
            if($students){
                
                foreach($students as $data) {
                    
                    echo "<input type='checkbox' name='student_id[]' class='css-checkbox' id='box11' value='".$data->id."' /><label class='css-label' name='lbl11' for='box11'>".$data->first_name.' '.$data->last_name."</label>";
                }
            }
            else {
                
                echo false;
            }
        }
    }
    
?>