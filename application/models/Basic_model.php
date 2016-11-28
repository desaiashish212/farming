<?php
    /**
     *
     */
    class Basic_model extends CI_Model
    {

      function index()
      {
        # code...
      }

      public function validate_signin($data)
      {
        $email = $data['email'];
        $password = $data['password'];

		$query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
		$this->db->query($query);
		return $this->db->affected_rows();
      }
      
      public function add_branch($data){
      	
      //	$query = "insert into branch values('$data['name']','$data['address']')";
		print_r($data);
      	die();
      	return $this->db->insert('branch',$data);
      	
      }
      
      public function add_branch_admin($data){
      	//	$query = "insert into branch values('$data['name']','$data['address']')";
      	return $this->db->insert('sub_admin',$data);
      	 
      }

    }

 ?>
