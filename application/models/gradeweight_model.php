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
        
        if(!empty($where))
            $this->db->where($where);
        if($start >= 0)
            $this->db->limit('RECORDS_PER_PAGE', $start);
        $query = $this->db->order_by('grade_weight.CreatedOn', 'DESC')->get('grade_weight');
        return $query->result();
    }
}

?>