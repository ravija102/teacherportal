<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Unit_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_unit($where = array()) {
        
        if(!empty($where)) { $this->db->where($where); }
        
        $query = $this->db->get('unit');
        
        return $query->result();   
    }
    public function add_unit($unit_data) {
        
        if(!empty($unit_data)) {
            
            $this->db->where('name',$unit_data['name']);
            
            $query = $this->db->get('unit');
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('unit',$unit_data);
                return 1;
            }
        }
            return false;
    }
    public function update_unit($unit_id,$unit_data) {
        
        if(!empty($unit_data) && $unit_id > 0)
    	{
            //$this->db->where('name',$gradelevel_data['name']);
            $sql = "SELECT * FROM unit WHERE id != ? AND name = ? ";
            $row = $this->db->query($sql,  array($unit_id,$unit_data['name']));
            
            if($row->num_rows > 0) {
              
                return 0;
            }
            else {

    		$res = $this->db->update('unit', $unit_data, array('id' => $unit_id));
    		return $res;
            }
    	}
	else {
		return false;
        }
    }
    public function delete_unit($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('unit',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}