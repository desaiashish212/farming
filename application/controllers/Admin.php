<?php 
	
	class Admin extends CI_Controller{
		
		public function index(){
			
		}
		
		public function dashboard(){
			$data['page_name'] = 'dashboard.php';
			$this->load->view('mainpage',$data);
			 
		}
		
		public function add_branch(){
			$data['page_name'] = 'add_branch.php';
			$this->load->view('mainpage',$data);
		
		}
		
		public function manage_branch($task =""){
			
			if ($task=='create'){
				$data['branch_name']= $this->input->post('name');
				$data['address']= $this->input->post('address');
				$status = $this->Basic_model->add_branch($data);
				if ($status != null){
					echo "succefull";
					redirect(base_url().'index.php/admin/manage_branch');
				}else {
					echo "unsuccefull";
				}
			}
			
			$data['page_name'] = 'manage_branch.php';
			$this->load->view('mainpage',$data);
		
		}
		
		public function manage_branch_admin($task =""){
				
			if ($task=='create'){
				
				$data['name']= $this->input->post('name');
				$data['email']= $this->input->post('email');
				$data['password']= $this->input->post('password');
				$data['mobile']= $this->input->post('mobile');
				$data['branch_name']= $this->input->post('branch');
				
				$status = $this->Basic_model->add_branch_admin($data);
				if ($status != null){
					echo "succefull";
					redirect(base_url().'index.php/admin/manage_branch_admin');
				}else {
					echo "unsuccefull";
				}
			}
				
			$data['page_name'] = 'manage_branch_admin.php';
			$this->load->view('mainpage',$data);
		
		}
		
		public function add_branch_admin(){
			$data['page_name'] = 'add_branch_admin.php';
			$this->load->view('mainpage',$data);
		
		}
		
		
		
	}	

?>
