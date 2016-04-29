<?php

class Master_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
   public function insert( $data, $table )
    {
        $this->db->insert( $table, $data ); 
        
    }
   public function delete( $condition, $id, $table )
    {
       $data = array('status' => "inactive");
       $this->db->where( $condition );
       $this->db->update( $table, $data ); 
        
    }
   public function update( $condition, $data, $table )
    {
       $this->db->where($condition);
       $this->db->update($table, $data); 
        
    }
   public function editData( $condition, $id, $table )
    {
       $this->db->select('*');
        $this->db->from($table);
        $this->db->where($condition);
        $sql = $this->db->get();
        $result = $sql->result_array();
        return $result;
        
    }
   public function datalist( $table )
    {
       $data = array('status' => "active");
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($data);
        $sql = $this->db->get();
        $result = $sql->result_array();
        return $result;
        
    }
   public function areaList()
    {
       $sql = $this->db->query('SELECT a.`area_id`, a.`area_name`, a.`city_id`,c.city_name FROM `area` as a
                                    left join city as c on a.city_id = c.city_id
                                    WHERE a.status="active"');
        $result = $sql->result_array();
        return $result;
        
    }
   public function companyList()
    {
       $sql = $this->db->query('SELECT c.`company_id`, c.`company_name`, c.`category_id`, c.`status`, c.`created_at`,cat.category_name FROM `company` as c
                                LEFT JOIN category as cat on cat.category_id = c.category_id
                                WHERE c.status="active"');
        $result = $sql->result_array();
        return $result;
        
    }
   public function serviceList()
    {
       $sql = $this->db->query('SELECT c.`service_id`, c.`service_name`, c.`category_id`, c.`status`, c.`created_at`,cat.category_name FROM `service` as c
                                LEFT JOIN category as cat on cat.category_id = c.category_id
                                WHERE c.status="active"');
        $result = $sql->result_array();
        return $result;
        
    }
}

?>