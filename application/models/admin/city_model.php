<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class City_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_city($where = array()) {
        
        if(!empty($where)) { $this->db->where($where); }
        
        $query = $this->db->get('city');
        
        return $query->result();   
    }
    public function add_city($city_data) {
        
        if(!empty($city_data)) {
            
            //$this->db->where('name',$state_data['name']);
            $sql = ("SELECT * FROM city WHERE country_id='".$city_data['country_id']."' AND state_id='".$city_data['state_id']."' AND name='".$city_data['name']."' ");
            
            $query = $this->db->query($sql);
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('city',$city_data);
                
                return 1;
            }
        }
        
            return false;
    }
    public function update_city($city_id,$city_data) {
        
        if(!empty($city_data) && $city_id > 0)
    	{ 
            //$this->db->where('name',$school_data['name'] AND 'id' != $school_id);
            $sql = "SELECT * FROM city WHERE id != ? AND name = ? AND country_id = ? AND state_id = ? ";
            $row = $this->db->query($sql,  array($city_id,$city_data['name'],$city_data['country_id'],$city_data['state_id']));
            
            if($row->num_rows > 0) {
              
                return 0;
            }
            else {

    		$res = $this->db->update('city', $city_data, array('id' => $city_id));
    		return $res;
            }
    	}
	else {
            
            return false;
        }
    }
    public function delete_city($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('city',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}