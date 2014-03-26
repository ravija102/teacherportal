<?php
/*
 * Created on 07-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class Home_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    public function send_email($to, $subject, $message, $from='', $reply_to = '')
    {
        $config = $this->config->item('smtp_settings');
        $from = ($from == '') ? $this->config->item('smtp_from'): $from;
        $reply_to = ($reply_to == '') ? $this->config->item('smtp_reply_to'): $reply_to;
        
        $this->load->library('email', $config);
        
        $this->email->set_newline("\r\n");
        $this->email->to($to);
        $this->email->from($from, 'Journals Club');
        $this->email->reply_to($reply_to, 'No-reply');
        $this->email->subject($subject);
        $this->email->message($message);
        
        $log_data = array();
        $log_data['to'] = $to;
        $log_data['from'] = $from;
        $log_data['subject'] = $subject;
        $log_data['message'] = $message;
        
        if($this->email->send())
        {    
            log_message('info', 'Email sent: '.print_r($log_data, TRUE));
            return true;
        }
        else
        {
            log_message('info', 'Problem in sending email: '.print_r($log_data, TRUE).$this->email->print_debugger());
            return false;
        }  
    }

    
 }
 
?>