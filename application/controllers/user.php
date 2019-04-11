<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  

class User extends CI_Controller
{
    public function index()  
  {  
      $this->load->model('usermodel');
      $data['fetch_data'] = $this->usermodel->fetch();

     // $this->load->view('user_list');
     $this->load->view('user_list',$data);
  }

  public function insert_data(){

    $this->load->model('usermodel');
    $data = array(
        'name'     => $this->input->post('name'),  
        'email'  => $this->input->post('email'),  
        'gender'   => $this->input->post('gender'),  
        'birthdate' => $this->input->post('birthdate') , 
        'mobileno'  => $this->input->post('email'),  
        'address'   => $this->input->post('address'),  
        'state' => $this->input->post('state')  
    );

    $this->usermodel->insert($data);

    redirect("user/index");
  }
 
public function delete(){

    $this->load->model('usermodel');
    $id=$this->input->get('id');
    $this->usermodel->delete($id);
    redirect("user/index");
}
  

}