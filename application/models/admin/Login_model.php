<?php

class Login_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function check_valid_user($data)
    {        
        $this->db->select('*');
        $this->db->from('admin_user');
        $this->db->where($data);
        $this->db->limit(1);
        $query = $this->db->get();
        if($query -> num_rows() >0) {
            
            $results = $query->result_array();
                 
            return $results;
        }
        else 
        {
            return false;
        }
        
    }
}

?>