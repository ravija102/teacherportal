<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class State_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_state() {
        
        $query = $this->db->get('state');
        
        return $query->result();   
    }
    public function get1_state($where = array()) {
        
        if(! empty($where)) {
        
            $query = $this->db->get_where('state',$where);
            return $query->result();
        }
        else {
            
            return 0;
        }   
    }
    public function add_state($state_data) {
        
        if(!empty($state_data)) {
            
            $this->db->where('name',$state_data['name']);
            
            $query = $this->db->get('state');
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('state',$state_data);
                
                return 1;
            }
        }
        
            return false;
    }
    public function update_state($state_id,$state_data) {
        
        if(!empty($state_data) && $state_id > 0)
    	{ 
            //$this->db->where('name',$school_data['name'] AND 'id' != $school_id);
            $sql = "SELECT * FROM state WHERE id != ? AND name = ? ";
            $row = $this->db->query($sql,  array($state_id,$state_data['name']));
            
            if($row->num_rows > 0) {
              
                return 0;
            }
            else {

    		$data['createdon'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('state', $state_data, array('id' => $state_id));
    		return $res;
            }
    	}
	else {
            
            return false;
        }
    }
    public function delete_state($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('state',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}