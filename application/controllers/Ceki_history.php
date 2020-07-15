<?php 
/**
 * 
 */
class Ceki_history extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ceki_history_model');
	}

	function index(){
		$this->load->view('ceki_history_view');
	}

	function ceki_hist_register(){
		$this->load->view('ceki_register_view');
	}

	function ceki_hist_list(){
		$data = $this->ceki_history_model->list_ceki_hist();

		echo json_encode($data);
	}

	function ceki_hist_save(){
		$data = $this->ceki_history_model->save_ceki_hist();

		echo json_encode($data);
	}

	function ceki_hist_update(){
		$data = $this->ceki_history_model->update_ceki_hist();

		echo json_encode($data);
	}

	function ceki_hist_delete(){
		$data = $this->ceki_history_model->delete_ceki_hist();

		echo json_encode($data);
	}
}
?>