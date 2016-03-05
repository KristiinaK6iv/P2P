<?php

class Insert_model extends CI_Model{
	
	public function saveData(){
		
		$this->load->library('form_validation');
		
		//Rules
		$this->form_validation->set_rules('fullName', 'Nimi', 'required');
		$this->form_validation->set_rules('phone_nr', 'Telefoni number', 'required|numeric');
		$this->form_validation->set_rules('e_mail', 'E-mail', 'required|valid_email');
		$this->form_validation->set_rules('category', 'Kategooria', 'required');
		$this->form_validation->set_rules('description', 'Kirjeldus', 'required');
		$this->form_validation->set_rules('begin', 'Alguskuupäev', 'required');
		$this->form_validation->set_rules('end', 'Lõppkuupäev', 'required');
		
		
		//Controlling rules
		if($this->form_validation->run()==FALSE){
			$this->load->view('minuKuulutused');
		}else{
			$data["message"]="Everything is ok";
			$this->load->view('minuKuulutused',$data);
			
			$form=array();
			$form['name']=$this->input->post('fullName');
			$form['phone']=$this->input->post('phone_nr');
			$form['e_mail']=$this->input->post('e_mail');
			$form['category']=$this->input->post('category');
			$form['description']=$this->input->post('description');
			$form['begin']=$this->input->post('begin');
			$form['end']=$this->input->post('end');
			
			
			if(self::add($form['name'],$form['phone'],$form['e_mail'],$form['category'],$form['description'],$form['begin'],$form['end'])==true){
				echo "";
			}
		}
		
	}
		//Function to add data to db
		function add($name, $number,$e_mail,$category,$description,$begin,$end){
		
		$query="INSERT INTO person(full_name,phone_nr,e_mail) VALUES (?,?,?)";
		
		$query2="INSERT INTO kuulutus(category,description,begin,end) VALUES (?,?,?,?)";
		
		$args=array($name,$number,$e_mail);
		$args2=array($category,$description,$begin,$end);
		
		if($this->db->query($query,$args)==true && $this->db->query($query2,$args2)==true){
			return true;
		}else{
			return false;
		}
	}
}

?>