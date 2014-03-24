<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Banner_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_banner() {
        
        $query = $this->db->get('banner_list');
        
        return $query->result();   
    }
    public function get1_banner($where = array()) {
        
        if(! empty($where)) {
        
            $query = $this->db->get_where('banner_list',$where);
            return $query->result();
        }
        else {
            
            return 0;
        }   
    }
    public function add_banner($banner_data) {
        
        if(!empty($banner_data)) {
            
            $this->db->where('banner_name',$banner_data['banner_name']);
            
            $query = $this->db->get('banner_list');
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('banner_list',$banner_data);
                
                return 1;
            }
        }
        
            return false;    
    }
    public function update_banner($banner_id,$banner_data) {
        
        if(!empty($banner_data) && $banner_id > 0)
    	{
    		$data['createdon'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('banner_list', $banner_data, array('id' => $banner_id));
    		return $res;
    	}
		else
			return 0;
    }
    public function delete_banner($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('banner_list',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}