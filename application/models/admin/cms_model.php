<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Cms_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_cms() {
        
        $query = $this->db->get('cms');
        
        return $query->result();   
    }
    public function get1_cms($where = array()) {
        
        if(! empty($where)) {
        
            $query = $this->db->get_where('cms',$where);
            return $query->result();
        }
        else {
            
            return 0;
        }   
    }
    public function add_cms($cms_data) {
        
        if(!empty($cms_data)) {
            
            $this->db->where('name',$cms_data['name']);
            
            $query = $this->db->get('cms');
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('cms',$cms_data);
                
                return 1;
            }
        }
        
            return false;
    }
    public function update_cms($cms_id,$cms_data) {
        
        if(!empty($cms_data) && $cms_id > 0)
    	{
            //$this->db->where('name',$cms_data['name']);
            $sql = "SELECT * FROM cms WHERE id != ? AND name = ? ";
            $row = $this->db->query($sql,  array($cms_id,$cms_data['name']));
            if($row->num_rows > 0) {
              
                return 0;
            }
            else {

    		$data['createdon'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('cms', $cms_data, array('id' => $cms_id));
    		return $res;
            }
    	}
	else {
		return false;
        }
    }
    public function delete_cms($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('cms',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}