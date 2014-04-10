<?php
/*
 * Created on 29-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class studentmgmt_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    public function record_count($where = array())
    {
        return $this->db->where($where)->count_all("users");
    }
    function get_studentgrouping($where = array(), $start = -1) {
        
        //if(!empty($where))
            //$this->db->where($where);
        if($start >= 0)
            
            $this->db->limit($where, $start);
            $query = $this->db->order_by('id', 'ASC')->get('users');
            return $query->result();
    }
    
}