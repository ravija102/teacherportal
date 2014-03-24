<?php
/*
 * Created on 07-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class Users_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    function get_user($where = array())
    {
        
        $query = $this->db->get_where('users', $where);
        return $query->result();
    }
    function add_user($user_data) {
        
        if(!empty($user_data)) {

            $this->db->where('email',$user_data['email']);

            $query = $this->db->get('users');

            if($query->num_rows > 0) {

                return 0;
            }
            else {

                $this->db->insert('users',$user_data);
                return 1;
            }
        }
            return false;
    }
 
 }