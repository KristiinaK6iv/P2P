<?php

class Databaseads extends CI_Model{


	//To show all the ad's that are in db.
	public function getData(){


		
	 	$query = $this->db->get('v_all_data');
        
		return $query->result();
	}


	//To see statistic about how many ad's are in different categories.
	public function getSum(){

		

		$query=$this->db->get('v_statistics');
		return $query->result();
	}
	

	//sellega andmebaasi päring ajax scripti jaoks
	public function getCategoryAjax(){
		
		$type = $this->input->post('type');
		
		if ($type == "Opetamine"){
			$type = "Õpetamine";
			
			// Calling view from database
			$query = $this->db->get('v_opetamine');
			return $query->result();
		}
		elseif ($type == "IT-teenused") {
			
			// Calling view from database
			$query = $this->db->get('v_it_teenused');
  			return $query->result();
		}
		elseif($type == "Iluteenused"){
			
			// Calling view from database
			$query = $this->db->get('v_iluteenused');
  			return $query->result();
		}
		elseif($type == "Finantsteenused"){
			
			// Calling view from database
			$query = $this->db->get('v_finantsteenused');
  			return $query->result();
		}
		elseif($type == "Varia"){
			
			// Calling view from database
			$query = $this->db->get('v_varia');
  			return $query->result();
		}
		else{
			
			// Calling view from database
			$query = $this->db->get('v_puhastusteenused');
  			return $query->result();
		}
		
	}
}


?>