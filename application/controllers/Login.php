<?php
  /**
   *
   */
  class Login extends CI_Controller
  {

    public function index()
    {
      echo "string";
      # code...
    }

    public function signin()
    {
        echo "string";
        $data['email']=$this->input->post('name');
        $data['password']=$this->input->post('password');

        $status = $this->Basic_model->validate_signin($data);
        
        if($status >0){
        	$data['page_name'] = 'dashboard.php';
        	$this->load->view('mainpage',$data);
        }else {
        	//  $this->Session->set_flashdata('message','Invalid login');
        	$this->load->view('layout/main_page');
        }

    }

  }

 ?>
