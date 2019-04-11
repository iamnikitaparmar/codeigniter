<?php

class Usermodel extends CI_Model{

    public function insert($data)
    {
       $this->db->insert("user_details",$data);
    }

    public function fetch()
    {
      $query = $this->db->get("user_details");
      return $query; 
    }

   public function delete($id)
    {
    $this->db->query("delete  from user_details where user_id='".$id."'");
    }
}