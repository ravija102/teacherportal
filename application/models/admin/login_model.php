<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function validate($where = array()) {
        
        $query = $this->db->get_where('admin', $where);
        
        return $query->result();   
    }
    public function get_user($where = array()) {
        
        $query = $this->db->get_where('admin',$where);
        
        return $query->result();   
    }
    public function add_user($user_data) {
        
        $this->db->where('email_id',$user_data['email_id']);
        $query = $this->db->get('admin');
        
        if($query->num_rows > 0) {
                
            return 0;
        }
        else {
			
            $data['createdon'] = date('Y-m-d H:i:s');
            $res = $this->db->insert('admin', $user_data);
            
            return 1;
        }	   
    }
    public function update_user($user_id,$user_data) {
        
        //print_r($user_data); exit;
        if(!empty($user_data) && $user_id > 0)
    	{
    		$data['datetime_modified'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('admin', $user_data, array('id' => $user_id));
    		return $res;
    	}
		else
			return 0;   
    }
    public function update_password($user_id,$password_data) {
        
        //print_r($user_data); exit;
        if(!empty($password_data) && $user_id > 0)
    	{
    		$data['datetime_modified'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('admin', $password_data, array('id' => $user_id));
    		return $res;
    	}
		else
			return 0;   
    }
    public function delete_user($id) {
        
        if($id > 0)
            
            $query = $this->db->delete('admin',array('id' => $id));
        else
            
            return false;   
    }
}