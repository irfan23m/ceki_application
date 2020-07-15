<?php 
/**
 * 
 */
class Ceki extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ceki_model');
	}

	function index(){
		$this->load->view('ceki_main_view');
	}

	function ceki_main_data(){
		$data = $this->ceki_model->ceki_main_list();

		echo json_encode($data);
	}

	function ceki_main_save(){
		$data = $this->ceki_model->save_row_main();

		echo json_encode($data);
	}

	function ceki_main_update(){
		$data = $this->ceki_model->update_row_main();

		echo json_encode($data);
	}

	function ceki_main_delete(){
		$data = $this->ceki_model->delete_row_main();

		echo json_encode($data);
	}

	function empty_ceki_main(){
		$data = $this->ceki_model->empty_ceki_main();

		echo json_encode($data);
	}
}
 ?>