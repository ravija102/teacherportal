<?php
/*
 * Created on 01-Apr-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class Subject_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    function get_subject($where = array())
    {
        //print_r($where); exit;
        $query = $this->db->get_where('teachers_subject', $where);
        return $query->result();
    }
    
 }
 
?>