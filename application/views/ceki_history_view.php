<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('_partials/head.php') ?>
	<title>Ceki History</title>
</head>
<body>
	<!-- <?php 
		 $check_session = $this->session->userdata('ceki_id');
		 if ($check_session) {
		 	
		 }else{
		 	$redirect = site_url('ceki_history/ceki_hist_register');
		 	echo "<script>
		 			window.location.href = '".$redirect."';
		 		 </script>";
		 }
	 ?> -->

	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
		    <div class="col-12">
		        <div class="col-md-12">
		          <h1>Ceki
		            <small>History List</small>
		           	<div class="float-right"><a id="btn_back" href="javascript:window.history.go(-1);" class="btn btn-primary"><span class="faa fa-plus"></span>Back</a></div>
		          </h1>
		        </div>

		        <table class="table table-striped" id="myData">
		          <thead>
		            <tr>
		            	<th>Play Date</th>
			            <th>Player 1 Name</th>
			            <th>Player 2 Name</th>
			            <th>Player 3 Name</th>
			            <th>Player 4 Name</th>
			            <th>Last Score P1</th>
			            <th>Last Score P2</th>
			            <th>Last Score P3</th>
			            <th>Last Score P4</th>
			            <th>Winner</th>
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
    <?php $this->load->view("_partials/modal_hist.php") ?>
  	<!--END MODAL -->

  	<!-- JS -->
    <?php $this->load->view("_partials/js_hist.php") ?> 
    <?php $this->load->view("_partials/delete_hist_verification_js.php") ?>
  	<!-- END JS -->
</body>
</html>