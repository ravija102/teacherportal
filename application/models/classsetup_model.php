<?php
/*
 * Created on 25-Mar-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class Classsetup_model extends CI_Model {

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
    function get_gradeweight($where = array(), $start = -1,$t_id) {
        
        //if(!empty($where))
            //$this->db->where($where);
        if($start >= 0)
            
            $this->db->limit($where, $start);
            $this->db->where('teacher_id',$t_id);
            $query = $this->db->order_by('id', 'ASC')->get('grade_weight');
            return $query->result();
    }
    function get_gradeweight1($where = array()) {
        
        if(!empty($where)){
            
            $this->db->where($where);
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
    function update_gradeweight($grade_data) {
        
        if(!empty($grade_data)) {
            
            $this->db->where('id',$grade_data['id']);
            $query = $this->db->update('grade_weight',$grade_data);
            return 1;
        }
        else {
            
            return false;
        }
    }
    function delete_gradeweight($where = array()) {
        
        if(!empty($where)) {
            
            $this->db->delete('grade_weight',$where);
            return 1;
        }
        return false;
    }
    function add_class($class_data) {
        
        if(!empty($class_data)) {
            
            $query = $this->db->insert('class_setup',$class_data);
            return $query;
        }
        else {
            
            return FALSE;
        }
    }
    function get_students($where = array()) {
        
        if(isset($where) && $where > 0) { 
            
            $this->db->where('gradelevel_id',$where);
            $query = $this->db->get('student');
            
            return $query->result();
        }
        else {
            
            return false;
        }
    }
}

?>