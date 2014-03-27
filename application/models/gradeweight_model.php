<?php
/*
 * Created on 25-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class Gradeweight_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    public function record_count($where = array())
    {
        return $this->db->where($where)->count_all("grade_weight");
    }
    function get_gradeweight($where = array(), $start = -1) {
        
        //if(!empty($where))
            //$this->db->where($where);
        if($start >= 0)
            
            $this->db->limit($where, $start);
            $query = $this->db->order_by('id', 'ASC')->get('grade_weight');
            return $query->result();
    }
    function get_gradeweight1($where = array()) {
        
        if(!empty($where)){
            
            $this->db->where('id',$where);
            $query = $this->db->get('grade_weight');
            return $query->result();
        }
    }
    function add_gradeweight($grade_data) {
        
        if(!empty($grade_data)){
            
            $query = $this->db->insert('grade_weight',$grade_data);
            return 1;
        }
        else {
            
            return false;
        }
    }
}

?>