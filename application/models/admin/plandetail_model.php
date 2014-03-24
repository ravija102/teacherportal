<?php 
if ( ! defined('BASEPATH')) 
        exit('No direct script access allowed');

class Plandetail_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    public function get_plan() {
        
        $query = $this->db->get('plan_detail');
        
        return $query->result();   
    }
    public function get1_plan($where = array()) {
        
        if(! empty($where)) {
        
            $query = $this->db->get_where('plan_detail',$where);
            return $query->result();
        }
        else {
            
            return 0;
        }   
    }
    public function add_plan($plan_data) {
        
        if(!empty($plan_data)) {
            
            $this->db->where('name',$plan_data['name']);
            
            $query = $this->db->get('plan_detail');
            
            if($query->num_rows > 0) {
                
                return 0;
            }
            else {
                
                $this->db->insert('plan_detail',$plan_data);
                
                return 1;
            }
        }
        
            return false;
    }
    public function update_plan($plan_id,$plan_detail) {
        
        if(!empty($plan_detail) && $plan_id > 0)
    	{
            //$this->db->where('name',$plan_detail['name']);
            $sql = "SELECT * FROM plan_detail WHERE id != ? AND name = ? ";
            $row = $this->db->query($sql,  array($plan_id,$plan_detail['name']));
            
            if($row->num_rows > 0) {
              
                return 0;
            }
            else {

    		$data['createdon'] = date('Y-m-d H:i:s');
    		$res = $this->db->update('plan_detail', $plan_detail, array('id' => $plan_id));
    		return $res;
            }
    	}
	else {
		return false;
        }
    }
    public function delete_plan($where = array()) {
        
        if(! empty($where)) {
            
            $res = $this->db->delete('plan_detail',$where);
            return $res;
        }
        else {
            
            return 0;
        }
    }
    
}