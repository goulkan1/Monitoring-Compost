<?php

 
class Model_monitoring extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
  
    
    function get_all_monitoring()
    {
        $this->db->select('*');
        $this->db->from("monitoring");
        return $this->db->get()->result_array();
    }
 
}