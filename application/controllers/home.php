<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Home extends CI_Controller {
        
        Public function __construct() {
            
            parent::__construct();
            
            // Your own constructor code
//            $this->load->helper(array('url','file','array','string'));
//            $this->load->library('form_validation');
//            $this->load->library('session');
//            $this->load->library('encrypt');
//            $this->load->library('paypal');
            
            $this->template->set_template('default');
//            $this->template->write('title', 'Teacher Portal');
//            $this->template->write('content', 'You one ');
//            $title
            // Load Model
            $this->load->model('users_model');

         
        }

    }

?>