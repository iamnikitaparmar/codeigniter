<?php
class Usermodel extends CI_Model
{

  public function insert($data)
  {

    if ($data) {

      $res = $this->db->insert('user_details', $data);
      if ($res) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }


  public function fetch()
  {
    $this->db->select('*');
    $query = $this->db->get('user_details');
    return $query;
  }


  public function delete($id)
  {

    if ($id) {
      $this->db->where('user_id', $id);
      $res = $this->db->delete('user_details');
      if ($res) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }


  public function fetch_data($id = NULL)
  {

    if ($id) {
      $this->db->select('*');
      $this->db->where('user_id', $id);

      $result = $this->db->get('user_details');
      $user = array();
      foreach ($result->result() as $row) {
        $user = $row;
      }
      return $user;
    } else {
      return false;
    }
  }

  public function update($data)
  {

    if ($data) {

      $this->db->where('user_id', $data['user_id']);
      $res = $this->db->update('user_details', $data);
      if ($res) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}
