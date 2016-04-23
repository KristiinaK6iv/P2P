<?php

class Databaseads extends CI_Model{

	
	//To show all the ad's that are in db.
	public function getData(){
	 	$query = $this->db->get('v_all_data');
		return $query->result();
	}
	
	//To get ads that logged in person has added
	public function get_personal_ads(){
		$stored_procedure = "CALL get_personal_ads(?,?)";
		$full_name=$_SESSION['name'];
		$e_mail=$_SESSION['email'];
		$query=$this->db->query($stored_procedure,array('full_name'=>$full_name,'e_mail'=>$e_mail));
		
		return $query->result();
	}

	//To see how many ads are there in total
	public function getCountAll(){
		$query = $this->db->get('v_countall');
		$ret = $query->row();
		return $ret->count;
	}


	//To see statistic about how many ad's are in different categories.
	public function getSum(){

		

		$query=$this->db->get('v_statistics');
		return $query->result();
	}
	//To see statistic about how many ad's are in different cities.
	public function getCityStatistic(){

		$query=$this->db->get('v_city');
		return $query->result();
	}
	public function getCategoryData(){
		$type = $this->uri->segment(3);
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
		elseif($type == "Puhastusteenused"){

			// Calling view from database
			$query = $this->db->get('v_puhastusteenused');
			return $query->result();
		}
		else{
			return array();
		}
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