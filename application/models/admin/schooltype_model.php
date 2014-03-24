<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Schooltype_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_school() {
        
        //$query = $this->db->order_by('school_type.createdon','DESC')->get('school_type');
        $query = $this->db->get('school_type');
        return $query->result();   
    }
    public function get1_school($where = array()) {
        
        if(! empty($where)) {
        
            $query = $this->db->get_where('school_type',$where);
            return $query->result();
        }
        else {
            
            return 0;
        }   
    }
    public function add_school($school_data) {
        
        if(!empty($school_data)) {
            
            $this->db->where('name',$school_data['name']);
            
            $query = $this->db->get('school_type');
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('school_type',$school_data);
                
                return 1;
            }
        }
        
            return false;
    }
    public function update_school($school_id,$school_data) {
        
        if(!empty($school_data) && $school_id > 0)
    	{ 
            //$this->db->where('name',$school_data['name'] AND 'id' != $school_id);
            $sql = "SELECT * FROM school_type WHERE id != ? AND name = ? ";
            $row = $this->db->query($sql,  array($school_id,$school_data['name']));
            
            if($row->num_rows > 0) {
              
                return 0;
            }
            else {

    		$data['createdon'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('school_type', $school_data, array('id' => $school_id));
    		return $res;
            }
    	}
	else {
            
            return false;
        }
    }
    public function delete_school($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('school_type',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}