<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('_partials/head.php') ?>
	<title>Ceki Application</title>
</head>
<body>
	<div class="container">
		<!-- Page Heading -->
		<div class="row">
		    <div class="col-12">
		        <div class="col-md-12">
		          <h1>Ceki
		            <small>List</small>
		            <div class="float-right"><a id="btn_add" href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="faa fa-plus"></span> Add New Row</a></div>
		            <div class="float-right" style="margin-right: 55px;"><a href="javascript:void(0);" class="btn btn-danger" data-toggle="modal" data-target="#Modal_Reset"><span class="faa fa-sign-out"></span> Reset Game</a></div>
		            <div class="float-right" style="margin-right: 55px;"><a href="<?php echo site_url("ceki_history") ?>" class="btn btn-success"><span class="faa fa-sign-out"></span> Ceki History</a></div>
		          </h1>
		        </div>

		        <table class="table table-striped" id="myData">
		          <thead>

		          	<?php 
						 $check_session = $this->session->userdata('ceki_id');
						 if ($check_session) {
						 	
						 }else{
						 	$redirect = site_url('ceki_history/ceki_hist_register');
						 	echo "<script>
						 			window.location.href = '".$redirect."';
						 		 </script>";
						 }
					 ?>

		            <tr>
		            	<?php
			            	$session_ceki_id = $this->session->userdata('ceki_id'); 
		            		$session_p1 = $this->session->userdata('player_1');
		            		$session_p2 = $this->session->userdata('player_2');
		            		$session_p3 = $this->session->userdata('player_3');
		            		$session_p4 = $this->session->userdata('player_4');
	            		?>
		     			<input type="text" hidden="true" name="ceki_id" id="ceki_id" value="<?php echo $session_ceki_id ?>">

			            <th><?php echo $session_p1; ?></th>
			            <th><?php echo $session_p2; ?></th>
			            <th><?php echo $session_p3; ?></th>
			            <th><?php echo $session_p4; ?></th>
			            <th style="text-align: right;">Actions</th>
		            </tr>
		          </thead>
		          <tbody id="show_data">
		            
		          </tbody>
		        </table>
		    </div>
	    </div>
		<!-- End Page Heading -->
	</div>

	<!-- MODAL -->
    <?php $this->load->view("_partials/modal.php") ?>
  	<!--END MODAL -->

  	<!-- JS -->
    <?php $this->load->view("_partials/js.php") ?>
  	<!-- END JS -->
</body>
</html>