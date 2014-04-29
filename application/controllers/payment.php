<?php 
session_start();
    if ( ! defined('BASEPATH')) 
          exit('No direct script access allowed');
    
    /*
     * Created on 24-Apr-14
     *
     * To change the template for this generated file go to
     * Window - Preferences - PHPeclipse - PHP - Code Templates
     */

    require_once (APPPATH . 'controllers/home.php');
    
    class Payment extends Home {
	
		
        public function __construct() {
				
            parent:: __construct();	
            
        }
        public function select_plan() {
            
            if($_GET) {
                
                echo $_GET['_key']."</br>";
                echo "das"."</br>";
                echo $this->encrypt->decode($_GET['_key']); exit();
                $get = $this->input->get();
                $result = $this->payment_model->validate_user($get);
                
                $sess = array(
                  
                    'teacherId'=> $result[0]->id
                );
                $this->session->set_userdata($sess);
                 
                if($result) {
                    
                    $data['plan'] = $this->plandetail_model->get_plan();
                    $this->load->view('plan',$data);
                }
                else {
                    
                    redirect('/');
                }
            }
            else {
                
                redirect('/');
            }
        }
        public function get_price() {
            
            $id = $this->input->post();
            
            $price = $this->payment_model->get_price($id);
            
            if($price) {
                
                echo $price[0]->price;
            }
            else {
                
                echo false;
            }
        }
        public function temp_payment() {
            
            if($_POST) {
                //echo session_id(); exit;
                //echo $this->session->userdata('teacherId'); exit;
                $session_data = $this->payment_model->get_price(array('id' => $_POST['plan_id']));

                $post = $this->input->post();
                $post['teacher_id'] = $this->session->userdata('teacherId');
                $post['session_id'] = session_id();
                $post['payment_status'] = "pending";
                $post['payment_total'] = $session_data[0]->price;
                $post['CreatedOn'] = date('Y-m-d h:i:s');
                
                $sess1 = array(
                    
                    'plan_name' => $session_data[0]->name,
                    'plan_price' => $session_data[0]->price,
                    'sess_id' => $post['session_id']
                );
                $this->session->set_userdata($sess1);
                
                $temp = $this->payment_model->temp_payment($post);
                
                if($temp) {
                    
                    $this->session->set_userdata('temp_id',$temp);
                    //echo $this->session->userdata('temp_id'); exit;
                    redirect('/payment/do_payment/');
                }
                else {
                    
                    $data['error'] = "<script type='text/javascript'>jAlert(\"Database Unavailable Please try again.\");</script>";
                    $this->load->view('plan',$data);
                }
                
            }
            else {
                
                redirect('/');
            }
            
        }
        public function do_payment() {
	
            $config['business']     = 'nilesh.aseum-facilitator@gmail.com';	
            $config['password']     = '1394203166';	
            $config['signature']    = 'AFcWxV21C7fd0v3bYYYRCpSSRl31AAwc3nvGuXrqPBERGH4l6r.BtM47';	
            $config['cpp_header_image'] = base_url('/public_html/front/images/logo2.png'); //Image header url [750 pixels wide by 90 pixels high]	
            $config['return']   = base_url('index.php/payment/notify_payment/');	
            $config['cancel_return']= base_url('index.php/payment/cancel_payment/');	
            $config['notify_url']       = base_url('index.php/payment/success_message'); //IPN Post	
            $config['production']   = FALSE; //Its false by default and will use sandbox	
            $config["invoice"]      = random_string('numeric',8); //The invoice id
	
            $this->load->library('paypal',$config);
	
            #$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);
            $item_name = $this->session->userdata('plan_name');
            $item_price = $this->session->userdata('plan_price');
            
            $this->paypal->add($item_name,$item_price); //Third item with code	
            $this->paypal->pay(); //Proccess the payment
		   
        }	
        public function notify_payment() {
            
            if($_GET['tx'] != '' && $_GET['st'] != '' && $_GET['amt'] != '') {
                
                $valid = $this->payment_model->valid_session(array('id'=>$this->session->userdata('temp_id')),array('session_id' => $this->session->userdata('sess_id')));
                
                if($valid && $_GET['st'] == "Completed") {
                    
                    $payment = array(
                        
                        'teacher_id' => $this->session->userdata('teacherId'),
                        'plan_id' => $valid[0]->plan_id,
                        'price' => $valid[0]->price,
                        'session_id' => $valid[0]->session_id,
                        'payment_status' => $this->input->get('st'),
                        'payment_total' => $this->input->get('amt'),
                        'transaction_id' => $this->input->get('tx'),
                        'error_code' => $valid[0]->error_code,
                        'error_message' => $valid[0]->error_message,
                        'isActive' => 1,
                        'CreatedOn' => date('Y-m-d h:i:s')
                    );
                    $pay = $this->payment_model->do_payment($payment);
                    
                    if($pay) {
                        
                        $this->payment_model->remove_temp(array('id' => $this->session->userdata('temp_id')));
                        $to      = $_POST['payer_email'];
                        $subject = 'Payment Successful';
                        $message = 'your payment has been received successfully.'."\n\n".'    Regards,'."\n".'Teacher Portal';
                        $headers = 'From: Atlas Admin<nilesh.aseum@gmail.com>' . "\r\n" .
                        'Reply-To: nilesh.aseum@gmail.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                        mail($to, $subject, $message);
                        
                        $active = array('plan_id' => $valid[0]->plan_id, 'isActive' => 1);
                        $user_active = $this->payment_model->active_user(array('id' => $this->session->userdata('teacherId')),$active);
                        $this->session->unset_userdata('teacherId');
                        //print_r($user_active); exit;
                        if($user_active) {
                            
                            /*  auto login registered user-start    */
                                    $user_data = array (
                                            'user_id' => $user_active[0]->id,
                                            'user_name' => $user_active[0]->first_name.' '.$user_data[0]->last_name,
                                            'user_email' => $user_active[0]->email,
                                            'u_country_id' => $user_active[0]->country_id,
                                            'u_state_id' => $user_active[0]->state_id,
                                            's_country_id' => $user_active[0]->s_country_id,
                                            's_state_id' => $user_active[0]->s_state_id,
                                            'isLoggedIn' => 1,
                                            'validated' => true
                                    );
                                    $this->session->set_userdata($user_data);
                                    redirect('/usermgmt/login/');
                            /*	Create Session & redirect to Dashboard page ater login	*/
                            /*  auto login registered user-end    */
                        }
                        else {
                            
                            $data['error'] = "<script type='text/javascript'>jAlert(\"Auto Login Faild Please Login Manually.\");</script>";
                            $this->load->view('index',$data);
                        }
                    }
                    else {
                        
                        echo "Database Error";
                    }
                }
                else {
                    
                    echo "session is not valid";
                }
                
            }
            else {
                
                $this->session->unset_userdata('teacherId');
                echo "Payment not complete";
                print_r($_REQUEST);
            }
        }	
        public function cancel_payment() {
        
            if($this->session->userdata('teacherId')) {
                
                $status = array('payment_status' => 'Canceled');
                $cancel = $this->payment_model->cancel_payment(array('id' => $this->session->userdata('temp_id')),$status);
                $data['error'] = "<script type='text/javascript'>jAlert(\"your payment has been canceled.\");</script>";
                $data['plan'] = $this->plandetail_model->get_plan();
                $this->load->view('plan',$data);
            }
            else {
                
                $data['error'] = "<script type='text/javascript'>jAlert(\"Session has been expire.\");</script>";
                $this->load->view('index',$data);
            }
        }	
        
    }

?>