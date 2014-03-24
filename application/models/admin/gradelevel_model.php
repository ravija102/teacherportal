<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Gradelevel_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_gradelevel() {
        
        $query = $this->db->get('grade_level');
        
        return $query->result();   
    }
    public function get1_gradelevel($where = array()) {
        
        if(! empty($where)) {
        
            $query = $this->db->get_where('grade_level',$where);
            return $query->result();
        }
        else {
            
            return 0;
        }   
    }
    public function add_gradelevel($gradelevel_data) {
        
        if(!empty($gradelevel_data)) {
            
            $this->db->where('name',$gradelevel_data['name']);
            
            $query = $this->db->get('grade_level');
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('grade_level',$gradelevel_data);
                
                return 1;
            }
        }
        
            return false;
    }
    public function update_gradelevel($gradelevel_id,$gradelevel_data) {
        
        if(!empty($gradelevel_data) && $gradelevel_id > 0)
    	{
            //$this->db->where('name',$gradelevel_data['name']);
            $sql = "SELECT * FROM grade_level WHERE id != ? AND name = ? ";
            $row = $this->db->query($sql,  array($gradelevel_id,$gradelevel_data['name']));
            
            if($row->num_rows > 0) {
              
                return 0;
            }
            else {

    		$data['createdon'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('grade_level', $gradelevel_data, array('id' => $gradelevel_id));
    		return $res;
            }
    	}
	else {
		return false;
        }
    }
    public function delete_gradelevel($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('grade_level',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}