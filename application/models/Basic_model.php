<<?php
    /**
     *
     */
    class Basic_model extends CI_Controller
    {

      function index()
      {
        # code...
      }

      public function validate_signin($data)
      {
        $email = $data['email'];
        $password = $data['password'];

        return $this->db->get_where('admin',$data)->num_rows();
//print_r($status) ;
//die();
        


      }
      
      public function add_branch($data){
      	
      //	$query = "insert into branch values('$data['name']','$data['address']')";
      return $this->db->insert('branch',$data);
      	
      }
      
      public function add_branch_admin($data){
      	 
      	//	$query = "insert into branch values('$data['name']','$data['address']')";
      	return $this->db->insert('sub_admin',$data);
      	 
      }

    }

 ?>
