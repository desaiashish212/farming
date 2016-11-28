<html>
	<?php 
		$this->load->view('layout/head.php');
		
	?>
	<body class="nav-md">
	    <div class="container body">
    	  <div class="main_container">
		<?php 
		$this->load->view('layout/header.php');
		$this->load->view('pages/'.$page_name);
	?>	
	</div>
	</div>
	<?php 
		$this->load->view('layout/footer.php');
		$this->load->view('layout/js.php');
	?>
	</body>
</html>
