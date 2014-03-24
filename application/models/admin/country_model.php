<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Country_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_country() {
        
        $query = $this->db->get('country');
        
        return $query->result();   
    }
    public function get1_country($where = array()) {
        
        if(! empty($where)) {
        
            $query = $this->db->get_where('country',$where);
            return $query->result();
        }
        else {
            
            return 0;
        }   
    }
    public function add_country($country_data) {
        
        if(!empty($country_data)) {
            
            $this->db->where('name',$country_data['name']);
            
            $query = $this->db->get('country');
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('country',$country_data);
                
                return 1;
            }
        }
        
            return false;
    }
    public function update_country($country_id,$country_data) {
        
        if(!empty($country_data) && $country_id > 0)
    	{ 
            //$this->db->where('name',$school_data['name'] AND 'id' != $school_id);
            $sql = "SELECT * FROM country WHERE id != ? AND name = ? ";
            $row = $this->db->query($sql,  array($country_id,$country_data['name']));
            
            if($row->num_rows > 0) {
              
                return 0;
            }
            else {

    		$data['createdon'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('country', $country_data, array('id' => $country_id));
    		return $res;
            }
    	}
	else {
            
            return false;
        }
    }
    public function delete_country($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('country',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}