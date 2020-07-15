<?php 

/**
 * 
 */
class Ceki_history_model extends CI_Model
{
	
	public function list_ceki_hist(){
 		$this->db->from('ceki_history');
 		$this->db->order_by('play_date', 'asc');

 		$hasil = $this->db->get();
 		return $hasil->result();
 	}

	public function save_ceki_hist(){
		ini_set('date.timezone', 'Asia/Jakarta');

		$ceki_id = uniqid();
		$data = array('ceki_id'=>$ceki_id,
					'player_1'=>$this->input->post('player_1'),
					'player_2'=>$this->input->post('player_2'),
					'player_3'=>$this->input->post('player_3'),
					'player_4'=>$this->input->post('player_4'),
					'play_date'=>date('Y-m-d h:i:s'));

		$hasil = $this->db->insert('ceki_history',$data);
		$this->session->set_userdata($data);

		return $hasil;
	}

	public function update_ceki_hist(){
		$ceki_hist_id = $this->input->post('ceki_hist_id');
		$last_score_p1 = $this->input->post('last_score_p1');
		$last_score_p2 = $this->input->post('last_score_p2');
		$last_score_p3 = $this->input->post('last_score_p3');
		$last_score_p4 = $this->input->post('last_score_p4');
		$winner = $this->input->post('winner');

		$this->db->set('last_score_p1',$last_score_p1);
		$this->db->set('last_score_p2',$last_score_p2);
		$this->db->set('last_score_p3',$last_score_p3);
		$this->db->set('last_score_p4',$last_score_p4);
		$this->db->set('winner',$winner);
		$this->db->where('ceki_id',$ceki_hist_id);

		$hasil = $this->db->update('ceki_history');
		return $hasil;
	}

	public function delete_ceki_hist(){
		$ceki_id = $this->input->post('ceki_id');

		$this->db->where('ceki_id',$ceki_id);
		$hasil = $this->db->delete('ceki_history');

		return $hasil;
	}
}
?>