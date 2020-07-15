<?php 

/**
  * 
  */
 class Ceki_model extends CI_Model
 {
 	public function ceki_main_list(){
 		$this->db->from('ceki_main');
 		$this->db->order_by('row_added');

 		$hasil = $this->db->get();
 		return $hasil->result();
 	}	

 	public function save_row_main(){
 		$score_p1 = $this->input->post('score_p1');
		$score_p2 = $this->input->post('score_p2');
		$score_p3 = $this->input->post('score_p3');
		$score_p4 = $this->input->post('score_p4');

 		$this->db->from('ceki_main');
 		$this->db->order_by('row_added', 'desc');
 		$this->db->limit(1);

 		$hasil = $this->db->get();
 		if ($hasil) {
 			foreach($hasil->result_array() AS $row) {
	 			$score_p1 = $score_p1 + $row['score_p1'];
	 			$score_p2 = $score_p2 + $row['score_p2'];
	 			$score_p3 = $score_p3 + $row['score_p3'];
	 			$score_p4 = $score_p4 + $row['score_p4'];

	 			if ($row['score_p1'] >= 100 ) {
	 				if ($score_p2 > $score_p1 && $row['score_p2'] <= $row['score_p1']) {
	 					$score_p1 = 0;
	 				}
	 				if ($score_p3 > $score_p1 && $row['score_p3'] <= $row['score_p1']) {
	 					$score_p1 = 0;
	 				}
	 				if ($score_p4 > $score_p1 && $row['score_p4'] <= $row['score_p1']) {
	 					$score_p1 = 0;
	 				}
		 		}	
		 		if ($row['score_p2'] >= 100 ) {
	 				if ($score_p1 > $score_p2 && $row['score_p1'] <= $row['score_p2']) {
	 					$score_p2 = 0;
	 				}
	 				if ($score_p3 > $score_p2 && $row['score_p3'] <= $row['score_p2']) {
	 					$score_p2 = 0;
	 				}
	 				if ($score_p4 > $score_p2 && $row['score_p4'] <= $row['score_p2']) {
	 					$score_p2 = 0;
	 				}
		 		}
		 		if ($row['score_p3'] >= 100 ) {
	 				if ($score_p1 > $score_p3 && $row['score_p1'] <= $row['score_p3']) {
	 					$score_p3 = 0;
	 				}
	 				if ($score_p2 > $score_p3 && $row['score_p2'] <= $row['score_p3']) {
	 					$score_p3 = 0;
	 				}
	 				if ($score_p4 > $score_p3 && $row['score_p4'] <= $row['score_p3']) {
	 					$score_p3 = 0;
	 				}
		 		}
		 		if ($row['score_p4'] >= 100 ) {
	 				if ($score_p1 > $score_p4 && $row['score_p1'] <= $row['score_p4']) {
	 					$score_p4 = 0;
	 				}
	 				if ($score_p2 > $score_p4 && $row['score_p2'] <= $row['score_p4']) {
	 					$score_p4 = 0;
	 				}
	 				if ($score_p3 > $score_p4 && $row['score_p3'] <= $row['score_p4']) {
	 					$score_p4 = 0;
	 				}
		 		}
	 		}
 		}
 		
 		ini_set('date.timezone', 'Asia/Jakarta');
 		$data = array('ceki_id'=>$this->input->post('ceki_id'),
 					'row_id'=>rand(1000,9999),
 					'score_p1'=>$score_p1,
 					'score_p2'=>$score_p2,
 					'score_p3'=>$score_p3,
 					'score_p4'=>$score_p4,
 					'row_added'=>date('Y-m-d h:i:s')
 						);

 		$hasil = $this->db->insert('ceki_main',$data);

 		return $hasil;
 	}

 	public function update_row_main(){
 		$row_id = $this->input->post('row_id');
 		$score_p1 = $this->input->post('score_p1');
 		$score_p2 = $this->input->post('score_p2');
 		$score_p3 = $this->input->post('score_p3');
 		$score_p4 = $this->input->post('score_p4');

 		$this->db->from('ceki_main');
 		$this->db->order_by('row_added', 'desc');
 		$this->db->limit(1,1);

 		$hasil = $this->db->get();	
 		if ($hasil) {
 			foreach($hasil->result_array() AS $row) {
	 			$score_p1 = $score_p1 + $row['score_p1'];
	 			$score_p2 = $score_p2 + $row['score_p2'];
	 			$score_p3 = $score_p3 + $row['score_p3'];
	 			$score_p4 = $score_p4 + $row['score_p4'];

	 			if ($row['score_p1'] >= 100 ) {
	 				if ($score_p2 > $score_p1 && $row['score_p2'] <= $row['score_p1']) {
	 					$score_p1 = 0;
	 				}
	 				if ($score_p3 > $score_p1 && $row['score_p3'] <= $row['score_p1']) {
	 					$score_p1 = 0;
	 				}
	 				if ($score_p4 > $score_p1 && $row['score_p4'] <= $row['score_p1']) {
	 					$score_p1 = 0;
	 				}
		 		}	
		 		if ($row['score_p2'] >= 100 ) {
	 				if ($score_p1 > $score_p2 && $row['score_p1'] <= $row['score_p2']) {
	 					$score_p2 = 0;
	 				}
	 				if ($score_p3 > $score_p2 && $row['score_p3'] <= $row['score_p2']) {
	 					$score_p2 = 0;
	 				}
	 				if ($score_p4 > $score_p2 && $row['score_p4'] <= $row['score_p2']) {
	 					$score_p2 = 0;
	 				}
		 		}
		 		if ($row['score_p3'] >= 100 ) {
	 				if ($score_p1 > $score_p3 && $row['score_p1'] <= $row['score_p3']) {
	 					$score_p3 = 0;
	 				}
	 				if ($score_p2 > $score_p3 && $row['score_p2'] <= $row['score_p3']) {
	 					$score_p3 = 0;
	 				}
	 				if ($score_p4 > $score_p3 && $row['score_p4'] <= $row['score_p3']) {
	 					$score_p3 = 0;
	 				}
		 		}
		 		if ($row['score_p4'] >= 100 ) {
	 				if ($score_p1 > $score_p4 && $row['score_p1'] <= $row['score_p4']) {
	 					$score_p4 = 0;
	 				}
	 				if ($score_p2 > $score_p4 && $row['score_p2'] <= $row['score_p4']) {
	 					$score_p4 = 0;
	 				}
	 				if ($score_p3 > $score_p4 && $row['score_p3'] <= $row['score_p4']) {
	 					$score_p4 = 0;
	 				}
		 		}
	 		}
 		}

 		$this->db->set('score_p1',$score_p1);
 		$this->db->set('score_p2',$score_p2);
 		$this->db->set('score_p3',$score_p3);
 		$this->db->set('score_p4',$score_p4);
 		$this->db->where('row_id',$row_id);

 		$hasil = $this->db->update('ceki_main');
 		return $hasil;
 	}

 	public function delete_row_main(){
 		$row_id = $this->input->post('row_id');

 		$this->db->where('row_id',$row_id);

 		$hasil = $this->db->delete('ceki_main');
 		return $hasil;
 	}

 	public function empty_ceki_main(){
 		$hasil = $this->db->truncate('ceki_main');
 		$data = array(
 					'ceki_id'=>'',
 					'player_1'=>''
 				);
 		session_destroy();
 		return $hasil;
 	}
 } 

 ?>