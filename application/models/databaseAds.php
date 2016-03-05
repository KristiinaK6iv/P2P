<?php

class Databaseads extends CI_Model{
	
	
	//To show all the ad's that are in db.
	public function getData(){
		
		
		$query2="
		SELECT person.person_id, person.full_name, 
		person.phone_nr, person.e_mail, kuulutus.person_id,
		kuulutus.category, kuulutus.description, kuulutus.begin, 
		kuulutus.end from person 
		INNER JOIN kuulutus ON
		person.person_id=kuulutus.person_id
		";
		
		$query=$this->db->query($query2);
		return $query->result();
	}
	
	
	//To see statistic about how many ad's are in different categories.
	public function getSum(){
		
		$query2="
		SELECT category , count(category)as count 
		from kuulutus group by category
		";
		
		$query=$this->db->query($query2);
		return $query->result();
	}
	
	public function getCategoryData(){
		
		$var=$_GET['selected'];
		
		$query2="
		SELECT person.person_id, person.full_name, 
		person.phone_nr, person.e_mail, kuulutus.person_id,
		kuulutus.category, kuulutus.description, kuulutus.begin, 
		kuulutus.end from person 
		INNER JOIN kuulutus ON
		person.person_id=kuulutus.person_id
        WHERE kuulutus.category='" . $var . "'";
		
		$query=$this->db->query($query2);
		return $query->result();
	}
	
	
}


?>