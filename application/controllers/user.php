<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function index()
  {

       $this->load->model('usermodel');
    $data['fetch_data'] = $this->usermodel->fetch();
    $this->load->view('user_list', $data);
  }

  public function insert_data()
  {

    $this->load->model('usermodel');

    $data = array(
      'name'     => $this->input->post('name'),
      'email'  => $this->input->post('email'),
      'gender'   => $this->input->post('gender'),
      'birthdate' => $this->input->post('birthdate'),
      'mobileno'  => $this->input->post('mobileno'),
      'address'   => $this->input->post('address'),
      'state' => $this->input->post('state')
    );
    $this->usermodel->insert($data);

    redirect("user");
  }

  public function delete($id = NULL)
  {
    $this->load->model('usermodel');
    $id = $this->input->get('id');
    $result = $this->usermodel->delete($id);

    if ($result) {

      redirect('user');
    }
  }

  public function update()
  {
    $user_id = $this->input->get('id');
    $this->load->model("usermodel");
    $data['user_data'] = $this->usermodel->fetch_data($user_id);
    $data['fetch_data'] = $this->usermodel->fetch();
    $this->load->view("user_list", $data);
  }

  public function update_data()
  {
    $this->load->model("usermodel");
    $data = array(
      'user_id'     => $this->input->post('user_id'),
      'name'     => $this->input->post('name'),
      'email'  => $this->input->post('email'),
      'gender'   => $this->input->post('gender'),
      'birthdate' => $this->input->post('birthdate'),
      'mobileno'  => $this->input->post('mobileno'),
      'address'   => $this->input->post('address'),
      'state' => $this->input->post('state')
    );
    $this->usermodel->update($data);
    redirect("user");
  }
}
