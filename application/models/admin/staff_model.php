<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Staff_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_staff() {
        
        $query = $this->db->get('staff');
        
        return $query->result();   
    }
    public function get1_staff($where = array()) {
        
        if(! empty($where)) {
        
            $query = $this->db->get_where('staff',$where);
            return $query->result();
        }
        else {
            
            return 0;
        }   
    }
    public function add_staff($staff_data) {
        
        if(!empty($staff_data)) {
            
            $this->db->where('name',$staff_data['name']);
            
            $query = $this->db->get('staff');
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('staff',$staff_data);
                
                return 1;
            }
        }
        
            return false;
    }
    public function update_staff($staff_id,$staff_data) {
        
        if(!empty($staff_data) && $staff_id > 0)
    	{
            //$this->db->where('name',$staff_data['name']);
            $sql = "SELECT * FROM staff WHERE id != ? AND name = ? ";
            $row = $this->db->query($sql,  array($staff_id,$staff_data['name']));
            
            if($row->num_rows > 0) {
              
                return 0;
            }
            else {

    		$data['createdon'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('staff', $staff_data, array('id' => $staff_id));
    		return $res;
            }
    	}
	else {
		return false;
        }
    }
    public function delete_staff($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('staff',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}